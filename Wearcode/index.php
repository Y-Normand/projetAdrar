<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// include_once("controllers/BookController.controller.php");

try{
    if (empty($_GET['page'])){
        require "views/accueil.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]){
            case "accueil": 
                require "views/accueil.php";

                break;
            case "admin":
                require "views/admin.php";
                break; 
            case "livres": 
                // var_dump($url);
                if (empty($url[1])){
                    $bookmanager -> displayBooks();
                } else if ($url[1]=="lire"){
                    $bookmanager -> displayBook($url[2]);
                } else if ($url[1]=="ajouter"){
                    $bookmanager -> addBook();
                } else if ($url[1]=="modifier"){
                    $bookmanager -> modifyBook($url[2]);
                } else if ($url[1]=="supprimer"){
                    $bookmanager -> deleteBookConfirm($url[2]);
                } else if ($url[1]=="confirmer"){
                    $bookmanager -> deleteBook ($url[2]);
                } else if ($url[1]=="validate"){
                    $bookmanager -> addBookValidate();
                } else if ($url[1]=="modifierOK"){
                    $bookmanager -> modifierValider($url[2],$_POST["titre"],$_POST["nbpages"]);
                } else {
                    throw new Exception('Error 404, page not found');
                }  
                break;
            default :
                echo "Bonjour 2";
                exit;
                throw new Exception("Error 404, page not found. T'es mauvais JACK !!!!");
        } 
    }
} catch (Exception $error) {
    echo $error -> getMessage();
}