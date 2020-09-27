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
            'name'=>'younes',
            'email'=>'naouielma@gmail.com',
            'password'=>bcrypt('naouieulma@gmail.com')
        ]);
    }
}
