<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} where completed = :completed");
         
        
            $statement->execute(['completed' => true]);


        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
