<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{

    // FORM AUTHENTICATION
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    /**
     * Display Products w Categories on HOME page
     */
    public function home()
    {
        // $products = Product::orderBy('name')->get();
        $products = Product::where('feature', '=', 1)
                            ->take(8)
                            ->inRandomOrder()
                            ->get();
        return view('welcome', compact('products'));
    }


    /**
     * Display Products w Categories on PRODUCTS INDEX page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $products, Category $categories)
    {
        return view('products.create', compact('products', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        // CREATE NEW PRODUCT
        $product = new Product(
            [
                'name' => $request->name,
                'slug' => str_slug($request->name, '-'),
                'price' => $request->price,
                'upc' => $request->upc,
                'description' => $request->description,
                'short_descript' => $request->short_descript
            ]
        );

        // SAVE PRODUCT WITH RELATED CATEGORY
        $product->save();
        $product->categories()->attach($request->category);
        
        //PRODUCTS INDEX PAGE
        return redirect('products')->with('message', 'Product Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, Category $categories)
    {
        return view('products.show', compact('product', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, Category $categories)
    {
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        // CREATE UPDATED PRODUCT
        $product->update(
            [
                'name' => $request->name,
                'slug' => str_slug($request->name, '-'),
                'msrp' => $request->msrp,
                'default_price' => $request->default_price,
                'pack_size' => $request->pack_size,
                'upc' => $request->upc,
                'description' => $request->description,
                'short_descript' => $request->short_descript,
                'active' => $request->active
            ]
        );

        // SAVE UPDATED PRODUCT W RELATED CATEOGRIES
        $product->categories()->sync($request->category);

        // PRODUCT SHOW PAGE
        return redirect('products')->with('message', 'Product Modified Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
