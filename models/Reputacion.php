<?php
  class Reconocimiento_proyecto extends Modelo{
    public $nombre_tabla = 'reconocimiento_proyecto';
    //public $pk = 'id_reconocimiento_proyecto';

    public $atributos = array('id_empresa'=>array(),
    													'id_alumno'=>array(),'
    													id_proyecto'=>array(),'
    													comentario_alumno'=>array(),
    													'cal_empresa'=>array(),
    													'cal_alumno'=>array());

    private $id_empresa;
    private $id_alumno;
    private $id_proyecto;
    private $comentario_alumno;
    private $cal_empresa;
    private $comentario_alumno;


    function Reconocimiento_proyecto (){
      parent::Modelo;
    }

    #id_carrera
    public function get_id_empresa(){
      return $this->id_empresa;
    }

    public function set_id_empresa($valor){
      $this->id_empresa=$valor;
    }

    #nombre

    public function get_id_alumno(){
      return $this->id_alumno();
    }

    public function set_id_alumno($valor){
      $this->id_alumno=$valor;
    }

    #nombre

    public function get_id_proyecto(){
      return $this->id_proyecto();
    }

    public function set_id_proyecto($valor){
      $this->id_proyecto=$valor;
    }

    #nombre

    public function get_comentario_alumno(){
      return $this->comentario_alumno();
    }

    public function set_comentario_alumno($valor){
      $this->comentario_alumno=$valor;
    }

    #nombre

    public function get_cal_empresa(){
      return $this->cal_empresa();
    }

    public function set_cal_empresa($valor){
      $this->cal_empresa=$valor;
    }

    #nombre

    public function get_comentario_alumno(){
      return $this->comentario_alumno();
    }

    public function set_comentario_alumno($valor){
      $this->comentario_alumno=$valor;
    }
  }
 ?>