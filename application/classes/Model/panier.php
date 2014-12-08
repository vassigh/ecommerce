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
                                    where produits.id in(" . implode("," , $tab) . ")
                                    order by produits.id asc
                              ");

        return $nom;
    }



    public function insertCommande($user_id)
    {
        $id=$this->db->execute("insert into commandes(user_id) values (?)", array($user_id['id']));
        return $id;
    }


    public function insert_update_Commande_produits($id_commande, $panier)
    {
        var_dump($id_commande);
        var_dump($panier);
        foreach ($panier as &$value)
        {
            $quantite = array_count_values($_SESSION['panier'])[$value['id']];

            $id=$this->db->execute("insert into commande_produits(id_commande, id_produit, quantite) 
                                                values (?,?,?)" , array($id_commande, $value['id'], $quantite) 
                                               

                                   );
        }
        return $id;
    }

    public function getCommande($id_commande)
    {
        $id=$this->db->query("select * from commandes  where commandes.id = $id_commande ");

        return $id;
    }
    

    public function getUser($id)
    {
        $id=$this->db->queryOne("select * from users where id = ?", array($id));
        return $id;
    }


}

