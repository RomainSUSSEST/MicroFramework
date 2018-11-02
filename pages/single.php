<?php
use \App\App;

$article = \App\Table\Article::find($_GET['id']);

if ($article === false)
{
    \App\App::notFound();
}

App::setTitle($article->titre_article);

?>

<h1> <?= $article->titre_article; ?></h1>

<p><?= $article->contenu_article; ?></p>