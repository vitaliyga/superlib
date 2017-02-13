<?php

function get_ip()
{
    if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
        return $_SERVER['REMOTE_ADDR'];
    } else {
        // for those, who gets "Undefined index: REMOTE_ADDR" error because of console run
        return 'console run';
    }
}
