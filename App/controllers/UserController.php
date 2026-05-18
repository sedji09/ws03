<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;
use Framework\Session;

class UserController {
    protected $db;

    public function __construct() {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

     /**
     * Show Login Page
     * 
     * @return void
     * 
     */
    public function login() {
        loadView('users/login');
    }

    /**
     * Show Register Page
     * 
     * @return void
     * 
     */
    public function register() {
        loadView('users/register');

    }
    /**
     * Store user to db
     * 
     * @return void
     */
    public function store() {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];

        $errors = [];

        //Validation
        if(!Validation::email($email)){
            $errors['email'] = 'Please enter a valid email address.';
        }

        if(!Validation::string($name, 2, 50)){
            $errors['name'] = 'Name must be between 2 and 50 characters long.';
        }

        if(!Validation::string($password, 6, 255)){
            $errors['password'] = 'Password must be at least 6 characters.';
        }

        if(!Validation::match($password, $password_confirmation)){
            $errors['password_confirmation'] = 'Passwords do not match.';
        }

        

        if(!empty($errors)){
            loadView('users/register', [
                'errors' => $errors,
                'user' => [
                    'name' => $name,
                    'email' => $email,
                    'city' => $city,
                    'state' => $state
                ]
            ]);
            exit;
        }
        //Check if email already exists
        $params = [
            'email' => $email,

        ];
        $user = $this->db->query('SELECT * FROM users WHERE email = :email', $params)->fetch();
        
        if($user){
            $errors['email'] = 'That email address is already registered.';
            loadView('users/register', [
                'errors' => $errors
            ]);
            exit;
        }
        //Create a user account
        $params = [
            'name' => $name,
            'email' => $email,
            'city' => $city,
            'state' => $state,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        $this->db->query('INSERT INTO users (name, email, city, state, password) VALUES (:name, :email, :city, :state, :password)', $params);

    //Get new user id
        $user_id = $this->db->conn->lastInsertId();
    //Set user session
        Session::set('user', [
            'id' => $user_id,
            'name' => $name,
            'email' => $email,
            'city' => $city,
            'state' => $state
        ]);
        redirect('/');
    }
    /**
     * Logout a suer and kill the session
     * @return void
     */
    public function logout() {
        Session::clearAll('user');
       
        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 86400, $params['path'], $params['domain'],);
        redirect('/');
    }
    /**
     * Authenticate a user with email and password
     * @return void
     */
    public function authenticate() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $errors = [];

        //Validation
        if(!Validation::email($email)){
            $errors['email'] = 'Please enter a valid email address.';
        }

        if(!Validation::string($password, 6, 255)){
            $errors['password'] = 'Password must be at least 6 characters.';  
        }
        //Check for errors
        if(!empty($errors)){
            loadView('users/login', [
                'errors' => $errors,
                'email' => $email
            ]);
            exit;
        }
        //Check for email
        $params = [
            'email' => $email
        ];

        $user = $this->db->query('SELECT * FROM users WHERE email = :email', $params)->fetch();

        if(!$user){
            $errors['email'] = 'Incorrect Credentials. Please try again.';
            loadView('users/login', [
                'errors' => $errors
            ]);
            exit;
        }
        //Verify password
        if(!password_verify($password, $user->password)){
            $errors['email'] = 'Incorrect Credentials. Please try again.';
            loadView('users/login', [
                'errors' => $errors
            ]);
            exit;
        }
        //Set user session
        Session::set('user', [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'city' => $user->city,
            'state' => $user->state
        ]);
        redirect('/');
    }
}