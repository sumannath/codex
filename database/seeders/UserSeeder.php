<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\StorageAccount;
use App\Models\File;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Suman',
            'email' => 'a@b.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10)
        ]);
        User::factory()
            ->count(50)
            ->has(
                StorageAccount::factory()
                              ->count(2)
                              ->has(
                                  File::factory()
                                       ->count(50)
                              )
            )
            ->create();
    }
}
