<?php
namespace app\DAO;
use \PDO;
use \PDOException;

abstract class DAO
{
    protected $conexao;

    public function __construct()
    {
        $host = 'mysql:host=localhost;dbname=crud-mvc';
        $usuario = 'root';
        $pass = '';

        try
        {
            $this->conexao = new PDO($host, $usuario, $pass);
        }
        catch (PDOException $ex)
        {
            echo 'Erro ao conectar: ', $ex->getMessage();
        }
        
    }
}
?>