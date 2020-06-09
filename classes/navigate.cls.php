<?php

class Navigate
{
    public function to_site($target)
    {
        $current_site = $target;
        $current_site->make_current_site();
        $active_site = $_POST['current_site'];
        header("Refresh:0");
    }

    public function to_space($target)
    {
        $current_space = $target;
        $current_space->make_current_space();
        $active_space = $_POST['current_space'];
        header("Refresh:0");
    }

    public function to_language($target)
    {
        $current_lang = $target;
        $current_lang->make_current_lang();
        $active_lang = $_POST['current_space'];
        header("Refresh:0");
    }
}