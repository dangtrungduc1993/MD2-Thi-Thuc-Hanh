<?php

namespace App\Model;

class DBConnect
{
    public $dsn;
    protected $username;
    protected $password;
    public function __construct()
    {
        $this->dsn="mysql:host=localhost;dbname=quan_ly_dien_thoai;charset=utf8";
        $this->username = "root";
        $this->password = "";
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn,$this->username,$this->password);
        }catch (\PDOException $exception){
            die($exception->getMessage());
        }
    }
}