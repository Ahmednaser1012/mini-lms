<?php

namespace App\Livewire;

use Livewire\Component;

class LessonPage extends Component
{
    
    public $sidebarOpen = true;
    public $activeTab = 'overview';
    public $openSections = [2 => true];

    
    public function toggleSidebar()
    {
        $this->sidebarOpen = !$this->sidebarOpen;
    }
 
    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }
 
    public function toggleSection($id)
    {
        if (isset($this->openSections[$id])) {
            unset($this->openSections[$id]);
        } else {
            $this->openSections[$id] = true;
        }
    }
 
    public function completeLesson($lessonId)
    {
      
        session()->flash('success', 'Lesson marked as complete!');
    }
 
    public function render()
    {
         $sections = $this->getSections();
        $currentLesson = $this->getCurrentLesson();

        return view('livewire.lesson-page', [
            'sections' => $sections,
            'currentLesson' => $currentLesson,
        ])->layout('components.layouts.main');
    }

     
    private function getSections()
    {
        return [
            [
                'id' => 1,
                'title' => "Introduction",
                'lessons' => [
                    [
                        'id' => 1,
                        'title' => "Welcome to the Course",
                        'duration' => "2:30 min",
                        'type' => 'video',
                        'completed' => true,
                        'active' => false,
                    ],
                    [
                        'id' => 2,
                        'title' => "Course Overview",
                        'duration' => "5:15 min",
                        'type' => 'video',
                        'completed' => true,
                        'active' => false,
                    ],
                    [
                        'id' => 3,
                        'title' => "How to get help",
                        'duration' => "3:00 min",
                        'type' => 'text',
                        'completed' => false,
                        'active' => false,
                    ],
                ]
            ],
            [
                'id' => 2,
                'title' => "Digital Marketing Basics",
                'lessons' => [
                    [
                        'id' => 4,
                        'title' => "What is Digital Marketing?",
                        'duration' => "10:20 min",
                        'type' => 'video',
                        'completed' => false,
                        'active' => true,  // الدرس الحالي
                    ],
                    [
                        'id' => 5,
                        'title' => "Key Channels",
                        'duration' => "8:45 min",
                        'type' => 'video',
                        'completed' => false,
                        'active' => false,
                    ],
                    [
                        'id' => 6,
                        'title' => "Customer Journey",
                        'duration' => "12:10 min",
                        'type' => 'video',
                        'completed' => false,
                        'active' => false,
                    ],
                ]
            ],
            [
                'id' => 3,
                'title' => "Content Strategy",
                'lessons' => [
                    [
                        'id' => 7,
                        'title' => "Content Types",
                        'duration' => "15:00 min",
                        'type' => 'video',
                        'completed' => false,
                        'active' => false,
                        'locked' => true,
                    ],
                    [
                        'id' => 8,
                        'title' => "Planning your calendar",
                        'duration' => "20:00 min",
                        'type' => 'video',
                        'completed' => false,
                        'active' => false,
                        'locked' => true,
                    ],
                ]
            ]
        ];
    }

  
    private function getCurrentLesson()
    {
        $sections = $this->getSections();
        
         foreach ($sections as $section) {
            foreach ($section['lessons'] as $lesson) {
                if ($lesson['active'] ?? false) {
                    return $lesson;
                }
            }
        }

         return $sections[0]['lessons'][0] ?? null;
    }
}
