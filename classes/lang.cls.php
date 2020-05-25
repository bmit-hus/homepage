<?php

class Lang
{
    private $space_lang;
    private $my_firstname;
    private $my_lastname;
    private $space_author;
    private $space_Author;

    function __construct($set_space_lang)
    {
        global $blank;

        $this->space_lang = $set_space_lang;
        $this->my_firstname = 'stigie';
        $this->my_lastname = 'huber';
        $this->space_author = $this->first . $blank . $this->last;
        $this->space_Author = ucfirst($this->first) . $blank . ucfirst($this->last);
    }

    public function post_langVariable($post_this)
    {
        $_POST['lang'] = $post_this;
    }

}