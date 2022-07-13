<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
    
        $user->name = 'admin';
        $user->email = 'admin@paletstilo.cl';
        $user->role = true;
        $user->password =Hash::make(123456789);
        
        $user->save();
    }
}
