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

    public function select($table, $condition)
    {
        $statement = $this->pdo->prepare("select * from {$table} where id = {$condition}");
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function insert($table , $parameters)
    {
        $sql = sprintf('insert into %s (%s) values (%s)', 
        $table,
        implode(', ', array_keys($parameters)),
        ':' . implode(', :', array_keys($parameters))
    );
    try {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($parameters);
    } catch (Exception $e) 
       {
         //
       }
    }

    public function delete($table, $parameters)
    {
        $statement = $this->pdo->prepare("delete from {$table} where {$table}.id = {$parameters}");
        $statement->execute();
    }


    public function update2($table , $parameters, $id)
    {
        $sql = sprintf(
        'update %s set %s = :%s, %s = :%s where %s.id = %s',
        $table,
        array_keys($parameters)[0],
        array_keys($parameters)[0],
        array_keys($parameters)[1],
        array_keys($parameters)[1],
        $table,
        $id
    );
    try {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($parameters);
    } catch (Exception $e) 
       {
         die($e->getMessege());     //
       }
    }
}