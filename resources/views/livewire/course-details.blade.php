@php
$curriculum = [
    [
        'title' => "Intro",
        'duration' => "3 Lessons",
        'lessons' => [
            ['title' => "Who Are You To Sell Your It?", 'time' => "5:00 min", 'type' => "video"],
            ['title' => "Installing Google Ads", 'time' => "5:00 min", 'type' => "video"],
            ['title' => "Why People Use Search Engines?", 'time' => "5:00 min", 'type' => "video"],
        ]
    ],
    [
        'title' => "Google Ads Segmentation",
        'duration' => "10 Lessons",
        'lessons' => [
            ['title' => "Create an Account on Google Ads", 'time' => "5:00 min", 'type' => "video"],
            ['title' => "Determine the location of ads", 'time' => "3:00 min", 'type' => "video"],
            ['title' => "Choose the languages and audience segment", 'time' => "4:00 min", 'type' => "video"],
            ['title' => "Determine the Budget", 'time' => "2:00 min", 'type' => "video"],
        ]
    ]
];
@endphp

<div class="min-h-screen bg-slate-50 font-sans">
    <livewire:components.navbar />

    <!-- Hero Header -->
    <div class="bg-primary text-white pt-10 pb-32 relative overflow-hidden">
        <!-- Background Decorative Circles -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Breadcrumbs -->
            <div class="text-sm text-blue-200 mb-6 flex items-center gap-2">
                <span class="bg-blue-800/50 px-3 py-1 rounded text-xs">Marketing</span>
                <span class="text-xs">&gt;</span>
                <span class="bg-white/10 px-3 py-1 rounded text-xs">Ads</span>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">
                <div class="lg:col-span-2">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">Google Ads</h1>
                    <ul class="space-y-3 text-blue-100/90 mb-8 text-sm lg:text-base">
                        <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-2.5 shrink-0"></div> Mastering Google Ads from beginner to advanced level</li>
                        <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-2.5 shrink-0"></div> Learn how to set up and manage campaigns effectively</li>
                        <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-2.5 shrink-0"></div> Target the right audience and optimize ad spend</li>
                        <li class="flex items-start gap-3"><div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-2.5 shrink-0"></div> Increase ROI through strategic keyword and bidding strategies</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 pb-20">
        <div class="grid lg:grid-cols-3 gap-8">
            
            <!-- Left Content Column -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Who takes this course -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden mt-20">
                    <button 
                        class="w-full flex justify-between items-center p-6 bg-white hover:bg-slate-50 transition"
                        wire:click="setOpenSection('who')"
                    >
                        <h3 class="text-lg font-bold text-primary">Who takes this course</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform {{ $openSection === 'who' ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                    </button>
                    <div class="px-6 pb-6 border-t border-slate-100 pt-6">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach([['id' => '01', 'label' => 'Media Buyer'], ['id' => '02', 'label' => 'Entrepreneurs'], ['id' => '03', 'label' => 'Marketing Specialist'], ['id' => '04', 'label' => 'Ad Agencies']] as $item)
                            <div class="bg-slate-50 rounded-lg p-3 flex flex-col items-start gap-2 border border-slate-100">
                                <span class="bg-secondary-light text-white text-xs font-bold px-2 py-1 rounded-md">{{ $item['id'] }}</span>
                                <span class="text-primary font-semibold text-sm">{{ $item['label'] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Course Content -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold text-primary">Course Content</h3>
                        <div class="text-sm text-slate-500 flex gap-4">
                            <span>35 Lectures</span>
                            <span>15:35 Duration</span>
                        </div>
                    </div>

                    <div class="space-y-4">
                        @foreach($curriculum as $idx => $section)
                        <div class="border border-slate-200 rounded-lg overflow-hidden">
                            <button 
                                wire:click="setOpenSection({{ $idx }})"
                                class="w-full flex justify-between items-center p-4 bg-slate-50 hover:bg-slate-100 transition"
                            >
                                <div class="flex items-center gap-3">
                                    <span class="font-bold text-[#1a2d62]">{{ $section['title'] }}</span>
                                </div>
                                <div class="flex items-center gap-4 text-sm text-slate-500">
                                    <span>{{ $section['duration'] }}</span>
                                    @if($openSection === $idx)
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                                    @else
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                    @endif
                                </div>
                            </button>
                            
                            @if($openSection === $idx)
                            <div class="bg-white divide-y divide-slate-100">
                                @foreach($section['lessons'] as $lesson)
                                <a 
                                    href="{{ route('lesson') }}"
                                    class="p-4 flex justify-between items-center hover:bg-slate-50 transition cursor-pointer group block"
                                >
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 group-hover:bg-pink-100 group-hover:text-pink-600 transition">
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                        </div>
                                        <span class="text-slate-700 font-medium text-sm">{{ $lesson['title'] }}</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs text-slate-400">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                        <span>{{ $lesson['time'] }}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Meet Instructor -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                    <h3 class="text-lg font-bold text-primary mb-6">Meet your instructor</h3>
                    <div class="flex flex-col sm:flex-row gap-6 items-center sm:items-start text-center sm:text-left">
                        <img 
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                            alt="Yasser Ghallab" 
                            class="w-24 h-24 rounded-2xl object-cover shadow-md"
                        />
                        <div>
                            <h4 class="text-xl font-bold text-slate-900">Yasser Ghallab</h4>
                            <p class="text-sm text-slate-500 mb-3">Senior Digital Marketing Consultant</p>
                            <ul class="text-sm text-slate-600 space-y-1">
                                <li>• +10 Years exp.</li>
                                <li>• Worked with +100 international brands</li>
                                <li>• Leading the Strategy Digital Marketing team in Middle East</li>
                            </ul>
                            <button class="mt-4 bg-[#3b5998] text-white px-6 py-2 rounded-lg text-sm font-medium hover:bg-[#324c85] transition">
                                View Profile
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Sticky Card -->
            <div class="relative lg:col-span-1">
                <div class="sticky top-24 -mt-60 z-20">
                    <div class="bg-white rounded-3xl shadow-[0_20px_50px_rgba(8,_112,_184,_0.07)] overflow-hidden border border-slate-100 p-4">
                        <!-- Video Thumbnail -->
                        <div class="relative aspect-[4/3] rounded-2xl overflow-hidden group cursor-pointer">
                            <img 
                                src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                alt="Course Preview" 
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            />
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/30 transition-colors"></div>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <div class="w-16 h-16 bg-white/30 backdrop-blur-md rounded-full flex items-center justify-center border border-white/50 group-hover:scale-110 transition duration-300">
                                    <svg class="w-6 h-6 text-white fill-white ml-1" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </div>
                            </div>
                            <div class="absolute bottom-5 left-0 right-0 text-center text-white text-lg font-bold">
                                Watch course intro
                            </div>
                        </div>

                        <div class="pt-6 px-1">
                            <!-- Tags & Rating -->
                            <div class="flex justify-between items-center mb-4">
                                <div class="flex gap-2">
                                    <span class="text-xs font-medium text-slate-500 bg-white border border-slate-200 px-3 py-1.5 rounded-lg">Flexible schedule</span>
                                    <span class="text-xs font-medium text-slate-500 bg-white border border-slate-200 px-3 py-1.5 rounded-lg">Intermediate</span>
                                </div>
                                <div class="flex gap-0.5">
                                    @for($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-amber-400 fill-amber-400" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    @endfor
                                </div>
                            </div>
                            
                            <h3 class="text-2xl font-bold text-primary mb-4">Google Ads</h3>
                            
                            <!-- Meta Info -->
                            <div class="flex items-center gap-6 text-slate-400 text-sm font-medium mb-8">
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <span>22hr 30min</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                                    <span>34 Courses</span>
                                </div>
                            </div>

                            <!-- Button -->
                            <button class="w-full bg-accent hover:bg-accent-hover text-white font-bold py-4 rounded-xl mb-4 transition shadow-lg shadow-blue-900/10 flex items-center justify-center gap-2">
                                Unlock with Subscription
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </button>
                            
                            <p class="text-center text-slate-900 font-medium">
                                Get access to all courses for 350 EGP.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Related Courses -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-[#1a2d62] mb-8">Related Courses</h2>
            <livewire:components.courses :limit="3" :showHeader="false" :showTabs="false" />
        </div>

        <!-- Subscription -->
        <div class="mt-16">
            <livewire:components.pricing />
        </div>
    </div>

    <livewire:components.footer />
</div>

