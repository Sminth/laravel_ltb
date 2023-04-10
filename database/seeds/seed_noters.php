<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_noters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('noters')->insert([
            [

            'contenu' => 'sdssdsd',
            'note' => '12',
            
            

             
            ],
            [
                'contenu' => 'sdssdsd',
                'note' => '12',
            
            
                 
            ],            

        ]);
    }
}
