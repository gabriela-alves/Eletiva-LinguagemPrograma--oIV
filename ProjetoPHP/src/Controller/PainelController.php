<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ProdutosDAO;
use Aluno\ProjetoPhp\Model\DAO\ClientesDAO;

class PainelController{
    public static function index(){

        $dao = new ProdutosDAO();
        $resultadoP = $dao->consultar();

        $dao = new ClientesDAO();
        $resultadoC = $dao->consultar();

        require_once "../src/View/painel.php";
    }
}

?>