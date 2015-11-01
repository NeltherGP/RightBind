<?php
  class Oferta extends Modelo{
    public $nombre_tabla = 'Oferta';
    //public $pk = '';

    public $atributos = array('id_alumno'=>array(),'id_proyecto'=>array(),'costo'=>array(),'fecha_entrega'=>array());

    private $id_alumno;
    private $id_proyecto;
    private $costo;
    private $fecha_entrega;

    function Oferta(){
      parent::Modelo;
    }



    public function get_atributos(){
        $rs=array();
        foreach ($this->atributos as $key => $value) {
          $rs[$key]=$this->$key;

        }
        return $rs;
    }

    #id empresa
    public function get_id_alumno(){
      return $this->id_alumno;
    }
    public function set_id_alumno($valor){
      $this->id_alumno=$valor;
    }

    #id proyecto
    public function get_id_proyecto(){
      return $this->id_proyecto;
    }
    public function set_id_proyecto($valor){
      $this->id_proyecto=$valor;
    }

    #costo
    public function get_costo(){
      return $this->costo;
    }
    public function set_costo($valor){
      $this->costo=$valor;
    }

    #fecha_entrega

    public function get_fecha_entrega(){
      return $this->get_fecha_entrega;
    }
    public function set_fecha_entrega($valor){
      $this->fecha_entrega=$valor;
    }






  }
?>
