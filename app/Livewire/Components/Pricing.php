<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Pricing extends Component
{
    public $planType = 'individual';

    public function setPlanType($type)
    {
        $this->planType = $type;
    }

    public function render()
    {
        $features = [
            "Full access to all courses",
            "Full access to material of courses",
            "Engage with course instructors",
            "Get certificate of completion"
        ];

        $plans = [
            [
                'price' => 350,
                'period' => '/month',
                'title' => 'Monthly',
            ],
            [
                'price' => 900,
                'period' => '/yearly',
                'title' => 'Yearly',
            ]
        ];

        return view('livewire.components.pricing', [
            'features' => $features,
            'plans' => $plans
        ]);
    }
}
