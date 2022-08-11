<?php

namespace App\Controllers;

class Contact extends BaseController {

    public function contactPage() {
        helper('url');
        echo view('header/header');
        echo view('css/css');
        echo view('tophead/tophead');
        echo view('navbar/navbar');
        echo view('contact/contact-section1');
        echo view('contact/contact-section2');
        echo view('contact/contact-section3');
        echo view('contact/contact-section4');

        echo view('footer/footer');
        echo view('footer/footer-section1');
        echo view('js/js');

    }
    

}
