<?php
class Model_Produit
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }


  
    public function getProduit($id)
    {
        $id=$this->db->queryOne("select * from produits where id = ?", array($id));
        return $id;
    }


    public function getLatestProduits($number=0, $offset=0, $categorie='', $search='')
    {
        if ($number == 0)
        {
            if ($categorie=='')
            {
                if ($search=='')
                {
                    $nom=$this->db->query("select * from produits 
                    order by produits.id asc", array(""));
                }
                else
                {
                    $nom=$this->db->query("select * from produits 
                    WHERE produits.nom LIKE ? OR produits.auteur LIKE ?
                    order by produits.id asc", array('%' . $search .'%', '%' . $search .'%'));
                }
            }
            else
            {
                if ($search=='')
                {
                    $nom=$this->db->query("select * from produits 
                    where produits.categorie = ?  
                    order by produits.id asc", array($categorie)); 
                }
                else
                {
                    $nom=$this->db->query("select * from produits 
                    where produits.categorie = ?  And ( produits.nom LIKE ? OR produits.auteur LIKE ? )
                    order by produits.id asc", array($categorie, '%' . $search .'%', '%' . $search .'%')); 
                 }              
            }
        }
        else
        {
            if ($categorie=='')
            {
                if ($search=='')
                {
                     $nom=$this->db->query("select * from produits 
                     order by produits.id asc limit $number offset $offset", array(""));
                }
                else
                {
                     $nom=$this->db->query("select * from produits 
                     where produits.nom LIKE ? OR produits.auteur LIKE ?
                     order by produits.id asc limit $number offset $offset", array('%' . $search .'%', '%' . $search .'%'));
                 }
            }
            else
            {
                if ($search=='')
                {
                    $nom=$this->db->query("select * from produits 
                    where produits.categorie = ? 
                    order by produits.id asc limit $number offset $offset", array($categorie));  
                }
                else
                {
                    $nom=$this->db->query("select * from produits 
                    where produits.categorie = ? And ( produits.nom LIKE ? OR produits.auteur LIKE ? )
                    order by produits.id asc limit $number offset $offset", array($categorie, '%' . $search .'%', '%' . $search .'%'));
                }              
            }

        }

        return $nom;
    }

}