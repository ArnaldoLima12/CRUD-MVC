<?php
namespace app\Model;
use app\DAO\pessoaDAO;
class pessoaModel extends Model
{
    public $id, $nome, $cpf, $data_nascimento;

    public function Save()
    {   
        $DAO = new pessoaDAO();
        (empty($this->id) ? $DAO->insert($this) : $DAO->update($this));
    }

    public function ListAll()
    {
        $DAO = new pessoaDAO();
        $this->rows = $DAO->select();
    }

    public function ListById(int $id)
    {
        $DAO = new pessoaDAO();
        return $DAO->selectById($id);
    }

    public function Delete()
    {
        $DAO = new pessoaDAO();
        $DAO->delete($this->id);
    }
}
?>