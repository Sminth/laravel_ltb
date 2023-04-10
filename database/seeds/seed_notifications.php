<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_notifications extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('notifications')->insert([
            [

            'titre' => 'sdssdsd',
            'message' => 'sfxxxxx',
            
            

             
            ],
            [
                'titre' => 'sdssdsd',
                'message' => 'sfxxxxx',
            
            
                 
            ],            

        ]);
        
    }
}
