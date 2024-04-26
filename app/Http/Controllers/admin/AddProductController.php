<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Size;
use App\Models\Product;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $product = Product::IDGenerator(new Product, 'products_code', 2, 'CRMBY');
        $product = rand(1,2000);
        $code = "samples";
        $size = Size::all()->where("product_code", $product);
        // $color = Color::all()->where("product_code", $code);
        return view('admin.addproduct.index', compact('size' , 'code','product'));
    }

    public function live()
    {
        $product = Product::all();
        return view ('admin.addproduct.live', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'string',
            'product_code'=>'string'
        ]);
        $product = $request->product_code;
        $size1 = $request->all();

        if (Size::create($size1)) {
            return back();
        } else {
            alert()->error('Gagal');
            return redirect()->route('liveproduct');
        }
    }

    public function color(Request $request)
    {
        $request->validate([
            'name'=>'string',
            'product_code'=>'string'
        ]);
        $code = $request->product_code;
        $color = $request->all();

        if (Color::create($color)) {
            return redirect()->route('addproduct', compact('code'));
        } else {
            alert()->error('Gagal');
            return redirect()->route('liveproduct');
        }
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
        //
    }

    /**
     * Re`mo`ve the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
