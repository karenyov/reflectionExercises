<?php

require_once __DIR__ . '/Logger.php';

/**
 * Exercício 4: Implementar __call()
 * 
 * Crie uma classe Logger que implemente o método mágico __call.
 * Se o método chamado começar com "log", imprima uma mensagem no formato
 * 
 * "[TIPO]: mensagem"
 * 
 * $logger->logInfo("Tudo certo"); // Output: [INFO]: Tudo certo
 */

echo "<h1>Exercício 04</h1>";

$logger = new Logger();
echo $logger->logInfo("Tudo certo");
