<?php

require_once  '../exerc1/Pessoa.php';


/**
 * Exercício 3: Invocação dinâmica de método
 * 
 * Crie uma função que receba um objeto, o nome de um método e um array de parâmetros,
 * e invoque esse método dinamicamente usando ReflectionMethod.
 * 
 * function chamarMetodo($obj, $metodo, $params = []) {
 *   // implementar com ReflectionMethod
 *}
 * 
 */

echo "<h1>Exercício 03</h1>";

$pessoa = new Pessoa();

chamarMetodo($pessoa, 'setIdade', [19]);
echo "Nova idade: " . $pessoa->getIdade() . "<br>";

function chamarMetodo($obj, $metodo, $params = []) {
  $refMethod = new ReflectionMethod($obj, $metodo);
  $refMethod->setAccessible(true);
  return $refMethod->invokeArgs($obj, $params);
}
