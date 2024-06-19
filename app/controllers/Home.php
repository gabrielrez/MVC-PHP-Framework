<?php

class Home extends Controller
{
  public function index($a = '', $b = '', $c = '')
  {
    // $model = new Model;
    // $model->test();
    $this->view('home');
  }
}
