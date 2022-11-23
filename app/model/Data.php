<?php

namespace app\Model;
use \PDO;
use \PDOException;

class Data  
{
    public $conn;
    public $array_dados;

    public function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=Liloca', 'root', 'root');
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function query(string $param, $var = 0)
    {
        try {
            
            $query = $this->conn->query($param);
            $this->linhas = $query->rowCount();

            if($var==0){
                
                $this->array_dados = $query->fetchAll();
            } else{
                $this->array_dados = $query->fetchAll(PDO::FETCH_ASSOC);
            }

        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function result()
    {
        return $this->array_dados;
    }

}

// $teste = new Data();
// $teste->query("select * from Produtos");
// var_dump($teste->result());