<h1>Nos articles</h1>

<div class="container">
    <div class="card-deck">
        <?php foreach ($articles as $article) : ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $article['title'] ?></h5>
                    <a href="article.php?id=<?= $article['id'] ?>">Lire la suite</a>
                    <a href="delete-article.php?id=<?= $article['id'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article ?!`)">Supprimer</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Ecrit le <?= $article['created_at'] ?></small>
                </div>
            </div>

        <?php endforeach ?>
    </div>
</div>