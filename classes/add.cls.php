<?php

class ADD
{

    public function path() // make clickable later
    {
        global $domain;

        $lang = $_POST['current_lang'];
        $space = $_POST['current_space'];
        $site = $_POST['current_site'];

        switch($lang)
        {
            case 'english':
                echo <<<ENG
                $domain/$space/$site
ENG;
            break;
            case 'deutsch':
                echo <<<GER
                $domain/$space/$site
GER;
            break;
        }
    }
    public function path_statement() // make clickable later
    {
        global $domain;

        $lang = $_POST['current_lang'];
        $space = $_POST['current_space'];
        $site = $_POST['current_site'];

        switch($lang)
        {
            case 'english':
                echo <<<ENG
                Current location: <strong>$domain/$space/$site</strong>.
ENG;
            break;
            case 'deutsch':
                echo <<<GER
                Aktuelle Seite: <strong>$domain/$space/$site</strong>.
GER;
            break;
        }
    }


    public function inactive_button($button_name)
    {
        $Button_Name = ucwords($button_name);
        echo <<<BUTTON
        <button class="gateway $button_name mono inactive" onClick="teleport_to_target_space()">
        <h2>$Button_Name</h2></button>
BUTTON;
    }
    public function gateway_button($button_name)
    {
        $Button_Name = ucwords($button_name);
        echo <<<BUTTON
        <button class="gateway $button_name" onClick="teleport_to_target_space()">
        <h2>$Button_Name</h2></button>
BUTTON;
    }


    public function copyright_declaration()
    {
        global $copy;
        echo "$copy Copyright " . $_POST['my_Fullname'];
    }

}