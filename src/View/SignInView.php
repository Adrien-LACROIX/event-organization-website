<?php
require_once dirname(__FILE__) . '/ViewInterface.php';

class SignInView extends View
{
    public function render()
    {
        require "../src/View/auth/signin.php";
    }
}