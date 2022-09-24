<?php
class HomeController extends BaseController
{
  static function index()
  {


    View::render('home/index', [
      'title' => 'Academia de Aprendizaje Gonzalez, La forma facil de aprender',
    ]);
  }
 
}
