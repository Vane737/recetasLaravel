<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Vane',
            'email'=>'vane@hotmail.com',
            'password'=>Hash::make('65068987'),
            'telefono'=>'65068987',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('users')->insert([
            'name'=>'Pablo',
            'email'=>'pablo@hotmail.com',
            'password'=>Hash::make('65068981'),
            'telefono'=>'60009031',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
