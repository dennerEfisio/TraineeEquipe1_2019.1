<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die('Algo deu errado, desculpe');
        }
    }

    public function delete($table, $parameters)
    {
        $sql = sprintf(
            'Delete from (%s) where (%s) (%s) (%s)',
            $table,
            implode(' = :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die('Algo deu errado ao deletar, desculpe');
        }
    }

    public function show($table, $parameters){
        $sql = sprint(
            'Select from (%s) where ($s) (%s) (%s)',
            $table,
            implode(' = :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e){
            die ('Algo deu errado ao informar mais informações sobre esse isso');
        }
    }
}
