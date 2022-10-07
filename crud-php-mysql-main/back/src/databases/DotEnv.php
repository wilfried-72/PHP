<?php

class DotEnv
{
    /**
     * The directory where the .env file can be located.
     *
     */
    protected $path;

    //Verification si directory existe ?
    public function __construct(string $path)
    {
        if(!file_exists($path)) {
            throw new \InvalidArgumentException(sprintf('%s does not exist', $path));
        }
        $this->path = $path;
    }

    public function load() :void
    {
        // fichier est il lisible
        if (!is_readable($this->path)) {
            //retourne erreur dans la console si le fichier n'est lisile
            // Le nom du chemin sera en formater en string (%s) et sera au debut du printf
            // Sprintf signifie qu'il sera retourné en debug mais pas en mode client
            throw new \RuntimeException(sprintf('%s file is not readable', $this->path));
        }

        // Lit le fichier et renvoie le résultat dans un tableau
        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        // print_r($lines);

        // Pour chaque ligne du tableau:
        foreach ($lines as $line) {

            // ne prend pas en compte les commentaires dans le tableau signalé par #
            // on cherche la position de ce caractère et s'il est en possition 0 on continue
            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            // List Assigne les variables name et value comme si elles étaient un tableau par rapport au =
            // explode => Scinde une chaîne de caractères en segments
            list($name, $value) = explode('=', $line, 2);
            // Convertit les varaible en string
            $name = trim($name);
            $value = trim($value);
            // echo "$name, $value";

            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                // putenv — Fixe la valeur d'une variable d'environnement
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
            }
        }
    }
}
