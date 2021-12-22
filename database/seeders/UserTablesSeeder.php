<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'username'        => 'admin',
            'password'        => Hash::make('admin'),
            'rememberToken'   => Str::random(15),
        ]);
        
    
    }
}
//composer dump-autoload
//php artisan db:seed
//php artisan migrate:refresh --seed