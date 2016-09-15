<?php

namespace Moathdev\Sweetalert;


class Flash
{

    /**
     * @param $title
     * @param $message
     * @param $type // there is 4 Types 1warning 2-error 3-success 4-info
     * @param bool|true $showConfirmButton
     */
    public function message($title, $message, $type, $showConfirmButton = true)
    {

        session()->flash('flash_message', [

            'title' => $title,
            'message' => $message,
            'type' => $type,
            'showConfirmButton' => $showConfirmButton,
        ]);

    }

}