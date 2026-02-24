<?php
namespace App\Controllers;

class StudentController
{

  public function index()
  {

    echo '<h1>Daftar Siswa<h1>';
    echo '<p>Menampilkan daftar Siswa</p>';
  }

  public function create()
  {
    echo '<h1>Daftar Siswa<h1>';
    echo '<p>Menampilkan tambah Siswa</p>';

  }



  public function show(string $id)
  {
    echo '<h1>Detail Siswa</h1>';
    echo "<p>Menampilkan detail siswa 1D: {$id} </h1>";

  }

}



?>