<?php

     $palabra = $_GET['palabra']; //Obtiene la cadena a encriptar

     echo "$palabra<br/>"; //Muestra la palabra escrita

     for ($i=0; $i < strlen($palabra); $i++) {
          if($palabra[$i] != ' '){
               if (chr(ord($palabra[$i])+13)<="z") {
                    $palabra[$i]=chr(ord($palabra[$i])+13);
               }

               else {
                    $palabra[$i]=chr(ord($palabra[$i])+13-26);
               }
          }

     }

      echo "$palabra"; //muestra la palabra procesada
?>