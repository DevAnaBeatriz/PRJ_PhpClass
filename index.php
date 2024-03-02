<?php

    require 'vendor/autoload.php';

    use App\CarroHibrido;
    use App\Carro;


    //  $meuCarro = new Carro("Azul","Subaru","WRX", 2020);

    // $meuCarro->setCor("Rosa");
    // $meuCarro->getModelo("Lancer");
    // $meuCarro->setMarca("Mitsubichi");
    // $meuCarro->setAno("2015");

    // echo $meuCarro->exibirInformacoes();


    $carrohibrido = new CarroHibrido("WRX");

    $carrohibrido->setCor("Rosa");
    $carrohibrido->setMarca("Subaru");
    $carrohibrido->setAno("2015");

    echo $carrohibrido->exibirInformacoes();
