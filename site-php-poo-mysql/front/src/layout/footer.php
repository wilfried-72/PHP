   <footer>
      <div <?php if (!empty($_SESSION["pseudo"])) {
               echo 'style="background-color: AntiqueWhite"';
            } else {
               echo 'style="background-color: aqua"';
            } ?> class="p-2 d-flex justify-content-around">

         © September 2022 - <?php echo date("F") . " " . date("Y");
                              if ($_SESSION["pseudo"]) echo "<div> Je suis connecté avec mon pseudo: " . $_SESSION["pseudo"] . "</div>" ?>
      </div>
   </footer>