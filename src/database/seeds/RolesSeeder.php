<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array('Tank', 'Fighter', 'Jungler', 'Mage', 'Marksman', 'Support', 'Assassin');
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'role' => $role,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
