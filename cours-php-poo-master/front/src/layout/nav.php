<div class="p-2">
   <h5 class="text-center"><?php if ($_SESSION["username"]) echo "Bienvenue " . $_SESSION["username"]; ?></h6>
   <nav>
      <div <?php if (!empty($_SESSION["pseudo"])) {
               echo 'style="background-color: AntiqueWhite"';
            } else {
               echo 'style="background-color: aqua"';
            } ?> class="d-flex justify-content-around p-2 mb-5">
         <a href='../../../../index.php'>home</a>
         <a href='../../../../front/src/controllers/articles/listArticles.php'>Articles</a>
         <?php if ($_SESSION["username"]) echo "<a href='../../../../front/src/controllers/articles/create_article.php'> Créer un article</a>"; ?>
         <?php if (!$_SESSION["username"]) echo "<a href='../../../../front/src/controllers/auth/login.php'>Login/register</a>"; ?>
         <?php if ($_SESSION["username"]) echo "<a href='../../../../front/src/controllers/auth/logout.php'>Déconnexion</a>"; ?>
      </div>
   </nav>
</div>