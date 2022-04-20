<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $platforms = ['dekstop','android','ios'];  
      foreach ($platforms as $platform) {
          
        DB::table('platforms')->insert([
            'name' => $platform

        ]);

      }
    }
}
