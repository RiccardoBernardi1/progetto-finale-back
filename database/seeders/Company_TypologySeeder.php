<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class Company_TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = Company::all();
        $typologies = Typology::all();
        
        foreach($companies as $index => $company){

            $typology_ids = [];
            
            // assegna la tipologia con l'indice corrente
            if(Typology::find($index + 1)){
                $typology_ids[] = $index + 1;
            }else{
                $randTypology= $typologies->random();
                $typology_ids[] = $randTypology->id;
            }

            // aggiunge altre tipologie casuali
            $randCount = rand(0,2);
            $otherTypologies = $typologies->whereNotIn('id', $typology_ids)->random($randCount);
        
            foreach ($otherTypologies as $typology) {
                $typology_ids[] = $typology->id;
            }
        
            // assegna i tipi di azienda all'azienda corrente
            $company->typologies()->sync($typology_ids);
        }
    }
}
