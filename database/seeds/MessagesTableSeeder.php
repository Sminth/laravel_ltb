<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id' => '1',
                'message' => '<p><strong>Mon&nbsp;enfant,&nbsp;Fais-toi&nbsp;petit,&nbsp;demande&nbsp;cette gr&acirc;ce&nbsp;de&nbsp;la&nbsp;petitesse.&nbsp;Les&nbsp;petits&nbsp;sont&nbsp;tr&egrave;s&nbsp;pr&egrave;s&nbsp;de&nbsp;Mon&nbsp;C&oelig;ur. Je&nbsp;les&nbsp;comble.&nbsp;Je&nbsp;les&nbsp;serre&nbsp;sur&nbsp;Mon&nbsp;C&oelig;ur.&nbsp;Au&nbsp;contact&nbsp;de&nbsp;Mon C&oelig;ur,&nbsp;leurs&nbsp;c&oelig;urs&nbsp;sont&nbsp;transform&eacute;s</strong></p>',
                'lien' => 'https://www.fcdj.org/file/book/Book_PBM1_fr_web.pdf#page=57',
                'activer' => '1',
                'created_at' => '2021-07-17 10:32:57',
                'updated_at' => '2021-07-17 10:34:47',
            ),
        ));
        
        
    }
}