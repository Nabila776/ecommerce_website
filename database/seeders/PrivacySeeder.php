<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PrivacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privacy_tb')->insert([
            'privacy_heading' => 'Privacy header',
            'privacy_des' => 'Privacy description',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
