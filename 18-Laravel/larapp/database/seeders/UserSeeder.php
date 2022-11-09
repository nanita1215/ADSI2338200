<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ORM 
        $user = new User;
        $user->fullname = 'Jeremias springfield';
        $user->email = 'Jeremias@gmail.com';
        $user->phone = '123456789';
        $user->birthdate = '2000-05-15';
        $user->gender = 'Male';
        $user->address = 'Str Siempre Viva';
        $user->role = 'Admin';
        $user->password = bcrypt('admin');
        $user->save();
        
        DB::table('users')->insert([
            'fullname' => 'Homer Simpson',
            'email' => 'Homer@gmail.com',
            'phone' => '8888888',
            'birthdate' => '1976-05-06',
            'gender' => 'Female',
            'address' => 'Str Siempre viva',
            'role' => 'Customer',
            'password' => Hash::make('customer')
        ]);
    }
}
