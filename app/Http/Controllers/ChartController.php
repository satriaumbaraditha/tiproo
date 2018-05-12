<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Chart;

class ChartController extends Controller
{
  public function chart(){
    $result = \DB::table('order_details')
            ->where('product_id','=','1')
            ->orderBy('quantity', '1')
            ->get();
            return response()->json($result);
  }
}
