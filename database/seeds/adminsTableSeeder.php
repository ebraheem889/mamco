<?php

use App\Admin;
use Illuminate\Database\Seeder;

class adminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([

            'name' =>'super_admin',
            'email'=> 'super_admin@gmail.com',
            'password'=> bcrypt('123456789'),

        ]);
    }
}
