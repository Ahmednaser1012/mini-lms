<section class="px-4 sm:px-6 lg:px-8 bg-slate-50 font-sans {{ $showHeader ? 'py-16' : 'py-0' }}">
    <div class="max-w-7xl mx-auto">
        
        <!-- Header -->
        @if($showHeader)
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-4">
            <div>
                <h2 class="text-4xl font-extrabold text-primary mb-2">Courses</h2>
                <p class="text-slate-500 max-w-2xl">
                    Extraordinary online learning experience with Experts, to be qualified for the job market necessities and vacancies
                </p>
            </div>
            <button class="text-secondary font-bold border border-secondary px-6 py-2 rounded-lg hover:bg-pink-50 transition whitespace-nowrap">
                Explore All courses
            </button>
        </div>
        @endif

        <!-- Categories Tab -->
        @if($showTabs)
        <div class="flex overflow-x-auto pb-4 mb-8 gap-3 no-scrollbar">
            @foreach($categories as $cat)
            <button
                wire:click="setActiveCategory('{{ $cat }}')"
                class="px-5 py-2.5 rounded-lg text-sm font-semibold whitespace-nowrap transition-all duration-200 border {{ $activeCategory === $cat ? 'bg-accent text-white border-accent shadow-md' : 'bg-white text-slate-500 border-slate-200 hover:bg-slate-50 hover:border-slate-300' }}"
            >
                {{ $cat }}
            </button>
            @endforeach
        </div>
        @endif

        <!-- Empty State -->
        @if(empty($courses))
        <div class="flex flex-col items-center justify-center py-20 px-4">
            <div class="text-center max-w-md">
                <div class="mb-6 flex justify-center">
                    <div class="w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center">
                        <svg class="w-12 h-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747c5.5 0 10-4.998 10-10.747S17.5 6.253 12 6.253z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-2">No Courses Available</h3>
                <p class="text-slate-500 mb-6">We're working on adding more courses. Check back soon!</p>
                <button class="bg-accent hover:bg-accent-hover text-white font-bold py-3 px-6 rounded-lg transition-colors">
                    Notify Me
                </button>
            </div>
        </div>
        @else
        <!-- Courses Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach($courses as $course)
            <div class="bg-white rounded-[20px] shadow-sm hover:shadow-xl transition-shadow duration-300 border border-slate-100 p-3 pb-5 flex flex-col">
                
                <!-- Card Image Area -->
                <div class="relative h-60 bg-gradient-to-r {{ $course['bgGradient'] }} rounded-[15px] p-6 flex flex-col justify-center items-center text-center overflow-hidden shrink-0">
                    <div class="absolute inset-0 bg-cover bg-center opacity-100" style="background-image: url('{{ asset('image card.png') }}')"></div>
                </div>

                <!-- Card Content -->
                <div class="px-2 pt-5 flex flex-col flex-grow">
                    
                    <!-- Metrics Row -->
                    <div class="flex justify-between items-start mb-3">
                        <div class="flex gap-2">
                            <span class="text-sm font-medium text-slate-600 bg-white border border-slate-200 px-3 py-1 rounded-[10px]">{{ $course['duration'] }}</span>
                            <span class="text-sm font-medium text-slate-600 bg-white border border-slate-200 px-3 py-1 rounded-[10px]">{{ $course['level'] }}</span>
                        </div>
                        <div class="flex gap-1 pt-1">
                            @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 {{ $i < $course['rating'] ? 'fill-amber-400 text-amber-400' : 'fill-slate-200 text-slate-200' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-slate-900 mb-4">{{ $course['title'] }}</h3>
                    
                    <!-- Meta Info -->
                    <div class="flex items-center gap-6 text-slate-400 text-sm font-medium mb-6">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>{{ $course['hours'] }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/></svg>
                            <span>{{ $course['lectures'] }}</span>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="mt-auto">
                        <a href="{{ route('course.details') }}" class="w-full bg-accent hover:bg-accent-hover text-white font-bold py-3.5 rounded-xl flex items-center justify-center gap-2 transition-colors text-lg">
                            View Details
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
