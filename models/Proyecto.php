<?php
class Proyecto extends Modelo{
   public $nombre_tabla = 'Proyecto';
   public $pk ='id_proyecto';

   public $atributos = array('id_proyecto'=>array(),'id_empresa'=>array(),'descripcion'=>array(),'fecha_entrega'=>array(),'fecha_publicacion'=>array(),'presupuesto'=>array(),'id_alumno'=>array());

   private $id_proyecto;
   private $id_empresa;
   private $descripcion;
   private $fecha_entrega;
   private $fecha_publicacion;
   private $presupuesto;
   private $id_alumno;

  function Proyecto (){
    parent::Modelo;
  }

  #id Proyecto
  public function get_id_proyecto(){
    return $this->id_proyecto;
  }
  public function set_id_proyecto($valor){
    $this->id_proyecto=$valor;
  }

  #id Empresa
  public function get_id_empresa(){
    return $this->id_empresa;
  }
  public function set_id_empresa($valor){
    $this->id_empresa=$valor;
  }

  #descripcion
  public function get_descripcion (){
    return $this->descripcion;
  }
  public function set_descripcion($valor){
    $this->descripcion=$valor;
  }
  #fecha entrega
  public function get_fecha_entrega(){
    return $this->fecha_entrega;
  }
  public function set_fecha_entrega(){
    $this->fecha_entrega;
  }
  #fecha publicacion
  public function get_fecha_publicacion(){
    return $this->fecha_entrega;
  }
  public function set_fecha_publicacion($valor){
    $this->fecha_entrega=$valor;
  }

  public function get_presupuesto (){
    return $this->presupuesto;
  }
  public function set_presupuesto($valor){
    $this->presupuesto=$valor;
  }

  public function get_id_alumno(){
    return $this->id_alumno;
  }
  public function set_id_alumno($valor){
    $this->id_alumno=$valor;
  }


}

 ?>

//atributos=array('id_proyecto'=>array(),'id_empresa'=>array(),'descripcion'=>array(),'fecha_entrega'=>array(),'fecha_publicacion'=>array(),'presupuesto'=>array());
