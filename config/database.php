<?php 

// logique de connexion a la database

//information pour se connecter
//l'endroit ou est ma database
$host = "localhost";
//le nom de la db
$dbname = "users_db";
//identifiant de connexion
$username = "root";
//mdp de connexion
$password = "";
//port
$port = 3306;
//encodage
$charset = "utf8mb4";

//fonction qui crée et renvoi une connexion a la db
function dbConnexion() {
    //transforme mes variable en global (accessible partout)
    global $host, $dbname, $password, $username, $port, $charset;

    try {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port";
        
    } catch () {
        
    }
    
}

