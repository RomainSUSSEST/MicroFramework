<?php

namespace App\Table;

use App\App;

class Table
{
    protected static $table;

    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();

        return $this->$key;
    }

    public static function find($id)
    {
        return App::getDatabase()->prepare("SELECT * FROM ". static::$table . " WHERE id_article = ?", [$id], get_called_class(), true);
    }

    public static function query($statement, $attributes = null, $one = false)
    {
        if ($attributes)
        {
            return App::getDatabase()->prepare($statement, $attributes, get_called_class(), $one);
        } else {
            return App::getDatabase()->query($statement, get_called_class(), $one);
        }

    }
}