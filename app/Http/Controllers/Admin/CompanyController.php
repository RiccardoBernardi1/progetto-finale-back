<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Controllers\Controller;
use App\Models\Typology;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $previousurl=url()->previous();
        return redirect($previousurl);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId = Auth::id();
        $previousurl=url()->previous();
        $company=Company::where('user_id', $userId)->first();
        if(!is_null($company)){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        $typologies=Typology::all();
        return view('admin.companies.create',compact('typologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        $previousurl=url()->previous();
        if(Auth::user()->company){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        $userId = Auth::id();
        $data=$request->validated();
        $new_company= new Company();
        $new_company->fill($data);
        if(isset($data['image'])){
            $new_company->image=Storage::disk('public')->put('uploads',$data['image']);
        }
        $new_company->user_id=$userId;
        $new_company->slug=Str::slug($new_company->company_name,'-');
        $new_company->save();
        if(isset($data['typologies'])){
            $new_company->typologies()->sync($data['typologies']);
        }
        return redirect()->route('admin.companies.show',$new_company)->with("success", "L'attività è stata creata con successo!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $userId = Auth::id();
        $previousurl=url()->previous();
        if($company->user_id!=$userId){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        return view('admin.companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $userId = Auth::id();
        $previousurl=url()->previous();
        if($company->user_id!=$userId){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        $typologies=Typology::all();
        return view('admin.companies.edit',compact('company','typologies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $userId = Auth::id();
        $previousurl=url()->previous();
        if($company->user_id!=$userId){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        $data=$request->validated();
        $company->slug=Str::slug($data['company_name'],'-');
        if(isset($data['image'])){
            if($company->image){
                Storage::disk('public')->delete($company->image);
            }
            $data['image']=Storage::disk('public')->put('uploads',$data['image']);
        }
        $company->update($data);
        if(isset($data['typologies'])){
            $company->typologies()->sync($data['typologies']);
        }else{
            $company->typologies()->sync([]);
        }
        return redirect()->route('admin.companies.show',$company)->with("success", "L'attività è stata modificata con successo!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $userId = Auth::id();
        $previousurl=url()->previous();
        if($company->user_id!=$userId){
            return redirect($previousurl)->with("message", "L'URL inserito non è valido!");
        };
        if(isset($company->image)){
            Storage::disk('public')->delete($company->image);
        }
        $company->delete();
        return redirect()->route('admin.companies.create')->with("success", "L'attività è stata eliminata con successo!");
    }
}
