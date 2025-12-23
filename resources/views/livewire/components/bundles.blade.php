<section class="py-20 px-4 sm:px-6 lg:px-4 xl:px-8 bg-white overflow-hidden">
    <div class="max-w-[1400px] mx-auto">
        <div class="flex flex-col xl:flex-row gap-8 items-center xl:items-start transition-all">
            
            <!-- Left Side: Header & CTA -->
            <div class="xl:w-1/5 flex flex-col pt-4 space-y-6 text-center xl:text-left shrink-0">
                <div>
                    <h2 class="text-4xl font-extrabold text-primary mb-4">Bundles</h2>
                    <p class="text-slate-500 text-lg leading-relaxed max-w-xs mx-auto lg:mx-0">
                        Start your career journey with bundled learning paths
                    </p>
                </div>
                
                <div>
                    <button class="bg-accent hover:bg-accent-hover text-white font-bold py-3.5 px-10 rounded-xl shadow-md transition-all duration-300">
                        Explore All
                    </button>
                </div>
            </div>

            <!-- Right Side: Cards Grid -->
            <div class="lg:w-3/4 w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
                    @foreach($bundles as $bundle)
                    <div class="bg-white border border-slate-100 rounded-[24px] overflow-hidden hover:shadow-2xl hover:shadow-blue-900/10 transition-shadow duration-300 flex flex-col">
                        
                        <!-- Image Section -->
                        <div class="relative h-64 bg-gradient-to-br {{ $bundle['bgGradient'] }} p-6 flex flex-col justify-center items-center text-center overflow-hidden group">
                            <div class="absolute inset-0 bg-black/10"></div>
                            
                            <!-- Logo Top Right -->
                            <div class="absolute top-5 right-5 text-white text-[10px] font-bold tracking-widest opacity-90 flex items-center gap-1">
                                <div class="w-4 h-4 rounded-full border border-white/50 flex items-center justify-center text-[6px]">C</div>
                                CAREER180
                            </div>

                            <!-- Main Text in Image -->
                            <div class="relative z-10 flex flex-col gap-0 items-center justify-center h-full">
                                <h3 class="text-transparent font-black text-3xl uppercase tracking-wider leading-[0.9]" 
                                    style="text-shadow: -1.5px -1.5px 0 {{ $bundle['strokeColor'] }}, 1.5px -1.5px 0 {{ $bundle['strokeColor'] }}, -1.5px 1.5px 0 {{ $bundle['strokeColor'] }}, 1.5px 1.5px 0 {{ $bundle['strokeColor'] }}, -1.5px 0px 0 {{ $bundle['strokeColor'] }}, 1.5px 0px 0 {{ $bundle['strokeColor'] }}, 0px -1.5px 0 {{ $bundle['strokeColor'] }}, 0px 1.5px 0 {{ $bundle['strokeColor'] }};">
                                    {{ $bundle['imageTextFirst'] }}
                                </h3>
                                <h3 class="text-transparent font-black text-3xl uppercase tracking-wider leading-[0.9]"
                                    style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white, 1px 1px 0 white, -1px 0px 0 white, 1px 0px 0 white, 0px -1px 0 white, 0px 1px 0 white;">
                                    {{ $bundle['imageTextSecond'] }}
                                </h3>
                            </div>

                            <!-- Icons at bottom -->
                            <div class="absolute bottom-6 flex justify-center gap-4 w-full">
                                <div class="transform hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                </div>
                                <div class="transform hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                </div>
                                <div class="transform hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-5">
                            
                            <!-- Tags & Rating -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex gap-2">
                                    <span class="text-[10px] font-semibold text-slate-500 bg-white border border-slate-200 px-3 py-1.5 rounded-lg">{{ $bundle['duration'] }}</span>
                                    <span class="text-[10px] font-semibold text-slate-500 bg-white border border-slate-200 px-3 py-1.5 rounded-lg">{{ $bundle['level'] }}</span>
                                </div>
                                <div class="flex gap-0.5">
                                    @for($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 text-amber-400 fill-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    @endfor
                                </div>
                            </div>

                            <!-- Title -->
                            <h4 class="font-bold text-slate-900 text-lg leading-snug mb-8 min-h-[30px]">
                                {{ $bundle['title'] }}
                            </h4>

                            <!-- Footer Info -->
                            <div class="flex items-center gap-5 text-slate-400 text-xs font-medium border-t border-slate-100 pt-5">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <span>{{ $bundle['hours'] }}</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/></svg>
                                    <span>{{ $bundle['lectures'] }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
