<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lihat Nilai</title>
  </head>
    <?php

    echo $message;
    foreach ($nilai as $key => $value) {
      # code...
      echo "Nim :".$value['nim'].", Nama : ".$value['nama'].", Fisika : ".$value['fisika'].", Kimia : ".$value['kimia'];
      echo "<br>";
    }
    ?>
