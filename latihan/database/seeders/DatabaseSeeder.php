<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Hash;
use Illuminate\Database\Seeder;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory ()->create([
        //    'name' => 'Test User',
        //  'email' => 'test@example.com',
        //]);

        //insert data user
        DB::table("users")->insert([
            'nama' => Str::random(10),
            'email' => Str::random(10). "@example.com",
            'password' => Hash::make('password'),
        ]);

        //insert data mahasiswa menggunakan query builder 
        //DB::table('mahasiswa')->insert(
        //    [
        //      'npm' => '2428250027',
        //      'nama_mahasiswa' => 'Justyn Cannavaro',
        //      'tempat_lahir' => 'Korea',
        //      'tanggal_lahir' => '2006-12-09',
        //      'alamat' => 'Palembang',
        //      'created_at' => ("Y-m-d H:i:s")
        //    ]
        //    );
        
        //DB::table('mahasiswa')
        //->where("npm","2428250027")
        //->update(["npm" => "2428250031"]);

                Mahasiswa::insert([
                'npm' => '2428250027',
                'nama_mahasiswa' => 'Justyn Cannavaro',
                'tempat_lahir' => 'Korea',
                'tanggal_lahir' => '2006-12-09',
                'alamat' => 'Palembang',
                'created_at' => ("Y-m-d H:i:s")
            ]
            );

            //retrive all data
            mahasiswa::all();
            mahasiswa::where('id', '<', 3)->get(); //select * from mahasiswa where id < 3

             mahasiswa::select(['npm', 'nama'])->get(); //select npm,nama for mahasiswa
    }
}
