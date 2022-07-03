<?php
  $servidor = "localhost";
  $usuario = "robotic3_tics";
  $password = "tics2020";
 
  try {
        $conexion = new PDO("mysql:host=$servidor;dbname=robotic3_masfletes", $usuario, $password);      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión realizada Satisfactoriamente";
      }
 
  catch(PDOException $e)
      {
      echo "La conexión ha fallado: " . $e->getMessage();
      }
 
  $conexion = null;