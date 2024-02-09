<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // user Role admin
        $admin = User::updateOrCreate([
            'name'  => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('12345678')
        ],[
            'name'  => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('12345678')
        ]);

        $admin ->assignRole('admin');


        // user Role Dinas
        $dinas = User::updateOrCreate([
            'name'  => 'dinas',
            'email' => 'dinas@email.com',
            'password' => bcrypt('12345678')
        ],[
            'name'  => 'dinas',
            'email' => 'dinas@email.com',
            'password' => bcrypt('12345678')
        ]);

        $dinas ->assignRole('dinas');

        // user Role medik
        $medik = User::updateOrCreate([
            'name'  => 'medik',
            'email' => 'medik@email.com',
            'password' => bcrypt('12345678')
        ],[
            'name'  => 'medik',
            'email' => 'medik@email.com',
            'password' => bcrypt('12345678')
        ]);

        $medik ->assignRole('medik');

        // user Role inseminator
        $inseminator = User::updateOrCreate([
            'name'  => 'inseminator',
            'email' => 'inseminator@email.com',
            'password' => bcrypt('12345678')
        ],[
            'name'  => 'inseminator',
            'email' => 'inseminator@email.com',
            'password' => bcrypt('12345678')
        ]);

        $inseminator ->assignRole('inseminator');


        // user Role Peternak
        $peternak = User::updateOrCreate([
            'name'  => 'peternak',
            'email' => 'peternak@email.com',
            'password' => bcrypt('12345678')
        ],[
            'name'  => 'peternak',
            'email' => 'peternak@email.com',
            'password' => bcrypt('12345678')
        ]);

        $peternak ->assignRole('peternak');

    }
}
