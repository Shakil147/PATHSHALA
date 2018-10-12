<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 30 records of customers
        factory(App\Teacher::class, 30)->create()->each(function ($teacher) {
            // Seed the relation with one academic
            $contact = factory(App\TeacherContact::class)->make();
            $teacher->contact()->save($contact);

            // Seed the relation with 1 academic
            $academic = factory(App\TeacherAcademic::class, 1)->make();
            $teacher->academic()->saveMany($academic);
        });
    }
}
