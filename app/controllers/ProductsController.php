<?php

class ProductsController extends BaseController
{
	
	public static function index()
	{
		$postModel = new Productos;
		$productos = $postModel->allProductost();

		return View::render('productos/index', [
			'title' => 'Productos',
			'posts' => $productos
		]);
	}

	public static function show($name)
	{
		return '<h1>Detalles del producto: ' . $name . '</h1>';
	}
}
