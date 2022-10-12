<!-- code html pour creer un article -->
<div class="mr-2 ml-2 px-5">

    <h4 class="text-center">Création d'un article:</h4>

    <div class="d-flex justify-content-center mb-3" id="formComment">

        <form action="../../controllers/articles/create_article.php" method="POST">

            <div class="control-group">
                <label class="control-label">Votre pseudo</label>
                <div class="controls">
                    <input required ype="text" name="author" placeholder="Votre pseudo !">
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Titre de l'article</label>
                <div class="controls">
                    <input required type="text" name="title" placeholder="Titre de l'article">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Introduction de l'article</label>
                <div class="controls">
                    <textarea required name="introduction" id="" cols="30" rows="10" placeholder="Introduction"></textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Contenu de l'article</label>
                <div class="controls">
                    <textarea required name="content" id="" cols="30" rows="10" placeholder="Contenu de l'article"></textarea>
                </div>
            </div>

            <div class="form-actions mt-2">
                <!-- Submit -->
                <button type="submit" class="btn btn-success">Poster</button>
                <a class="btn btn-primary" href="../../../../front/src/controllers/articles/listArticles.php">Retour</a>
            </div>
        </form>
    </div>
</div>