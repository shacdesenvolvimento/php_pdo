<?php
namespace App\Model;
class Produto{
    private $id, $nome, $descricao;

    public function setNome($nome){
        $this->nome= $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setDescricao($descricao){
        $this->descricao= $descricao;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setId($id){
        $this->id= $id;
    }
    public function getid(){
        return $this->id;
    }
}