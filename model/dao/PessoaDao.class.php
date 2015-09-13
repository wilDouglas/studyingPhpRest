<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 12/09/15
 * Time: 16:19
 */


class PessoaDao
{
    private $pessoa;

    /**
     * PessoaDao constructor.
     * @param $pessoa
     */
    public function __construct($pessoa = null)
    {
        $this->pessoa = $pessoa;
    }


    public function listPessoas()
    {
        $db = new DataBaseFactory();
        $sql = $db->openConnection()->prepare("SELECT * FROM tab_pessoa ORDER BY tab_pessoa.nome");
        $sql->execute();
        return $sql;
    }

    public function addPessoa()
    {
        $db = new DataBaseFactory();
        $sql = $db->openConnection()->prepare("INSERT INTO mydatabase.tab_pessoa(cpf, nome, idade) VALUES (:cpf,:nome,:idade)");
        $sql->execute([':cpf' => $this->pessoa->cpf,":nome"=> $this->pessoa->nome, ":idade" => $this->pessoa->idade]);
    }
}