<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Websiteinformation;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Fortress Admin',
            'email' => 'admin@fortressstudios.com',
            'password' => Hash::make('password')
        ]);


        $this->call([
            WebsiteinformationSeeder::class,
            ServiceSeeder::class,
            // FilmSeeder::class,
            // TestimonialSeeder::class, 
            TeamSeeder::class,
        ]);
    }
}
