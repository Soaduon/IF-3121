<form method="POST" action="<?=base_url()?>index.php/CRUD/procDel">
<legend><b><big>Delete Nilai</big></b></legend>
    <?php
      foreach ($data as $key => $value) {
        # code...
        echo "<input type='text' name='nim' required size='25' placeholder='Nim' value='".$value['nim']."' >";
        echo "<input type='text' name='nama' required size='25' placeholder='Nama' value='".$value['nama']."' readonly>";
        echo "<input type='text' name='nilai' required size='25' placeholder='Nilai' value='".$value['nilai']."' readonly>";
        echo "<input type='submit' value='Delete' name='Delete'><br>";
      }
     ?>
</form>
