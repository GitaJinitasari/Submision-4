<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guestbook')->insert([
            'nama' => 'Gita',
            'alamat' => 'Tasikmalaya',
            'email' => 'gitaajinitasarilll@gmail.com',
            'nomor_Handphone' => '0852',
        ]);

        \App\Models\Guestbook::factory(33)->create();

    }
}