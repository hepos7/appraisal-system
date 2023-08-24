<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Appraisal;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@admin.com',
            'department' => 'it',          
            'email_verified_at' => now(),
            'type' => 'manger',          
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
      ]);
      $user2 = User::create([
        'name' => 'Admin 2',
        'email' => 'admin2@admin.com',
        'department' => 'finance',          
        'email_verified_at' => now(),
        'type' => 'manger',          
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
  ]);
      User::factory(10)->create();
      for($i=0;$i<10;$i++){
        Appraisal::factory(1)->create();
      }
    }
}
