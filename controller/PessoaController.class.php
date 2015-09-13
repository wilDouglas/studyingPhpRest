<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 12/09/15
 * Time: 16:18
 */

class PessoaController
{

    private $pessoa;

    /**
     * PessoaController constructor.
     * @param $pessoa
     */
    public function __construct($pessoa = null)
    {
        $this->pessoa = $pessoa;
    }


    public function listPessoas(){
        $dao = new PessoaDao();
        $resourceDb = $dao->listPessoas();

        $pessoas = array();
        $count = 0;

        while($linha = $resourceDb->fetch(PDO::FETCH_OBJ)){

            $pessoa = new Pessoa($linha->id,$linha->nome,$linha->idade,$linha->cpf);
            $pessoas[$count] = $pessoa;
            $count++;
        }

        return $pessoas;

    }

    public function addPessoa()
    {
        $dao = new PessoaDao($this->pessoa);
        $dao->addPessoa();

    }

}