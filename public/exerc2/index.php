<?php

require_once  '../exerc1/Pessoa.php';

/**
 * Exercício 2: Acesso a propriedade privada via Reflection
 * Utilizando a classe Pessoa do exercício anterior:
 * 
 * 1. Instancie um objeto.
 * 2. Atribua o valor "Maria" à propriedade privada nome usando Reflection.
 * 3. Exiba o valor da propriedade nome (também via Reflection).
 */

$pessoa = new ReflectionClass('Pessoa');

echo "<h1>Exercício 02</h1>";

$objeto = $pessoa->newInstance();
echo "<h2>1. Instancie um objeto</h2>";

echo "Objeto instanciado: " . get_class($objeto) . "<br>";


echo '<h2>2.  Atribua o valor Maria à propriedade privada nome usando Reflection.</h2>';

$propriedade = $pessoa->getProperty('nome');
$propriedade->setAccessible(true);
$propriedade->setValue($objeto, 'Maria');

echo "Valor da propriedade nome: " .$objeto->getNome() . "<br>";
