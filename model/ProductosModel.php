<?php 

    require_once('../core/conexion.php');

    class ProductosModel extends conexion
    {
        protected function get_listadoProductos() {
            $query = "SELECT * FROM productos";
            $resultado = $this->select($query);
            return $resultado;
        }

        protected function get_producto($id){
            $query = "SELECT * FROM productos WHERE id_producto = " . $id;
            $resultado = $this->selectOne($query);
            return $resultado;
        }
    }
    