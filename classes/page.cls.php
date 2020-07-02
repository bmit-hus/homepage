<?php

class Page
{
  // public variables

  // protected variables

  // private variables
  private $first;
  private $last;
  private $author;

  private $lang;
  private $title;
  private $descr;
  private $keywords;

  // CONSTRUCTOR
  function __construct($title, $lang, $descr)
  {
    $this->first = "stigie";
    $this->last = "huber";
    $this->author = "$this->first $this->last";

    $this->title = $title;
    $this->lang = $lang;
    $this->descr = $descr;
    $this->keywords = "$this->author $this->title $this->descr";
  }

  // METHODS
}

// EOF
