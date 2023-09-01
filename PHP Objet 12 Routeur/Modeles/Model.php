<?php

namespace Modeles;

use Source\Constant;

class Model
{
    protected static \PDO $pdo;

    // - Définir une propriété qui va contenir le nom de la table
    protected string $table;

    public function __construct()
    {
        // - Connexion à la BDD
        try {
            // - Type de connexion, nom user, password
            static::$pdo = new \PDO(
                'mysql:dbname=' . Constant::DB_NAME . ';host=' . Constant::DB_HOST,
                Constant::DB_USER,
                Constant::DB_PASS,
                [
                    // - On peut mettre des paramètres par défaut, on va récupérer nos valeurs en BDD en fetch_object
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                    // - En cas d'erreur, il renvoie des exceptions
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }

        // - Récupérer le nom de la table
        $this->table = strtolower(explode('\\', get_class($this))[1]);
    }

    public function getPDO(): \PDO
    {
        return static::$pdo;
    }

    // - Méthode pour récupérer la liste des users
    public function all()
    {
        $statement = $this->getPDO()->query("SELECT * FROM {$this->table}");

        return $statement->fetchAll();
    }
}
