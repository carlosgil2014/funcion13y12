<?php
include_once('funciondiezmodelo.php');
class controlador
{
    public function __construct()
    {
        $this->varValor = new examenModelo();
    }

    public function principal()
    {
        if($_GET['accion'])
        {
            switch($_GET['accion'])
            {
                case 'index':
                    include_once('formulario.php');
                break;
                case 'number10':
                    $valor = $this->varValor->number10($_POST['valor']);
                    include_once('formulario.php');
                break;
                case 'number13':
                    $valor13 = $this->varValor->number13($_POST['valor13']);
                    include_once('formulario.php');
                break;
            }
        }else{
            header('Location: index.php?accion=index');
        }
    }
}
?>