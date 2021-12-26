<?php

    Class Pages extends Controller {
        public function __construct() {
        }

        public function index() {
            $data= [
                "title" => "Blog 8", "date" => "28.12.2021",
                "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Tempora nemo, perferendis iure cupiditate fuga consequuntur
                necessitatibus eum aliquam impedit odit nobis ipsam, minima
                accusamus. At autem eveniet illum minus enim?",
            ];

            $data2= [
                "title" => "Blog 9", "date" => "29.12.2021",
                "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Tempora nemo, perferendis iure cupiditate fuga consequuntur
                necessitatibus eum aliquam impedit odit nobis ipsam, minima
                accusamus. At autem eveniet illum minus enim?",
            ];

            $data3= [
                "title" => "Blog 10", "date" => "30.12.2021",
                "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Tempora nemo, perferendis iure cupiditate fuga consequuntur
                necessitatibus eum aliquam impedit odit nobis ipsam, minima
                accusamus. At autem eveniet illum minus enim?",
            ];

            $this->view('pages/index', $data, $data2, $data3);
        }

    }