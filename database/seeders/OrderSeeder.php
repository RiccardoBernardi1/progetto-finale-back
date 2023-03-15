<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Schema;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        Order::truncate();
        Schema::enableForeignKeyConstraints();
        
        foreach(Company::all() as $company){
            for($i=0;$i<100;$i++){
                $new_order= new Order();
                $new_order->name=$faker->firstName();
                $new_order->total_price=$faker->randomFloat(2, 8, 50);
                $new_order->email=$faker->email();
                $new_order->telephone=$faker->phoneNumber();
                $new_order->address=$faker->address();
                $new_order->date=$faker->dateTimeBetween('-2 years', '+0 days');
                $new_order->save();
            }
       }
    }
}

