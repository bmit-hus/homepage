<?php

class Subdomain extends Domain
{
    // Domain properties
    // protected $first; protected $last;
    // protected $author; protected $Author;
    // protected $lang;
    
    protected $css;
    protected $ajax;
    protected $js;
    protected $subdomain_name;

    function __construct($subdomain_var)
    {
        $this->ajax = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';
        $this->css  = 'css/' . $subdomain_var . '.hub.css';
        $this->js   = 'js/'  . $subdomain_var . '.hub.js';

        $this->subdomain_name  = $subdomain_var;
    }

}