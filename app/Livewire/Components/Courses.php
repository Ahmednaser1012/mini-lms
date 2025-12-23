<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Courses extends Component
{
    public $activeCategory = 'Featured Courses';
    public $limit = null;
    public $showHeader = true;
    public $showTabs = true;

    public function setActiveCategory($category)
    {
        $this->activeCategory = $category;
    }

    public function render()
    {
        $categories = ["Featured Courses", "Graphic Design", "Flutter", "Google ADS", "Business Development", "Android"];

        $courses = [
            [
                'id' => 1,
                'title' => 'One Man Show Digital Marketer',
                'level' => 'Intermediate',
                'duration' => '8 Weeks',
                'hours' => '22hr 30min',
                'lectures' => '34 Lectures',
                'rating' => 5,
                'category' => 'Featured Courses',
                'bgGradient' => 'from-purple-900 to-pink-800'
            ],
            [
                'id' => 2,
                'title' => 'Creative Coding for Beginners',
                'level' => 'Beginner',
                'duration' => '6 Weeks',
                'hours' => '15hr 45min',
                'lectures' => '18 Lectures',
                'rating' => 4,
                'category' => 'Featured Courses',
                'bgGradient' => 'from-blue-900 to-indigo-800'
            ],
            [
                'id' => 3,
                'title' => 'Advanced UX Design Techniques',
                'level' => 'Advanced',
                'duration' => '10 Weeks',
                'hours' => '30hr 20min',
                'lectures' => '25 Lectures',
                'rating' => 5,
                'category' => 'Graphic Design',
                'bgGradient' => 'from-slate-800 to-slate-900'
            ],
            [
                'id' => 4,
                'title' => 'Flutter Development Masterclass',
                'level' => 'Intermediate',
                'duration' => '12 Weeks',
                'hours' => '40hr 00min',
                'lectures' => '50 Lectures',
                'rating' => 5,
                'category' => 'Flutter',
                'bgGradient' => 'from-cyan-700 to-blue-700'
            ],
            [
                'id' => 5,
                'title' => 'Google Ads Certification',
                'level' => 'Beginner',
                'duration' => '4 Weeks',
                'hours' => '10hr 30min',
                'lectures' => '12 Lectures',
                'rating' => 4,
                'category' => 'Google ADS',
                'bgGradient' => 'from-orange-600 to-red-600'
            ],
            [
                'id' => 6,
                'title' => 'Business Strategy & Development',
                'level' => 'Advanced',
                'duration' => '8 Weeks',
                'hours' => '20hr 15min',
                'lectures' => '22 Lectures',
                'rating' => 5,
                'category' => 'Business Development',
                'bgGradient' => 'from-emerald-700 to-teal-700'
            ]
        ];

        $filteredCourses = $this->activeCategory === 'Featured Courses' 
            ? $courses 
            : array_filter($courses, fn($course) => $course['category'] === $this->activeCategory);
        
        $displayCourses = count($filteredCourses) > 0 ? array_values($filteredCourses) : $courses;
        
        if ($this->limit) {
            $displayCourses = array_slice($displayCourses, 0, $this->limit);
        }

        return view('livewire.components.courses', [
            'categories' => $categories,
            'courses' => $displayCourses
        ]);
    }
}
