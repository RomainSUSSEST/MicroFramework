<?php
namespace App\Entity;

use Core\Entity\Entity;

class PostEntity extends Entity{

    /**
     * @return string : Renvoie l'article et son id en lien
     */
    public function getUrl(){
        return 'article-'. $this->id .'-'. $this->slug;
    }

    /**
     * @return string : L'extrait de l'article depuis la BDD
     */
    public function getExtrait(){
        $html = '<p>' . substr($this->contenu, 0, 200) . '...</p>'; // Extrait qui commence du caractère 0 au 200ème
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }

    public function getSlug()
    {
        return $this->slug;
    }

}