<!DOCTYPE html>

<!-- import css bootstrap  -->
<link href="../assets/css/index.css" rel="stylesheet">
<html>

<body>

    <!-- -------------------------------------------------------------------- -->
    <?php
    // apelle de la navBar
    require '../components/nav.php';
    // appelle des fonctions
    require '../utils/function.php';

    //Declaration constante
    define("filePathAndName", "../assets/documents/webdictionary.txt");
    define("filePath", "../assets/documents/");

    $target_dir = "../assets/documents/telechargement/";
    ?>

    <h2 style="text-decoration:underline;text-align:center">Gestion des fichiers en PHP</h2>

    <!-- -------------------------------------------------------------------- -->
    <h4 style="text-decoration:underline;text-align:start;margin-bottom:10px">Lecture Fichier</h4>

    <p style="margin: 0px;padding:0px"><b>Pour ouvrir des fichiers: fopen() qui donne plus d'options que la readfile().</b></p>
    <p style="margin: 0px;padding:0px"><b>fclose() est utilisé pour fermer un fichier ouvert..</b></p>
    <p style="margin: 0px;padding:0px"><b>fgets() est utilisé pour lire une seule ligne d'un fichier.</b></p>
    <p style="margin: 0px;padding:0px"><b>feof() vérifie si la "fin de fichier" (EOF) a été atteinte et elle est utile pour parcourir des données de longueur inconnue.</b></p>
    <p style="margin: 0px;margin-bottom:5px;padding:0px"><b>fgetc() est utilisé pour lire un seul caractère à partir d'un fichier.</b></p>


    <ul class="array"> Ouverture des différents modes: <br><br>
        <li> r : Open a file for read only. File pointer starts at the beginning of the file </li>
        <li> w : Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file </li>
        <li> a : Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist </li>
        <li> x : Creates a new file for write only. Returns FALSE and an error if file already exists </li>
        <li> r+ : Open a file for read/write. File pointer starts at the beginning of the file </li>
        <li> w+ : Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file </li>
        <li> a+ : Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist </li>
        <li> x+ : Creates a new file for read/write. Returns FALSE and an error if file already exists
    </ul>
    <?php

    echo "<br><br>--------------------- Lecture du ficher: '" . filePathAndName . "' en une seule ligne ---------------------------------------<br>";
    $myfile = fopen(filePathAndName, "r") or die("Unable to open file!");
    echo fread($myfile, filesize(filePathAndName));
    fclose($myfile);

    echo "<br><br>--------------------- Lecture du ficher: '" . filePathAndName . "' ligne par ligne ---------------------------------------<br>";
    $myfile = fopen(filePathAndName, "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);

    echo "<br>--------------------- Ecriture du ficher: '" . filePathAndName . "' caractère par caractère ---------------------------------------<br>";
    $myfile = fopen(filePathAndName, "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while (!feof($myfile)) {
        echo fgetc($myfile) . "<b style='color:red;'>/</b>";
    }
    fclose($myfile);
    ?>

    <!-- -------------------------------------------------------------------- -->
    <h4 style="text-decoration:underline;text-align:start;margin-bottom:10px">Ecriture Fichier</h4>

    <p style="margin: 0px;padding:0px"><b>La fopen() est également utilisée pour créer un fichier et si le fichier n'existe pas, il sera crée, étant donné que le fichier est ouvert en écriture (w) ou en ajout (a)..</b></p>
    <p style="margin: 0px;padding:0px"><b>Le premier paramètre de fwrite() contient le nom du fichier dans lequel écrire et le deuxième paramètre est la chaîne à écrire.</b></p>
    <p style="margin: 0px;padding:0px"><b>Vous pouvez ajouter des données à un fichier en utilisant le mode "a". Le mode "a" ajoute du texte à la fin du fichier, tandis que le mode "w" remplace (et efface) l'ancien contenu du fichier.</b></p>
    <!-- <p style="margin: 0px;padding:0px"><b>feof() vérifie si la "fin de fichier" (EOF) a été atteinte et elle est utile pour parcourir des données de longueur inconnue.</b></p> -->
    <!-- <p style="margin: 0px;margin-bottom:5px;padding:0px"><b>fgetc() est utilisé pour lire un seul caractère à partir d'un fichier.</b></p> -->
    <br>

    <?php
    $nameFile = "testfile.txt";

    echo "---------------------  Ecriture du ficher '$nameFile' qui sera vide: dans le répertoire '" . filePath . "' ---------------------------------------<br>";
    $myfile = fopen(filePath . $nameFile, "w");

    // Relecture du fichier
    $myfile = fopen(filePath . $nameFile, "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    echo "---------------------  Ecriture de deux lignes dans le ficher 'newfile.txt' en écrasant les données précedentes: dans le répertoire '" . filePath  . "' ---------------------------------------<br>";
    $myfile = fopen(filePath . $nameFile, "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    // Essai de récriture en ecrasant les données du dessus
    // $myfile = fopen(filePath . $nameFile, "w") or die("Unable to open file!");
    // $txt = "test\n";
    // fwrite($myfile, $txt);
    // $txt = "test2\n";
    // fwrite($myfile, $txt);
    // fclose($myfile);

    // Relecture du fichier
    $myfile = fopen(filePath . $nameFile, "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }


    echo "---------------------  Ecriture de deux lignes supplementaires dans le ficher 'newfile.txt' sans écraser les données précedentes: dans le répertoire '" . filePath  . "' ---------------------------------------<br>";
    $myfile = fopen(filePath . $nameFile, "a") or die("Unable to open file!");
    $txt = "Donald Duck\n";
    fwrite($myfile, $txt);
    $txt = "Goofy Goof\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    // Relecture du fichier
    $myfile = fopen(filePath . $nameFile, "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }

    ?>

    <h4 style="text-decoration:underline;text-align:start;margin-bottom:10px">Upload Fichier</h4>

    <div style="text-align:center;margin:10px">
        <a href="https://www.w3schools.com/php/php_ref_filesystem.asp" target="_blank">Retrouver toutes les references sur les files System</a>
    </div>



    <form id="formUpload" action="phpFiles.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <input id="reset" type="submit" value="Reset">
    <br>

    <!-- PHP script explained:
    $target_dir = "uploads/" - specifies the directory where the file is going to be placed
    $target_file specifies the path of the file to be uploaded
    $uploadOk=1 is not used yet (will be used later)
    $imageFileType holds the file extension of the file (in lower case)
    Next, check if the image file is an actual image or a fake image -->

    <?php
    $target_file = basename($_FILES["fileToUpload"]["name"]);
    $target_dir_name = $target_dir . $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    if ($target_dir_name != $target_dir) {
        // Verifie si le fichier est bien une image actuelle ou fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            print_r($check);
            echo ".<br>";
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".<br>";
                $uploadOk = 1;
            } else {
                echo "File is not an image.<br>";
                $uploadOk = 0;
            }
        }
    }

    // Vérification si image existe déjà
    if ($target_dir_name != $target_dir) {
        if (file_exists($target_dir_name)) {
            echo "Sorry, file already exists.<br>";
            $uploadOk = 0;
            echo "The file will be erased<br>";
            unlink($target_dir_name);
        }
    }

    // Vérification de la taille du fichier en octet 
    if ($target_dir_name != $target_dir) {
        if ($_FILES["fileToUpload"]["size"] > 1000000) {
            echo "Sorry, your file is too large.<br>";
            $uploadOk = 0;
        }
    }

    // Filtre sur le type d'extention
    if ($target_dir_name != $target_dir) {
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "webp"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
            $uploadOk = 0;
        }
    }

    // Vérification si variable $uploadOk est à 0 ou en erreur
    if ($target_dir_name != $target_dir) {
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.<br>";
            // if everything is ok, try to upload file
        } else {
            // Deplace l'image dans temps dans le dossier de notre architecture
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir_name)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
            } else {
                echo "Sorry, there was an error uploading your file.<br>";
            }
        }
    }
    ?>
    <?php include '../components/footer.php'; ?>

</body>

<script>
    const formUpload = document.getElementById("formUpload");
    const reset = document.getElementById("reset");

    reset.addEventListener('click', (event) => {
        // console.log('reset')
        formUpload.reset()

    });
</script>

</html>