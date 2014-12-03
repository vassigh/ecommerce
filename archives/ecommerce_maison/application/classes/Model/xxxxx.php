<?php
class Model_Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }


    // USERS ------------------------------------- //

   public function searchUser($email, $pass)
    {
        $id=$this->db->queryOne("select user_id from users where user_email=? and user_pass=?", array($email, $pass));
        return $id;
    }

    public function insertUser($nom, $prenom, $email, $pass)
    {
        $id=$this->db->execute("insert into users(user_nom, user_prenom, user_email, user_pass) values (?,?,?,?)", array($nom, $prenom, $email, $pass));
        return $id;
    }

    public function getUser($id)
    {
        $id=$this->db->queryOne("select * from users where user_id = ?", array($id['user_id']));;
        return $id;
    }




    // NEWS ------------------------------------- //

    public function getPost($id)
    {
        $nom=$this->db->queryOne("select * from news
                inner join categories on categories.id_categorie = news.categorie 
                where id=?", array($id));
        return $nom;
    }

    public function getLatestPosts($number=0, $offset=0, $date_cherche='', $categorie=0)
    {
        if ($number == 0)
        {
            $nom=$this->db->query("select * from news 
                       left join categories on categories.type = news.categorie 
                        WHERE dateAjout LIKE ? " .($categorie==0 ? "" : "And categories.type = $categorie"). " 
                        order by dateAjout desc", array($date_cherche.'%'));
        }
        else
        {
            $nom=$this->db->query("select * from news 
                       left join categories on categories.type = news.categorie 
                        WHERE dateAjout LIKE ? " .($categorie==0 ? "" : "And categories.type = $categorie"). " 
                       order by dateAjout desc limit $number offset $offset", array($date_cherche.'%'));

        }
        return $nom;
    }


    public function insertPost($id_auteur, $titre, $contenu, $categorie)
    {
        $id=$this->db->execute("insert into news(id_auteur, titre, contenu, categorie, dateModif) values (?,?,?,?,CURRENT_TIMESTAMP)", array($id_auteur['user_id'], "$titre", "$contenu","$categorie" ));
        return $id;

    }

    public function deletetPost($id)
    {
        $id=$this->db->execute("delete FROM news where id = ?", array($id));
        return $id;
    }

    public function updatePost($id, $titre, $contenu, $categorie)
    {
        $id=$this->db->execute("update news SET titre=?, contenu=?, categorie=?, dateModif=CURRENT_TIMESTAMP where id = $id", array("$titre", "$contenu","$categorie" ));
        return $id;
    }

    public function updateImagePost($id, $image)
    {
        $id=$this->db->execute("update news SET image=? where id = $id", array($image ));
        return $id;

    }

    // Commentaires ------------------------------------- //

    public function getCommentaires($id)
    {
        $id=$this->db->query("select * from commentaires where id_news=?", array($id));
        return $id;
    }

    public function insertCommentaire($id, $nom, $prenom, $commentaire)
    {
       $id=$this->db->execute("insert into commentaires(id_news, nom, prenom, commentaire) values (?,?,?,?)", array($id, $nom, $prenom,$commentaire ));
       return $id;

    }

    // Catégories ------------------------------------- //

    public function getCategorie($type)
    {
        $nom=$this->db->queryOne("select * from categories where type=?", array($type));
        return $nom;
    }


    // Tags ------------------------------------- //

    public function insertTag($id_news, $lib_tag)
    {
        $id=$this->db->execute("insert into tags(id_news, tag) values (?,?)", array($id_news, $lib_tag ));
        return $id;
    }

    public function getTags($id_news)
    {
        $tag=$this->db->queryOne("select * from tags where id_news=?", array($id_news));
        return $tag;
    }

    public function getLatestTags($id_news)
    {
        $nom=$this->db->query("select * from tags where id_news = $id_news order by id asc", array(""));
        return $nom;
    }

    public function getTagsFormate($id_news)
    {
      $tag_format2=$this->db->queryOne("select GROUP_CONCAT( `tag` ) as tag from tags
            where id_news = ?", array($id_news));
      return $tag_format2['tag'];
    }




    public function deletetTags($id_news)
    {
        $id=$this->db->execute("delete FROM tags where id_news = ?", array($id_news));
        return $id;
    }


}