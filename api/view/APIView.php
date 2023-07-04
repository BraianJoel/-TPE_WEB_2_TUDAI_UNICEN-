<?php

    class APIView {

        public function response($data, $status) {
                    header("Content-Type: application/json");
                    header("HTTP/1.1 {$status} " . $this->_requestStatus($status));
                    echo json_encode($data);


        }

        private function _requestStatus($code) {

            $status = array(
                200 => "Solicitud OK",
                201 => "Creado con exito",
                400 => "El servidor no puede procesar la petición, error del cliente",
                404 => "No se encuentra el recurso solicitado",
                500 => "Internal Server Error"
            );
            return (isset($status[$code]))? $status[$code] : $status[500];
        
        }
    }

?>

