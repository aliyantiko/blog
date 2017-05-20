<?php
    require_once "core/init.php";
    require_once "view/header.php";

    $error = '';
    $id    = $_GET['id'];

    if(isset($_GET['id'])){
      $article = tampilkan_per_id($id);
      while($row = mysqli_fetch_assoc($article)){
          $judul_awal   = $row['judul'];
          $konten_awal  = $row['isi'];
          $tag_awal     = $row['tag'];
      }
    }

    if(isset($_POST['submit'])){
      $judul    = $_POST['judul'];
      $konten   = $_POST['konten'];
      $tag      = $_POST['tag'];

    if(!empty(trim($judul)) && !empty(trim($konten))){
        if(edit_data($judul, $konten, $tag, $id)){
        header('Location: index.php');
      }else{
          $error =  'ada masalah saat update data';
      }
    }else{
      $error =  'judul dan konten wajib diisi';
      }
    }
?>
<form action="" method="post">
  <label for="judul"> judul </label><br>
  <input type="text" name="judul" value="<?=$judul_awal; ?>"> <br><br>

  <label for="konten"> isi </label><br>
  <textarea name="konten" rows="10" cols="50"> <?=$konten_awal; ?> </textarea><br><br>

  <label for="tag"> tag </label><br>
  <input type="text" name="tag" value="<?=$tag_awal; ?>"> <br><br>

  <div id="error"><?=$error ?></div><br>

  <input type="submit" name="submit" value="submit">
</form>
<?php
    require_once "view/footer.php";
?>
