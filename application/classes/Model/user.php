<?php
class Model_User
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }


    // USERS ------------------------------------- //

   public function searchUser($email, $pass)
    {
        $id=$this->db->queryOne("select id from users where email=? and password=?", array($email, $pass));
        return $id;
    }

    public function insertUser($nom, $prenom, $email, $pass)
    {
        $id=$this->db->execute("insert into users(nom, prenom, email, password) values (?,?,?,?)", array($nom, $prenom, $email, $pass));
        return $id;
    }

    public function getUser($id)
    {
        $id=$this->db->queryOne("select * from users where id = ?", array($id));
        return $id;
    }

    // PRODUITS ------------------------------------- //

/*
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
*/


}