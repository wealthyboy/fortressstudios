<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            [
                'name' => 'Moses Inwang',
                'expertise' => 'Cinematographer',
                'bio_statement' => 'Moses Inwang is a celebrated cinematographer based in Lagos, known for his ability to blend visual storytelling with stunning cinematic techniques. With years of experience in the film industry, Moses has contributed to numerous acclaimed projects, making a significant impact on Nigerian cinema.',
                'linkedin_link' => 'https://www.linkedin.com/in/moses-inyang',
                'twitter_link' => 'https://twitter.com/mosesinyang',
                'email_address' => 'moses.inyang@example.com',
                'instagram_link' => 'https://instagram.com/mosesinyang',
                'status' => true,

            ],
        ]);
    }
}
