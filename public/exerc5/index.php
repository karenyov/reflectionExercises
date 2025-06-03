<?php

require_once __DIR__ . '/User.php';

/**
 * Exercício 5: Analisador de Métodos com Annotations Simples
 * Crie uma classe com comentários de documentação em métodos no estilo:
 * 
 * /
 * @endpoint /api/user
 * @method GET
 * public function getUser() {}
 * 
 * Crie um script que:
 * 
 * Use Reflection para ler os métodos de uma classe.
 * Extraia os comentários (getDocComment).
 * Analise os valores de @endpoint e @method com regex.
 * 
 */

echo "<h1>Exercício 05</h1>";

$user = new ReflectionClass('User');
$metodos = $user->getMethods();

foreach ($metodos as $metodo) {
    $docComment = $metodo->getDocComment();
    
    if ($docComment) {
        preg_match('/@endpoint\s+([^\s]+)/', $docComment, $endpointMatches);
        preg_match('/@method\s+([^\s]+)/', $docComment, $methodMatches);
        
        $endpoint = $endpointMatches[1] ?? 'N/A';
        $method = $methodMatches[1] ?? 'N/A';
        
        echo "Método: " . $metodo->getName() . "<br>";
        echo "Endpoint: " . $endpoint . "<br>";
        echo "Method: " . $method . "<br><br>";
    }
}