<?php

namespace App\Http\Controllers;
use App\Category;
use App\Brand;
use App\Size;
use App\Http\Requests\ProductsCreateRequest;
use App\User;
use App\Product;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=Auth::user();
        $products = Product::all();
        return view('admin.products.index',compact('products','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user=Auth::user();
        $categories =Category::pluck('name','id')->all();
        $brands =Brand::pluck('name','id')->all();
        $sizes =Size::pluck('name','id')->all();
        return view('admin.products.create',compact('categories','brands','sizes','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsCreateRequest $request)
    {
        //
        $input = $request->all();
        $user=Auth::user();

        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;

        }

        $user->products()->create($input);
        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=Auth::user();
        $product = Product::findOrFail($id);
        $categories =Category::pluck('name','id')->all();
        $brands =Brand::pluck('name','id')->all();
        $sizes =Size::pluck('name','id')->all();
        return view('admin.products.edit',compact('product','categories','brands','sizes','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $input = $request->all();

        if($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo= Photo::create(['file' =>$name]);
            $input['photo_id']= $photo->id;

        }
        Auth::user()->products()->whereId($id)->first()->update($input);
        return redirect('/admin/products',compact('product','categories','brands','sizes'));
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
        $product = Product::findOrFail($id);
        unlink(public_path() . $product->photo->file);
        $product->delete();
        return redirect('/admin/products');
    }
}
