<?php

class Page extends Subdomain
{
    protected $firstname;
    protected $lastname;
    protected $author;
    protected $Author;

    protected $file_name;
    protected $page_title;
    protected $subdomain_name;

    protected $lang;
    protected $description;
    protected $keywords;

    protected $css_file;
    protected $js_file;
    protected $ajax_lib;

    function __construct($set_first, $set_second, $set_third, $set_forth)
    {
        global $blank;
        global $domain;
        $domain = $domain.$slash;

        $this->firstname = 'stigie';
        $this->lastname = 'huber';
        $this->author = $this->firstname . $blank . $this->lastname;
        $this->Author = ucfirst($this->first) . $blank . ucfirst($this->last);

        $this->file_name = $set_first;
        $this->page_title = ucfirst($this->file_name);
        $this->subdomain_name = $set_second;

        $this->lang = $set_third;
        $this->description = $set_forth;
        $this->keywords = $this->author.$blank.$domain.$this->file_name.$blank.$this->description;

        $this->css = 'css/'.$subdomain_name.'.hub.css';
        $this->js = 'js/'.$subdomain_name.'.hub.js';
        $this->ajax = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';
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