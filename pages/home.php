<div class="row">
    <div class="col-sm-8">
        <?php foreach (\App\Table\Article::getLast() as $article): ?>

            <h2><a href="<?= $article->url; ?>"><?= $article->titre_article; ?></a></h2>

            <p><?= $article->extrait; ?></p>

        <?php endforeach; ?>
    </div>
</div>
