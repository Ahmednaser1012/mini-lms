<section class="relative bg-primary text-white overflow-hidden min-h-[600px] flex items-center">
    <!-- Background Gradient/Wave -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-blue-600/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-blue-800/30 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
        <img src="{{ asset('hero.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-50 mix-blend-overlay" />
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            
            <!-- Left Content -->
            <div class="pt-10 lg:pt-0">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-4">
                    Build Your Career with <br />
                    Egypt's Leading Learning <br />
                    & Job Platform
                </h1>
                <p class="text-blue-200 text-lg mb-8">
                    Courses, Events, Internships & Jobs — All in One Place .
                </p>
                
                <div class="flex flex-wrap gap-4 mb-12">
                    <button class="bg-accent hover:bg-accent-hover text-white px-6 py-3.5 rounded-lg font-medium shadow-lg transition flex items-center gap-2">
                        Explore Courses
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                    <button class="bg-pink-100 hover:bg-pink-200 text-secondary px-8 py-3.5 rounded-lg font-bold transition">
                        Subscribe Now
                    </button>
                </div>
            </div>

            <!-- Right Image & Floating Cards -->
            <div class="relative h-[500px] lg:h-[600px] flex items-end justify-center lg:justify-end">
                <img 
                    src="{{ asset('1.png') }}" 
                    alt="Career Growth" 
                    class="relative z-10 h-full object-contain object-bottom"
                />

                <!-- Floating Card 1: Top Right - Courses -->
                <div class="absolute top-20 right-0 lg:-right-4 z-20 bg-white/90 backdrop-blur-sm p-4 rounded-2xl shadow-xl flex items-center gap-4 max-w-xs animate-bounce" style="animation-delay: 0s;">
                    <div class="bg-secondary-light w-12 h-12 rounded-xl flex items-center justify-center shrink-0">
                        <svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-primary font-bold text-xl">+200</h3>
                        <p class="text-slate-500 text-xs">professional Courses</p>
                    </div>
                </div>

                <!-- Floating Card 2: Left - Vacancies -->
                <div class="absolute top-1/2 left-0 lg:-left-12 z-20 bg-white/90 backdrop-blur-sm p-4 rounded-2xl shadow-xl flex items-center gap-4 max-w-xs animate-bounce" style="animation-delay: 1s;">
                    <div class="bg-secondary-light w-12 h-12 rounded-xl flex items-center justify-center shrink-0">
                        <svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m0 0l8 4m-8-4v10l8 4m0-10l8 4m-8-4v10"/></svg>
                    </div>
                    <div>
                        <h3 class="text-primary font-bold text-xl">+200</h3>
                        <p class="text-slate-500 text-xs">Vacancies & Internships</p>
                    </div>
                </div>

                <!-- Floating Card 3: Bottom Right - Events -->
                <div class="absolute bottom-32 right-4 lg:right-0 z-20 bg-white/90 backdrop-blur-sm p-4 rounded-2xl shadow-xl flex items-center gap-4 max-w-xs animate-bounce" style="animation-delay: 0.5s;">
                    <div class="bg-secondary-light w-12 h-12 rounded-xl flex items-center justify-center shrink-0">
                        <svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m7 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-primary font-bold text-xl">+200</h3>
                        <p class="text-slate-500 text-xs">Event</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        @keyframes bounce-custom {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-bounce {
            animation: bounce-custom 4s infinite;
        }
    </style>
</section>
