<?php
class Model_Admin
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }


    // Adminisatation des produits Ajouter - Modifier et supprimer -------------- //


    public function insertProduit($nom, $auteur, $editeur, $categorie, $date_edition, $prix, $image)
    {
        $id=$this->db->execute("insert into produits(nom, auteur, editeur, categorie, date_edition, prix, image) values (?,?,?,?,?,?,?)", array($nom, $auteur, $editeur, $categorie, $date_edition, $prix, $image));
        return $id;
    }

        public function deletetProduit($id)
    {
        $id=$this->db->execute("delete FROM produits where id = ?", array($id));
        return $id;
    }

    public function updatePost($id, $titre, $contenu, $categorie)
    {
        $id=$this->db->execute("update news SET titre=?, contenu=?, categorie=?, dateModif=CURRENT_TIMESTAMP where id = $id", array("$titre", "$contenu","$categorie" ));
        return $id;
    }

}