<?php

class Space
{
    private $my_firstname;
    private $my_lastname;
    private $my_fullname;
    private $my_Fullname;
    
    private $lib_ajax;

    private $space_name;
    private $space_css;
    private $space_js;

    function __construct($set_space_name)
    {
        global $_b;

        $this->my_firstname = 'stigie';
        $this->my_lastname = 'huber';
        $this->my_fullname = $this->my_firstname . $_b . $this->my_lastname;
        $this->my_Fullname = ucfirst($this->my_firstname) . $_b . ucfirst($this->my_lastname);

        $this->lib_ajax = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';

        $this->space_name = $set_space_name;
        $this->space_css = 'css/' . $this->space_name . '.hub.css';
        $this->space_js = 'js/' . $this->space_name . '.hub.css';
    }

    public function post_space_vars()
    {
        $_POST['my_firstname'] = $this->my_firstname;
        $_POST['my_lastname'] = $this->my_lastname;
        $_POST['my_fullname'] = $this->my_fullname;
        $_POST['my_Fullname'] = $this->my_Fullname;

        $_POST['lib_ajax'] = $this->lib_ajax;

        $_POST['space_name'] = $this->space_name;
        $_POST['space_css'] = $this->space_css;
        $_POST['space_js'] = $this->space_js;
    }

    public function make_current_space()
    {
        $this->post_space_vars();
        $_POST['current_space'] = $this->space_name;
    }

    public function set($set_attribute, $to_this_value)
    {
        $this->$set_attribute = $to_this_value;
    }
    public function get($get_attribute)
    {
        return $this->$get_attribute;
    }

}