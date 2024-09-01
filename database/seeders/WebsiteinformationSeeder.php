<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteinformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('websiteinformations')->insert([
            'name' => 'Fortress Studios',
            'contact_email' => 'Contact@fortressfilmstudios.com',
            'address' => '123 Film Street, Lagos, Nigeria',
            'phone' => '+234 800 123 4567',
            'facebook_link' => 'https://www.facebook.com/fortressstudios',
            'x_link' => 'https://www.instagram.com/fortressstudios', // Assuming 'x_link' is a placeholder for another social media or relevant link
            'instagram' => 'https://www.instagram.com/fortressstudios',
            'linked_in' => 'https://www.linkedin.com/company/fortressstudios',
            'experience_counter' => 23,
            'awards_counter' => 17,
            'projects_counter' => 67,
        ]);
    }
}
