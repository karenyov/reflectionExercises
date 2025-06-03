<?php

require_once __DIR__ . '/Pessoa.php';

/**
 * Exercício 1: Inspeção de Classe
 * Crie uma classe Pessoa com as propriedades privadas nome e idade, e métodos públicos getNome, setNome, getIdade, setIdade.
 * 
 * Use a classe ReflectionClass para:
 * 
 *  1. Listar todos os métodos.
 *  2. Listar todas as propriedades.
 *  3. Verificar se a classe tem um método chamado setIdade.
 */

 $pessoa = new ReflectionClass('Pessoa');


echo "<h1>Exercício 01</h1>";

echo "<h2>1. Listar todos os Métodos</h2>";
foreach ($pessoa->getMethods() as $method) {
  echo $method->getName() . "<br>";
}

echo "<h2>2. Listar todas as propriedades</h2>";
foreach ($pessoa->getProperties() as $property) {
  echo $property->getName() . "<br>";
}

echo "<h2>3.  Verificar se a classe tem um método chamado setIdade</h2>";
echo $pessoa->getMethod('setIdade') ? "tem" : "não tem";