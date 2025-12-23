<nav class="bg-white sticky top-0 z-50 py-2" x-data="{ isOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('image.png') }}" alt="CAREER 180" class="h-10" />
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('course.details') }}" class="text-slate-800 hover:text-accent font-medium transition flex items-center gap-1">
                    Learning Path
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <a href="#" class="text-slate-800 hover:text-accent font-medium transition flex items-center gap-1">
                    Vacancies & Internships
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <a href="#" class="text-slate-800 hover:text-accent font-medium transition">
                    Events
                </a>
            </div>

            <!-- Right Side Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                <button class="text-secondary font-bold px-8 py-2.5 border border-secondary rounded-[10px] hover:bg-pink-50 transition">
                    Login
                </button>
                <button class="bg-accent text-white px-8 py-2.5 rounded-[10px] font-bold hover:bg-accent-hover transition shadow-md">
                    Register Now
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button @click="isOpen = !isOpen" class="text-gray-700 hover:text-accent">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="isOpen" x-transition class="md:hidden bg-white border-t border-slate-100">
        <div class="px-4 pt-4 pb-6 space-y-3">
            <a href="{{ route('course.details') }}" class="block text-base font-medium text-slate-700 hover:text-accent">Learning Path</a>
            <a href="#" class="block text-base font-medium text-slate-700 hover:text-accent">Vacancies & Internships</a>
            <a href="#" class="block text-base font-medium text-slate-700 hover:text-accent">Events</a>
            <div class="mt-6 flex flex-col gap-3">
                <button class="w-full text-center text-secondary font-bold py-2.5 border border-secondary rounded-[10px]">Login</button>
                <button class="w-full text-center bg-accent text-white font-bold py-2.5 rounded-[10px]">Register Now</button>
            </div>
        </div>
    </div>
</nav>
