<?php
  class Carrera extends Modelo{
    public $nombre_tabla = 'carrera';
    public $pk = 'id_carrera';

    public $atributos = array('id_carrera'=>array(),'nombre'=>array());

    private $id_carrera;
    private $nombre;


    function Carrera (){
      parent::Modelo;
    }

    #id_carrera
    public function get_id(){
      return $this->id_carrera;
    }

    public function set_id($valor){
      $this->id_carrera=$valor;
    }

    #nombre

    public function get_nombre(){
      return $this->nombre();
    }

    public function set_nombre(){
      $this->nombre=$valor;
    }






  }
 ?>
