<?php

class Factura{

    private int $id;
    private int $id_usuario;
    private int $id_presupuesto;
    private string $fecha;
    private string $estado;
    private float $total;
    
    public function getUsuario(){
        return User::getUserById($this->id_usuario);
    }
    public function getPresupuerto(){
        return Presupuesto::getPresupuestoById($this->id_presupuesto);
    }
    

    public function get
}