<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmController extends Controller
{
  /**
  * Show the form for creating a new product.
  *
  * @return \Illuminate\Http\Response
  */
      public function confirm(Request $request)
          {
     return view('products.confirm');
   }

   /**
    * Store a newly created order in database.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {

       $validatedData = $request->validate([
           'name' => 'required|unique:products',
           'address' => 'required',
           'email' => 'required',
           'phone' => 'required|numeric',
           'comment' => '',
       ]);

       Confirm::create($request->all());

       return redirect('/productsList');

   }
}
