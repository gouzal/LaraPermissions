<?php

use Illuminate\Database\Seeder;
use Gouzal\LaraPermissions\Role;
class RolesTableSeeder extends Seeder
{
    private $defaultRole = 'Admin';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            [
                'name' => $this->defaultRole,
            ]
        );
    }
}
