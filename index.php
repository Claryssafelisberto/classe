<?php

declare(strict_types=1);

class Pessoas
{

    private string $nome;
    private int $cpf;
    private string $email;

    public function __construct(string $nome, int $cpf, string $email)
    {

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }
}

$Claryssa = new Pessoas('Claryssa', 66624576699, 'clarysafelisberto@gmail.com');




class Produto
{

    private string $nome;
    private int $preco;
    private string $categoria;

    public function __construct(string $nome, int $preco, string $categoria)
    {
        //preco = -10;
        //retorna 0;
        //preco = 1001;
        //retorna 1001
        $this->nome = $nome;
        if($preco <= 0) {
            $this->preco = 0;
        }else{
            $this->preco = $preco;
        }
        $this->categoria = $categoria;
    }
    public function pegarNome()
    {
        return $this->nome;
    }
    public function pegarPreco()
    {
        return $this->preco;
    }
    public function pegarCategoria()
    {
        return $this->categoria;
    }
    public function alterarvalor(int $novoValor)
    {
        $this->preco = $novoValor;
    }
}
$pipoca = new Produto('pipoca', 1000, 'alimentos');

echo $pipoca->pegarNome();
echo "<br>";
echo $pipoca->pegarpreco();

class Conta {
    private string  $nome;
    private int $saldo;

    public function __construct(string $nome, int $saldo)
    {
        $this->nome = $nome;
        if($saldo <= 0) {
            $this->saldo = 0;
        }else{
            $this->saldo = $saldo;
        }
    }

    public function pegarNome()
    {
        return $this->nome;
    }

    public function pegarSaldo(){
        return $this->saldo;
    }
}

$contaClaryssa = new Conta("Claryssa",10000);