<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Corrected import
use Illuminate\View\View;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request): View
    {
        $categories = Category::all();

        if ($request->filled('search')) {
            $products = Product::search($request->search)->where('category_id', $request->cat)->get();
            if ($products->isEmpty()) {
                // No products found, set flash message
                Session::flash('msg', 'No products found');
            }
        } else {
            $products = Product::all();
        }

        return view('search', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // Add your other methods here if needed
}
