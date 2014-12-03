<?php
class Model_Produit
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }


    // USERS ------------------------------------- //


    public function getProduit($id)
    {
        $id=$this->db->queryOne("select * from produits where id = ?", array($id));
        return $id;
    }

 //   public function getLatestProduits()
 //   {
 //       $nom=$this->db->query("select * from produits order by id asc", array(""));
 //       return $nom;
 //   }

    public function getLatestProduits($number=0, $offset=0)
    {
        if ($number == 0)
        {
            $nom=$this->db->query("select * from produits 
                       left join categorie on categories.type = produits.categorie 
                       order by produits.id asc", array(""));
        }
        else
        {
            $nom=$this->db->query("select * from produits 
                       left join categorie on categories.type = produits.categorie 
                       order by produits.id asc limit $number offset $offset", array(""));

        }
        return $nom;
    }

}