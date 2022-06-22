<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Model\Product::factory()->count(50)->create();
        \App\Models\Model\Review::factory()->count(300)->create();

        DB::table('log_a_p_i_s')->insert([
            'request' => Str::random(10),
            'log_message' => Str::random(20),
        ]);
    }
}
