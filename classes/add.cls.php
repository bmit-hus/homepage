<?php

class ADD extends Navigate
{
    public function mdcontent()
    {
        global $parsedown;
        $site = $_POST['current_site'];
        echo $parsedown->text(file_get_contents("markdown/$site.md"));
    }

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

    public function copyright_declaration()
    {
        global $copy;
        echo "$copy Copyright " . $_POST['my_Fullname'];
    }

    // 
    // 
    // 
    // 
    // 

    public function nav_button($target)
    {
        echo <<<NAV
            <input type="submit" class="navbutton" name="$target" value="$target" />
NAV;
    }
    // https://stackoverflow.com/questions/20738329/how-to-call-a-php-function-on-the-click-of-a-button

    public function inactive_button($button_name)
    {
        echo <<<BUTTON
        <button class="gateway $button_name mono inactive" onClick="teleport_to_target_space()">
        <h2>$button_name</h2></button>
BUTTON;
    }
    public function gateway_button($button_name)
    {
        echo <<<BUTTON
        <button class="gateway $button_name" id="$button_name" onClick="teleport_to_target_space()">
        <h2>$button_name</h2></button>
BUTTON;
    }
}