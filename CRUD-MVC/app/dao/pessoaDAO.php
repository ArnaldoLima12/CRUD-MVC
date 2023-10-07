<?php 
namespace app\DAO;
use app\Model\pessoaModel;
use \PDO;

class pessoaDAO extends DAO
{   
   
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(PessoaModel $obj)
    {
        $SQLSTRING = "INSERT INTO usuario (nome, cpf, data_nascimento) VALUES (?,?,?)";
        $stmt = $this->conexao->prepare($SQLSTRING);
        $stmt->execute([$obj->nome, $obj->cpf, $obj->data_nascimento]);

        if($stmt)
        {
            
        }
    }

    public function update(PessoaModel $obj)
    {
        $SQLSTRING = "UPDATE usuario SET nome = ?, cpf= ?, data_nascimento= ? WHERE id = ?";
        $stmt = $this->conexao->prepare($SQLSTRING);
        $stmt->execute([$obj->nome, $obj->cpf, $obj->data_nascimento, $obj->id]);
    }

    public function delete(int $id)
    {
        $SQLSTRING = "DELETE FROM usuario WHERE id = ?";
        $sql = $this->conexao->prepare($SQLSTRING);
        $sql->execute([$id]);
    }

    public function select()
    {
        $SQLSTRING = "SELECT * FROM usuario";
        $sql = $this->conexao->prepare($SQLSTRING);
        $sql->execute();

        if($sql->rowCount() > 0)
        {   
            $dados = $sql->fetchAll(PDO::FETCH_CLASS);
        }
        else
        {
            $dados = 'Sem cadastros';
        }

        return $dados;
    }

    public function selectById(int $id)
    {   
        $SQLSTRING = "SELECT * FROM usuario WHERE id = ?";
        $sql = $this->conexao->prepare($SQLSTRING);
        $sql->execute([$id]);

        if($sql->rowCount() > 0)
        {   
            $dados = $sql->fetchObject('app\Model\PessoaModel');
        }
        else
        {
            $dados = new PessoaModel();
        }

        return $dados;
    }
}
?>