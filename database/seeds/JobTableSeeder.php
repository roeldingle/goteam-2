<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $job = new Job();
      $job->shortname = 'WEBDEV_SPEC1';
      $job->name = 'Web Developer Specialist 1';
      $job->description = 'Specialist 1Specialist 1Specialist 1Specialist 1';
      $job->save();

      $job = new Job();
      $job->shortname = 'WEBDEV_SPEC2';
      $job->name = 'Web Developer Specialist 2';
      $job->description = 'Specialist2';
      $job->save();

      $job = new Job();
      $job->shortname = 'WEBDEV_SPEC3';
      $job->name = 'Web Developer Specialist 3';
      $job->description = 'Specialist3';
      $job->save();

    }
}
