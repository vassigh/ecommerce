<?php
class Model_Admin
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }


    // PRODUITS ------------------------------------- //


    public function insertProduit($nom, $prenom, $email, $pass)
    {
        $id=$this->db->execute("insert into users(nom, prenom, email, password) values (?,?,?,?)", array($nom, $prenom, $email, $pass));
        return $id;
    }

    public function getProduit($id)
    {
        $id=$this->db->queryOne("select * from produits where id = ?", array($id));
        return $id;
    }

}