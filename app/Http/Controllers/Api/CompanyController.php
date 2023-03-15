<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $selectedTypologies = $request->query('typologies', []);

        if (empty($selectedTypologies)) {
            $restaurants = Company::with('typologies', 'products')->get();
        } else {
            $restaurants = Company::with('typologies', 'products')->whereHas('typologies', function ($query) use ($selectedTypologies) {
                $query->whereIn('slug', $selectedTypologies);
            })->get();
    
            $restaurants = $restaurants->filter(function ($restaurant) use ($selectedTypologies) {
                $restaurantTypologies = $restaurant->typologies->pluck('slug')->toArray();
                return count(array_intersect($selectedTypologies, $restaurantTypologies)) === count($selectedTypologies);
            });
        }
    
        return response()->json(['data' => $restaurants]);
    }
    public function show($slug)
    {   
        try{
            $company = Company::where('slug',$slug)->with('typologies','products')->firstOrFail();
            return $company;
        }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return response([
                'error' => '404 Company not found'
            ], 404);
        }
    }
}
