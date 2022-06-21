<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveryinfo_tb')->insert([
            'u_name' => 'Bd task company',
            'Amount' => 6868,
            'pay_method' => 'Nagad',
            'Fees' => 45.00,
            'Comments' => 'OM Name: Demo
                            OM Phone No: +8801316935839
                            Transaction No: 12156882510
                            ID Card No: 778 797 897',
            'Date'      => date('2022-02-24'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
