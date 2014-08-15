<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Products::all();

		return View::make('list_products')->with('products',$products);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        
		$directory ="C:\Users\NEHO8\byteindie\public\assets\img"; 

		$files = File::allFiles($directory);

		//$extension = File::extension("C:\Users\NEHO8\byteindie\public\assets\img\google.png");
		
		//print_r($extension);

		return View::make('form_products')->with('files',$files);

		//return View::make('form_products');


	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	$user = new Products;
	$data = Input::all();
	$user-> fill($data);
	$user-> save();
	return Redirect::action('ProductsController@index');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = Products::find($id);
	
		return View::make('show',array('user'=>$user));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$products = Products::find($id);

		return View::make('edit')->with('products',$products);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{   

		$user = Products::find($id);
	$data = Input::all();
	$user-> fill($data);
	$user-> save();

	return Redirect::action('ProductsController@index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
       
		$products = Products::find($id);
		 $products->delete();

	return Redirect::action('ProductsController@index');

	}


}
