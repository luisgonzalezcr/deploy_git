<?php 
class Productos extends Model
{
  private static $table = 'productos';
  public function allProductost()
  {
    return $productos = Model::all(self::$table);
  }

}