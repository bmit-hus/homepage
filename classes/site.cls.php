<?php

class Site
{
    private $site_name;
    private $site_title;
    private $site_description;
    private $site_keywords;

    function __construct($set_site_name, $set_site_descr)
    {
        global $blank;
        global $domain;
        $domain = $domain.$slash;

        $this->site_name = $set_site_name;
        $this->site_title = ucfirst($this->site_name);

        $this->site_description = $set_site_descr;
    }

    //
    //
    //

    public function post_siteVariables()
    {
        $this->site_keywords = $this->author.$blank.$domain.$this->file_name.$blank.$this->description;
    }

    public function set($this_attribute, $to_this_value)
    {
        $this->$this_attribute = $to_this_value;
    }
    public function get($this_attribute)
    {
        return $this->$this_attribute;
    }


    public function activate_page($post_this)
    {
        $_POST['active_pag'] = $post_this;
    }

    public function html_abc()
    {
        echo 
        "
            <!doctype html>
            <html lang=\"$this->domain_lang\">
        ";
        
        html_open('head');

        echo 
        "
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

            <meta name=\"author\" content=\"$this->domain_author\">
            <title>$this->page_title</title>
            <meta name=\"description\" content=\"$this->page_description\">
            <meta name=\"keywords\" content=\"$this->page_keywords\">
            <link href=\"$this->css\" type=\"text/css\" rel=\"stylesheet\">
            <script defer src=\"$this->ajax\"></script>
            <script defer src=\"$this->js\"></script>
        ";
        
        html_peekaboo('head','body');
    }

    public function html_xyz()
    {
        html_close('body', 'html');
    }
}