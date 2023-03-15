<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class Order_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $company=1;
        foreach(Order::all() as $order){
            $order->products()->sync([]);
            $totalPrice=0;
            $productsNum=count(Product::where('company_id',$company)->get());
            $randCounter=rand(1,$productsNum);
            $indexs=[];
            $firstValidProduct = Product::where('company_id', $company)->orderBy('id')->first();
            $productsArray=Product::where('company_id',$company)->get();
            $maxId=0;
            foreach($productsArray as $elm){
                if($elm->id >$maxId){
                    $maxId=$elm->id;
                }
            }
            $firstValidId=$firstValidProduct->id;
            
            for($index=0;$index<$randCounter;$index++){
                $randId=rand($firstValidId,$maxId);
                if(in_array($randId,$indexs)){
                    $index--;
                    break;
                }
                array_push($indexs,$randId);
                $product=Product::find($randId);
                $quantity=rand(1,6);
                $price=$product->price * $quantity;
                $totalPrice+=$price;
                $order->products()->attach(array_fill_keys([$randId],[
                    'quantity'=>$quantity
                ]));
            }
            $order->update(['total_price'=>$totalPrice]);
            if($company==count(Company::all())){
                $company=1;
            }else{
                $company=$company+1;
            }
        }
    }
}
