<?php

class Domain
{
    protected $first; protected $last;
    protected $domain_author; protected $domain_Author;
    protected $domain_lang;
    protected $domain_name;

    function __construct($set_lang)
    {
        global $blank;

        $this->domain_lang = $set_lang;
        $this->domain_name = $set_lang;

        $this->first    = 'stigie';
        $this->last     = 'huber';
        $this->domain_author = $this->first . $blank . $this->last;
        $this->domain_Author = ucfirst($this->first) . $blank . ucfirst($this->last);
    }

    public function activate_domain($post_this)
    {
        $_POST['active_dom'] = $post_this;
    }

}