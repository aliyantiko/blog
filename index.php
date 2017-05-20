<?php
    require_once "core/init.php";
    require_once "view/header.php";

    $articles = tampilkan();

    if(isset($_GET['cari'])){
      $cari     = $_GET['cari'];
      $articles = hasil_cari($cari);
    }
?>

<form action="" method="get">
  <input type="search" name="cari" placeholder="masukan kata kunci">
</form>

<?php while($row = mysqli_fetch_assoc($articles)):?>
  <div class="each_article">
    <h3><a href="single.php?id=<?= $row['id']; ?>"><?= $row['judul']; ?></a></h3>
    <p>
      <?= excerpt($row['isi']); ?>
    </p>

    <p class="waktu"> <?= $row['waktu']; ?> </p>
    <p class="tag"> Tag:<?= $row['tag']; ?> </p>
    <a href="edit.php?id=<?= $row['id']; ?>"> Edit </a>
    <a href="delete.php?id=<?= $row['id']; ?>"> Hapus </a>
  </div>
<?php endwhile; ?>
<?php
    require_once "view/footer.php";
?>
