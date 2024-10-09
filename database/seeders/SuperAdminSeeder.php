<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleId = DB::table('roles')->where('name', 'Super Admin')->first()->id;

        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'super.admin@dex.co.id',
            'password' => Hash::make('Sup3r@dminP@ssw0rd'), 
            'role_id' => $roleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
