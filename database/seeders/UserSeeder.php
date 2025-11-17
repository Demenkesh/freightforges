<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        \Database\Factories\UserFactory::new()->count(1)->create(); // create 1 user
    }
}
