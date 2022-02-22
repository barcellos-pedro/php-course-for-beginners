<?php

require_once './Note.php';

class Connection
{
    private PDO $pdo;

    public function __construct()
    {
        // PDO
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname=mysqlnotes',
            'pedro',
            'Pedromudar@100'
        );
        
        // Every time something goes wrong with databse, we will throw an exception
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getConnection() : Connection {
        return new Connection();
    }

    /**
     * Returns pdo ready to execute some query
     */
    private function query($query) : PDOStatement|false
    {
        return $this->pdo->prepare($query);
    }

    public function getNotes() : array
    {
        // Prepare the query
        $statement = $this->query("SELECT * FROM notes ORDER BY created_at DESC");

        $statement->execute();

        // Return result as an associative array
        return $statement->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getNoteById(int $id)
    {
        $statement = $this->query("SELECT id, title, description, created_at FROM notes where id = :id");
        $statement->bindValue('id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);

    }

    public function saveNote(Note $note) : bool
    {
        $statement = $this->query(
            "INSERT INTO notes (title, description) VALUES (:title, :description)"
        );

        $statement->bindValue('title', $note->title);
        $statement->bindValue('description', $note->description);

        return $statement->execute();
    }

    public function updateNote(int $id, string $title, string $description) : bool
    {
        $statement = $this->query(
            "UPDATE notes SET title = :title, description = :description WHERE id = :id"
        );

        $statement->bindValue('id', $id);
        $statement->bindValue('title', $title);
        $statement->bindValue('description', $description);

        return $statement->execute();
    }

    public function deleteNote(int $id) : bool
    {
        $statement = $this->query("DELETE FROM notes where id = ?");
        
        // bindValue by args position
        return $statement->execute([$id]);
    }
}

?>