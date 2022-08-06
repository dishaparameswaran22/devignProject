<?php

namespace App\Controllers;

class Mob extends BaseController {

    public function mobPage() {
        helper('url');
        echo view('header/header');
        echo view('css/css');
        echo view('tophead/tophead');
        echo view('navbar/navbar');
        echo view('mob/mob-section1');
        echo view('mob/mob-section2');
        echo view('mob/mob-section3');
        echo view('mob/mob-section4');
        echo view('mob/mob-section5');
        echo view('mob/mob-section6');
        echo view('mob/mob-section7');
        echo view('mob/mob-section8');
        echo view('mob/mob-section9');
        echo view('mob/mob-section10');
        echo view('mob/mob-section11');
        echo view('mob/mob-section12');
        echo view('mob/mob-section13');

        echo view('footer/footer');
        echo view('footer/footer-section1');
        echo view('js/js');

    }
    

}
