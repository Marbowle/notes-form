<?php

declare(strict_types=1);

namespace App;

require_once("Exception/StorageException.php");

use App\Exception\ConfigurationException;
use App\Exception\StorageException;
use PDO;
use PDOException;
use Throwable;

class Database 
{
    private PDO $conn;

    public function __construct(array $config)
    {
        try {
            $this->validateConfig($config);
            $this->databaseConnection($config);
        }catch (PDOException $e){
            throw new StorageException('Connection error');
        }
    }

    public function createNote(array $data): void
    {
        try {
            echo 'Tworzymy notatke';
            
            $title = $this->conn->quote($data['title']);
            $decsrpition = $this->conn->quote($data['description']);
            $created = $this->conn->quote(date('Y-m-d H:i:s'));

            $query = "INSERT INTO notes (title, description, created) VALUES($title, $decsrpition, $created)";

            $result = $this->conn->exec($query);
            dump($result);
            
        }catch (Throwable $e){
            throw new StorageException('Nie udało się dodać nowej notatki', 400, $e);
            dump($e); exit;
        }
    }
    
    public function getNotes(): array
    {
        $notes = [];

        $query = "SELECT * FROM notes  ";
        
        $result = $this->conn->query($query);
        
        $notes = $result->fetchALL(PDO::FETCH_ASSOC);

        return $notes;
    }
    
    private function databaseConnection(array $config): void
    {
        $dsn = "mysql:dbname={$config['database']};host={$config['host']}";
                $this->conn = new PDO(
                $dsn,
                $config['user'],
                $config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
                );
    }

    private function validateConfig(array $config): void
    {
        if(
                    empty($config['database'])
                    || empty($config['host'])
                    || empty($config['user'])
                    || empty($config['password'])
                ){
                    throw new ConfigurataionException('Storage configuration error');
                }
    }

}