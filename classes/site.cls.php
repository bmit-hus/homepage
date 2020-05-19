<?php

class Site
{
    protected $site_name;
    protected $site_title;
    protected $site_description;
    protected $site_keywords;

    function __construct($first_parameter)
    {
        global $_b;
        global $domain;

        $this->site_name = $first_parameter;
        $this->site_title = ucfirst($first_parameter);
        $this->site_description = $domain.$_b. $_POST['author'] .__b. $_POST['space_lang'] .$_b. $first_parameter;
        $this->site_keywords = $domain.$_b. $_POST['author'] .__b. $_POST['space_lang'] .$_b. $first_parameter;
    }

    public function post_parameters($site_to_post)
    {
        $_POST['site_name'] = $site_to_post->$site_name;
        $_POST['site_title'] = $site_to_post->$site_title;
        $_POST['site_description'] = $site_to_post->$site_description;
        $_POST['site_keywords'] = $site_to_post->$site_keywords;
    }
}