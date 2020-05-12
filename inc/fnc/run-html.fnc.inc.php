<?php

class HTMLcode
{
    public function html_open($html_tag)
    {
        $foos = [$html_tag];
        foreach ($foos as $foo)
        {
            echo "<$foo>";
        }
    }

    public function html_close($html_tag)
    {
        $foos = [$html_tag];
        foreach ($foos as $foo)
        {
            echo "</$foo>";
        }
    }

    public function html_peekaboo($html_close, $html_open)
    {
        html_close($html_close);
        html_open($html_open);
    }

}