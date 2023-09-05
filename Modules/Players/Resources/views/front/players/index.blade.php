<div class="">
    <InfinityScroll url="{{ route('front.players.api') }}">
        <template #default="{handleFormSubmit, data, loading}">
            @php
                $default = [
                    'age' => request()->input('age') ?? null,
                    'soka_score' => request()->input('soka_score') ?? null,
                    'height' => request()->input('height') ?? null,
                    'position' => ['g' => false, 'd' => false, 'm' => false, 'f' => false,],
                    'sort_by' => 'age',
                    'sort_type' => 'asc'
            ];
            @endphp
            <x-splade-form preserve-scroll method="get" :default="$default" stay action="{{ route('front.players')
            }}" class="flex relative w-full">
    <div class="w-12 fixed h-screen">
        <div class="bg-white w-7 h-7 p-0.5 rounded mx-auto mt-3 mb-4">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-slate-900">
                    <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                    <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                </svg>
            </a>
        </div>
        <div class="text-white w-7 h-7 p-0.5 rounded mx-auto mb-4 hover:bg-slate-700 transition duration-300">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </a>
        </div>
        <div class="text-white w-7 h-7 p-0.5 rounded mx-auto hover:bg-slate-700 transition duration-300">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-slate-900 hover:fill-white transition duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>
            </a>
        </div>
        <div class="text-white w-7 h-7 p-0.5 rounded mx-auto hover:bg-slate-700 transition duration-300 absolute bottom-3 left-2.5">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-white">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
    <div class="bg-cyan-900/25 basis-1/4 text-white tracking-wider ml-12 min-h-screen">
        <div class="w-1/3 mx-auto mt-6 mb-3">
            <x-splade-link href="/">
                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 278.87 72.7"><defs>
                        <radialGradient id="radial-gradient" cx="28.24" cy="36.35" fx="28.24" fy="36.35" r="32.55" gradientTransform="translate(0 -17.01) scale(1 1.47)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#84cc16"/><stop offset=".3" stop-color="#87ce15"/><stop offset=".54" stop-color="#91d412"/>
                            <stop offset=".76" stop-color="#a2df0d"/><stop offset=".96" stop-color="#b9ee06"/>
                            <stop offset="1" stop-color="#bff205"/></radialGradient>
                        <linearGradient id="linear-gradient" x1="146.19" y1="36.35" x2="204.24" y2="36.35" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#84cc16"/><stop offset=".63" stop-color="#bff205"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-2" x1="270.34" y1="23.54" x2="216.34" y2="77.54" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#84cc16"/><stop offset=".19" stop-color="#97d810"/>
                            <stop offset=".48" stop-color="#ade60a"/><stop offset=".75" stop-color="#baef06"/><stop offset="1" stop-color="#bff205"/>
                        </linearGradient><radialGradient id="radial-gradient-2" cx="99.39" cy="36.13" fx="99.39" fy="36.13" r="36" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#65a30d"/><stop offset=".21" stop-color="#69a60c"/><stop offset=".42" stop-color="#75b10b"/>
                            <stop offset=".64" stop-color="#8ac309"/><stop offset=".85" stop-color="#a7dd07"/><stop offset="1" stop-color="#bff205"/></radialGradient></defs>
                    <path class="cls-4" d="m27.69,72.7c-4.27,0-8.53-.47-12.8-1.4-4.27-.93-7.97-2.3-11.1-4.1-1.87-1-3.03-2.35-3.5-4.05-.47-1.7-.37-3.35.3-4.95.67-1.6,1.73-2.73,3.2-3.4,1.47-.67,3.23-.5,5.3.5,2.67,1.53,5.63,2.67,8.9,3.4,3.27.73,6.5,1.1,9.7,1.1,4.8,0,8.25-.75,10.35-2.25s3.15-3.38,3.15-5.65c0-1.93-.73-3.47-2.2-4.6-1.47-1.13-4.03-2.1-7.7-2.9l-11.3-2.4C7.39,39.33,1.09,32.8,1.09,22.4c0-4.47,1.2-8.38,3.6-11.75,2.4-3.37,5.75-5.98,10.05-7.85C19.04.93,24.02,0,29.69,0c3.73,0,7.4.45,11,1.35,3.6.9,6.77,2.22,9.5,3.95,1.67,1,2.7,2.3,3.1,3.9s.28,3.13-.35,4.6c-.63,1.47-1.7,2.5-3.2,3.1-1.5.6-3.35.37-5.55-.7-2.2-1.13-4.53-1.97-7-2.5-2.47-.53-5-.8-7.6-.8-4.2,0-7.45.82-9.75,2.45-2.3,1.63-3.45,3.75-3.45,6.35,0,1.93.7,3.5,2.1,4.7,1.4,1.2,3.83,2.17,7.3,2.9l11.3,2.4c12.93,2.8,19.4,9.13,19.4,19,0,4.4-1.18,8.25-3.55,11.55-2.37,3.3-5.7,5.87-10,7.7-4.3,1.83-9.38,2.75-15.25,2.75Z"/><path class="cls-1" d="m153.99,72.5c-2.53,0-4.47-.7-5.8-2.1-1.33-1.4-2-3.37-2-5.9V8.1c0-2.53.67-4.48,2-5.85,1.33-1.37,3.27-2.05,5.8-2.05,5.13,0,7.7,2.63,7.7,7.9v23.7h.2l26.6-27.8c1.13-1.2,2.32-2.12,3.55-2.75,1.23-.63,2.65-.95,4.25-.95,2.27,0,3.93.6,5,1.8,1.07,1.2,1.53,2.62,1.4,4.25-.13,1.63-.87,3.12-2.2,4.45l-23.5,24,24.9,26.5c1.53,1.67,2.32,3.37,2.35,5.1.03,1.73-.53,3.18-1.7,4.35-1.17,1.17-2.88,1.75-5.15,1.75-1.93,0-3.48-.4-4.65-1.2s-2.45-1.97-3.85-3.5l-27-28.4h-.2v25.1c0,2.53-.65,4.5-1.95,5.9-1.3,1.4-3.22,2.1-5.75,2.1Z"/><path class="cls-3" d="m214.69,72.5c-2.8,0-4.8-.93-6-2.8-1.2-1.87-1.17-4.17.1-6.9l25.6-56.1c1.07-2.27,2.33-3.92,3.8-4.95,1.47-1.03,3.17-1.55,5.1-1.55s3.63.52,5.1,1.55c1.47,1.03,2.7,2.68,3.7,4.95l25.8,56.1c1.27,2.8,1.32,5.12.15,6.95-1.17,1.83-3.05,2.75-5.65,2.75-2.27,0-4.02-.54-5.25-1.6-1.23-1.07-2.32-2.73-3.25-5l-4.2-9.6h-32.9l-4.1,9.6c-1,2.33-2.07,4.02-3.2,5.05-1.13,1.03-2.73,1.55-4.8,1.55Zm28.4-54.9l-11.1,26.6h22.6l-11.3-26.6h-.2Z"/><path class="cls-2" d="m99.39.13c-19.88,0-36,16.12-36,36s16.12,36,36,36,36-16.12,36-36S119.27.13,99.39.13Zm0,59c-12.7,0-23-10.3-23-23s10.3-23,23-23,23,10.3,23,23-10.3,23-23,23Z"/>
                </svg>
            </x-splade-link>
        </div>
        <p class="text-sm text-center mb-4"><span class="text-lime-300">384</span> / 1,294 Players</p>
        <div class="flex justify-center">
            <x-splade-link href="{{ route('front.players') }}" class="p-1 bg-red-500 bg-lime-300 rounded
            text-slate-900">Reset Filter</x-splade-link>
        </div>
        <!-- Soka Score -->
        @include('players::front.players._filter')
        <!-- Height -->

        <div class="filter w-10/12 mx-auto mb-8">
            <p class="text-sm mb-2">Preferred Foot</p>
            <div class="flex flex-row select-none">
                <div class="basis-1/4 uppercase text-sm text-center bg-lime-300 p-2 text-slate-900 rounded-tl rounded-bl cursor-pointer">
                    Either
                </div>
                <div class="basis-1/4 uppercase text-sm text-center bg-slate-800 p-2 text-white/60 cursor-pointer">
                    Left
                </div>
                <div class="basis-1/4 uppercase text-sm text-center bg-slate-800 p-2 text-white/60 cursor-pointer">
                    Right
                </div>
                <div class="basis-1/4 uppercase text-sm text-center bg-slate-800 p-2 text-white/60 rounded-tr rounded-br cursor-pointer">
                    Both
                </div>
            </div>
        </div>
        <!-- Matches Played -->
        <x-splade-data default="{items: [
            {name: 'Matches Played', label: '12 matches', direction: 'right', min: 1, max: 100, inputValue: 50},
            {name: 'Minutes per Match', label: '90 mins', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Defensive Score', label: '9.2', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Tackle Accuracy', label: '63%', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Passing Score', label: '8.8', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Passes per 90 Minutes', label: '63', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Pass Accuracy', direction: 'right', label: '63%', min: 0, max: 100, inputValue: 50},
            {name: 'Possession Score', direction: 'right', label: '9.1', min: 0, max: 100, inputValue: 50},
            {name: 'Dribble Accuracy', direction: 'right', label: '63%', min: 0, max: 100, inputValue: 50},
            {name: 'Duels Won', label: '63%', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Attacking Score', label: '8.9', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Minutes per Goal', label: '45 mins', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Minutes per Assist', label: '45 mins', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Shots per 90 Minutes', label: '7', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Crosses per 90 Minutes', label: '12', direction: 'right', min: 0, max: 100, inputValue: 50},
            {name: 'Penalties Converted', label: '63%', direction: 'right', min: 0, max: 100, inputValue: 50},
        ]}">


            <div v-for="item in data.items" class="filter w-10/12 mx-auto mb-8">
                <p class="text-sm">@{{ item.name }}</p>
                <input id="filtermatchesplayed" type="range"
                       v-bind:min="item.min"
                       v-bind:max="item.max"
                       v-bind:value="item.inputValue"
                       class="rounded-lg appearance-none
                       bg-cyan-900/50
                       h-1.5 w-full bg-gradient-to-r from-lime-300 to-lime-500 bg-no-repeat"
                       v-bind:class="`bg-${item.direction}-top`"
                       v-model="item.inputValue"
                       v-bind:style="`{backgroundSize: ${item.max-item.inputValue}%}`" />
                <p class="text-xs text-right">
                   @{{ item.label }}
                </p>
            </div>
        </x-splade-data>


    </div>
    <div class="flex-auto p-5">
        <table class="text-white tracking-wider table-fixed">
                <thead class="text-xs text-center text-lime-600 border-b-2 border-lime-500">
            <tr>
                <td class="py-3 bg-slate-900 sticky top-0 z-20">
                    &nbsp;
                </td>
                <td class="py-3 bg-slate-900 w-1/12 sticky top-0 cursor-pointer"  @click="form.sort_by = 'age'; form.sort_type = form.sort_type == 'asc' ? 'desc' :'asc';
                             handleFormSubmit(form.$all)">
                    <div class="flex place-content-center">
                        <div class="place-self-center"
                          >AGE</div>
                        <div class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-5 h-5" v-if="form.sort_by != 'age' || form.sort_type == 'asc'">
                                <path class="fill-slate-700" fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            <svg v-if="form.sort_by == 'age' && form.sort_type == 'desc'" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                               viewBox="0 0 20 20" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8
                                 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </td>
                <td class="py-3 bg-slate-900 w-1/12 sticky top-0 cursor-pointer" @click="form.sort_by = 'height'; form.sort_type = form.sort_type == 'asc' ? 'desc' :'asc';
                             handleFormSubmit(form.$all)">
                    <div class="flex place-content-center">
                        <div class="place-self-center">HEIGHT</div>
                        <div class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-5 h-5" v-if="form.sort_by != 'height' || form.sort_type == 'asc'">
                                <path class="fill-slate-700" fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            <svg v-if="form.sort_by == 'height' && form.sort_type == 'desc'" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                                 viewBox="0 0 20 20" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8
                                 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </td>
                <td class="py-3 bg-slate-900 w-1/12 sticky top-0 cursor-pointer" @click="form.sort_by = 'matches'; form.sort_type = form.sort_type == 'asc' ? 'desc' :'asc';
                             handleFormSubmit(form.$all)">
                    <div class="flex place-content-center">
                        <div class="place-self-center">MATCHES</div>
                        <div class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-5 h-5" v-if="form.sort_by != 'matches' || form.sort_type == 'asc'">
                                <path class="fill-slate-700" fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            <svg v-if="form.sort_by == 'matches' && form.sort_type == 'desc'" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                                 viewBox="0 0 20 20" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8
                                 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </td>
                <td class="py-3 bg-slate-900 w-2/12 sticky top-0 cursor-pointer"
                        @click="form.sort_by = 'soka_score'; form.sort_type = form.sort_type == 'asc' ? 'desc' :'asc';
                             handleFormSubmit(form.$all)">
                    <div class="flex place-content-center">
                        <div class="place-self-center text-lime-500">SOKA SCORE</div>
                        <div class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-5 h-5" v-if="form.sort_by != 'soka_score' || form.sort_type == 'asc'">
                                <path class="fill-slate-700" fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            <svg v-if="form.sort_by == 'soka_score' && form.sort_type == 'desc'" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                                 viewBox="0 0 20 20" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8
                                 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </td>
                <td class="py-3 bg-slate-900 w-1/12 sticky top-0 cursor-pointer"  @click="form.sort_by = 'attacking';
                form.sort_type = form.sort_type == 'asc' ? 'desc' :'asc';
                             handleFormSubmit(form.$all)">
                    <div class="flex place-content-center">
                        <div class="place-self-center">ATTACKING</div>
                        <div class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-5 h-5" v-if="form.sort_by != 'attacking' || form.sort_type == 'asc'">
                                <path class="fill-slate-700" fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            <svg v-if="form.sort_by == 'attacking' && form.sort_type == 'desc'" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                                 viewBox="0 0 20 20" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8
                                 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </td>
                <td class="py-3 bg-slate-900 w-1/12 sticky top-0 cursor-pointer" @click="form.sort_by = 'defensive';
                form.sort_type = form.sort_type == 'asc' ? 'desc' :'asc';
                             handleFormSubmit(form.$all)">
                    <div class="flex place-content-center">
                        <div class="place-self-center">DEFENSIVE</div>
                        <div class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-5 h-5" v-if="form.sort_by != 'defensive' || form.sort_type == 'asc'">
                                <path class="fill-slate-700" fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            <svg v-if="form.sort_by == 'defensive' && form.sort_type == 'desc'" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                                 viewBox="0 0 20 20" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8
                                 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </td>
                <td class="py-3 bg-slate-900 w-1/12 sticky top-0 cursor-pointer" @click="form.sort_by = 'passing';
                form.sort_type = form.sort_type == 'asc' ? 'desc' :'asc';
                             handleFormSubmit(form.$all)">
                    <div class="flex place-content-center">
                        <div class="place-self-center">PASSING</div>
                        <div class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-5 h-5" v-if="form.sort_by != 'passing' || form.sort_type == 'asc'">
                                <path class="fill-slate-700" fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            <svg v-if="form.sort_by == 'passing' && form.sort_type == 'desc'"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                                 viewBox="0 0 20 20" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8
                                 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </td>
                <td class="py-3 bg-slate-900 w-1/12 sticky top-0 cursor-pointer"  @click="form.sort_by = 'possession';
                form.sort_type = form.sort_type == 'asc' ? 'desc' :'asc';
                             handleFormSubmit(form.$all)">
                    <div class="flex place-content-center">
                        <div class="place-self-center">POSSESSION</div>
                        <div class="place-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-5 h-5" v-if="form.sort_by != 'possession' || form.sort_type == 'asc'">
                                <path class="fill-slate-700" fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                            <svg v-if="form.sort_by == 'possession' && form.sort_type == 'desc'"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                                 viewBox="0 0 20 20" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8
                                 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </td>
            </tr>
            </thead>

            <tbody class="text-sm">


                            <tr class="border-b border-slate-800 hover:bg-slate-800" v-for="player in data.data" v-bind:key="player.id">
                                <td class="py-4">
                                    <x-splade-link v-bind:href="`{{ url('players/${player.id}') }}`">
                                        <div class="flex">
                                            <img class="h-12 w-12 rounded-full ml-1 mr-3" v-bind:src="player.image"
                                                 v-bind:alt="player.name" />
                                            <div class="truncate">
                                                <p>
                                                    <span v-text="player.name"></span>
                                                </p>
                                                <div class="flex">
                                                    <div class="w-6 h-6 mr-2">
                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                                        <g id="XMLID_00000093156248264949356020000012658668346877317530_">
                                                            <path
                                                                  v-bind:style="{fill: player.team_color}"
                                                                  d="M126.3 15.8 182 0c27.4 32.5 118 35.7 148.2.6L332 0l58.9 17c17.8 5.2 34.4 13.9 48.8 25.6l47 38.5-38.5 95L407 153c-14-7.9-30.2 7.7-29.9 23.3l-.3 335.7H106V152l-69 40-37-88 68.8-57.7c16.8-14.2 36.4-24.6 57.5-30.5z"/>
                                                            <path class="fill-yellow-300" d="M407 153v359h-30.2l.2-335.7c-.2-15.6 16-31.2 30-23.3zM512 102l-36 90-27.8-15.7 38.5-95.1z"/>
                                                        </g>
                                                    </svg>
                                                    </div>
                                                    <div class="absolute w-6 text-[9px] text-center mt-1"><span
                                                            v-text="player.shirtNumber"></span></div>
                                                    <p class="text-xs text-cyan-600 flex items-center pt-1"><span
                                                            v-text="player.position"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </x-splade-link>
                                </td>
                                <td class="text-center">
                                    <span v-text="player.age"></span>
                                </td>
                                <td class="text-center">
                                    <span v-text="player.height"></span> cm
                                </td>
                                <td class="text-center">
                                    <span v-text="player.matches"></span>
                                </td>
                                <td class="text-center">
                                    <span v-text="player.sokaScore"></span>%
                                </td>
                                <td class="text-center">
                                    <span v-text="player.attacking"></span>
                                </td>
                                <td class="text-center">
                                    <span v-text="player.defensive"></span>
                                </td>
                                <td class="text-center">
                                    <span v-text="player.passing"></span>
                                </td>
                                <td class="text-center">
                                    <span v-text="player.possession"></span>
                                </td>
                            </tr>
                            <PlayerShimmer v-bind:count="20" v-if="loading"/>
            </tbody>
        </table>
    </div>
            </x-splade-form>
        </template>
    </InfinityScroll>
</div>
