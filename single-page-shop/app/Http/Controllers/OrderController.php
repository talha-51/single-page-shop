<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $orders = DB::table('orders')->paginate(2);
        $orders = DB::table('orders')->get();
        return view('order.orderList')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('orders')->insert(
            [
                'product_id' => $request->id,
                'product_name' => $request->product_name,
                'added_by'=>''
            ]);

        return redirect()->back()->with('success', 'Order Completed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('orders')->where('id', $id)->update([
            'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'added_by' => $request->added_by,
        ]);

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('orders')->where('id', $id)->delete();
        return redirect()->route('order.index');
    }
}
