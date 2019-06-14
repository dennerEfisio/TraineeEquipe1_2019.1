<?php 

class Conection{

    public  static function make($config){
        try{
            return new PDO(
                $config['concetion'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }
        catch (PDOException $error){
            die($error->getMessage());
        }

    }
}