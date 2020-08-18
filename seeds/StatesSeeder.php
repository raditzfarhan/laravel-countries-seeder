<?php

use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->truncate();

        $items = [
            ['country_code' => 'MY', 'code' => 'JOH', 'name' => 'Johor', 'long_name' => 'Johor Darul Takzim', 'capital' => 'Johor Bahru'],
            ['country_code' => 'MY', 'code' => 'KED', 'name' => 'Kedah', 'long_name' => 'Kedah Darul Aman', 'capital' => 'Alor Setar'],
            ['country_code' => 'MY', 'code' => 'KEL', 'name' => 'Kelantan', 'long_name' => 'Kelantan Darul Naim', 'capital' => 'Kota Bahru'],
            ['country_code' => 'MY', 'code' => 'MLK', 'name' => 'Melaka', 'long_name' => 'Melaka Bandaraya Bersejarah', 'capital' => 'Bandar Melaka'],
            ['country_code' => 'MY', 'code' => 'NSN', 'name' => 'Negeri Sembilan', 'long_name' => ' Negeri Sembilan Darul Khusus', 'capital' => 'Seremban'],
            ['country_code' => 'MY', 'code' => 'PAH', 'name' => 'Pahang', 'long_name' => 'Pahang Darul Makmur',  'capital' => 'Kuantan'],
            ['country_code' => 'MY', 'code' => 'PEN', 'name' => 'Pulau Pinang', 'long_name' => 'Pulau Pinang Pulau Mutiara',  'capital' => 'George Town'],
            ['country_code' => 'MY', 'code' => 'PRK', 'name' => 'Perak', 'long_name' => 'Perak Darul Ridzuan',  'capital' => 'Ipoh'],
            ['country_code' => 'MY', 'code' => 'PER', 'name' => 'Perlis', 'long_name' => 'Perlis Indera Kayangan',  'capital' => 'Kangar'],
            ['country_code' => 'MY', 'code' => 'SEL', 'name' => 'Selangor', 'long_name' => 'Selangor Darul Ehsan', 'capital' => 'Shah Alam'],
            ['country_code' => 'MY', 'code' => 'TER', 'name' => 'Terengganu', 'long_name' => 'Terengganu Darul Iman',  'capital' => 'Kuala Terengganu'],
            ['country_code' => 'MY', 'code' => 'SBH', 'name' => 'Sabah', 'long_name' => 'Sabah Negeri Di Bawah Bayu', 'capital' => 'Kota Kinabalu'],
            ['country_code' => 'MY', 'code' => 'SWK', 'name' => 'Sarawak', 'long_name' => 'Sarawak Bumi Kenyalang', 'capital' => 'Kuching'],
            ['country_code' => 'MY', 'code' => 'KUL', 'name' => 'WP Kuala Lumpur', 'long_name' => 'Wilayah Persekutuan Kuala Lumpur',  'capital' => 'Kuala Lumpur'],
            ['country_code' => 'MY', 'code' => 'LBU', 'name' => 'WP Labuan', 'long_name' => 'Wilayah Persekutuan Labuan', 'capital' => 'Labuan'],
            ['country_code' => 'MY', 'code' => 'PTJ', 'name' => 'WP Putrajaya', 'long_name' => 'Wilayah Persekutuan Putrajaya', 'capital' => 'Putrajaya'],

        ];

        \DB::table('states')->insert($items);
    }
}
