<?php

if(!function_exists ('flash')) {

    function flash($title, $message, $type, $showConfirmButton = true)
    {
        $flash = app('Moathdev\Sweetalert\Flash');

        return $flash->message($title, $message, $type, $showConfirmButton);

    }
}