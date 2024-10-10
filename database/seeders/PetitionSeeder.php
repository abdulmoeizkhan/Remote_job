<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Petition;

class PetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           Petition::factory(10)->create();
    //   DB::table("petitions")->insert([
    //     "title"=>Str::random(10),
    //     "category"=>Str::random(20),
    //     "description"=>Str::random(30),
    //     "author"=>Int::random(10),
    //     "signees"=>Int::random(10)
    //   ]);
    }
}
