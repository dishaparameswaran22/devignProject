<?php

namespace App\Controllers;

class Guide extends BaseController {

    public function guidePage() {
        helper('url');
        echo view('header/header');
        echo view('css/css');
        echo view('tophead/tophead');
        echo view('navbar/navbar');
        echo view('guide/guide-section1');
        echo view('guide/guide-section2');

        echo view('footer/footer');
        echo view('footer/footer-section1');
        echo view('js/js');

    }
    

}
