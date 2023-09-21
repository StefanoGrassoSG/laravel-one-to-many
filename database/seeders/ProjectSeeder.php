<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//models
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        $projects = config('projects');

        foreach ($projects as $project) {
            $slug = str()->slug($project['name']);
            Project::create([
                'name' => $project['name'],
                'slug' => $slug,
                'description' => $project['description'],
                'start_date' => $project['start_date'],
                'end_date' => $project['end_date'],
                'project_status' => $project['project_status'],
                'languages' => implode(', ', $project['languages']),
                'project_link' => $project['project_link']
            ]);
        }
    }
}
