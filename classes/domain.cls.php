<?php

class Domain
{
    protected $first; protected $last;
    protected $author; protected $Author;
    protected $lang;
    protected $domain_name;

    function __construct($lang_var)
    {
        $this->first    = 'stigie';
        $this->last     = 'huber';
        $this->author   = $this->first . ' ' . $this->last;
        $this->Author   = ucfirst($this->first) . ' ' . ucfirst($this->last);
        $this->lang     = $lang_var;

        $this->domain_name = $lang_var;
    }

}