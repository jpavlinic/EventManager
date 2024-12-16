<?php

class UserController extends Controller {

    public function login(): void {
        $this->view();
    }

    public function register(): void {
        $this->view();
    }

    public function admin(): void {
        $data = $this->model()->getViewModel();
        if ($data) {
            $this->view($data);
        } else {
            header('location: ' . PROJECT_URL . '/Index.php');
        }
    }

    public function events(): void {
        $data = $this->model()->getViewModel();
        if ($data) {
            $this->view($data);
        } else {
            header('location: ' . PROJECT_URL . '/Index.php');
        }
    }
    
}
