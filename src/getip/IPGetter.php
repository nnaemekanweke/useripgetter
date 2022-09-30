<?php

namespace IPGetter;

class IPGetter
{
    /**
     * get IP address of the user
     *
     * @return void
     */
    public static function getIPAddress()
    {
        return $_SERVER['REMOTE_ADDR'];
    }
}