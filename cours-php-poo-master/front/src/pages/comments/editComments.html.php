<!-- code html pour afficher touts l'article associé à son id et afficher tous ces commentaires -->
<div class="mt-5  mr-2 ml-2 p-5">
    <div class="d-flex justify-content-center mt-3 mb-3">
        <h5>Editer votre commentaire:</h5>
    </div>

    <div class="d-flex justify-content-center mt-3 mb-3">
        <form action="../../partial/comments/save-edit-comment.php" method="POST">

            <div class="control-group">
                <label class="control-label">Votre commentaire </label>
                <div class="controls">
                    <textarea required name="content" id="" cols="80" rows="10" placeholder="Votre commentaire ..."><?= strip_tags($commentaires[0]['content']) ?></textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <input type="hidden" name="comment_id" value="<?= $commentaires[0]['id'] ?>">
                </div>
            </div>


            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <input type="hidden" name="article_id" value="<?= $commentaires[0]['article_id'] ?>">
                </div>
            </div>

            <div class="form-actions">
                <!-- Submit -->
                <button type="submit" class="btn btn-success">Modifier</button>
                <a class="btn btn-primary" href="<?php echo '../../partial/articles/article.php?id=' . $commentaires[0]['article_id'] ?>">Retour</a>
            </div>
        </form>
    </div>
</div>