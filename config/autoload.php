<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 15/08/2015
 * Time: 09:16
 */

function __autoload($Class)
{
    $diretorios = ['model','model/dao','controller'];

    foreach ($diretorios as $diretorio) {

        $arquivo = $diretorio . "/" . $Class . ".class.php";

        if (file_exists($arquivo)) {

            require_once $arquivo;

        }
        else if(file_exists("../".$arquivo)){
            require_once "../".$arquivo;
        }
    }
}