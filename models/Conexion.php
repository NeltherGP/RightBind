<?php

  class Conexion  {
    function Conexion(){
        $this->db = ADONewConnection('posgres');
        $this->db->debug = false;
        $this->db->Connect('10.24.172.236','postgres','test','hackbajio');
    }

  }

?>
