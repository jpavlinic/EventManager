<?php

class UserModel extends Model {

    private $validationRules = [
        'username' => [
            'required' => true,
            'min_length' => 2,
            'max_length' => 20,
            'regex' => "/^[a-zA-Z0-9_]+$/"
        ],
        'password' => [
            'required' => true,
            'numeric' => true,
            'min_length' => 4,
            'max_length' => 8
        ],
        'email' => [
            'required' => true
        ]
    ];

    private $registeredUsers = [
        'kmarasovic' => [
            'email' => 'kmarasovic@example.com',
            'password' => '1234',
            'role' => 'admin',
        ],
        'jane' => [
            'email' => 'jane@example.com',
            'password' => '4321',
            'role' => 'attendee'
        ],
        'josip' => [
            'email' => 'josip@example.com',
            'password' => '1234',
            'role' => 'attendee',
        ]
    ];

    public function getViewModel() {

        $username = $this->sanitize($_POST['username']);
        $password = $this->sanitize($_POST['password']);

        $data = [
            'username' => $username,
            'password' => $password
        ];

        if (!$this->validateInputs($data, $this->validationRules)) {
            return false;
        }

        if (isset($this->registeredUsers[$username]) && $this->registeredUsers[$username]['password'] === $password) {
            $data = [
                'username' => $username,
                'email' => $this->registeredUsers[$username]['email'],
                'role' => $this->registeredUsers[$username]['role'],
                'password' => $this->registeredUsers[$username]['password'],
            ];
            return $data;
        }
        return null;
    }
}
