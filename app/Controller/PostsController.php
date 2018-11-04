<?php

namespace App\Controller;

use Core\Controller\Controller;

class PostsController extends AppController{

    /**
     * PostsController constructor.
     */
    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
    }

    /**
     * Retourne la page index.php contenant les articles
     */
    public function index(){
        $posts = $this->Post->last();
        $this->render('posts.index', compact('posts'));
    }

    /**
     * Retourne la page show.php avec l'article selectionné
     */
    public function show(){
        $article = $this->Post->findWithCategory($_GET['id']);
        $this->render('posts.show', compact('article'));
    }

}