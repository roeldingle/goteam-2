<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_TL = Role::where('shortname', 'SA')->first();
      $role_ATL = Role::where('shortname', 'A')->first();
      $role_M = Role::where('shortname', 'M')->first();

      $employee = new User();
      $employee->email = 'rmdingle@straightarrow.com.ph';
      $employee->password = bcrypt('secret');
      $employee->save();
      $employee->roles()->attach($role_TL);


      $employee = new User();
      $employee->email = 'lcchua@straightarrow.com.ph';
      $employee->password = bcrypt('secret');
      $employee->save();
      $employee->roles()->attach($role_ATL);

      $employee = new User();
      $employee->email = 'kcvergara@straightarrow.com.ph';
      $employee->password = bcrypt('secret');
      $employee->save();
      $employee->roles()->attach($role_M);
    }
}
