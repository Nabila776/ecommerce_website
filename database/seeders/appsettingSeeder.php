<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class appsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'title' => 'app title',
            'offer'         => 'Free Shipping for all Order of $99',
            'Address' => 'B-25, 4th Floor, Mannan Plaza Dhaka, 1229',
            'Email_Address' => 'nabila@gmail.com',
            'Phone' =>'+880-1837621897',
            'Favicon_img' =>' ',
            'site_Logo' => ' ',
            'Admin_Align' => ' ',
            'Office_Time' => 'Monday - Friday: 08:00 - 22:00
                                    Saturday, Sunday: Closed',
            'copyright_text' => '2022 © Copyright admin.com',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);


    }
}
