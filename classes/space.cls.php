<?php

class Space
{
    protected $my_firstname;
    protected $my_lastname;
    protected $author;
    protected $Author;
    protected $ajax;

    protected $space_name;
    protected $space_lang;
    protected $space_css;
    protected $space_js;

    function __construct($first_parameter, $second_parameter, $third_parameter, $forth_parameter)
    {
        global $_b;

        $this->my_firstname = 'stigie';
        $this->my_lastname = 'huber';
        $this->author = $this->my_firstname . $_b . $this->my_lastname;
        $this->Author = ucfirst($this->my_firstname) . $_b . ucfirst($this->my_lastname);
        $this->ajax = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';

        $this->space_name = $first_parameter;
        $this->space_lang = $second_parameter;
        $this->space_css = $third_parameter;
        $this->space_js = $forth_parameter;
    }

    public function post_parameters($space_to_post)
    {
        $_POST['my_firstname'] = $space_to_post->$my_firstname;
        $_POST['my_lastname'] = $space_to_post->$my_lastname;
        $_POST['author'] = $space_to_post->$author;
        $_POST['Author'] = $space_to_post->$Author;
        $_POST['ajax'] = $space_to_post->$ajax;

        $_POST['space_name'] = $space_to_post->$space_name;
        $_POST['space_lang'] = $space_to_post->$space_lang;
        $_POST['space_css'] = $space_to_post->$space_css;
        $_POST['space_js'] = $space_to_post->$space_js;
    }
}