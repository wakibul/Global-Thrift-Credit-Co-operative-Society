<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('roles')->truncate();
        // DB::table('permissions')->truncate();
        // DB::table('model_has_roles')->truncate();
        // DB::table('role_has_permissions')->truncate();
        // DB::table('model_has_permissions')->truncate();
        //Role::truncate();
        $roles_array = [
            [
                'name'        => "Admin",
                'permissions' => [
                    [
                        'name' => 'view masters',
                    ],
                    [
                        'name' => 'add masters',
                    ],
                    [
                        'name' => 'edit masters',
                    ],
                    [
                        'name' => 'delete masters',
                    ],
                    [
                        'name' => 'add employee',
                    ],
                    [
                        'name' => 'delete employee',
                    ],

                ],
            ],
            [
                'name'        => "Manager",
                'permissions' => [
                    [
                        'name' => 'add employee',
                    ],
                    [
                        'name' => 'delete employee',
                    ],
                    [
                        'name' => 'voucher entry',
                    ],

                ],
            ],
            [
                'name'        => "DEO",
                'permissions' => [
                    [
                        'name' => 'data entry',
                    ],
                    [
                        'name' => 'reject department leave',
                    ],
                ],
            ],

        ];
        foreach ($roles_array as $role_array) {
            $role_data = [
                'name' => $role_array['name'],
            ];
            $role = Role::create($role_data);
            foreach ($role_array['permissions'] as $permisssion_array) {
                $permisssion_data = [
                    'name' => $permisssion_array['name'],
                ];
                $permission = Permission::firstOrCreate($permisssion_data);
                $role->givePermissionTo($permission);
            }
        }
        $users = User::get();
        foreach ($users as $key => $user) {
            $user->assignRole("User");
        }
    }
}
