<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 15/08/2015
 * Time: 09:04
 */

class Pessoa
{
    public $id;
    public $nome;
    public $idade;
    public $cpf;

    /**
     * Pessoa constructor.
     * @param $id
     * @param $nome
     * @param $idade
     * @param $cpf
     */
    public function __construct($id, $nome, $idade, $cpf)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }





}