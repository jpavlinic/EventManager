<?php

class Model {

    protected $errors = [];

    //db connnection
    private $connection;

    private $settings = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    public function __construct() {
        $this->connect();
    }

    private function connect(): void {
        if ($this->connection == null) {
            try {
                $this->connection = new PDO(
                        CONFIG_DATA['db']['dsn'],
                        CONFIG_DATA['db']['username'],
                        CONFIG_DATA['db']['password'],
                        $this->settings);
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), (int) $e->getCode());
            }
        }
    }

    private function executeQuery(string $query, array $params = []): PDOStatement {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int) $e->getCode());
        }
    }

    protected function queryOne(string $query, string $className, array $params = []): object|false {
        $statement = $this->executeQuery($query, $params);
        return $statement->fetchObject($className);
    }

    protected function queryAll(string $query, string $className, array $params = []): array {
        $statement = $this->executeQuery($query, $params);
        return $statement->fetchAll(PDO::FETCH_CLASS, $className);
    }

    protected function query(string $query, array $params = []): int {
        $statement = $this->executeQuery($query, $params);
        return $statement->rowCount();
    }








    //sanitize and validate
    protected function sanitize($data): string {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $data[$key] = $this->sanitize($value);
            }
        } else {
            $data = htmlspecialchars(strip_tags(trim($data)));
        }
        return $data;
    }

    protected function validate(string $data, array $rules): bool {
        foreach ($rules as $rule => $value) {
            switch ($rule) {
                case 'required':
                    if (empty($data)) {
                        $this->errors[] = 'Field is required.';
                        return false;
                    }
                    break;
                case 'min_length':
                    if (strlen($data) < $value) {
                        $this->errors[] = 'Field must be at least ' . $value . ' characters.';
                        return false;
                    }
                    break;
                case 'max_length':
                    if (strlen($data) > $value) {
                        $this->errors[] = 'Field must be no more than ' . $value . ' characters.';
                        return false;
                    }
                    break;
                case 'numeric':
                    if ($value && !is_numeric($data)) {
                        $this->errors[] = 'Field must be numeric.';
                        return false;
                    }
                    break;
                case 'email':
                    if ($value && !filter_var($data, FILTER_VALIDATE_EMAIL)) {
                        $this->errors[] = 'Invalid email format.';
                        return false;
                    }
                    break;
                case 'regex':
                    if (!preg_match($value, $data)) {
                        $this->errors[] = 'Field does not match required format.';
                        return false;
                    }
                    break;
            }
        }
        return true;
    }

    function validateInputs(array $data, array $rules): bool {
        $this->errors = [];
        foreach ($data as $key => $value) {
            if (isset($rules[$key])) {
                if (!$this->validate($value, $rules[$key])) {
                    return false;
                }
            }
        }
        return true;
    }

    public function getErrors(): array {
        return $this->errors;
    }
}
