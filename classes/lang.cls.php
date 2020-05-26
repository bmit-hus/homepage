<?php

class Lang
{
    private $lang_name;
    private $display_lang;

    function __construct($set_lang_name)
    {
        $this->lang_name = $set_lang_name;

        switch ($set_lang_name)
        {
            case 'english':
                $this->display_lang = 'en';
            break;

            case 'deutsch':
                $this->display_lang = 'de';
            break;
        }
    }

    public function post_lang_vars()
    {
        $_POST['lang_name'] = $this->lang_name;
        $_POST['display_lang'] = $this->display_lang;
    }

    public function make_current_lang()
    {
        $this->post_lang_vars();
        $_POST['current_lang'] = $this->lang_name;
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