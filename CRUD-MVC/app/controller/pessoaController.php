<?php
namespace app\Controller;
use app\Model\pessoaModel;
class pessoaController extends Controller
{
    public static function Home()
    {   
        parent::render('pessoa/index_pessoa');
    }

    public static function Form()
    {   
        $modelPessoa = new PessoaModel();
        if(isset($_GET['id']))
        {
            parent::render('pessoa/form_pessoa', $modelPessoa->ListById((int) $_GET['id']));
        }
        else
        {
            parent::render('pessoa/form_pessoa', $modelPessoa);
        }

    }

    public static function Lista()
    {   
        $modelPessoa = new PessoaModel();
        $modelPessoa->ListAll();
        parent::render('pessoa/lista_pessoa', $modelPessoa->rows);
    }

    public static function Save()
    {
        $modelPessoa = new PessoaModel();
        
        $modelPessoa->nome = filter_input(INPUT_POST, 'nome');
        $modelPessoa->cpf = filter_input(INPUT_POST, 'cpf');
        $modelPessoa->data_nascimento = filter_input(INPUT_POST, 'data_nascimento');
        $modelPessoa->id = filter_input(INPUT_POST, 'ed');
        
        $modelPessoa->Save();

        header('Location: /Crud-Mvc/lista');
    }

    public static function Delete()
    {
        $pessoaModel = new PessoaModel();
        $pessoaModel->id = filter_input(INPUT_GET, 'id');

        $pessoaModel->Delete();
        
        header('Location: /Crud-Mvc/lista');
    }

    public static function Error()
    {   
        parent::render('error/erro404');
    }
}
?>