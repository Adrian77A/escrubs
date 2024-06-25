<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * php artisan make:seeder UserSeeder
     * php artisan db:seed --class=UserSeeder

     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Desarrollo',
            'email' => 'desarrollo@escrubs.com',
        ]);
        $role = Role::create(['name' => 'Desarrollo']);
        $user->assignRole($role);
    }
}
