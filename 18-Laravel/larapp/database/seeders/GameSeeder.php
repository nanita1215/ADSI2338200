<?php

namespace Database\Seeders;
use App\Models\Game;

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gm = new Game;
        $gm->name = 'Mario Odyssey';
        $gm->description = 'Lorem ipsum dolor sit amet';
        $gm->user_id = 1;
        $gm->category_id = 1;
        $gm->slider = 1;
        $gm->price = 55;
        $gm->save();    

        $gm = new Game;
        $gm->name = ' Halo Infinite Odyssey';
        $gm->description = 'Lorem ipsum dolor sit amet';
        $gm->user_id = 1;
        $gm->category_id = 2;
        $gm->slider = 0;
        $gm->price = 60;
        $gm->save();  

        $gm = new Game;
        $gm->name = 'God of war Ragnarok';
        $gm->description = 'Lorem ipsum dolor sit amet';
        $gm->user_id = 1;
        $gm->category_id = 3;
        // los que tengan slider 1 van a aparecer en el carusel del juego 
        $gm->slider = 1;
        $gm->price = 80;
        $gm->save();  
    }
}
