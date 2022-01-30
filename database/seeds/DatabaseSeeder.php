<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf' => '00000000', 
            'name' => 'admin', 
            'phone' => '000000000', 
            'birth' => '1900-10-01', 
            'gender' => 'M', 
            'email' => 'admin', 
            'password' => env('PASSWORD_HASH') ? bcrypt('admin') : 'admin', 
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
