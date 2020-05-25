<?php

class Space
{
    private $space_name;
    private $css;
    private $ajax;
    private $js;

    function __construct($set_space_name)
    {
        $this->space_name  = $set_space_name;

        $this->ajax = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';
        $this->css  = 'css/' . $this->subdomain_name . '.hub.css';
        $this->js   = 'js/'  . $this->subdomain_name . '.hub.js';
    }

    public function post_spaceVariables($post_this)
    {
        $_POST['space'] = $post_this;
    }

}