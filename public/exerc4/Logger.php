<?php

class Logger {

  public function __call($name, $arguments) {
    if (strpos($name, 'log') === 0) {
      $tipo = strtoupper(substr($name, 3));
      $mensagem = $arguments[0] ?? '';
      echo "[$tipo]: $mensagem\n";
    } else {
      throw new BadMethodCallException("Método '$name' não existe.");
    }
  }

}