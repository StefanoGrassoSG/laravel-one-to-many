<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//models
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::truncate();

        $types = config('types');

        foreach ($types as $type) {
            $slug = str()->slug($type['name']);
            Type::create([
                'name' => $type['name'],
                'slug' => $slug
            ]);
        }
    }
}
