<?php

    require "Utils/autoload.php";

    class PersonaModelo extends Connect{
        public $Id;
        public $Nombre;
        public $Apellido;
        public $Telefono;
        public $Email;

        public function __construct($id=""){
            parent::__construct();
            if($id != ""){
                $this -> Id = $id;
                $this -> ListarUno();
            }
        }

        public function Alta(){
            $sql = "INSERT INTO persona (nombre,apellido,telefono,email) VALUES
            '" . $this -> Nombre . "',
            '" . $this -> Apellido . "',
            " . $this -> Telefono . ",
            '" . $this -> Email . "');";
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function Baja(){
            $sql = "DELETE FROM persona WHERE id = " . $this -> Id;
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function Modificar(){
            $sql = "UPDATE persona  SET 
            nombre = '" . $this -> Nombre . "',
            apellido = '" . $this -> Apellido . "',
            telefono = " . $this -> Telefono . ",
            email '" . $this -> Email . "');";
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function ListarUno(){
            $sql = "SELECT * FROM persona WHERE id_persona = " . $this -> Id;
            $fila = $this -> conexionBaseDeDatos -> query($sql);

            $this -> Id = $fila['id'];
            $this -> Nombre = $fila['nombre'];
            $this -> Apellido = $fila['apellido'];
            $this -> Telefono = $fila['telefono'];
            $this -> Email = $fila['email'];
        }

        public function ListarTodos(){
            $sql = "SELECT * FROM persona;";
            $filas = $this -> conexionBaseDeDatos -> query($sql);

            $resultado = array();
            foreach($filas as $fila){
                $p = new PersonaModelo();
                $p -> Id = $fila['id'];
                $p -> Nombre = $fila['nombre'];
                $p -> Apellido = $fila['apellido'];
                $p -> Telefono = $fila['telefono'];
                $p -> Email = $fila['email'];
                array_push($resultado,$p);
            }
            return $resultado;
        }
    }