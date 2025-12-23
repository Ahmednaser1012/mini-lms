<div class="min-h-screen bg-slate-50 font-sans overflow-x-hidden" x-data="{ 
    activeTab: @entangle('activeTab'), 
    showConfirmModal: false,
    isProcessing: false,
    completionError: null
}">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

    <!-- Header -->
    <div class="bg-primary text-white py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('image 2.png') }}" alt="Career 180" class="h-8 w-auto" />
                    </a>
                    <div class="hidden sm:flex items-center gap-2 text-sm text-blue-200">
                        <span class="bg-blue-800/50 px-3 py-1 rounded text-xs">Google Ads</span>
                        <span class="text-xs">&gt;</span>
                        <span class="bg-white/10 px-3 py-1 rounded text-xs">Lesson 4</span>
                    </div>
                </div>
                
                <div class="flex items-center gap-3">
                    <button class="p-2 hover:bg-white/10 rounded-lg transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                    </button>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="w-full max-w-7xl mx-auto px-3 sm:px-4 lg:px-8 py-4">
        
        <!-- Main Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_320px] gap-4">
            <div class="w-full">
                <!-- Video Player -->
                <div class="bg-black rounded-xl overflow-hidden shadow-lg mb-4">
                    <div class="aspect-video">
                        <video id="player" playsinline controls class="w-full h-full">
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-5 mb-4">
                    <div class="flex flex-wrap items-center gap-2 mb-3">
                        <span class="bg-secondary text-white text-xs font-bold px-4 py-1 rounded">Lesson 4 of 7</span>
                        <span class="bg-slate-100 text-slate-600 text-xs font-medium px-4 py-1 rounded">10:45 min</span>
                    </div>
                    <h1 class="text-xl font-bold text-primary mb-2">Create an Account on Google Ads</h1>
                    <p class="text-slate-500 text-sm">Google Ads Segmentation</p>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-3 mb-4">
                    <div class="flex gap-2">
                        <button 
                            wire:click="previousLesson"
                            class="px-4 py-2 bg-white border border-slate-200 rounded-lg text-slate-600 hover:bg-slate-50 transition flex items-center gap-2 text-sm font-medium"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            Previous
                        </button>
                        <button 
                            wire:click="nextLesson"
                            class="px-4 py-2 bg-accent hover:bg-accent-hover text-white rounded-lg transition flex items-center gap-2 text-sm font-medium"
                        >
                            Next
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                    
                    <button 
                        @click="showConfirmModal = true"
                        :disabled="isProcessing"
                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition flex items-center gap-2 text-sm font-medium disabled:opacity-50"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span x-text="isProcessing ? 'Processing...' : 'Mark Complete'"></span>
                    </button>
                </div>

                <!-- Tabs -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                    <div class="flex border-b border-slate-100 overflow-x-auto">
                        @foreach(['overview' => 'Overview', 'resources' => 'Resources', 'notes' => 'Notes', 'qa' => 'Q&A'] as $key => $label)
                        <button 
                            @click="activeTab = '{{ $key }}'"
                            :class="activeTab === '{{ $key }}' ? 'border-accent text-accent' : 'border-transparent text-slate-500 hover:text-slate-700'"
                            class="px-5 py-3 border-b-2 font-medium text-sm whitespace-nowrap transition"
                        >
                            {{ $label }}
                        </button>
                        @endforeach
                    </div>

                    <div class="p-5">
                        <!-- Overview -->
                        <div x-show="activeTab === 'overview'">
                            <h3 class="font-bold text-primary mb-3">About this lesson</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mb-5">
                                In this lesson, you'll learn how to create your first Google Ads account step by step. We'll cover the essential settings and configurations needed to get started.
                            </p>
                            
                            <h4 class="font-semibold text-slate-800 mb-3">What you'll learn:</h4>
                            <ul class="space-y-2">
                                @foreach(['Setting up your Google Ads account', 'Understanding the dashboard interface', 'Configuring billing and payment methods', 'Best practices for account organization'] as $item)
                                <li class="flex items-center gap-2 text-slate-600 text-sm">
                                    <svg class="w-4 h-4 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    {{ $item }}
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Resources -->
                        <div x-show="activeTab === 'resources'" class="space-y-3">
                            <div class="border border-slate-200 rounded-lg p-4 flex items-center justify-between hover:bg-slate-50 transition">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z"/></svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-800 text-sm">Google Ads Setup Guide.pdf</p>
                                        <p class="text-xs text-slate-500">2.4 MB</p>
                                    </div>
                                </div>
                                <button class="text-accent hover:text-accent-hover font-medium text-sm">Download</button>
                            </div>
                        </div>

                        <!-- Notes -->
                        <div x-show="activeTab === 'notes'" class="space-y-3">
                            <textarea 
                                class="w-full h-32 border border-slate-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-accent/20 focus:border-accent resize-none text-sm"
                                placeholder="Take notes for this lesson..."
                            ></textarea>
                            <button class="bg-accent text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-accent-hover transition">Save Notes</button>
                        </div>

                        <!-- Q&A -->
                        <div x-show="activeTab === 'qa'" class="space-y-4">
                            <div class="bg-slate-50 rounded-lg p-4">
                                <div class="flex gap-3">
                                    <div class="w-8 h-8 bg-slate-300 rounded-full shrink-0"></div>
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="font-medium text-slate-800 text-sm">Ahmed Mohamed</span>
                                            <span class="text-xs text-slate-400">2 days ago</span>
                                        </div>
                                        <p class="text-slate-600 text-sm">How long does it take for Google to verify the account?</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <textarea 
                                    class="w-full border border-slate-200 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-accent/20 focus:border-accent resize-none text-sm"
                                    rows="2"
                                    placeholder="Ask a question..."
                                ></textarea>
                                <button class="mt-2 bg-accent text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-accent-hover transition">Post Question</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden lg:sticky lg:top-6">
                    <!-- Header -->
                    <div class="p-4 bg-slate-50 border-b border-slate-100">
                        <h2 class="font-bold text-primary mb-3">Course Content</h2>
                        <div class="space-y-1.5">
                            <div class="flex justify-between text-sm">
                                <span class="text-slate-500">Your Progress</span>
                                <span class="text-primary font-semibold">57%</span>
                            </div>
                            <div class="h-2 bg-slate-200 rounded-full overflow-hidden">
                                <div class="h-full bg-accent rounded-full" style="width: 57%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sections -->
                    <div class="max-h-[60vh] overflow-y-auto">
                        @foreach($sections as $section)
                        <div class="border-b border-slate-100 last:border-b-0">
                            <button 
                                wire:click="toggleSection({{ $section['id'] }})"
                                class="w-full flex justify-between items-center p-4 hover:bg-slate-50 transition"
                            >
                                <span class="font-semibold text-primary text-sm">{{ $section['title'] }}</span>
                                <svg class="w-4 h-4 text-slate-400 transition-transform {{ isset($openSections[$section['id']]) ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            
                            @if(isset($openSections[$section['id']]))
                            <div class="bg-slate-50/50">
                                @foreach($section['lessons'] as $lesson)
                                <div class="flex items-center gap-3 px-4 py-3 hover:bg-slate-100 cursor-pointer transition {{ isset($lesson['active']) && $lesson['active'] ? 'bg-accent/5 border-l-2 border-accent' : '' }}">
                                    @if($lesson['completed'])
                                    <div class="w-7 h-7 rounded-full bg-green-500 flex items-center justify-center shrink-0">
                                        <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    @elseif(isset($lesson['active']) && $lesson['active'])
                                    <div class="w-7 h-7 rounded-full bg-accent flex items-center justify-center shrink-0">
                                        <svg class="w-3 h-3 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                                    </div>
                                    @else
                                    <div class="w-7 h-7 rounded-full border-2 border-slate-300 flex items-center justify-center shrink-0">
                                        <svg class="w-3 h-3 text-slate-400" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                                    </div>
                                    @endif
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-slate-700 truncate">{{ $lesson['title'] }}</p>
                                        <p class="text-xs text-slate-400">{{ $lesson['duration'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Confirmation Modal -->
    <div 
        x-show="showConfirmModal" 
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4"
        @click.self="showConfirmModal = false"
        x-transition
    >
        <div class="bg-white rounded-xl shadow-xl max-w-sm w-full p-6" x-transition>
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900">Mark Lesson Complete?</h3>
            </div>

            <p class="text-slate-600 mb-6">
                Are you sure you want to mark this lesson as completed?
            </p>

            <div x-show="completionError" class="mb-4 p-3 bg-red-50 border border-red-200 rounded-lg">
                <p class="text-sm text-red-700" x-text="completionError"></p>
            </div>

            <div class="flex gap-3">
                <button 
                    @click="showConfirmModal = false"
                    :disabled="isProcessing"
                    class="flex-1 px-4 py-2.5 border border-slate-200 text-slate-700 rounded-lg hover:bg-slate-50 transition font-medium disabled:opacity-50"
                >
                    Cancel
                </button>
                <button 
                    wire:click="completeLesson"
                    :disabled="isProcessing"
                    class="flex-1 px-4 py-2.5 bg-green-500 text-white rounded-lg hover:bg-green-600 transition font-medium disabled:opacity-50 flex items-center justify-center gap-2"
                >
                    <span x-show="!isProcessing">Confirm</span>
                    <span x-show="isProcessing" class="flex items-center gap-2">
                        <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                        </svg>
                        Processing...
                    </span>
                </button>
            </div>
        </div>
    </div>

    <!-- Plyr.js -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Plyr('#player', {
                controls: ['play-large', 'play', 'progress', 'current-time', 'duration', 'mute', 'volume', 'settings', 'fullscreen'],
                settings: ['quality', 'speed']
            });

            document.addEventListener('lesson-completed', function() {
                const msg = document.createElement('div');
                msg.className = 'fixed top-4 right-4 bg-green-500 text-white px-5 py-3 rounded-lg shadow-lg z-50 flex items-center gap-2';
                msg.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Lesson completed!';
                document.body.appendChild(msg);
                setTimeout(() => msg.remove(), 3000);
            });
        });
    </script>
</div>
