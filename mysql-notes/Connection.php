<?php

class Connection
{
    private PDO $pdo;

    public function __construct()
    {
        // PDO
        $pdo = new PDO(
            'mysql:host=localhost;dbname=mysqlnotes',
            'pedro',
            'Pedromudar@100'
        );
        
        // Every time something goes wrong with databse, we will throw an exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo = $pdo;
    }

    public function getNotes()
    {
        // Prepare the query
        $statement = $this->pdo->prepare(
            "SELECT * FROM notes ORDER BY created_at DESC"
        );

        $statement->execute();

        // Return result as an associative array
        return $statement->fetchALL(PDO::FETCH_ASSOC);
    }
}

?>