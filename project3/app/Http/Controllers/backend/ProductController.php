<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['products'] = Product::all();
        return view('backend.product.index', $data);

        //    $data['products']= Product::all();
        //    return view('backend/product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['cats']  = Category::all();
        return view('backend.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $rules = [
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'price' => 'required|numeric',
        //     'category' => 'required',
        // ];
        // $validate = $request->validate($rules);
        // if($validate){
        //     $data=[
        //         'name'=>$request->name,
        //         'description'=>$request->description,
        //         'price'=>$request->price,
        //         'category_id'=>$request->category,
        //     ];
        //     DB::table('products')->save($data);
        //     return redirect()->with('msg' ,'Data added successfully');

        // }
        // dd($request->photo);
        $filename = time(). "." . $request->photo->extension();
        $validate = $request->validate([
            'name' => 'required | min:4',
            'description' => 'required | min:6',
            'price' => 'required | numeric',
            'category' => 'required',
            'photo' => 'mimes:jpg, jpeg, png, gif'
        ]);
        if ($validate) {
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category,
                'tags'=> $request->tags,
                'image' => $filename
            ];
            // DB::table('products')->save($data);
            $model = new Product();
            if($model->create($data)){
                $request->photo->move(public_path('image'), $filename);
                return redirect('products')->with('msg', 'Data added successfully');
            }
            
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
