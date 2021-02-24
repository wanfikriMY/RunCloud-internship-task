<?php

class Server
{
    //properties
    public $name;
    public $ipAddress;

    //methods
    function name($name)
    {
        $this->name = $name;
    }

    function ipAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
}
// 