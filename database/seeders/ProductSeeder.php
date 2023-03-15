<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        Product::truncate();
        Schema::enableForeignKeyConstraints();
        $data=[
            "names"=>[
                "Italiano"=>[
                    "Pizza Margerita",
                    "Lasagna al ragù",
                    "Gnocchi alla sorrentina",
                    "Insalata di polpo",
                    "Tiramisù",
                    "Spaghetti alla carbonara",
                    "Fettuccine alfredo",
                    "Risotto alla Milanese",
                    "Saltimbocca alla romana",
                    "Bistecca alla fiorentina",
                    "Ossobuco alla milanese",
                    "Cotoletta alla milanese",
                    "Bruschetta",
                    "Pesto alla genovese",
                    "Minestrone",
                    "Ribollita",
                    "Pappa al pomodoro",
                    "Zuppa di cipolle",
                    "Cacciucco",
                    "Baccalà alla Livornese",
                    "Sarde in saor",
                    "Polenta e salsiccia",
                    "Arancini",
                    "Focaccia",
                    "Pane e panelle",
                    "Melanzane alla parmigiana",
                    "Carpaccio",
                    "Vitello tonnato",
                    "Tortellini in brodo",
                    "Cannoli",
                    "Granita",
                 ],
                "Cinese"=>[
                    "San ji bao con anatra piccante",
                    "Ravioli di verdure",
                    "Involtini primavera",
                    "Medusa con cetrioli",
                    "Ramen con mix di verdure",
                    "Chow mein",
                    "Maiale alla pechinese",
                    "Anatra alla pechinese",
                    "Gamberi fritti al miele",
                    "Manzo in salsa piccante",
                    "Riso fritto alla cantonese",
                    "Pesce al vapore con salsa di soia",
                    "Brodo di pollo con funghi",
                    "Spiedini di pollo alla griglia",
                    "Noodles in brodo",
                    "Gamberi saltati con verdure",
                    "Maiale agrodolce",
                    "Salsa agrodolce",
                    "Salsa di soia",
                    "Salsa piccante",
                    "Salsa di arachidi",
                    "Tofu fritto con verdure",
                    "Patate dolci fritte",
                    "Zuppa di miso",
                    "Hot pot",
                    "Fagiolini saltati con aglio",
                    "Tè alla menta",
                    "Tè al gelsomino",
                    "Tè verde",
                    "Tè oolong"
                ],
                "Giapponese"=>[
                    "Alga Wakame",
                    "Dragon Roll Salmone e Tonno",
                    "Nigiri Orata",
                    "Sashimi Maguro",
                    "California Roll",
                    "Temaki Salmone",
                    "Gyoza",
                    "Tonkatsu",
                    "Yakitori",
                    "Okonomiyaki",
                    "Takoyaki",
                    "Unagi",
                    "Ramen",
                    "Chawanmushi",
                    "Yakiniku",
                    "Shabu-shabu",
                    "Sukiyaki",
                    "Katsuobushi",
                    "Matcha",
                    "Daifuku",
                    "Taiyaki",
                    "Mochi",
                    "Melonpan",
                    "Karaage",
                    "Onigiri",
                    "Chirashi",
                    "Hijiki",
                    "Nikujaga",
                    "Korokke",
                    "Miso Soup",
                ],
                "Indiano"=>[
                   "Samosa veg",
                   "Pappadums",
                   "Hariyali tikka",
                   "Chana masala",
                   "Chicken korma"
                ],
                "Messicano"=>[
                  "Quesadillas de Chili",
                  "Tortillas",
                  "Nachos Tenerife",
                  "El Pulled Burrito",
                  "Tostadas"
                ],
                "Turco"=>[
                  "Falafel",
                  "Piadina yufka doner kebab",
                  "Grill shish tavuk",
                  "Panino Izgara kofte",
                  "Panino Adana kebab"
                ],
                "Etiope"=>[
                  "Wat",
                  "Tibs",
                  "Kifto",
                  "Yetsom beyaynetu",
                  "Pane injera"
                ],
                "Coreano"=>[
                  "Sukju namul",
                  "Gyeran-mari",
                  "Yachae bulgogi joengol",
                  "Soju",
                  "Kimchi"
                ],
                "Fast-Food"=>[
                  "Hamburger",
                  "Chicken bacon King",
                  "Pop Corn Chicken",
                  "McFlurry Oreo",
                  "Cheeseburger"
                ],
                "Bevande"=>[
                  "Coca-cola",
                  "Fanta",
                  "Ichnusa",
                  "Campari soda",
                  "Pinot Grigio"
                ]
            ],
            "images"=>[
                "Italiano"=>[
                    "https://www.scattidigusto.it/wp-content/uploads/2018/03/pizza-margherita-originale-Scatti-di-Gusto.jpg",
                    "https://www.ricettedellanonna.net/wp-content/uploads/2014/09/lasagne-al-ragu%CC%80.jpg",
                    "https://www.giallozafferano.it/images/202-20223/Gnocchi-alla-sorrentina_1200x800.jpg",
                    "https://www.giallozafferano.it/images/239-23952/Insalata-di-polpo-prezzemolata_450x300.jpg",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDcRsvqfek7XbqjOni7i0yScrO9HEbDJo8jg&usqp=CAU",
                    "https://www.tavolartegusto.it/wp/wp-content/uploads/2020/03/Carbonara-Spaghetti-alla-carbonara-Ricetta-Carbonara.jpg",
                    "https://www.tavolartegusto.it/wp/wp-content/uploads/2021/03/Fettuccine-Alfredo.jpg",
                    "https://www.conad.it/assets/images/ricette/dayone-ricette/s-d/s-d-risottomilanese.jpg?_u=1652348725607",
                    "https://www.giallozafferano.it/images/ricette/204/20401/foto_hd/hd650x433_wm.jpg",
                    "https://wips.plug.it/cips/buonissimo.org/cms/2011/08/bistecca-alla-fiorentina.jpg?w=712&a=c&h=406",
                    "https://media-cdn.greatbritishchefs.com/media/vmgitmjg/img78337.jpg?mode=crop&width=768&height=512",
                    "https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2014/10/Cotoletta-alla-milanese-52520-1.jpg",
                    "https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2020/05/Bruschette-ricetta-7544.jpg",
                    "https://www.giallozafferano.it/images/ricette/0/5/foto_hd/hd650x433_wm.jpg",
                    "https://www.tavolartegusto.it/wp/wp-content/uploads/2023/01/minestrone.jpg",
                    "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2007/12/ricetta-ribollita-semplice/_jcr_content/header-par/image_single.img.jpg/1610368905728.jpg",
                    "https://www.tavolartegusto.it/wp/wp-content/uploads/2022/09/pappa-al-pomodoro.jpg",
                    "https://statics.cucchiaio.it/content/cucchiaio/it/ricette/2015/03/zuppa-di-cipolle/jcr:content/header-par/image-single.img10.jpg/1538484907612.jpg",
                    "https://www.gazzettadelgusto.it/wp-content/uploads/2016/11/Cacciucco-alla-livornese.jpg",
                    "https://www.giallozafferano.it/images/172-17296/Baccala-alla-livornese_780x520_wm.jpg",
                    "https://blog.giallozafferano.it/annatorte/wp-content/uploads/2019/09/sarde-in-saor-f.jpg",
                    "https://www.giallozafferano.it/images/225-22574/Polenta-con-salsiccia-e-formaggio_780x520_wm.jpghttps://www.giallozafferano.it/images/225-22574/Polenta-con-salsiccia-e-formaggio_780x520_wm.jpg",
                    "https://www.giallozafferano.it/images/2-247/Arancini-di-riso_650x433_wm.jpg",
                    "https://www.giallozafferano.com/images/257-25752/Focaccia_650x433_wm.jpg",
                    "https://www.giallozafferano.it/images/236-23646/Panelle_450x300.jpg",
                    "https://www.melarossa.it/wp-content/uploads/2021/05/melanzane-alla-parmigiana-light.jpg",
                    "https://www.aiafood.com/sites/default/files/styles/scale_1920/public/articles/ricette-carpaccio.jpg?itok=zlE9h1kf",
                    "https://blog.giallozafferano.it/cucinoperpassione/wp-content/uploads/2017/06/Vitello-tonnato.jpg",
                    "https://www.giallozafferano.it/images/231-23110/Tortellini-in-brodo_650x433_wm.jpg",
                    "https://www.molinocolombo.it/wp-content/uploads/2022/08/Mc-Post-i-dolci-dell-estate-CANNOLO-SICILIANO-NS.jpg",
                    "https://www.fattoincasadabenedetta.it/wp-content/uploads/2021/08/SITO-.-23-Granita-di-anguria.jpg",
                ],
                "Cinese"=>[
                    "https://media-cdn.tripadvisor.com/media/photo-m/1280/1c/06/c1/6c/san-ji-bao-all-anatra.jpg",
                    "https://www.laregoladelpiatto.it/wp-content/uploads/2020/04/Ravioli-cinesi-alle-verdure-in-padella-6-scaled.jpg",
                    "https://ricettecuco.com/wp-content/uploads/2017/10/ricetta-involtini-primavera-cinesi-fatti-in-casa-4-800x565.jpg",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTm3awWKS1VMpjfbRnP9TgOApxpSxoZ96qbVaSuusOg0qOPkQCejP4IM5bvw_e2mcX0h5U&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7_jQ4rjZ_pFKALTttWnI5J-5zLkbeL4x38ze9GZVUSaqmtsrUXcra2UKargOvgl3_Ssw&usqp=CAU",
                    "https://natashaskitchen.com/wp-content/uploads/2020/03/Chicken-Chow-Mein-4-500x500.jpg",
                    "https://www.chineatofficial.com/wp-content/uploads/2021/11/1.121.1-min.jpg",
                    "https://wips.plug.it/cips/buonissimo.org/cms/2012/03/anatra-alla-pechinese.jpg?w=712&a=c&h=406",
                    "https://www.frescopesce.it/wp-content/uploads/2015/01/gamberimielesoiaok-450x450.jpg",
                    "https://www.ristorantelinda.com/wp-content/uploads/2020/11/Manzo-in-salsa-piccante-1500x1000.jpg",
                    "https://www.tavolartegusto.it/wp/wp-content/uploads/2019/05/Riso-alla-cantonese-Ricetta-Riso-cantonese-.jpg",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm-u0yLtuiqGSxAamKXqfGNqtPQHHdpBHXpw&usqp=CAU",
                    "https://www.ricettasprint.it/wp-content/uploads/2021/11/Zuppa-cremosa-di-pollo-e-funghi-FOTO-ricettasprint.jpg",
                    "https://winedharma.com/wine-dharma/uploads/2020/10/828-spiedini-di-pollo-alla-griglia-con-rub-fantasia.jpg",
                    "https://img-global.cpcdn.com/recipes/4f44bb7616638d2b/1200x630cq70/photo.jpg",
                    "https://www.mykitchendictionary.com/wp-content/uploads/2014/02/DSC_0722.jpg",
                    "https://i2.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2018/01/3476_Maiale.jpg?resize=895%2C616&ssl=1",
                    "https://blog.giallozafferano.it/mastercheffa/wp-content/uploads/2014/03/P1040449.jpg",
                    "https://www.greenme.it/wp-content/uploads/2013/02/salsa_di_soia_fatta_in_casa.jpg",
                    "https://blog.giallozafferano.it/allacciateilgrembiule/wp-content/uploads/2019/03/salsa-piccante4.jpg",
                    "https://primochef.it/wp-content/uploads/2022/02/SH_salsa_di_arachidi.jpg.webp",
                    "https://primochef.it/wp-content/uploads/2016/06/SH_cubotti_tofu-1200x800.jpg",
                    "https://i2.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2020/01/4201_Patate.jpg?resize=895%2C616&ssl=1https://i2.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2020/01/4201_Patate.jpg?resize=895%2C616&ssl=1",
                    "https://www.greenme.it/wp-content/uploads/2021/10/zuppa-miso.jpg",
                    "https://images.squarespace-cdn.com/content/v1/52d3fafee4b03c7eaedee15f/c523fb53-2812-4cf3-8ef6-9b8036d04914/after-7576.jpg",
                    "https://i0.wp.com/www.diariodiunacuocaediundiabetico.it/wp-content/uploads/2022/06/Fagiolini-gratinati-in-padella.jpg?fit=1576%2C1096&ssl=1",
                    "https://www.ilgiornaledelcibo.it/wp-content/uploads/2007/08/sorbetto-al-the-alla-menta.jpg",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWXtn1ic3TeTxVE-sVaVrgG0S0_QU0U-96kg&usqp=CAU",
                    "https://www.greenme.it/wp-content/uploads/2013/07/te-verde.jpg",
                    "https://www.sportoutdoor24.it/app/uploads/2018/03/oolong_00.jpg",
                 ],
                "Giapponese"=>[
                    "https://www.cure-naturali.it/.imaging/default/dam/cure-naturali/enciclopedia-naturale/alimentazione/alga-wakame.jpg/jcr:content.jpg",
                    "https://www.oishideliverypescara.it/wp-content/uploads/2021/11/DSC00194-scaled.jpg",
                    "https://www.ristorantedong.it/wp-content/uploads/Ristorante-Dong-Menu-WEB-9.jpg",
                    "https://www.sushibe.it/wordpress/wp-content/uploads/2018/04/Sashimi-Maguro-2.jpg",
                    "https://www.justonecookbook.com/wp-content/uploads/2022/12/California-Roll-6126-I-2.jpg",
                    "https://i0.wp.com/kungfood.info/wp-content/uploads/2021/10/Ricetta-temaki-al-salmone.jpg?fit=1800%2C864&ssl=1",
                    "https://media-assets.lacucinaitaliana.it/photos/61fd2d235455c3ec4f002f7c/4:3/w_800,h_600,c_limit/Gyoza-alla-piastra.jpg",
                    "https://www.ikiya.it/files/2021/03/Baked-Tonkatsu-w600.jpg",
                    "https://static.cookist.it/wp-content/uploads/sites/21/2021/01/6_yakitori-serviti_yakitori%C2%A9Gooduria-lab.jpg",
                    "https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Okonomiyaki_001.jpg/1200px-Okonomiyaki_001.jpg",
                    "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Takoyaki.jpg/1200px-Takoyaki.jpg",
                    "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Unagi1.jpg/1200px-Unagi1.jpg",
                    "https://media-assets.lacucinaitaliana.it/photos/620b62f4173bb3b63848fb6b/16:9/w_2560%2Cc_limit/iStock-623535742.jpg",
                    "https://upload.wikimedia.org/wikipedia/commons/8/89/Chawan-mushi.JPG",
                    "https://upload.wikimedia.org/wikipedia/commons/b/b7/Yakiniku_002.jpg",
                    "https://www.aiafood.com/sites/default/files/articles/cottura_shabu_shabu.jpg",
                    "https://www.justonecookbook.com/wp-content/uploads/2023/01/Sukiyaki-4752-I.jpg",
                    "https://upload.wikimedia.org/wikipedia/commons/1/1f/Katsuobushi_02.jpg",
                    "https://www.my-personaltrainer.it/2022/01/24/te-matcha_900x760.jpeg",
                    "https://upload.wikimedia.org/wikipedia/commons/a/a5/Daifuku_1.jpg",
                    "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Taiyaki_003.jpg/1200px-Taiyaki_003.jpg",
                    "https://upload.wikimedia.org/wikipedia/commons/0/05/Mochi_Ice_Cream.jpg",
                    "https://cdn.ilclubdellericette.it/wp-content/uploads/2018/10/Melonpan-1280x720.jpg",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK5xjihZrcCzEM17nsGzSenxty4_nY4L22Wg&usqp=CAU",
                    "https://www.giallozafferano.it/images/174-17406/Onigiri_650x433_wm.jpg",
                    "https://www.justonecookbook.com/wp-content/uploads/2020/02/Chirashi-Sushi-7722-I-1.jpg",
                    "https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_4:3/k%2Farchive%2Fb5b29bed3853502e7d4d2e4bfefd475e67e453c7",
                    "https://www.justonecookbook.com/wp-content/uploads/2021/05/Nikujaga-6915-I.jpg",
                    "https://www.thespruceeats.com/thmb/QDJWx_xiVGf2okiGOhY8_M9_KVE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/potato-korokke-2031283-hero-01-5edf6479ce8446a29f36769d2022728a.jpg",
                    "https://www.greenme.it/wp-content/uploads/2021/10/zuppa-miso.jpg",
                ],
                "Indiano"=>[
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBUHvSJZrz1dVVfMxY5bKcpIovdygRrapF0w&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrSXo_wSj7zQ5Ape7hLIKO9WxvawhJLAMarw&usqp=CAU",
                    "https://i0.wp.com/spiceandcolour.com/wp-content/uploads/2020/10/DSC_0924-2_editado-rotated.jpg?fit=1709%2C1140&ssl=1",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIa0OQmkAbVWzSfUdSKyGZ19vBQgYF_tocEw&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiQfYwMyc3SV2mT_T5DvaLAAIzbXLBWs5ByQ&usqp=CAU"
                ],
                "Messicano"=>[
                    "https://olo-images-live.imgix.net/37/37551514ee0347d4884dc1ad14d20467.jpg?auto=format%2Ccompress&q=60&cs=tinysrgb&w=1200&h=800&fit=fill&fm=png32&bg=transparent&s=a7ff2fa4e4c438aea11865ab710d774a",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbua8P7W2UWieJU-Sg5AaBbm00tWfkSuAByw&usqp=CAU",
                    "https://www.longislandpress.com/wp-content/uploads/2020/08/nachos-4454941_960_720.jpg",
                    "https://www.tribugolosa.com/cache/slideshow/ca/40/35/00/gettyimages-958888298.jpg/2cb6823c975ee09b0d93e071c71c86d5.jpg",
                    "https://www.mylatinatable.com/wp-content/uploads/2018/04/Tostadas-1.jpg"
                ],
                "Turco"=>[
                    "https://www.casadivita.despar.it/app/uploads/2018/06/falafel-tradizione.jpg",
                    "https://media-cdn.tripadvisor.com/media/photo-s/06/29/77/2f/doner-kebab.jpg",
                    "https://amiraspantry.com/wp-content/uploads/2021/03/shish-tawooq-IG.jpg",
                    "https://img.freepik.com/premium-photo/delicious-turkish-meatballs-sandwich-kofte-ekmek-turkish-name-kofte-ekmek-ekmek-arasi-kofte_693630-4361.jpg",
                    "https://inconsegna.com/wp-content/uploads/2020/12/adana-kebab.jpg"
                ],
                "Etiope"=>[
                    "https://upload.wikimedia.org/wikipedia/commons/5/54/Ethiopian_wat.jpg",
                    "https://theethiopianfood.com/wp-content/uploads/Tibs-2.jpg",
                    "https://www.allrecipes.com/thmb/I8QL8pshGJY2kJDzr7u-UfU9zk0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-636369362_ethiopian-kitfo_gettyimages_alleko-2000-31e73b5b3aa0479eb15a9d17ef063c33.jpg",
                    "https://i0.wp.com/bestofvegan.com/wp-content/uploads/2020/10/Culture-Tuesday-Ethiopian-Cuisine-@ethiopianfoodie.jpg?fit=1080%2C915&ssl=1",
                    "https://www.giallozafferano.it/images/25-2541/Pane-injera_650x433_wm.jpg"
                ],
                "Coreano"=>[
                    "https://asianinspirations.com.au/wp-content/uploads/2018/07/R00570_Sukju-Namul-Muchim.jpg",
                    "https://www.koreanbapsang.com/wp-content/uploads/2019/10/DSC6602-1.jpg",
                    "https://2.bp.blogspot.com/-T00kSCIp3LM/UNN5XSLLwEI/AAAAAAAADZU/Pmcz-61SEbQ/s1600/738.jpg",
                    "https://www.orientalitalia.com/wp-content/uploads/2022/07/bottle-g438e52dc6_1920-1140x640.jpg",
                    "https://i2.wp.com/chilipeppermadness.com/wp-content/uploads/2021/12/Kimchi-SQ.jpg"
                ],
                "Fast-Food"=>[
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuXQizi-Ml9HTp7ybJf6pDj7M9Hm3RbVfB0A&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaYor95NWw4QAacJIy2_S2a6GV0UCcSd2qqg&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtdk5flx3zCqFvXMXZuyS1sSML-SWHfGJBBw&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThd_gsu3ijWIh7deFKpVxFTD8wzX_X6kwBSA&usqp=CAU",
                    "https://www.mcdonalds.it/sites/default/files/styles/compressed/public/products/cheeseburger--hero-mob.jpg?itok=zUC2Hd7n"
                ],
                "Bevande"=>[
                    "https://static.vecteezy.com/system/resources/previews/007/978/653/original/coca-cola-popular-drink-brand-logo-vinnytsia-ukraine-may-16-202-free-vector.jpg",
                    "https://turbologo.com/articles/wp-content/uploads/2020/02/Fanta-logo.png.webp",
                    "https://www.marrakechbeach55.it/wp-content/uploads/2021/07/logo-ichnusa.jpg",
                    "https://www.immobiliare.it/news/app/uploads/2022/04/Campari-2.png",
                    "https://www.suedtiroler-weinstrasse.it/fileadmin/_processed_/8/4/csm_Larcherhof-Logo_08ac0fe173.png"
                ]
            ],
            "descriptions"=>[
                "Italiano"=>[
                    "Pomodoro, Mozzarella",
                    "Pasta sfoglia, Ragù, Besciamella, Parmigiano Reggiano DOP",
                    "Gnocchi, Salsa di pomodoro, Mozzarella, Parmigiano Reggiano DOP",
                    "Polpo, Verdure, Prezzemolo, Succo di limone",
                    "Mascarpone, Savoiardi, Caffè, Uova, Zucchero",
                    "Spaghetti, guanciale, uova, pecorino romano, pepe nero",
                    "Pasta, burro, panna, parmigiano reggiano",
                    "Riso, zafferano, burro, parmigiano reggiano",
                    "Vitello, prosciutto crudo, salvia",
                    "Bistecca, sale, pepe",
                    "Vitello, verdure, vino bianco, brodo di carne",
                    "Cotoletta di vitello, uova, pangrattato, farina",
                    "Pane, pomodoro, aglio",
                    "Basilico, pinoli, parmigiano reggiano, aglio, olio d'oliva",
                    "Fagioli, carote, sedano, cipolle, pomodori, pancetta",
                    "Pane raffermo, verdure, fagioli, cavolo nero, patate, carote, cipolle",
                    "Pane raffermo, pomodoro, aglio, olio d'oliva, basilico",
                    "Cipolle, burro, farina, brodo di carne, vino bianco, formaggio grattugiato",
                    "Frutti di mare misti, pomodori, aglio, olio d'oliva, peperoncino, pane",
                    "Baccalà, pomodori, aglio, cipolle, prezzemolo, olive nere",
                    "Sarde, cipolle, aceto di vino bianco, uvetta, pinoli, zucchero, olio d'oliva",
                    "Farina di mais, salsicce, brodo di carne, formaggio grattugiato",
                    "Riso, ragù, piselli, mozzarella",
                    "Ceci, farina di ceci, prezzemolo, olio d'oliva",
                    "Melanzane, pomodoro, mozzarella, parmigiano reggiano, basilico",
                    "Filetto di manzo, rucola, parmigiano reggiano, limone",
                    "Vitello, tonno, capperi, acciughe, maionese, limone",
                    "Pasta ripiena, brodo di carne, parmigiano reggiano",
                    "Ricotta, zucchero, scorza d'arancia, pasta sfoglia",
                    "Acqua, zucchero, succo di limone",
                ],
                "Cinese"=>[
                    "Anatra, Peperoncino, Cipolla, Zenzero, Salsa di soia",
                    "Verdure miste, Zenzero, Aglio",
                    "Verdure miste, Salsa agrodolce, Salsa di soia",
                    "Medusa, Cetrioli, Salsa di soia",
                    "Noodles, Verdure miste, Uovo sodo, Salsa di soia",
                    "Noodles, Verdure miste, Carne di maiale",
                    "Maiale, Cipolla, Carote, Zenzero, Salsa di soia",
                    "Anatra, Salsa di soia, Aglio, Zenzero",
                    "Gamberi, Miele, Uovo, Farina di mais",
                    "Manzo, Peperoncino, Cipolla, Salsa di soia",
                    "Riso, Piselli, Carote, Uova, Salsa di soia",
                    "Pesce, Salsa di soia, Zenzero, Olio di sesamo",
                    "Pollo, Funghi shiitake, Zenzero, Cipolla",
                    "Pollo, Salsa di soia, Miele, Aglio",
                    "Noodles, Brodo di pollo, Verdure miste",
                    "Gamberi, Verdure miste, Aglio, Salsa di soia",
                    "Maiale, Ananas, Peperoni, Cipolla, Salsa agrodolce",
                    "Zucchero, Aceto, Salsa di pomodoro, Salsa di soia",
                    "Soia, Grano, Acqua, Sale",
                    "Peperoncino, Aceto, Aglio, Zucchero",
                    "Arachidi, Acqua, Zenzero, Aglio",
                    "Tofu, Verdure miste, Salsa di soia",
                    "Patate dolci, Zucchero, Olio di semi",
                    "Miso, Brodo di dashi, Tofu, Alga wakame",
                    "Carne, Pesce, Verdure miste, Brodo",
                    "Fagiolini, Aglio, Olio d'oliva, Sale",
                    "Tè verde, Menta, Zucchero",
                    "Tè verde, Fiori di gelsomino",
                    "Foglie di tè verde, Acqua calda",
                    "Foglie di tè oolong, Acqua calda"
                ],
                "Giapponese"=>[
                    "Alga Wakame",
                    "Salmone, Tonno, Riso, Avocado, Maionese",
                    "Orata, Riso",
                    "Maguro",
                    "Surimi, Avocado, Riso, Semi di sesamo",
                    "Uramaki al salmone",
                    "Nigiri di gamberi",
                    "Sashimi di tonno",
                    "Gyoza al pollo",
                    "Tonkatsu di maiale",
                    "Yakitori di pollo",
                    "Okonomiyaki con pancetta e gamberetti",
                    "Takoyaki ripieni di polpo",
                    "Unagi alla griglia",
                    "Ramen con brodo di pollo e maiale",
                    "Chawanmushi con gamberi e funghi",
                    "Yakiniku di manzo",
                    "Shabu-shabu con manzo e verdure",
                    "Sukiyaki con manzo e tofu",
                    "Katsuobushi (fiocchi di tonnetto essiccato)",
                    "Matcha (tè verde in polvere)",
                    "Daifuku con pasta di fagioli rossi e mochi",
                    "Taiyaki con ripieno di pasta di fagioli rossi",
                    "Mochi ripieni di gelato al tè verde",
                    "Melonpan (pane dolce al gusto di melone)",
                    "Karaage di pollo",
                    "Onigiri con ripieno di tonno e maionese",
                    "Chirashi con pesce misto e riso",
                    "Hijiki (insalata di alghe dolci)",
                    "Nikujaga (stufato di manzo e patate)",
                    "Korokke (polpette di patate ripiene di carne o verdure)",
                    "Miso Soup con tofu e alghe wakame",
                ],
                "Indiano"=>[
                  "Verdure, Spezie",
                  "Pane indiano, Spezie",
                  "Pollo, Yogurt, Spezie",
                  "Ceci, Pomodoro, Spezie",
                  "Pollo, Crema di cocco, Spezie",
                ],
                "Messicano"=>[
                  "Peperoni, Cipolla, Fagioli, Formaggio fuso",
                  "Tortilla, Pollo, Bacon, Formaggio",
                  "Nachos, Carne macinata, Formaggio fuso, Guacamole, Panna acida",
                  "Tortilla, Carne di maiale, Salsa BBQ",
                  "Tortilla, Fagioli, Salsa di pomodoro, Formaggio fuso, Guacamole",
                ],
                "Turco"=>[
                  "Ceci, Coriandolo, Cumino, Aglio, Peperoncino",
                  "Pane yufka, Kebab di pollo, Verdure, Salsa",
                  "Spiedini di pollo, Verdure, Yogurt, Spezie",
                  "Panino con polpette di carne, Verdure, Salsa",
                  "Panino con kebab di agnello, Verdure, Salsa",
                ],
                "Etiope"=>[
                  "Spezie, Carne, Verdure",
                  "Carne, Spezie, Verdure",
                  "Carne cruda, Spezie, Verdure",
                  "Selezione di verdure, Spezie",
                  "Pane tradizionale etiope",
                ],
                "Coreano"=>[
                  "Germogli di soia, Sesamo, Aglio",
                  "Uova, Carote, Cipolla verde, Salsa di soia",
                  "Verdure miste, Salsa di soia, Spezie",
                  "Bevanda alcolica coreana",
                  "Cavolo cappuccio fermentato, Peperoncino in polvere, Aglio",
                ],
                "Fast-Food"=>[
                  "Hamburger, Verdure, Formaggio fuso, Salsa",
                  "Pane, Pollo, Bacon, Formaggio, Verdure, Maionese, Salsa",
                  "Pollo, Panatura, Salse",
                  "Gelato, Biscotti, Cioccolato",
                  "Pane, Manzo, Formaggio, Verdure, Ketchup, Maionese, Salsa"
                ],
                "Bevande"=>[
                    "50cl, Zero zuccheri",
                    "50cl",
                    "50cl, Non filtrata",
                    "33cl",
                    "2020, 14% vol., Tenuta Larcherhof , 75cl"
                ]
            ],
            "categories" => [
                "Italiano" => [
                    "Pizza",
                    "Primo",
                    "Primo",
                    "Antipasto",
                    "Dolce",
                    "Primo",
                    "Primo",
                    "Primo",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                    "Antipasto",
                    "Condimento",
                    "Minestra",
                    "Minestra",
                    "Minestra",
                    "Minestra",
                    "Zuppa",
                    "Secondo",
                    "Antipasto",
                    "Secondo",
                    "Antipasto",
                    "Antipasto",
                    "Primo",
                    "Antipasto",
                    "Secondo",
                    "Primo",
                    "Dolce",
                    "Dolce",
                ],
            
                "Cinese" => [
                    "Secondo",
                    "Primo",
                    "Antipasto",
                    "Contorno",
                    "Secondo",
                    "Secondo", // Chow mein
                    "Secondo", // Maiale alla pechinese
                    "Secondo", // Anatra alla pechinese
                    "Antipasto", // Gamberi fritti al miele
                    "Secondo", // Manzo in salsa piccante
                    "Primo", // Riso fritto alla cantonese
                    "Secondo", // Pesce al vapore con salsa di soia
                    "Primo", // Brodo di pollo con funghi
                    "Secondo", // Spiedini di pollo alla griglia
                    "Primo", // Noodles in brodo
                    "Secondo", // Gamberi saltati con verdure
                    "Secondo", // Maiale agrodolce
                    "Antipasto", // Salsa agrodolce
                    "Antipasto", // Salsa di soia
                    "Antipasto", // Salsa piccante
                    "Antipasto", // Salsa di arachidi
                    "Secondo", // Tofu fritto con verdure
                    "Contorno", // Patate dolci fritte
                    "Primo", // Zuppa di miso
                    "Secondo", // Hot pot
                    "Contorno", // Fagiolini saltati con aglio
                    "Bevanda", // Tè alla menta
                    "Bevanda", // Tè al gelsomino
                    "Bevanda", // Tè verde
                    "Bevanda", // Tè oolong
                ],
            
                "Giapponese" => [
                    "Antipasto",
                    "Secondo",
                    "Antipasto",
                    "Antipasto",
                    "Secondo",
                    "Primo",
                    "Antipasto",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                    "Antipasto",
                    "Secondo",
                    "Primo",
                    "Antipasto",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                    "Condimento",
                    "Bevanda",
                    "Dolce",
                    "Dolce",
                    "Dolce",
                    "Dolce",
                    "Secondo",
                    "Antipasto",
                    "Secondo",
                    "Contorno",
                    "Contorno",
                    "Antipasto",
                    "Zuppa"
                ],
            
                "Indiano" => [
                    "Antipasto",
                    "Antipasto",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                ],
            
                "Messicano" => [
                    "Antipasto",
                    "Secondo",
                    "Antipasto",
                    "Secondo",
                    "Antipasto",
                ],
            
                "Turco" => [
                    "Antipasto",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                ],
            
                "Etiope" => [
                    "Secondo",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                    "Antipasto",
                ],
            
                "Coreano" => [
                    "Antipasto",
                    "Antipasto",
                    "Secondo",
                    "Bevanda",
                    "Contorno",
                ],
            
                "Fast-Food" => [
                    "Secondo",
                    "Secondo",
                    "Antipasto",
                    "Dolce",
                    "Secondo",
                ],
            
                "Bevande" => [
                    "Bevanda",
                    "Bevanda",
                    "Bevanda",
                    "Bevanda",
                    "Bevanda",
                ],
            ],
            "prices" => [
                "Italiano" => [
                    6.99,
                    9.99,
                    8.50,
                    12.99,
                    4.99,
                    10.99,   // Spaghetti alla carbonara
                    12.99,   // Fettuccine alfredo
                    11.50,   // Risotto alla Milanese
                    14.99,   // Saltimbocca alla romana
                    22.99,   // Bistecca alla fiorentina
                    19.99,   // Ossobuco alla milanese
                    18.99,   // Cotoletta alla milanese
                    4.99,    // Bruschetta
                    8.99,    // Pesto alla genovese
                    7.50,    // Minestrone
                    8.50,    // Ribollita
                    6.99,    // Pappa al pomodoro
                    9.99,    // Zuppa di cipolle
                    15.99,   // Cacciucco
                    16.99,   // Baccalà alla Livornese
                    12.99,   // Sarde in saor
                    10.99,   // Polenta e salsiccia
                    5.99,    // Arancini
                    3.99,    // Focaccia
                    6.99,    // Pane e panelle
                    13.99,   // Melanzane alla parmigiana
                    11.99,   // Carpaccio
                    12.99,   // Vitello tonnato
                    9.50,    // Tortellini in brodo
                    3.99,    // Cannoli
                    4.50     // Granita
                ],
                "Cinese" => [
                    11.50,
                    7.99,
                    5.99,
                    9.99,
                    8.99,
                    9.99, // Chow mein
                    12.99, // Maiale alla pechinese
                    14.99, // Anatra alla pechinese
                    13.99, // Gamberi fritti al miele
                    11.99, // Manzo in salsa piccante
                    8.99, // Riso fritto alla cantonese
                    16.99, // Pesce al vapore con salsa di soia
                    6.99, // Brodo di pollo con funghi
                    10.99, // Spiedini di pollo alla griglia
                    7.99, // Noodles in brodo
                    12.99, // Gamberi saltati con verdure
                    11.99, // Maiale agrodolce
                    2.99, // Salsa agrodolce
                    1.99, // Salsa di soia
                    2.49, // Salsa piccante
                    3.99, // Salsa di arachidi
                    9.99, // Tofu fritto con verdure
                    5.99, // Patate dolci fritte
                    4.99, // Zuppa di miso
                    20.99, // Hot pot
                    7.99, // Fagiolini saltati con aglio
                    2.99, // Tè alla menta
                    2.99, // Tè al gelsomino
                    2.99, // Tè verde
                    3.99 // Tè oolong
                ],
                "Giapponese" => [
                    14.99,
                    18.99,
                    9.99,
                    22.50,
                    12.99,
                    9.50,
                    7.99,
                    12.50,
                    6.99,
                    10.99,
                    8.99,
                    18.50,
                    14.99,
                    8.50,
                    24.99,
                    26.99,
                    22.50,
                    9.99,
                    3.99,
                    2.99,
                    4.50,
                    2.99,
                    6.50,
                    2.99,
                    1.99,
                    16.99,
                    8.99,
                    10.50,
                    4.99,
                    2.50,
                ],
                "Indiano" => [
                    7.99,
                    3.99,
                    11.99,
                    12.50,
                    14.99,
                ],
                "Messicano" => [
                    8.99,
                    6.99,
                    10.99,
                    12.99,
                    7.50,
                ],
                "Turco" => [
                    5.99,
                    7.50,
                    9.99,
                    6.99,
                    7.99,
                ],
                "Etiope" => [
                    10.99,
                    11.50,
                    12.99,
                    9.99,
                    8.99,
                ],
                "Coreano" => [
                    8.50,
                    5.99,
                    9.99,
                    15.99,
                    6.99,
                ],
                "Fast-Food" => [
                    5.99,
                    8.99,
                    6.99,
                    3.99,
                    5.99,
                ],
                "Bevande" => [
                    1.99,
                    1.99,
                    3.99,
                    5.99,
                    9.99,
                ],
            ]
        ];

        foreach(Company::all() as $company){
            $typologies = $company->typologies;
            $counter=1;
            foreach($typologies as $typology){
                if($counter==1){
                    $key=$typology->name;
                    if($typology->id==1 or $typology->id==2 or $typology->id==3){
                        $randCicle=rand(20,30);
                        for($index=1;$index<=$randCicle;$index++){
                            $new_product= new Product();
                            $n=rand(0,29);
                            $products = Product::where('company_id',$company->id)->where('name',$data['names'][$key][$n])->get();
                            if(count($products)==0){
                                $new_product->name=$data['names'][$key][$n];
                                $new_product->image=$data['images'][$key][$n];
                                $new_product->description=$data['descriptions'][$key][$n];
                                $new_product->price=$data['prices'][$key][$n];
                                $numeroCasuale = mt_rand(0, 99) / 100; // genera un numero casuale tra 0 e 1
                                if ($numeroCasuale <= 0.8) {
                                    // se il numero casuale è minore o uguale a 0.8 (cioè l'80% delle volte),
                                    // restituisci 1
                                    $new_product->is_visible=1;
                                } else {
                                    // altrimenti, restituisci 0
                                    $new_product->is_visible=0;
                                }
                                $new_product->category=$data['categories'][$key][$n];
                                $new_product->company_id=$company->id;
                                $new_product->slug=Str::slug($new_product->name,'-');
                                $new_product->save();
                            }else{
                                $index=$index-1;
                            }
                        }
                        for($i=1;$i<=rand(2,5);$i++){
                            $new_product= new Product();
                            $n=rand(0,4);
                            $products = Product::where('company_id',$company->id)->where('name',$data['names']['Bevande'][$n])->get();
                            if(count($products)==0){
                                $new_product->name=$data['names']['Bevande'][$n];
                                $new_product->image=$data['images']['Bevande'][$n];
                                $new_product->description=$data['descriptions']['Bevande'][$n];
                                $new_product->price=$data['prices']['Bevande'][$n];
                                $numeroCasuale = mt_rand(0, 99) / 100; // genera un numero casuale tra 0 e 1
                                if ($numeroCasuale <= 0.8) {
                                    // se il numero casuale è minore o uguale a 0.8 (cioè l'80% delle volte),
                                    // restituisci 1
                                    $new_product->is_visible=1;
                                } else {
                                    // altrimenti, restituisci 0
                                    $new_product->is_visible=0;
                                }
                                $new_product->category=$data['categories']['Bevande'][$n];
                                $new_product->company_id=$company->id;
                                $new_product->slug=Str::slug($new_product->name,'-');
                                $new_product->save();
                            }else{
                                $index--;
                            }
                        }
                        $counter++;
                    }else{
                        for($index=1;$index<=rand(3,5);$index++){
                            $new_product= new Product();
                            $n=rand(0,4);
                            $products = Product::where('company_id',$company->id)->where('name',$data['names'][$key][$n])->get();
                            if(count($products)==0){
                                $new_product->name=$data['names'][$key][$n];
                                $new_product->image=$data['images'][$key][$n];
                                $new_product->description=$data['descriptions'][$key][$n];
                                $new_product->price=$data['prices'][$key][$n];
                                $numeroCasuale = mt_rand(0, 99) / 100; // genera un numero casuale tra 0 e 1
                                if ($numeroCasuale <= 0.8) {
                                    // se il numero casuale è minore o uguale a 0.8 (cioè l'80% delle volte),
                                    // restituisci 1
                                    $new_product->is_visible=1;
                                } else {
                                    // altrimenti, restituisci 0
                                    $new_product->is_visible=0;
                                }
                                $new_product->category=$data['categories'][$key][$n];
                                $new_product->company_id=$company->id;
                                $new_product->slug=Str::slug($new_product->name,'-');
                                $new_product->save();
                            }else{
                                $index--;
                            }
                        }
                        for($i=1;$i<=rand(2,5);$i++){
                            $new_product= new Product();
                            $n=rand(0,4);
                            $products = Product::where('company_id',$company->id)->where('name',$data['names']['Bevande'][$n])->get();
                            if(count($products)==0){
                                $new_product->name=$data['names']['Bevande'][$n];
                                $new_product->image=$data['images']['Bevande'][$n];
                                $new_product->description=$data['descriptions']['Bevande'][$n];
                                $new_product->price=$data['prices']['Bevande'][$n];
                                $numeroCasuale = mt_rand(0, 99) / 100; // genera un numero casuale tra 0 e 1
                                if ($numeroCasuale <= 0.8) {
                                    // se il numero casuale è minore o uguale a 0.8 (cioè l'80% delle volte),
                                    // restituisci 1
                                    $new_product->is_visible=1;
                                } else {
                                    // altrimenti, restituisci 0
                                    $new_product->is_visible=0;
                                }
                                $new_product->category=$data['categories']['Bevande'][$n];
                                $new_product->company_id=$company->id;
                                $new_product->slug=Str::slug($new_product->name,'-');
                                $new_product->save();
                            }else{
                                $index--;
                            }
                        }
                        $counter++;
                    }
                }
            }
        }
    }
}
