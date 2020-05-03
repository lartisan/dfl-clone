<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Cristian Iosif',
            'email' => 'cristianiosif@me.com',
            'email_verified_at' => now(),
            'password' => bcrypt('parola'),
            'remember_token' => Str::random(10),
            'type' => User::ADMIN_TYPE,
        ]);
    }
}
