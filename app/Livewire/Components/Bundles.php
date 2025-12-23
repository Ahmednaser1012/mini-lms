<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Bundles extends Component
{
    public function render()
    {
        $bundles = [
            [
                'id' => 1,
                'title' => 'One Man Show Digital Marketer',
                'level' => 'Intermediate',
                'duration' => '8 Weeks',
                'hours' => '22hr 30min',
                'lectures' => '34 Courses',
                'imageTextFirst' => 'ONE MAN SHOW',
                'imageTextSecond' => 'DIGITAL MARKETEER',
                'bgGradient' => 'from-purple-900 via-purple-800 to-pink-800',
                'strokeColor' => '#ec4899'
            ],
            [
                'id' => 2,
                'title' => 'How to the Lead',
                'level' => 'Intermediate',
                'duration' => '8 Weeks',
                'hours' => '22hr 30min',
                'lectures' => '34 Courses',
                'imageTextFirst' => 'HOW TO LEAD',
                'imageTextSecond' => 'CREATIVE INDUSTRY FIELD',
                'bgGradient' => 'from-purple-950 via-fuchsia-900 to-rose-900',
                'strokeColor' => '#d946ef'
            ],
            [
                'id' => 3,
                'title' => 'Data Analysis',
                'level' => 'Intermediate',
                'duration' => '8 Weeks',
                'hours' => '22hr 30min',
                'lectures' => '34 Courses',
                'imageTextFirst' => 'DATA',
                'imageTextSecond' => 'ANALYSIS',
                'bgGradient' => 'from-slate-900 via-purple-900 to-indigo-900',
                'strokeColor' => '#a855f7'
            ]
        ];

        return view('livewire.components.bundles', ['bundles' => $bundles]);
    }
}
