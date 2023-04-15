<?php


class Database
{
    private $server;


    public function connect()
    {
        include 'server/config.php';
        $this->server = new Mysqli(HOST, USER, PASS, DATABASE);
        if($this->server)
        {
            return $this->server;
        }
        return "DATABASE_CONNECTION_FAILED";
    }
}