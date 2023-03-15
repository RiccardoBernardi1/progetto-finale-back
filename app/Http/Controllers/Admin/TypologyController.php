<?php

namespace App\Http\Controllers\Admin;

use App\Models\Typology;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypologyRequest;
use App\Http\Requests\UpdateTypologyRequest;
use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class TypologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typologies=Typology::all();
        if(!Auth::user()->company){
            return view('admin.companies.create',compact('typologies'));
        };
        $userId = Auth::id();
        $company = Company::where('user_id', $userId)->first();
        
        return view("admin.typologies.index", compact('typologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::user()->company){
            $typologies=Typology::all();
            return view('admin.companies.create',compact('typologies'));
        };
        return view("admin.typologies.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypologyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypologyRequest $request)
    {
        if(!Auth::user()->company){
            $typologies=Typology::all();
            return view('admin.companies.create',compact('typologies'));
        };
        $data = $request->validated();
        $new_typology = new Typology();
        $new_typology->fill($data);
        $new_typology->slug=Str::slug($new_typology->name,'-');
        $new_typology->save();
        
        return redirect()->route("admin.typologies.index")->with("success", "La tipologia è stata creata con successo!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function show(Typology $typology)
    {   
        if(!Auth::user()->company){
            $typologies=Typology::all();
            return view('admin.companies.create',compact('typologies'));
        };
        return view('admin.typologies.show', compact('typology')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function edit(Typology $typology)
    {
        if(!Auth::user()->company){
            $typologies=Typology::all();
            return view('admin.companies.create',compact('typologies'));
        }elseif(count($typology->companies)>0){
            $previousurl=url()->previous();
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        }
        return view('admin.typologies.edit', compact('typology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypologyRequest  $request
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypologyRequest $request, Typology $typology)
    {
        if(!Auth::user()->company){
            $typologies=Typology::all();
            return view('admin.companies.create',compact('typologies'));
        }elseif(count($typology->companies)>0){
            $previousurl=url()->previous();
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        $data = $request->validated();
        $typology->slug=Str::slug($data['name'],'-');
        $typology->update($data);
        $typologies=Typology::all();
        return redirect()->route("admin.typologies.index")->with("success", "La tipologia è stata modificata con successo!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typology $typology)
    {
        if(!Auth::user()->company){
            $typologies=Typology::all();
            return view('admin.companies.create',compact('typologies'));
        }elseif(count($typology->companies)>0){
            
            $previousurl=url()->previous();
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        $typology->delete();
        $typologies=Typology::all();
        return view('admin.typologies.index',compact('typologies'))->with("success", "La tipologia è stata cancellata con successo!");
    }
}
