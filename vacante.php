<?php

class vacante {
 private $codigo;
 private $nombre;
 private $tiempo;
 private $fecha;
 private $salario;

  public function setCodigo($codigo) {
  $this->codigo = $codigo;
  }
  public function getCodigo() {
    return $this->codigo;
  }

  public function setNombre($nombre) {
  $this->nombre = $nombre;
  }
  public function getNombre() {
    return $this->nombre;
  }

  public function setTiempo($tiempo) {
  $this->tiempo = $tiempo;
  }
  public function getTiempo() {
    return $this->tiempo;
  }

  public function setFecha($fecha) {
  $this->fecha = $fecha;
  }
  public function getFecha() {
    return $this->fecha;
  }

  public function setSalario($salario) {
  $this->salario = $salario;
  }
  public function getSalario() {
    return $this->salario;
  }
}

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $tiempo = $_POST['tiempo'];
    $fecha = $_POST['fecha'];
    $salario = $_POST['salario'];

    $objetoVacante = new vacante();

    $objetoVacante->setCodigo($codigo);
    $objetoVacante->setNombre($nombre);
    $objetoVacante->setTiempo($tiempo);
    $objetoVacante->setFecha($fecha);
    $objetoVacante->setSalario($salario);

      echo "<br/><br/>";
      echo "<hr><h2>Datos del postulante: </h2><br/>";
      echo "<hr>Codigo: " . $objetoVacante->getCodigo() . "<br/>";
      echo "<hr>Nombre: " . $objetoVacante->getNombre() . "<br/>";
      echo "<hr>Tiempo: " . $objetoVacante->getTiempo() . "<br/>";
      echo "<hr>Fecha: " . $objetoVacante->getFecha() . "<br/>";
      echo "<hr>Salario: " . $objetoVacante->getSalario() . "<br/><br/>";

      echo "<hr><a href='semana5form.html'> Regresar al formulario de postulacion</a>";


 ?>
