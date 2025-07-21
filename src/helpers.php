<?php

if (! function_exists('dprint')) {
    function dprint(mixed $value): never
    {
        echo "<pre>" . print_r($value, true) . "</pre>";
        die();
    }
}
