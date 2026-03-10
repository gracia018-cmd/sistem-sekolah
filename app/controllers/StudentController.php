<?php
namespace App\Controllers;

class StudentController
{

  public function index()
  {

     Require_once "../app/views/students/index.php";
  }

  public function create()
  {
   Require_once "../app/views/students/create.php";

  }



  public function show(string $id)
  {
   Require_once "../app/views/students/show.php";

  }

}



?>