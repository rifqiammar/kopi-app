<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products')); /* Menggunakan Function Compact di karenakan 
        nama key array dan isinya sama ['productss' => $products ]*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // Isi Request adalah  sesuai yang disi di dalam form
    {   
        $request->validate([ // Validasi Pada input Tambah
            'kopi' => 'required|string',
            'asal' => 'required|string',
            'proses' => 'required|string',
            'roasting' => 'required|string',
            'harga' => 'required|numeric'
            ]);
              
        //cara 1 | Jika menggunakan Create harus menambahkan property Fillabel/guarded pada model product
            Product::create($request->all());
            return redirect('/products')->with('status', 'Data Produk Berhasil Ditambahkan'); // ->with() menambahkan pesan / flash message validasi

        // Cara 2
        // $product = new Product;
        // $product->kopi = $request->kopi;
        // $product->asal = $request->asal;
        // $product->proses = $request->proses;
        // $product->roasting = $request->roasting;
        // $product->harga = $request->harga;

        // $product->save();

        // return redirect('/products');

        //Cara 3
        // Product::create([
        //     'kopi' => $request->kopi,
        //     'asal' => $request->asal,
        //     'proses' => $request->proses,
        //     'roasting' => $request->roasting,
        //     'harga' => $request->harga,
        // ]);
        // return redirect('/products');  

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products/edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */                         
    public function update(Request $request, Product $product)
    {
        $request->validate([ // Validasi Pada input Tambah
            'kopi' => 'required|string',
            'asal' => 'required|string',
            'proses' => 'required|string',
            'roasting' => 'required|string',
            'harga' => 'required|numeric'
            ]);
            
       Product::where('id', $product->id)
       ->update([
                'kopi' => $request->kopi,
                'asal' => $request->asal,
                'proses' => $request->proses,
                'roasting' => $request->roasting,
                'harga' => $request->harga
            ]);
        return redirect('/products')->with('status', 'Data Produk Berhasil Ubah');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/products')->with('status', 'Data Produk Berhasil Dihapus');
    }
}
