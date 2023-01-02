<?php
class Connection{
    private $host='localhost';
    private $name='root';
    private $pwd='';
    private $dbname='cmsLucas';
    public $connection;
    public function Connect(){
    $this->connection = new mysqli($this->host,$this->name,$this->pwd,$this->dbname);
    return $this->connection;
}
}