<?php
namespace App\Table;

use Core\Table\Table;

class PostTable extends Table{

    protected $table = 'articles';

    /**
     * Récupère les derniers articles de la BDD
     * @return array : Retourne tous les articles dans un tableau
     */
    public function last(){
        return $this->query("
            SELECT articles.id, articles.titre, articles.contenu, articles.date, articles.slug
            FROM articles
            ORDER BY articles.date DESC");
    }

    /**
     * Récupère un article en fonction de son id
     * @param $id int : Id de l'article voulu
     * @return \App\Entity\PostEntity : Retourne l'article en fonction de son id
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT articles.id, articles.titre, articles.contenu, articles.date, articles.slug
            FROM articles
            WHERE articles.id = ?", [$id], true);
    }
}