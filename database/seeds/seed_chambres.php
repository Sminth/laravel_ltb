<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_chambres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chambres')->insert([
            [

            'num_chambre' => '1',
            'description' => '5 etoile',
            'photo'=> 'https://static.cotemaison.fr/medias_11749/w_2048,h_1146,c_crop,x_0,y_164/w_640,h_360,c_fill,g_north/v1518095166/chambre-parentale-avec-mur-bleu_6015724.jpg',
            'superficie' => 'sqss',
            'limite' => '2',
            'prix' => '1500',
            'id_EtatChambre' => '1',

             
            ],
            [

                'num_chambre' => '2',
                'description' => 'foot',
                'photo'=> 'https://www.google.com/url?sa=i&url=https%3A%2F%2Ffr.depositphotos.com%2Fstock-photos%2Fchambre-%25C3%25A0-coucher.html&psig=AOvVaw3J5UxQqO7EmaeJIUpCcKMH&ust=1684492303802000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMi-pv3U_v4CFQAAAAAdAAAAABAI',
                'superficie' => 'sqss',
                'limite' => '21',
                'prix' => '2100',
                'id_EtatChambre' => '2',
                 
            ],
            [

                'num_chambre' => '3',
                'description' => 'foot',
                'photo'=> 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.westwing.fr%2Finspiration%2Finterieur%2Fchambre-a-coucher%2Fchambre-romantique%2F&psig=AOvVaw3J5UxQqO7EmaeJIUpCcKMH&ust=1684492303802000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMi-pv3U_v4CFQAAAAAdAAAAABAN',
                'superficie' => 'sqss',
                'limite' => '22',
                'prix' => '2105',
                'id_EtatChambre' => '3',
                 
            ],            

        ]);
    }
}
