<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChampionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $champions = array(
            array(
                'name' => 'Lulu',
                'detail' => 'the Fae Sorceress',
                'image_url' => 'https://images.contentstack.io/v3/assets/blt370612131b6e0756/blt4a18be39de40e34d/6010aa240cb0aa0ffcdd5b9a/Lulu_Skin01.jpg',
            ),
            array(
                'name' => 'Morgana',
                'detail' => 'the Fallen',
                'image_url' => 'https://images.contentstack.io/v3/assets/blt370612131b6e0756/blt838057ea08049fed/61a73da79b3c850ceca051d6/Morgana_Skin02.jpg',
            ),
            array(
                'name' => 'Lee Sin',
                'detail' => 'the Blink Monk',
                'image_url' => 'https://images.contentstack.io/v3/assets/blt370612131b6e0756/blt42c4f44d49395681/5f7f79d27f76200f1733c2e0/leesin_skin01.jpg',
            ),
            array(
                'name' => 'Lucian',
                'detail' => 'the Purifier',
                'image_url' => 'https://images.contentstack.io/v3/assets/blt370612131b6e0756/bltdd53366d4872503c/60db9489acc3ac47265612a8/Lucian_Skin02-splash.jpg',
            ),
            array(
                'name' => 'Leona',
                'detail' => 'the Radiant Dawn',
                'image_url' => 'https://images.contentstack.io/v3/assets/blt370612131b6e0756/blt64a4250dd145c8d5/6089e6e4f6a831100b5dd962/Leona_Skin01_splash.jpg',
            ),
            array(
                'name' => 'Olaf',
                'detail' => 'the Berserker',
                'image_url' => 'https://images.contentstack.io/v3/assets/blt370612131b6e0756/blt3be7e0d6834d5eb7/5f7f7aa250868d0ef21209e4/olaf_skin01.jpg',
            ),
            
        );
        foreach ($champions as $champion) {
            DB::table('champions')->insert([
                'name' => $champion['name'],
                'detail' => $champion['detail'],
                'image_url' => $champion['image_url'],
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
