<?php

namespace Aluno\ProjetoPhp\Model\DAO;

use PDO;

class Conexao{
    public static function conectar(){
        return new PDO("mysql:host=localhost; dbname=projetophp;", "root", ""); // é normal esse erro que da, porém na hora da execução funciona perfeitamente. 
    }
}