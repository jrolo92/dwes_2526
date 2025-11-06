<?php
    /*
         Ejercicio 4.1: Definir una clase Calculadora con métodos básicos para sumar, restar, multiplicar y dividir.
                        Con encapsulamiento de propiedades y métodos.
         Autor: Javier Rodríguez
         Fecha: 06/11/25
     */

    class Class_calculadora {
        // Atributos privados:
        private $valor1;
        private $valor2;
        private $operacion;
        private $resultado;

        // Constructor
        public function __construct(
            $valor1 = 0,
            $valor2 = 0,
            $operacion = null,
            $resultado = 0
        ){
            $this->valor1 = $valor1;
            $this->valor2 = $valor2;
            $this->operacion = $operacion;
            $this->resultado = $resultado;
        }

        // Método para sumar:
        public function sumar(){
            $this->resultado = $this->valor1 +$this->valor2;
            return $this->resultado;
        }

        //Metodo para restar:
        public function restar(){
            if($this->valor1 > $this->valor2){
                $this->resultado = $this->valor1 - $this->valor2;
            }
            return $this->resultado;
        }

        // Método para multiplicar:
        public function multiplicar(){
            $this->resultado = $this->valor1 * $this->valor2;
            return $this->resultado;
        }

        // Método para dividir:
        public function dividir(){
            if($this->valor2 != 0){
                $this->resultado = $this->valor1 / $this->valor2;
            } else {
                return "Error: División por cero.";
            }
            return $this->resultado;
        }

        // Métodos getters y setters:
        public function getValor1(){
            return $this->valor1;
        }
        public function setValor1($valor1){
            $this->valor1 = $valor1;
        }
        public function getValor2(){
            return $this->valor2;
        }
        public function setValor2($valor2){
            $this->valor2 = $valor2;
        }
        public function getOperacion(){
            return $this->operacion;
        }
        public function setOperacion($operacion){
            $this->operacion = $operacion;
        }
        public function getResultado(){
            return $this->resultado;
        }
        public function setResultado($resultado){
            $this->resultado = $resultado;
        }
    }
?>