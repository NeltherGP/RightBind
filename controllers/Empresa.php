<?php
  class Empresa extends Modelo{
    public $nombre_tabla = 'empresa';
    public $pk = 'id_empresa';

    public $atributos= array('id_empresa' =>array() ,'nombre'=>array(),'id_razon_social'=>array(),'terminos_condiciones'=>array(),'telefono'=>array(),'encargado'=>array(),'pagado'=>array(),'rfc'=>array(),'correo'=>array(),'desc_empresa'=>array());

    private $id_empresa;
    private $nombre;
    private $rfc;
    private $id_razon_social;
    private $correo;
    private $encargado;
    private $desc_empresa;
    private $terminos_condiciones;
    private $pagado;

    function Empresa(){
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
      public function get_id(){
        return $this->id_empresa;
      }

      public function set_id($valor){
        $this->id_empresa=$valor;
      }
      #nombre
      public function get_nombre(){
        return $this->nombre;
      }

      public function set_nombre($valor){
        $this->nombre=$valor;
      }
      #rfc
      public function get_rfc(){
        return $this->rfc;
      }

      public function set_rfc($valor){
        $this->rfc=$valor;
      }

      #razon social
      public function get_razon_social(){
        return $this->id_razon_social;
      }

      public function set_razon_social($valor){
        $this->id_razon_social=$valor;
      }

      #correo
      public function correo(){
        return $this->id_razon_social;
      }

      public function set_correo($valor){
        $this->correo=$valor;
      }

      #telefono
      public function get_telefono(){
        return $this->telefono;
      }

      public function set_telefono($valor){
        $this->telefono=$valor;
      }

      #encargado
      public function get_encargado(){
        return $this->encargado;
      }

      public function set_encargado($valor){
        $this->encargado=$valor;
      }

      #desc_empresa
      public function get_desc_empresa(){
        return $this->desc_empresa;
      }

      public function set_desc_empresa($valor){
        $this->desc_empresa=$valor;
      }

      #terminos_condiciones
      public function get_terminos_condiciones(){
        return $this->id_razon_social;
      }

      public function set_terminos_condiciones($valor){
        $this->id_razon_social=$valor;
      }

      #pagado
      public function get_pagado(){
        return $this->pagado;
      }

      public function set_pagado($valor){
        $this->pagado=$valor;
      }





  }
 ?>
