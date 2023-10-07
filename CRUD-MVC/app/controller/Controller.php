<?php 
namespace app\Controller;

abstract class Controller
{
   public static function render(string $view, $dados = null)
   {
        $view_file = 'app/views/modules/'.$view.'.php';

        if(file_exists($view_file))
        {
            include($view_file);
        }
   }
}

?>