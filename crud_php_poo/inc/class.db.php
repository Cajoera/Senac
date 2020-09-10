<?php
class db
{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'crud_poo';
    public $con = false;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->con = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->dbname
        );
    }
    public function disconnect()
    {
        $this->con = !mysqli_close($this->con);
    }
}

