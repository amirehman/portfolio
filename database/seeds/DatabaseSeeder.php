<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Experience::class, 10)->create();
        // factory(App\ExperienceList::class, 100)->create();
        // factory(App\Project::class, 15)->create();
        // factory(App\Element::class, 40)->create();
        // factory(App\ProjectPage::class, 70)->create();
        // factory(App\ProjectElement::class, 90)->create();
        factory(App\User::class, 10)->create();
    }
}
