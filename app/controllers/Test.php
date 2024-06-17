<?php

class Test extends Controller
{
  public function index($a = '', $b = '', $c = '')
  {
    $this->view('test');
  }
}
