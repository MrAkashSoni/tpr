<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
  public function run()
  {
    User::create([
        'name'      =>  'Admin',
        'email'     =>  'admin',
        'password'  =>  Hash::make('1'),
    ]);
  }
}
