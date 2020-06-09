<?php

namespace App\Controllers;

class Coba extends BaseController
{
  public function index()
  {
    echo "ini controller coba index";
  }

  public function about($nama = '', $umur = 0)
  {
    echo "hallo nama saya $nama";
  }

  //--------------------------------------------------------------------

}
