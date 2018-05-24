<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only'=>['index', 'viewOrders']]);
        $this->middleware('role:customer', ['only'=>'viewOrders']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function viewOrders(Request $request)
    {
        $q = $request->get('q');
        $status = $request->get('status');
        $orders = auth()->user()->orders()
        ->where('id', 'LIKE', '%'.$q.'%')
        ->where('status', 'LIKE', '%'.$status.'%')
        ->orderBy('updated_at')
        ->paginate(5);

        return view('customer.view-orders')->with(compact('orders', 'q', 'status'));
    }
    public function index1(){
  // dd('s');
  // $order_details = DB::table("products")->join("order_details","products.id","=","order_details.product_id")->select('SELECT * FROM order_details ORDER BY quantity DESC LIMIT 5')->get();
  $order_details = DB::table("products")->join("order_details","products.id","=","order_details.product_id")->select("products.*","products.id","order_details.*")->orderBy("quantity","DESC")->limit(5)->get();
  // dd($order_details);
  return view('dashboard',
      ['title' => 'Anychart PHP template',
      'chartTitle' => 'Top 5 Order',
      'chartData' => json_encode($order_details),]);
    }
}
