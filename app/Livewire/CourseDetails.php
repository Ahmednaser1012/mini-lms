<?php

namespace App\Livewire;

use Livewire\Component;

class CourseDetails extends Component
{
    public $openSection = 0;

    public function setOpenSection($section)
    {
        $this->openSection = $this->openSection === $section ? -1 : $section;
    }

    public function render()
    {
        return view('livewire.course-details')->layout('components.layouts.main');
    }
}

