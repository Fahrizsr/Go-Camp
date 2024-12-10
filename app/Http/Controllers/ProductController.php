<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index() : View
    {
        //get all products
        $products = Product::latest()->paginate(10);

        //render view with products
        return view('admind.products.index', compact('products'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('admind.products.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'product_image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'product_name'         => 'required|min:5',
            'product_description'   => 'required|min:10',
            'stock'         => 'required|numeric',
            'id_category' => 'required',
            'unit_price'         => 'required|numeric'
        ]);

        //upload image
        $product_image = $request->file('product_image');
        $product_image->storeAs('public/products', $product_image->hashName());

        //create product
        Product::create([
            'product_image'         => $product_image->hashName(),
            'product_name'         => $request->product_name,
            'product_description'   => $request->product_description,
            'stock'         => $request->stock,
            'id_category' => $request->id_category,
            'unit_price'         => $request->unit_price
        ]);

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        //get product by ID
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admind.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'product_image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'product_name'         => 'required|min:5',
            'product_description'   => 'required|min:10',
            'stock'         => 'required|numeric',
            'id_category' => 'required',
            'unit_price'         => 'required|numeric'
        ]);

        //get product by ID
        $product = Product::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('product_image')) {

            //upload new product_image
            $product_image = $request->file('product_image');
            $product_image->storeAs('public/products', $product_image->hashName());

            //delete old product_image
            Storage::delete('public/products/'.$product->product_image);

            //update product with new product_image
            $product->update([
                'product_image'         => $product_image->hashName(),
                'product_name'         => $request->product_name,
                'product_description'   => $request->product_description,
                'stock'         => $request->stock,
                'id_category' => $request->input('id_category'),
                'unit_price'         => $request->unit_price,
            ]);

        } else {

            //update product without product_image
            $product->update([
                'product_name'         => $request->product_name,
                'product_description'   => $request->product_description,
                'stock'         => $request->stock,
                'id_category' => $request->input('id_category'),
                'unit_price'         => $request->unit_price,
            ]);
        }

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $product = Product::findOrFail($id);

        //delete product_image
        Storage::delete('public/products/'. $product->product_image);

        //delete product
        $product->delete();

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
