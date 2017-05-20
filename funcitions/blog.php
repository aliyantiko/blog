<?php

function tampilkan(){
  $query  = "SELECT * FROM tbblog";
  return result($query);
}
// menampilkan per id
function tampilkan_per_id($id){
  $query  = "SELECT * FROM tbblog WHERE id=$id";
  return result($query);
}
//hasil cari
function hasil_cari($cari){
  $query  = "SELECT * FROM tbblog WHERE judul LIKE '%$cari%'";
  return result($query);
}

function result($query){
  global $link;
  if($result = mysqli_query($link, $query) or die ('gagal menampilkan data')){
    return $result;
  }
}
// tambah data
function tambah_data($judul, $konten, $tag){
    $query = "INSERT INTO tbblog (judul, isi, tag) VALUES ('$judul', '$konten', '$tag')";
    return run($query);
}
// edit data
function edit_data($judul, $konten, $tag, $id){
  $query = "UPDATE tbblog SET judul='$judul', isi='$konten', tag='$tag' WHERE id=$id";
  return run($query);
}
//hapus data
function hapus_data($id){
  $query = "DELETE FROM tbblog WHERE id=$id";
  return run($query);
}

// funsi run
function run($query){
  global $link;

  if(mysqli_query($link, $query)) return true;
  else return false;
}

function excerpt($string){
  $string = substr($string, 0, 10);
  return $string . "...lanjutkan membaca";
}
?>
