<h1 class="text-center mb-5">Nos articles</h1>


    <div class="card-group text-center">
        <?php foreach ($articles as $article) : ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-success">
                    <div class="card-body">
                        <h5 class="card-title" style="height:5vh"><?= $article['title'] ?></h5>
                    </div>
                    <div class="card-text mb-2">
                        <div class="d-flex justify-content-around">
                            <a href="article.php?id=<?= $article['id'] ?>" class="btn btn-sm btn-primary">Lire la suite</a>
                            <a href="delete-article.php?id=<?= $article['id'] ?>" class="btn btn-sm btn-primary" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article ?!`)">Supprimer</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Ecrit le <?= $article['created_at'] ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
