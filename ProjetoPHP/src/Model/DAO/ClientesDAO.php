<?php

namespace Aluno\ProjetoPhp\Model\DAO;

use Aluno\ProjetoPhp\Model\Entity\Clientes;

class ClientesDAO{

    public function inserir(Clientes $c){
        try{
            $sql = "INSERT INTO `clientes`(`nome`, `email`, `idade`) VALUES (:nome, :email, :idade)";
            $p = Conexao::conectar()->prepare($sql); //variavél para fazer a preparação do sql - tirar os apelidos que foram criados e passar os nomes reais
            $p->bindValue(":nome", $c->getNome());
            $p->bindValue(":email", $c->getEmail());
            $p->bindValue(":idade", $c->getIdade());
            return $p->execute();

        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Clientes $c){
        try{
            $sql = "UPDATE `clientes` SET `nome`=:nome,`email`=:email,`idade`=:idade WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql); //variavél para fazer a preparação do sql - tirar os apelidos que foram criados e passar os nomes reais
            $p->bindValue(":nome", $c->getNome());
            $p->bindValue(":email", $c->getEmail());
            $p->bindValue(":idade", $c->getIdade());
            $p->bindValue(":id", $c->getId());
            return $p->execute();

        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `clientes` WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql); //variavél para fazer a preparação do sql - tirar os apelidos que foram criados e passar os nomes reais
            $p->bindValue(":id", $id);
            return $p->execute();

        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM clientes";
            return Conexao::conectar()->query($sql); //query significa que vai fazer uma busca

        } catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM clientes WHERE id = :id";
            $p=Conexao::conectar()->prepare($sql);
            $p->bindValue(':id',$id);
            $p->execute();
            return $p->fetch(); //transforma o resultado em um array

        } catch(\Exception $e){
            return false;
        }
    }

}
//operações de CRUDS basicas termina aqui
?>