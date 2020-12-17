<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'imade',
            'email'=>'imade@gmail.com',
            'password'=>bcrypt('secret')
        ]);
    }
}
