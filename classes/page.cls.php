<?php

class Page extends Subdomain
{
    // Domain properties
    // protected $first; protected $last;
    // protected $author; protected $Author;
    // protected $lang;
    // protected $domain_name;

    // Subdomain properties
    // protected $css;
    // protected $ajax;
    // protected $js;
    // protected $subdomain_name;

    // Page properties
    private $page_name;
    private $page_title;
    private $page_description;
    private $page_keywords;

    function __construct($name_var, $descr_var)
    {
        $this->page_title       = ucfirst($name_var);
        $this->page_description = $descr_var;
        $this->page_keywords    = $this->author.' '.$name_var.' '.$descr_var;

        $this->domain_name;
        $this->subdomain_name;
        $this->page_name = $name_var;
    }

    public function set($this_attribute, $to_this_value)
    {
        $this->$this_attribute = $to_this_value;
    }
    public function get($this_attribute)
    {
        return $this->$this_attribute;
    }


    public function html_abc()
    {
        echo 
        "
            <!doctype html>
            <html lang=\"$this->lang\">
        ";
        
        html_open('head');

        echo 
        "
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

            <meta name=\"author\" content=\"$this->author\">
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