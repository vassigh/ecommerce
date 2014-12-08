<?php
class Model_Admin
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }


    // Adminisatation des produits Ajouter - Modifier et supprimer -------------- //


    public function insertProduit($nom, $auteur, $editeur, $categorie, $date_edition, $prix, $image, $quantite, $ean13, $resume)
    {
        $id=$this->db->execute("insert into produits(nom, auteur, editeur, categorie, date_edition, prix, image, quantite, ean13, resume) values (?,?,?,?,?,?,?,?,?,?)", array($nom, $auteur, $editeur, $categorie, $date_edition, $prix, $image, $quantite, $ean13, $resume));
        return $id;
    }

        public function deletetProduit($id)
    {
        $id=$this->db->execute("delete FROM produits where id = ?", array($id));
        return $id;
    }

    public function updateProduit_image($id, $nom, $auteur, $editeur, $categorie, $date_edition, $prix, $image, $quantite, $ean13, $resume)
    {
        $id=$this->db->execute("update produits SET nom=?, auteur=?, editeur=?, categorie=?, date_edition=?, prix=?, image=?, quantite=?, ean13=?, resume=? where id = ?", array($nom, $auteur, $editeur, $categorie, $date_edition, $prix, $image, $quantite, $ean13, $resume ,$id));
        return $id;
    }

    public function updateProduit($id, $nom, $auteur, $editeur, $categorie, $date_edition, $prix, $quantite, $ean13, $resume)
    {
        $id=$this->db->execute("update produits SET nom=?, auteur=?, editeur=?, categorie=?, date_edition=?, prix=?, quantite=?, ean13=?, resume=? where id = ?", array($nom, $auteur, $editeur, $categorie, $date_edition, $prix, $quantite, $ean13, $resume, $id));
        return $id;
    }

    public function getProduit($id)
    {
        $id=$this->db->queryOne("select * from produits where id = ?", array($id));
        return $id;
    }

}