<?php
class Model_Contenu
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }


  
    public function getContenu($id)
    {
        $id=$this->db->queryOne("select * from produits where id = ?", array($id));
        return $id;
    }


}