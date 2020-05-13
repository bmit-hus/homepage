<?php

class Subdomain extends Domain
{
    protected $css;
    protected $ajax;
    protected $js;

    function __construct($subdomain)
    {
        $this->ajax = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';
        $this->css  = 'css/'    . $subdomain .  '.hub.css';
        $this->js   = 'js/'     . $subdomain .  '.hub.js';
    }
}