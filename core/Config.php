<?php

namespace Core;


class Config
{

    private $settings = [];
    private static $_instance;

    /**
     * @param $file
     * @return Config : Retourne une instance de la BDD
     */
    public static function getInstance($file)
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }

    /**
     * Config constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->settings = require($file);
    }

    /**
     * Retourne une "méthode magique" qui permet de renvoyer des infos sur la $key
     * @param $key : Info à retourner
     * @return mixed|null
     */
    public function get($key)
    {
        if (!isset($this->settings[$key])) {
            return null;
        }
        return $this->settings[$key];
    }

}