<?php
namespace App\Src;

abstract class Pessoa {

    private $nome;
    private $email;
    private $senha;

    public abstract function logar();

    public abstract function cadastrar();

}