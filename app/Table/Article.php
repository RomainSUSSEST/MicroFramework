<?php

namespace App\Table;

class Article extends Table
{

    protected static $table = 'articles';

    public function getURL()
    {
        return 'index.php?page=article&id='. $this->id_article;
    }

    public function getExtrait()
    {
        $html = '<p>'. substr($this->contenu_article, 0, 100) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';

        return $html;
    }

    public static function getLast()
    {
        return self::query("SELECT * FROM articles");
    }
}