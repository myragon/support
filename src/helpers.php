<?php

if (! function_exists('dprint')) {
    function dprint(mixed ...$values): never
    {
        $html = '';
        foreach ($values as $value) {
            $html = $html . "<pre>" . print_r($value, true) . "</pre><br>";
        }

        echo $html;
        die();
    }
}
