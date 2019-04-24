<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('nar_division')->insert([
            'division_name' => 'Barisal',
            'division_name_bangla' => 'বরিশাল',
            'division_code' => '10',
            'updated_at' => Carbon::parse('2019-04-01'),
            'created_at' => Carbon::parse('2019-04-01')
        ]);
        DB::table('nar_division')->insert([
            'division_name' => 'Chittagong',
            'division_name_bangla' => 'চট্টগ্রাম',
            'division_code' => '20',
            'updated_at' => Carbon::parse('2019-04-01'),
            'created_at' => Carbon::parse('2019-04-01')
        ]);
    }
}
