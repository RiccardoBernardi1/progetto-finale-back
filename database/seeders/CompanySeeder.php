<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        Company::truncate();
        Schema::enableForeignKeyConstraints();
        $data=[
            "names"=>[
                "Osteria Francescana",
                "Ristorante Cinese Hua Xing",
                "Giardino di Giada",
                "Curry Lounge",
                "Para Todos",
                "Hanedan",
                "Dahlak",
                "Dokdo",
                "Mc Donald",
                "Hashimoto",
                "La Cucaracha",
                "Nigdje",
                "Trattoria La Torre",
                "Taj Mahal",
                "Istanbul",
                "Seoul",
                "Fast Food Burger King",
                "Fast Food KFC",
                "Fast Food Subway",
                "Fast Food Pizza Hut",
                "Dionysos",
                "La Cabrera",
                "Bangkok City",
                "El Cid",
                "Tacos Locos",
                "Bali",
                "Terra",
                "Beirut",
                "La Napoli",
                "La Petite Marmite",
                "Bossa Nova",
                "Buena Vista",
                "Mosca Bianca",
                "Marhaba",
                "La Moule",
                "Saigon",
                "El Sombrero",
                "Sanaa",
                "Manila",
                "Caru cu bere",
            ],
            "images"=>[
                "https://media-cdn.tripadvisor.com/media/photo-s/11/41/5f/db/suckling-pig-tender-and.jpg",
                "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-544042946-1537009788.jpg?resize=480:*",
                "https://www.torinotoday.it/~media/horizontal-hi/46538377512956/umami_ristorante_giapponese_centro_torino-2.jpg",
                "https://www.ristoranteindianoroma.com/wp-content/uploads/2018/09/I-nostri-piatti-al-Ristorante-Indiano-Roma-8.jpg",
                "https://www.coolinmilan.it/wp-content/uploads/2022/09/ristorante-messicano-milano.jpg",
                "https://ristorantesultan.com/wp-content/uploads/2019/11/Ristorante-etnico-Firenze-640x480.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/0e/75/11/95/zighini-meta-carne-e.jpg",
                "https://images.ctfassets.net/2x1b56neok6m/it-media-6290-asset/9c22a438298ae96e354226840040f8b7/shutterstock_1027788493.jpg?w=1216&q=50",
                "https://screenworld.it/wp-content/uploads/2023/01/mcdonald-menu.v1.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/18/e8/ef/0c/bancone-bar-con-la-poesia.jpg",
                "https://www.romasulweb.com/wp-content/uploads/2014/10/rbig_cucaracha.jpg",
                "https://dune-web-imgenes-hd.s3.eu-west-1.amazonaws.com/public/proyecto-margarito-gril-3-1634545669BVrH0.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/1d/23/6f/a1/accoglienza-all-interno.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/1b/76/ab/ce/entrata-taj-mahal.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/25/1e/e6/45/istanbul-kebab-cafe-restaurant.jpg",
                "https://www.kimchiebasilico.it/wp-content/uploads/2013/11/chef-il-fratello.jpg",
                "https://www.foodserviceweb.it/wp-content/uploads/sites/4/2020/09/BK.jpg",
                "https://www.ticonsiglio.com/wp-content/uploads/2015/11/k_f_c.jpg",
                "https://www.mixerplanet.com/wp-content/uploads/2014/12/subway-santaa-luzia-mg.jpg",
                "https://st.ilfattoquotidiano.it/wp-content/uploads/2020/07/02/pizza-hut-1200.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/0a/92/ef/a4/fantastische-ambiance.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/1b/44/b9/45/la-cabrera.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-p/12/b5/43/fd/photo0jpg.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/11/7f/c8/56/restaurante-el-cid.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/1a/66/2e/69/ottima-cucina-casalinga.jpg",
                "http://www.balibar.it/images/p10.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/13/85/c1/56/il-nostro-locale.jpg",
                "https://citynews-cesenatoday.stgy.ovh/~media/10346328917180/nuovo-ristorante-1-2.png",
                "https://media-cdn.tripadvisor.com/media/photo-s/05/3c/89/41/questo-e-il-vero-napoli.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/1b/e4/68/39/facade-du-restaurant.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/1c/36/e8/c8/open-area.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/19/f3/4d/18/look-no-further-than.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/19/fe/f3/95/caption.jpg",
                "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/4c/0b/2c/sala.jpg?w=800&h=600&s=1",
                "https://fastly.4sqi.net/img/general/600x600/10647474_ApnBUXgVi51hf9guyy2vudAaT9l_Try59HZHpGjsrkU.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/22/02/f6/0d/saigon-location-archimede.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/17/2d/3f/4e/photo2jpg.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/12/8c/22/70/dsc-0299-largejpg.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/10/8f/87/3e/ilustrado-largejpg.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/15/63/dd/00/efbe664a-50e4-489b.jpg",
            ],
            "hours" => [
                "18:00-23:00", // Osteria Francescana
                "11:30-14:30, 18:30-22:00", // Ristorante Cinese Hua Xing
                "12:00-15:00", // Giardino di Giada
                "11:30-15:00, 19:00-23:00", // Curry Lounge
                "19:00-00:00", // Para Todos
                "11:00-14.30, 19:30-22:30", // Hanedan
                "11:00-00:00", // Dahlak
                "12:00-15:00, 19:15-00:00", // Dokdo
                "07:00-23:00", // Mc Donald
                "12:00-15:00, 19:00-23:00", // Ristorante Giapponese Hashimoto
                "12:00-15:00, 19:00-23:00", // Ristorante Messicano La Cucaracha
                "12:00-23:00", // Ristorante etiope Nigdje
                "12:00-14:30, 19:00-22:00", // Ristorante italiano Trattoria La Torre
                "11:30-15:00, 18:30-22:30", // Ristorante indiano Taj Mahal
                "11:00-22:00", // Ristorante turco Istanbul
                "12:00-14:30, 18:30-22:30", // Ristorante coreano Seoul
                "07:00-23:00", // Fast Food Burger King
                "11:00-23:00", // Fast Food KFC
                "11:00-23:00", // Fast Food Subway
                "11:00-23:00", // Fast Food Pizza Hut
                "12:00-15:00, 19:00-23:00", // Ristorante greco Dionysos
                "12:00-16:00, 19:00-00:00", // Ristorante argentino La Cabrera
                "12:00-15:00, 19:00-23:00", // Ristorante thailandese Bangkok City
                "12:00-15:30, 19:00-23:30", // Ristorante spagnolo El Cid
                "11:30-23:00", // Ristorante messicano Tacos Locos
                "12:00-15:00, 19:00-23:00", // Ristorante indonesiano Bali
                "12:00-15:00, 19:00-22:30", // Ristorante vegetariano Terra
                "12:00-15:00, 19:00-23:00", // Ristorante libanese Beirut
                "12:00-15:00, 19:00-23:00", // Ristorante pizzeria La Napoli
                "12:00-14:00, 19:00-22:30", // Ristorante francese La Petite Marmite
                "12:00-23:00", // Ristorante brasiliano Bossa
                "11:00-15:00, 18:30-22:00",
                "12:00-23:00",
                "10:00-15:00, 18:00-22:00",
                "11:30-14:30, 17:30-22:30",
                "10:00-15:00, 17:00-23:00",
                "11:30-14:30, 18:30-23:00",
                "09:00-15:00, 18:00-21:30",
                "11:00-15:00, 18:00-22:00",
                "12:00-23:00",
                "10:00-14:00, 18:00-21:30",
                "10:00-15:00, 18:00-22:00",
                "11:30-14:30, 18:00-23:00",
                "11:00-15:00, 18:30-22:00"
            ]
        ];

        $userCount=count(User::all());
        for($i=0;$i<$userCount;$i++){
            $new_company= new Company();
            $new_company->user_id=$i+1;
            $new_company->company_name=$data["names"][$i];
            $new_company->telephone=$faker->phoneNumber();
            $new_company->p_iva=$faker->numberBetween(134520445652, 434520445652);
            $new_company->address=$faker->address();
            $new_company->opening_hours=$data["hours"][$i];
            $new_company->image=$data["images"][$i];
            $new_company->minimum_order=$faker->randomFloat(2, 8, 20);
            $new_company->slug=Str::slug($new_company->company_name,'-');
            $new_company->save();
        }
    }
}
