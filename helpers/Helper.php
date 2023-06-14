<?php

function cleanInput($name)
{
    if (isset($_POST[$name]) && is_array($_POST[$name])) {
        return $_POST[$name];
    }

    if (isset($_POST[$name]) && $_POST[$name] != '') {
        return $_POST[$name];
    }

    return null;
}

function redirect($path) 
{
    header('location: ' . URLROOT . "/${path}");
}

