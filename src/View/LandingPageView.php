<?php
require_once dirname(__FILE__) . '/ViewInterface.php';

class LandingPageView extends View
{
    public function render()
    {
        list($events) = func_get_args();
        require "../src/View/landing/landing.php";
    }
}