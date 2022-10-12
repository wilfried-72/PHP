<!-- code html pour afficher touts l'article associé à son id et afficher tous ces commentaires -->
<div class="mt-5  mr-2 ml-2 p-5">

    <h4 class="text-center">Article complet:</h4>
    <div class="card h-100 border-success text-center">
        <div class="card-body">Titre:
            <h5 class="card-title" style="height:5vh"><?= $article['title'] ?></h5>
        </div>
        <hr>
        <div class="card-text mb-2">Introduction:
            <p><?= $article['introduction'] ?></p>
        </div>
        <hr>
        <blockquote>Contenu:
            <p><?= $article['content'] ?></p>
        </blockquote>
        <div class="card-footer">
            <small class="text-muted">Ecrit le <?= $article['created_at'] ?>
                <?php if (!empty($article['author'])) : ?>
                    <span class="help-inline"><?php echo " par " . $article['author']; ?></span>
                <?php endif; ?>
            </small>
        </div>
    </div>

    <div class="d-flex justify-content-center my-3">
        <a class="btn btn-primary" href="../../../../front/src/controllers/articles/listArticles.php">Retour</a>
    </div>

    <?php if (count($commentaires) === 0) : ?>
        <hr class="mt-2;mb-2">
        <h5 class="mt-3">Il n'y a pas encore de commentaires pour cet article</h5>
    <?php else : ?>
        <hr class="mt-2;mb-2">
        <h5 class="mt-3">Il y a déjà <?= count($commentaires) ?> réactions : </h5>

        <div class="card-group text-center justify-content-center">
            <?php foreach ($commentaires as $commentaire) : ?>

                <div class="col-md-3 mb-4">
                    <div class="card h-100 border-success">
                        <div class="card-body">
                            <h5 class="card-title" style="height:5vh">Commentaire de: <?= $commentaire['author'] ?></h5>
                            <blockquote>
                                <em><?= $commentaire['content'] ?></em>
                            </blockquote>
                        </div>
                        <div class="card-text mb-2">

                            <div class="d-flex justify-content-around">
                                <a href="../../controllers/comments/edit-comment.php?id=<?= $commentaire['id'] ?>" class="btn btn-sm btn-primary">Editer</a>
                                <a href="../../controllers/comments/delete-comment.php?id=<?= $commentaire['id'] ?>" class="btn btn-sm btn-primary" onclick="return(confirm(`Êtes vous sûr de vouloir supprimer ce commentaire ?`))">Supprimer</a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Ecrit le <?= $commentaire['created_at'] ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <div class="d-flex justify-content-center mt-3 mb-3" id="formComment">

        <form action="../../controllers/comments/save-comment.php" method="POST">
            <h5>Vous voulez réagir ? N'hésitez pas!</h5>
            <div class="control-group">
                <label class="control-label">Votre pseudo</label>
                <div class="controls">
                    <input required ype="text" name="author" placeholder="Votre pseudo !">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Votre commentaire </label>
                <div class="controls">
                    <textarea required name="content" id="" cols="30" rows="10" placeholder="Votre commentaire ..."></textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <input type="hidden" name="article_id" value="<?= $article_id ?>">
                </div>
            </div>
            <div class="form-actions">
                <!-- Submit -->
                <button type="submit" class="btn btn-success">Commenter</button>
                <a class="btn btn-primary" href="../../../../front/src/controllers/articles/listArticles.php">Retour</a>
            </div>
        </form>
    </div>
</div>