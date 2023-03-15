<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Company;
use App\Models\Typology;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $previousurl=url()->previous();
        if(!Auth::user()->company){
            $typologies=Typology::all();
            return view('admin.companies.create',compact('typologies'));
        };
        $userId = Auth::id();
        $company = Company::where('user_id', $userId)->first();
        $products = $company->products;

        return view("admin.products.index", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $previousurl=url()->previous();
        if(!Auth::user()->company){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        return view("admin.products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $userId = Auth::id();
        $company = Company::where('user_id', $userId)->first();

        $data = $request->validated();
 
        $new_product = new Product();
        $new_product->fill($data);

        if(isset($data['image'])){
            $new_product->image = Storage::disk('public')->put('uploads',$data['image']);
        }

        $new_product->company_id = $company->id;
        $new_product->slug=Str::slug($new_product->name,'-');
        $new_product->save();

        return redirect()->route("admin.products.index")->with("success", "L'articolo è stato creato con successo!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $userId = Auth::id();
        $previousurl=url()->previous();
        if($product->company->user_id!=$userId){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        return view("admin.products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $userId = Auth::id();
        $previousurl=url()->previous();
        if($product->company->user_id!=$userId){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        return view('admin.products.edit', compact("product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $userId = Auth::id();
        $previousurl=url()->previous();
        if($product->company->user_id!=$userId){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        $data=$request->validated();
        if(isset($data['image'])){
            if($product->image){
                Storage::disk('public')->delete($product->image);
            }
            $data['image']=Storage::disk('public')->put('uploads',$data['image']);
        }
        $product->slug=Str::slug($data['name'],'-');
        $product->update($data);

        return redirect()->route('admin.products.show', $product)->with("success", "L'articolo è stato modificato con successo!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $userId = Auth::id();
        $previousurl=url()->previous();
        if($product->company->user_id!=$userId){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        if(isset($product->image)){
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->route('admin.products.index')->with("success", "L'articolo è stato eliminato con successo!");
    }
}
