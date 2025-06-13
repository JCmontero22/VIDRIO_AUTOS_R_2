<?php 

    require_once('../model/ProductosModel.php');

    class productosController extends ProductosModel
    {

        public function listadoProductos() {

            $respuesta = [];
            try {
                $resultadoProductos = $this->get_listadoProductos();

                for ($i=0; $i < count($resultadoProductos); $i++) { 
                    $data[] = [
                        'id' => $resultadoProductos[$i]['id_producto'],
                        'nombre' => $resultadoProductos[$i]['nombre_producto'],
                        'descripcion' => $resultadoProductos[$i]['descripcion_producto'],
                        'marca' => $resultadoProductos[$i]['marca_producto'],
                        'precio' => $resultadoProductos[$i]['precio_producto'],
                        'modelo' => $resultadoProductos[$i]['modelo_producto'],
                        'estado' => $resultadoProductos[$i]['estado_producto'],
                        'cantidad' => $resultadoProductos[$i]['cantidad_producto'],
                        'imagen' => $resultadoProductos[$i]['imagen_producto'],
                    ];
                }

                $respuesta['status'] = 200;
                $respuesta['mensaje'] = 'Consulta realiza con extito';
                $respuesta['data'] = $data;
                
            } catch (\Exception $e) {
                $respuesta['status'] = 500;
                $respuesta['mensaje'] = 'Error en la consulta';
                $respuesta['data'] = [];
            }

            return $respuesta;
        }

        public function producto($id) {
            $respuesta = [];

            try {
                $resultado = $this->get_producto($id);
                $respuesta['status'] = 200;
                $respuesta['mensaje'] = 'Consulta realiza con extito';
                $respuesta['data'] = $resultado;

            } catch (\Exception $e) {
                $respuesta['status'] = 500;
                $respuesta['mensaje'] = 'Error en la consulta';
                $respuesta['data'] = [];
            }

            return $respuesta;
        }
    }
    