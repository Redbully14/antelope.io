<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Role Types
         *
         */
        $RoleItems = [
            [
                'name'        => 'System Administrator',
                'slug'        => 'superadmin',
                'description' => 'This role manages the entire website.',
                'level'       => 999,
            ],
            [
                'name'        => 'Administrator',
                'slug'        => 'admin',
                'description' => 'This role has administrative powers over the website.',
                'level'       => 1,
            ],
            [
                'name'        => 'Member',
                'slug'        => 'member',
                'description' => 'This role has regular permissions over the website.',
                'level'       => 0,
            ],
        ];

        /*
         * Add Role Items
         *
         */
        foreach ($RoleItems as $RoleItem) {
            $newRoleItem = config('roles.models.role')::where('slug', '=', $RoleItem['slug'])->first();
            if ($newRoleItem === null) {
                $newRoleItem = config('roles.models.role')::create([
                    'name'          => $RoleItem['name'],
                    'slug'          => $RoleItem['slug'],
                    'description'   => $RoleItem['description'],
                    'level'         => $RoleItem['level'],
                ]);
            }
        }
    }
}
