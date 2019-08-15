<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrdersInfo;
use App\Product;
use DB;

class DashboardController extends Controller
{
  public function dashboard()
  {

    $all_orders_count = OrdersInfo::all()->count();
    $new_orders_count = OrdersInfo::whereStatus('new')->count();

    $all_product_count = Product::all()->count();
    // dd($all_product_count);

    $categories = DB::table("products")
      ->select(DB::raw("COUNT(*) as count_row"), 'category')
      ->groupBy(DB::raw('category'))
      ->get();

    // dd($categories);

    $data = [
      'all_orders_count' => $all_orders_count,
      'new_orders_count' => $new_orders_count,
      'all_product_count' => $all_product_count,
      'categories' => $categories

    ];

    return view('dashboard.dashboard', compact('data'));
  }
}
