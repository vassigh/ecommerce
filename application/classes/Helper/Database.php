<?php
class Helper_Database
{
    private $db;
    public function __construct()
    {
    	$config = new Helper_Config("config.ini");

        $user       = $config->get("user", "database");
        $password   = $config->get("password", "database");
        $dns        = $config->get("dns", "database");
        $dbname     = $config->get("dbname", "database");

        $this->db = new PDO( $dns . "; dbname=" . $dbname , $user , $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->exec("SET NAMES UTF8");

    }

    public function query($queryString, $data=array())
        {
           $req=$this->db->prepare($queryString);
           $req->execute($data);
           $result=$req->fetchAll(PDO::FETCH_ASSOC);
           return $result;
        }

    public function queryOne($queryString, $data=array())
        {
           $req=$this->db->prepare($queryString);
           $req->execute($data);
           $result=$req->fetch(PDO::FETCH_ASSOC);
           return $result;
        }

    public function execute($queryString, $data=array())
        {
           $req=$this->db->prepare($queryString);
           $req->execute($data);
           return $this->db->lastInsertId();
        }

}






