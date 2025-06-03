<?php

require_once __DIR__ . '/Produto.php';

/**
 * Exercício 6: Validador com atributos (PHP 8+)
 * 
 * Utilize attributes (anotações via #[...]) para marcar propriedades como obrigatórias.
 * 
 * class Produto {
 *  #[Required]
 *   public string $nome;
 *
 *    public float $preco;
 *}
 * 
 * Crie um validador que use ReflectionProperty para verificar se todas as propriedades com o atributo Required foram definidas.
 */

function validarObjeto(object $obj): bool {
    $refClass = new ReflectionClass($obj);

    foreach ($refClass->getProperties() as $prop) {
        $attrs = $prop->getAttributes(Required::class);
        if (!empty($attrs)) {
            $prop->setAccessible(true);
            
            if (!$prop->isInitialized($obj)) {
                throw new Exception("Propriedade obrigatória '{$prop->getName()}' não foi inicializada.");
            }

            $valor = $prop->getValue($obj);
            if ($valor === null) {
                throw new Exception("Propriedade obrigatória '{$prop->getName()}' está nula.");
            }
        }
    }
    return true;
}

try {
    $p = new Produto();
    $p->preco = 10.0;
    validarObjeto($p);
} catch (Exception $e) {
    echo $e->getMessage();
}