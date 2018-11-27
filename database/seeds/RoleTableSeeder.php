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
      $role_employee->shortname = 'TL';
      $role_employee->name = 'team leader';
      $role_employee->description = 'Team Leader User';
      $role_employee->save();

      $role_employee = new Role();
      $role_employee->shortname = 'ATL';
      $role_employee->name = 'assitant team leader';
      $role_employee->description = 'Assistant Team Leader User';
      $role_employee->save();

      $role_employee = new Role();
      $role_employee->shortname = 'M';
      $role_employee->name = 'member';
      $role_employee->description = 'Team Member User';
      $role_employee->save();
    }
}
