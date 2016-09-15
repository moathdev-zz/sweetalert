<?php

/**
 * @param $title
 * @param $message
 * @param $type
 * @param bool|true $showConfirmButton
 * @return mixed
 */
function flash($title, $message, $type, $showConfirmButton = true)
{
    $flash = app('Moathdev\Sweetalert\Flash');

    return $flash->message($title, $message, $type, $showConfirmButton);

}