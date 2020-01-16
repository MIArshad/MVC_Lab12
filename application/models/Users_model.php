<?php

class Users_model extends CI_model{

  public function getHeaderName(){
    $headerName = 'Welcome to lab 12';

    return $headerName;
  }

  public function getNames()
  {
    $firstnames = array('John', 'Louis', 'Louie', 'Luis');

    return $firstnames;
  }
}
?>
