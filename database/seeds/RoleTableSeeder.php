<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_employee = new Role();
      $role_employee->shortname = 'SA';
      $role_employee->name = 'Superadmin';
      $role_employee->description = 'Supreme being! controls everything';
      $role_employee->save();

      $role_employee = new Role();
      $role_employee->shortname = 'A';
      $role_employee->name = 'Admin';
      $role_employee->description = 'Facilitates the system';
      $role_employee->save();

      $role_employee = new Role();
      $role_employee->shortname = 'M';
      $role_employee->name = 'member';
      $role_employee->description = 'Regular system user';
      $role_employee->save();
    }
}
