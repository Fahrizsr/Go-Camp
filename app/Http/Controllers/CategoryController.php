<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index() : View
    {
        //get all products
        $categories = Category::latest()->paginate(10);

        //render view with products
        return view('admind.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admind.categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'category_name'         => 'required|min:5'
        ]);

        //create category
        Category::create([
            'category_name'         => $request->category_name,
        ]);

        //redirect to index
        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $categories = Category::findOrFail($id);

        //delete product
        $categories->delete();

        //redirect to index
        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
