<?php
  class RazonSocial extends Modelo{
    public $nombre_tabla = 'RazonSocial';
    public $pk ='id_razon_social';

    public $atributos = array('id_proyecto'=>array(),'id_empresa'=>array(),'descripcion'=>array(),'fecha_entrega'=>array(),'fecha_publicacion'=>array(),'presupuesto'=>array(),'id_alumno'=>array());

    private $id_proyecto;
    private $id_empresa;
    private $descripcion;
    private $fecha_entrega;
    private $fecha_publicacion;
    private $presupuesto;
    private $id_alumno;


    function RazonSocial(){
      parent::Modelo;
    }

    public function get_id_proyecto(){
      return $this->id_proyecto;
    }
    public function set_id_proyecto($valor){
      $this->id_proyecto=$valor;
    }

    public function get_id_empresa(){
      return $this->id_empresa;
    }
    public function set_id_empresa($valor){
      $this->id_empresa=$valor;
    }
    public function get_descripcion(){
      return $this->descripcion;
    }
    public function set_descripcion($valor){
      $this->Proyecto=$valor;
    }
    public function get_fecha_entrega(){
      return $this->id_proyecto;
    }
    public function set_fecha_entrega($valor){
      $this->fecha_entrega=$valor;
    }
    public function get_fecha_publicacion(){
      return $this->id_proyecto;
    }
    public function set_fecha_publicacion($valor){
      $this->fecha_publicacion=$valor;
    }





  }
 ?>
