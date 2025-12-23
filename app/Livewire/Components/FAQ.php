<?php

namespace App\Livewire\Components;

use Livewire\Component;

class FAQ extends Component
{
    public $openIndex = 0;

    public function setOpenIndex($index)
    {
        $this->openIndex = $this->openIndex === $index ? null : $index;
    }

    public function render()
    {
        $faqs = [
            [
                'question' => 'Can I enroll in multiple courses at once?',
                'answer' => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',
                'linkText' => 'Enrollment Process for Different Courses'
            ],
            [
                'question' => 'What kind of support can I expect from instructors?',
                'answer' => 'Our instructors offer comprehensive support through Q&A sessions, dedicated forums, and direct messaging for personalized guidance.'
            ],
            [
                'question' => 'Are the courses self-paced or do they have specific start and end dates?',
                'answer' => 'Most of our courses are self-paced, allowing you to learn at your own speed. Some cohort-based courses have specific dates.'
            ],
            [
                'question' => 'Are there any prerequisites for the courses?',
                'answer' => 'Prerequisites vary by course. Check the course description for specific requirements.'
            ],
            [
                'question' => 'Can I download the course materials for offline access?',
                'answer' => 'Yes, video lectures and supplementary materials are available for download in our mobile app.'
            ]
        ];

        return view('livewire.components.f-a-q', ['faqs' => $faqs]);
    }
}
