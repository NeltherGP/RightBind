<?php
class Alumno extends Modelo{
  public $nombre_tabla = 'alumno';
  public $pk = 'id_alumno';

  public $atributos= array('id_alumno' =>array() ,
  'nombre'=>array(),'id_carrera'=>array(),'terminos_condiciones'=>array(),'telefono'=>array(),'ap_paterno'=>array(),'ap_materno'=>array());

  private $id_alumno;
  private $nombre;
  private $ap_paterno;
  private $ap_materno;
  private $id_carrera;
  private $telefono;
  private $terminos_condiciones;

  function Alumno(){
    parent::Modelo();
  }

  public function get_atributos(){
      $rs=array();
      foreach ($this->atributos as $key => $value) {
        $rs[$key]=$this->$key;

      }
      return $rs;
    }

     

    #nombre
    public function get_Nombre(){
      return $this->nombre;
    }

    public function set_Nombre($valor){
      $this->nombre=$valor;
    }

    #ap_paterno
    public function get_ap_paterno(){
      return $this->ap_paterno;
    }

    public function set_ap_paterno($valor){
      $this->ap_paterno=$valor;
    }

    #ap_materno
    public function get_ap_materno(){
      return $this->ap_materno;
    }

    public function set_ap_materno($valor){
      $this->ap_materno=$valor;
    }

    #telefono
    public function get_telefono(){
      return $this->ap_materno;
    }

    public function set_telefono($valor){
      $this->telefono=$valor;
    }

    #terminos_condiciones

    public function get_terminos_condiciones(){
      return $this->terminos_condiciones;
    }

    public function set_terminos_condiciones($valor){
      $this->terminos_condiciones=$valor;
    }




}

?>
<?php
class Alumno extends molelo{
  public $nombre_tabla = 'alumno';
  public $pk = 'id';

  public $atributos= array('id_alumno' =>array() ,
  'nombre'=>array(),'id_carrera'=>array(),'terminos_condiciones'=>array(),'telefono'=>array(),'ap_paterno'=>array(),'ap_materno'=>array());

  private $id_alumno;
  private $nombre;
  private $ap_paterno;
  private $ap_materno;
  private $id_carrera;
  private $telefono;
  private $terminos_condiciones;

  function Alumno(){
    parent::Modelo();
  }

  public function get_atributos(){
      $rs=array();
      foreach ($this->atributos as $key => $value) {
        $rs[$key]=$this->$key;

      }
      return $rs;
    }

    #id Alumno
    public function get_id(){
      return $this->id_alumno;
    }

    public function set_id($valor){
      $this->id_alumno=$valor;
    }

    #nombre
    public function get_Nombre(){
      return $this->nombre;
    }

    public function set_Nombre($valor){
      $this->nombre=$valor;
    }

    #ap_paterno
    public function get_ap_paterno(){
      return $this->ap_paterno;
    }

    public function set_ap_paterno($valor){
      $this->ap_paterno=$valor;
    }

    #ap_materno
    public function get_ap_materno(){
      return $this->ap_materno;
    }

    public function set_ap_materno($valor){
      $this->ap_materno=$valor;
    }

    #telefono
    public function get_telefono(){
      return $this->ap_materno;
    }

    public function set_telefono($valor){
      $this->telefono=$valor;
    }

    #terminos_condiciones

    public function get_terminos_condiciones(){
      return $this->terminos_condiciones;
    }

    public function set_terminos_condiciones($valor){
      $this->terminos_condiciones=$valor;
    }




}

?>
