<?php

class Domain
{
    protected $first; protected $last;
    protected $author; protected $Author;
    protected $lang;

    function __construct($one)
    {
        $this->first    = 'stigie';
        $this->last     = 'huber';
        $this->author   = $this->first . ' ' . $this->last;
        $this->Author   = ucfirst($this->first) . ' ' . ucfirst($this->last);
        $this->lang     = $one;
    }

    public function get($attribute)
    {
        $query = $this->$attribute;
        return $query;
    }

    public function html_start()
    {
        echo "<!doctype html>";
        echo "<html lang=\"$this->lang\">";
    }

    public function html_end()
    {
        $this->html_close('body', 'html');
    }

}