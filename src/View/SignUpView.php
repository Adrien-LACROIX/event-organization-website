<?php
require_once dirname(__FILE__) . '/ViewInterface.php';

class SignUpView extends View
{
    public function render()
    {
        require "../src/View/auth/signup.php";
    }
}