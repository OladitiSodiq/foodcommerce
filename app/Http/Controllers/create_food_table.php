<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\food;
use Session;
use App\Review;

class create_food_table extends Controller
{
  public function addProduct(Request $req)
  {
    $this->validate($req, [
      'category' => 'required',
      'title' => 'required',
      'discounted_price' => 'required',
      'full_price' => 'required',
      'short_desc' => 'required',
      'full_desc' => 'required',
      'quantity' => 'required',
      'file' => 'required'

    ]);

    $uploadedFile = $req->file('file');
    $extension = $uploadedFile->getClientOriginalExtension();
    $filename  = 'antique-' . time() . '.' . $extension;
    $path = $uploadedFile->storeAs('public/uploads/antique', $filename);

    $product = new Product;
    $product->category = $req->category;
    $product->title = $req->title;
    $product->discounted_price = $req->discounted_price;
    $product->full_price = $req->full_price;
    $product->short_desc = $req->short_desc;
    $product->full_desc = $req->full_desc;
    $product->quantity = $req->quantity;
    $product->image = $filename;
    $product->views = 0;



    if ($product->save()) {
      Session::flash('flash', 'Antique has been added successfully');
      return redirect()->back();
    }
  }
}
