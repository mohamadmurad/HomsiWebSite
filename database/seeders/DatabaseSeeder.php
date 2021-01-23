<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'mohamad murad',
            'email' => 'mhdite7@gmail.com',
            'password' => '$2y$10$3pP3cOCLkQRq7NDJ6k/zXOQcHsedy9o8rweWlABlSpU3AjZLCjklW',
          //  'isAdmin' => 1,
           // 'departments_id' => null,
        ]);

        DB::table('users')->insert([
            'name' => 'Sema ',
            'email' => 'sema1997mreden@gmail.com',
            'password' => '$2y$10$3pP3cOCLkQRq7NDJ6k/zXOQcHsedy9o8rweWlABlSpU3AjZLCjklW',
            //  'isAdmin' => 1,
            // 'departments_id' => null,
        ]);
    }
}
