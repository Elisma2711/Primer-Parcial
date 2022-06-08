<?php

    require "Utils/autoload.php";

    class CompraModelo{
        public $Id_Persona;
        public $Id_Producto;
        public $Fecha_Hora;

        public function Alta(){
            $sql = "INSERT INTO compra (id_persona,id_producto,fecha_hora) VALUES
            '" . $this -> Id_Persona . "',
            '" . $this -> Id_Producto . "',
            " . $this -> Fecha_Hora . ");";
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function Baja(){
            $sql = "DELETE FROM compra WHERE id_persona = " . $this -> Id_Persona . " & id_producto =  " . $this -> Id_Producto . ";";
            $this -> conexionBaseDeDatos -> query($sql);
        }

        // public function Modificar(){
        //     $sql = "UPDATE compra  SET 
        //     nombre = '" . $this -> Nombre . "',
        //     descripcion = '" . $this -> Descripcion . "',
        //     stock = " . $this -> Stock . "
        //     WHERE id = " . $this -> Id;
        // }

        public function ListarUno(){
            $sql = "SELECT * FROM compra WHERE id_producto = " . $this -> Id_Producto . " & id_persona = " . $this -> Id_Persona . ";";
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function ListarTodos(){
            $sql = "SELECT * FROM compra";
            $this -> conexionBaseDeDatos -> query($sql);
        }
    }