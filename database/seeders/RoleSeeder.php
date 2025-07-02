<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        $admin = Role::create([
            'name' => 'admin'
        ]);
        $userRole = Role::create([
            'name' => 'userRole'
        ]);

        // Si creaste permisos antes y quieres asignarlos:
        $admin->syncPermissions([
            // 'access dashboard',
            // 'manage users',
            // 'manage progreso'

            'manage_progreso',

            'access_dashboard',
            'manage_users',
            'manage_roles',
            'manage_permissions',
        ]);

        $userRole->syncPermissions([
            'access_dashboard'
        ]);

        // Asignar el rol admin al primer usuario (puedes cambiar el ID según tu caso)
        $user = User::find(1);
        $user->syncRoles(['admin']);
    }
}
