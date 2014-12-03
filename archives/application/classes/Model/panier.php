<?php
class Model_Panier
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }


    public function getPanier($tab)
    {
        $nom=$this->db->query("
                                select * from produits 
                                    left join categories on categories.type = produits.categorie 
                                    where produits.id in(" . implode("," , $tab) . ")
                                    order by produits.id asc
                              ");

        return $nom;
    }

}