<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::query()->truncate();

        $tree = [
            'Technology' => [
                'Web Development',
                'Mobile Development',
                'Artificial Intelligence',
                'Cybersecurity',
                'DevOps',
                'Databases',
            ],
            'Programming' => [
                'PHP',
                'Laravel',
                'JavaScript',
                'React',
                'Node.js',
                'Python',
            ],
            'Tutorials' => [
                'Beginner Guides',
                'Project Walkthroughs',
                'Tips & Tricks',
                'Best Practices',
            ],
            'Design' => [
                'UI Design',
                'UX Design',
                'Design Systems',
                'Typography',
            ],
            'Business & Freelancing' => [
                'Freelancing',
                'Personal Branding',
                'Productivity',
                'Client Work',
            ],
            'Career' => [
                'Internships',
                'Interview Prep',
                'CV & Portfolio',
                'Learning Roadmaps',
            ],
            'News & Updates' => [
                'Tech News',
                'Framework Releases',
                'Security Alerts',
            ],
            'Community' => [
                'Events',
                'Case Studies',
                'Opinions',
            ],
        ];

        $sort = 1;

        foreach ($tree as $parentName => $children) {
            $parent = Category::query()->create([
                'name' => $parentName,
                'slug' => Str::slug($parentName),
                'parent_id' => null,
                'sort' => $sort++,
                'is_active' => true,
                'description' => "Articles and resources about {$parentName}.",
            ]);

            $childSort = 1;

            foreach ($children as $childName) {
                Category::query()->create([
                    'name' => $childName,
                    'slug' => Str::slug($childName),
                    'parent_id' => $parent->id,
                    'sort' => $childSort++,
                    'is_active' => true,
                    'description' => "{$childName} posts under {$parentName}.",
                ]);
            }
        }

        // optional 3rd level: Programming > PHP
        $programming = Category::query()->where('slug', 'programming')->first();
        if ($programming) {
            $php = Category::query()
                ->where('parent_id', $programming->id)
                ->where('slug', 'php')
                ->first();

            if ($php) {
                $leafs = ['OOP', 'Composer', 'Testing', 'Performance', 'Security'];

                $leafSort = 1;
                foreach ($leafs as $leafName) {
                    Category::query()->create([
                        'name' => $leafName,
                        'slug' => Str::slug($leafName),
                        'parent_id' => $php->id,
                        'sort' => $leafSort++,
                        'is_active' => true,
                        'description' => "{$leafName} articles for PHP.",
                    ]);
                }
            }
        }
    }
}
