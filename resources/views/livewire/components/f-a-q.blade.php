<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12">
            
            <!-- Left Column: Heading -->
            <div class="lg:col-span-4">
                <h2 class="text-4xl font-extrabold text-accent leading-tight mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="text-slate-600 mb-8 max-w-sm">
                    Still you have any questions? Contact our Team via support@Career180.com
                </p>
                <button class="bg-accent hover:bg-accent-hover text-white font-medium px-6 py-3 rounded-lg shadow-md transition-all">
                    See All FAQ's
                </button>
            </div>

            <!-- Right Column: Accordion -->
            <div class="lg:col-span-8 space-y-4">
                @foreach($faqs as $index => $faq)
                <div 
                    class="border border-slate-100 rounded-xl overflow-hidden transition-all duration-300 {{ $openIndex === $index ? 'bg-white shadow-lg ring-1 ring-slate-200' : 'bg-white' }}"
                >
                    <button
                        wire:click="setOpenIndex({{ $index }})"
                        class="w-full flex justify-between items-center p-6 text-left focus:outline-none"
                    >
                        <span class="text-lg font-bold text-slate-800">{{ $faq['question'] }}</span>
                        <div class="p-2 rounded-lg transition-colors bg-slate-100">
                            <svg class="w-5 h-5 text-slate-500 transition-transform duration-300 {{ $openIndex === $index ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                        </div>
                    </button>
                    
                    <div 
                        class="overflow-hidden transition-all duration-300 ease-in-out {{ $openIndex === $index ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0' }}"
                    >
                        <div class="px-6 pb-6 pt-0">
                            <p class="text-slate-600 leading-relaxed mb-6">
                                {{ $faq['answer'] }}
                            </p>
                            @if(isset($faq['linkText']))
                            <div class="bg-slate-50 p-4 rounded-lg flex items-center justify-between group cursor-pointer hover:bg-slate-100 transition">
                                <span class="font-semibold text-slate-800">{{ $faq['linkText'] }}</span>
                                <div class="bg-white p-2 rounded-full shadow-sm group-hover:bg-accent group-hover:text-white transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
