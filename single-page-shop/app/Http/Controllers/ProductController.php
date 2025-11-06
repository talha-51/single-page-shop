<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // $products = DB::table('products')->paginate(5);
        $products = DB::table('products')->get();

        return view('product.productList')->with('products', $products);
    }

    public function home()
    {
        $products = DB::table('products')->get();

        return view('home')->with('products', $products);
    }

    public function addProduct()
    {
        return view('product.addProduct');
    }

    public function insertProduct(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 2MB max
            'amount' => 'required|numeric|between:0.01,999.99'
        ]);

        $path = 'images/';
        $imageName = time() . '-1' . '.' . $request->image->getClientOriginalExtension();

        DB::table('products')->insert([
            'product_name' => $request->product_name,
            'amount' => $request->amount,
            'image' => $path . $imageName,
            'status' => $request->status,
            'published_status' => $request->published_status,
        ]);

        $request->image->move($path, $imageName);

        return redirect()->route('product.index');
    }

    public function editProduct($id)
    {
        $product = DB::table('products')->where('id',$id)->first();

        return view('product.editProduct')->with('product',$product);
    }

    public function updateProduct(Request $request ,$id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 2MB max
            'amount' => 'required|numeric|between:0.01,999.99'
        ]);

        $path = 'images/';
        $imageName = time() . '-1' . '.' . $request->image->getClientOriginalExtension();

        DB::table('products')->where('id', $id)->update([
            'product_name' => $request->product_name,
            'amount' => $request->amount,
            'image' => $path . $imageName,
            'status' => $request->status,
            'published_status' => $request->published_status,
        ]);

        $request->image->move($path, $imageName);

        return redirect()->route('product.index');
    }

    public function deleteProduct($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('product.index');
    }
}
