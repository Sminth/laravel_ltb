<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_ligne__reservations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ligne__reservations')->insert([
            [

            'num_res' => '12',
            'sous_total' => '1500',
            'nomb_pers'=> '15',
            'nomb_adulte'=>'23',
            'numb_enfant'=>'20',
            
            

             
            ],
            [

            'num_res' => '12',
            'sous_total' => '1500',
            'nomb_pers'=> '15',
            'nomb_adulte'=>'2',
            'numb_enfant'=>'204',
            
                 
            ],            

        ]);
    }
}
