<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'people' => 1,
            'checkin' => 2023-11-01,
            'checkout' => 2023-11-02,
            'guest_id' => 1,
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'people' => 1,
            'checkin' => 2023-11-05,
            'checkout' => 2023-11-06,
            'guest_id' => 3,
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'people' => 2,
            'checkin' => 2023-11-03,
            'checkout' => 2023-11-04,
            'guest_id' => 5,
        ];
        DB::table('reservations')->insert($param);
    }

}
