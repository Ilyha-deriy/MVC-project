<?php

    Class Pages extends Controller {
        public function __construct() {
            $this->userModel = $this->model('User');
        }

        public function index() {

            $posts= $this->userModel->getPosts();
            $data= [
                'posts'=> $posts
            ];

            $this->view('pages/index', $data);
        }

    }