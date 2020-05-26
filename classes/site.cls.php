<?php

class Site
{
    private $site_name;
    private $site_title;
    private $site_description;
    private $site_keywords;

    function __construct($set_site_name)
    {
        $this->site_name = $set_site_name;
        $this->site_title = ucfirst($this->site_name);
    }

    public function generate_descr()
    {
        global $_b;
        global $domain;
        global $slash;
            $domain = $domain.$slash;

        $this->site_description = $domain . $_b . $_POST['my_fullname'] . $_b . $_POST['display_lang'] . $_b . $_POST['site_name'];
    }
    public function generate_keys()
    {
        global $_b;
        global $domain;
        global $slash;
            $domain = $domain.$slash;

        $this->site_keywords = $domain . $_b . $_POST['my_fullname'] . $_b . $_POST['display_lang'] . $_b . $_POST['site_name'];
    }

    public function post_site_vars()
    {
        $_POST['site_name'] = $this->site_name;
        $_POST['site_title'] = $this->site_title;
        $_POST['site_description'] = $this->generate_descr();
        $_POST['site_keywords'] = $this->generate_keys();
    }

    public function make_current_site()
    {
        $this->post_site_vars();
        $_POST['current_site'] = $this->site_name;
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