<?php

function tampilkan(){
  global $link;

  $query  = "SELECT * FROM tbblog";
  $result = mysqli_query($link, $query) or die ('gagal menampilkan data');

  return $result;
}
// tambah data
function tambah_data($judul, $konten, $tag){
    $query = "INSERT INTO tbblog (judul, isi, tag) VALUES ('$judul', '$konten', '$tag')";
    return run($query);
}
// funsi run
function run($query){
  global $link;

  if(mysqli_query($link, $query)) return true;
  else return false;
}
?>
