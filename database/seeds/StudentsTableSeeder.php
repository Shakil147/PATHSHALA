<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 records of customers
        factory(App\Student::class, 60)->create()->each(function ($teacher) {
            // Seed the relation with one contact
            $contact = factory(App\StudentContact::class)->make();
            $teacher->contact()->save($contact);

                // Seed the relation with one guardian
            $guardianInfo = factory(App\StudentGuardian::class)->make();
            $teacher->guardianInfo()->save($guardianInfo);
        });
    }
}
