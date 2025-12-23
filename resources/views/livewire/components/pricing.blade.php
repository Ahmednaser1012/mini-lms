<section class="py-20 bg-white font-sans" x-data="{ planType: 'individual' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-4xl font-extrabold text-accent mb-4">Subscription</h2>
            <p class="text-slate-500 text-lg">
                Start watching our recorded courses in different fields with our great experts
            </p>
            
            <!-- Toggle -->
            <div class="mt-8 inline-flex bg-slate-50 rounded-lg p-1 border border-slate-100">
                <button 
                    @click="planType = 'individual'"
                    :class="planType === 'individual' ? 'bg-accent text-white shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                    class="px-8 py-2.5 rounded-md text-sm font-semibold transition-all"
                >
                    Individual
                </button>
                <button 
                    @click="planType = 'group'"
                    :class="planType === 'group' ? 'bg-accent text-white shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                    class="px-8 py-2.5 rounded-md text-sm font-semibold transition-all"
                >
                    Group
                </button>
            </div>
        </div>

        <!-- Cards -->
        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @foreach($plans as $plan)
            <div class="bg-white rounded-[30px] p-8 border border-slate-100 shadow-[0_10px_40px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_50px_-10px_rgba(0,0,0,0.1)] transition-shadow duration-300 flex flex-col items-center text-center">
                
                <!-- Price -->
                <div class="flex items-baseline mb-12">
                    <span class="text-6xl font-bold text-slate-900">{{ $plan['price'] }}</span>
                    <span class="text-xl text-slate-500 ml-1 font-medium">{{ $plan['period'] }}</span>
                </div>
                
                <!-- Features Label -->
                <h4 class="text-slate-900 font-semibold mb-6">Available Features</h4>
                
                <!-- Features List -->
                <div class="w-full space-y-3 mb-12">
                    @foreach($features as $feature)
                    <div class="flex items-center gap-3 w-full p-3 rounded-xl border border-slate-100 bg-white shadow-sm text-left">
                        <div class="shrink-0">
                            <svg class="h-4 w-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-slate-600 text-sm font-medium">{{ $feature }}</span>
                    </div>
                    @endforeach
                </div>

                <!-- Button -->
                <button class="w-full py-4 rounded-lg bg-accent hover:bg-accent-hover text-white font-bold transition-all duration-200 mt-auto">
                    Get Started
                </button>
            </div>
            @endforeach
        </div>
    </div>
</section>
