<?php
class Motumbo {
  private $tabela;
  private $conObj;
  private $dbg;

  function __construct($tabela, $conObj,$dbg) {
    $this->dbg = $dbg;
    $this->tabela = $tabela;
    $this->conObj = $conObj;
  }

  function select($campos, $condicoes, $sl) {

    $query = "SELECT ";
    for($i = 0; $i < sizeof($campos); $i++) {
      
      $query = $query.$campos[$i];

      if ($i != (sizeof($campos) -1)) {
        $query = $query. ",";
      }
    }
   $query = $query . " from $this->tabela";

    $i = 0;
    $tamanhoDaCoisa = sizeof($condicoes);

    if(sizeof($condicoes) > 0) { 
    $query = $query." where ";
    }

    if(isset($condicoes)) {
    foreach($condicoes as $chave => $valor) {
      $i++;
      $query = $query.$chave." = ".$valor;
        if($i < $tamanhoDaCoisa) {
            $query = $query." AND ";
        }
          
    }
    }

    if(isset($sl)) {
      $query = $query." limit ".$sl["skip"]. ",".$sl["limit"];
    }

    if($this->dbg) {
      echo $query;
    }
    return $this->conObj->query($query);

  }

  function insert($campos) {

    $query = "Insert Into $this->tabela (";
    $tamanhoDoNogocio = sizeof($campos);
    $i = 0;
    foreach ($campos as $chave => $valor) {
      $i++;

      if($i < $tamanhoDoNogocio) {
        $query = $query.$chave.",";
      } else {
        $query = $query.$chave.")";
      }

    }

    $query = $query. " Values (";
    $i = 0;

    foreach($campos as $chave =>$valor) {
       $i++;
      if(sizeof($valor) > 0) {
        if($i < $tamanhoDoNogocio) {
            $query = $query."'".$valor."',";
        } else {
          $query = $query."'".$valor."')";
        }
      }

    }

    if($this->dbg) {
      echo $query;
    }

    return $this->conObj->query($query);

  }

  function update($campos, $condicoes) {

    $query = "Update $this->tabela Set ";
    $i = 0;

    foreach($campos as $chave => $valor) {
      $i++;
      if ($i < sizeof($campos)) {
        $query = $query . $chave."="."'".$valor."',";
      }
      else {
        $query = $query.$chave."="."'".$valor."'";
      }
    }
    $i = 0;
    $query = $query." Where ";
    foreach($condicoes as $chave => $valor) {
      $i++;
      if ($i < sizeof($condicoes)) {
        $query = $query . $chave ."=". valor.",";
      } else {
        $query = $query . $chave ."=". $valor;
      }
    }

    if($this->dbg) {
      echo $query;
    }

    return $this->conObj->query($query);

  }

  function count(){
    $query = "select count(*) from $this->tabela";
    return $this->conObj->query($query)->fetch_array()[0];
  }

} ?>
