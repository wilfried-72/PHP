<!-- code html pour afficher touts les articles -->
<h2 class="text-center mb-5">Nos articles</h2>

<div class="card-group text-center justify-content-center">
    <?php foreach ($articles as $article) : ?>
        <div class="col-md-3 mb-4">
            <div class="card h-100 border-success">
                <div class="card-body">
                    <h5 class="card-title" style="height:5vh"><?= $article['title'] ?></h5>
                </div>
                <div class="card-text mb-2">
                    <div class="d-flex justify-content-around">
                        <!-- voir l'article avec ces commentaires associées -->
                        <a href="../../../../front/src/controllers/articles/article.php?id=<?= $article['id'] ?>" class="btn btn-sm btn-primary">Lire la suite</a>
                        <!-- supprimer l'article et les commentaires associées que par l'auteur de cet article-->
                        <?php if ($article['author'] === $_SESSION["pseudo"]) : ?>
                            <a href="../../../../front/src/controllers/articles/delete-article.php?id=<?= $article['id'] ?>" class="btn btn-sm btn-primary" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article et les commentaires associés ?!`)">Supprimer</a>
                        <?php endif; ?>

                  </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Ecrit le <?= $article['created_at'] ?>
                        <?php if (!empty($article['author'])) : ?>
                            <span class="help-inline"><?php echo " par " . $article['author']; ?></span>
                        <?php endif; ?></small>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>