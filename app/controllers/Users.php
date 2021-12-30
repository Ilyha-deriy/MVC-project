<?php

class Users extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function Register()
    {
        $data= [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST= filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        

        $data= [
            'username' => trim($_POST['username']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirmPassword' => trim($_POST['confirmPassword']),
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        $nameValidation = "/^[a-zA-Z0-9]*$/";
        $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

        //Validating username
        if (empty($data['username'])) {
            $data['usernameError']= 'Please Enter Name';
        } elseif(!preg_match($nameValidation, $data['username'])) {
            $data['usernameError']= 'Name Can Only Contain Numbers
            And Letters';
        }

        //Validating email
        if (empty($data['email'])) {
            $data['emailError']= 'Please Enter Email';
        } elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $data['emailError']= 'Please Enter The Correct Format';
        } else {
            if ($this->userModel->findUserbyEmail($data['email'])){
                $data['emailError']= 'Email Is Already Used'; 
            }
        }

        //Validating password
        if(empty($data['password'])){
            $data['passwordError'] = 'Please Enter password.';
          } elseif(strlen($data['password']) < 6){
            $data['passwordError'] = 'Password Must Be At Least 8 Characters';
          } elseif (preg_match($passwordValidation, $data['password'])) {
            $data['passwordError'] = 'Password Must Have At Least One Numeric Value.';
          }

          //Validate confirm password
           if (empty($data['confirmPassword'])) {
              $data['confirmPasswordError'] = 'Please Enter Password.';
          } else {
              if ($data['password'] != $data['confirmPassword']) {
              $data['confirmPasswordError'] = 'Passwords Do Not Match, Please Try Again.';
              }
          }

          // Make sure that errors are empty
          if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

              // Hash password
              $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

              //Register user from model function
              if ($this->userModel->register($data)) {
                //Redirect to the login page
                header('location: ' . URLROOT . '/users/login');
            } else {
                die('Something Went Wrong.');
            }
          }
          
        }

        $this->view('users/register', $data);
    }

    public function login() {
        $data= [
            'title' => 'Login page',
            'usernameError' => '',
            'passwordError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please Enter A Username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please Enter A Password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password Or Username Is Incorrect. Please Try Again.';

                    $this->view('users/login', $data);
                }
            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }

        $this->view('users/login', $data);
    }

    public function createUserSession($user) {
        $_SESSION['user_id']= $user->id;
        $_SESSION['username']= $user->username;
        $_SESSION['email']= $user->email;
        $_SESSION['image']= $user->image;
        header('location: ' . URLROOT . '/pages/index');
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['image']);
        header('location: ' . URLROOT . '/users/login');
    }

    public function Profile()
    {
        $data= [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST= filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        

        $data= [
            'username' => trim($_POST['username']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirmPassword' => trim($_POST['confirmPassword']),
            'image' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        $nameValidation = "/^[a-zA-Z0-9]*$/";
        $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

        //Validating username
        if (empty($data['username'])) {
            $data['usernameError']= 'Please Enter Name';
        } elseif(!preg_match($nameValidation, $data['username'])) {
            $data['usernameError']= 'Name Can Only Contain Numbers
            And Letters';
        }

        //Validating email
        if (empty($data['email'])) {
            $data['emailError']= 'Please Enter Email';
        } elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $data['emailError']= 'Please Enter The Correct Format';
        } else {
            if ($this->userModel->findUserbyEmail($data['email'])){
                $data['emailError']= 'Email Is Already Used'; 
            }
        }

        //Validating password
        if(empty($data['password'])){
            $data['passwordError'] = 'Please Enter password.';
          } elseif(strlen($data['password']) < 6){
            $data['passwordError'] = 'Password Must Be At Least 8 Characters';
          } elseif (preg_match($passwordValidation, $data['password'])) {
            $data['passwordError'] = 'Password Must Have At Least One Numeric Value.';
          }

          //Validate confirm password
           if (empty($data['confirmPassword'])) {
              $data['confirmPasswordError'] = 'Please Enter Password.';
          } else {
              if ($data['password'] != $data['confirmPassword']) {
              $data['confirmPasswordError'] = 'Passwords Do Not Match, Please Try Again.';
              }
          }


          if (!empty($_FILES['image']['name'])){
              $image_name = time() . '_' . $_FILES['image']['name'];
              $destination = PUBLICROOT . "/images/" . $image_name;

              $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

                 if($result) {
                    $data['image'] = $image_name;
                } else {
                    echo "Failed To Upload Image";
                }

            }

          // Make sure that errors are empty
          if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

              // Hash password
              $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

              //Register user from model function
              if ($this->userModel->profile($data)) {
                //Redirect to the login page
                header('location: ' . URLROOT . '/users/profile');
            } else {
                die('Something Went Wrong.');
            }
          }
          
        }

        $this->view('users/profile', $data);
    }


    
}
