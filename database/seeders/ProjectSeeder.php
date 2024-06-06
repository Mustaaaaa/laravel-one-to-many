<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {

            $project = new Project();

            $project->title = $faker->sentence(rand(2, 6));
            $project->description = $faker->paragraph();
            $project->date_of_creation = $faker->date();
            $project->link = $faker->url();
            $project->created_by = $faker->name();

            $project->save();
        }
    }
}
