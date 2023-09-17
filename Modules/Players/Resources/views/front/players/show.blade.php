@php use Carbon\Carbon; @endphp
<div class="flex relative">
    <div class="w-12 fixed h-screen">
        <div class="bg-white w-7 h-7 p-0.5 rounded mx-auto mt-3 mb-4">
            <x-splade-link href="{{ route('front.players') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-6 h-6 fill-slate-900">
                    <path
                        d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"/>
                    <path
                        d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"/>
                </svg>
            </x-splade-link>
        </div>
        <div class="text-white w-7 h-7 p-0.5 rounded mx-auto mb-4 hover:bg-slate-700 transition duration-300">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6 stroke-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                </svg>
            </a>
        </div>
        <div class="text-white w-7 h-7 p-0.5 rounded mx-auto hover:bg-slate-700 transition duration-300">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6 fill-slate-900 hover:fill-white transition duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                </svg>
            </a>
        </div>
        <div
            class="text-white w-7 h-7 p-0.5 rounded mx-auto hover:bg-slate-700 transition duration-300 absolute bottom-3 left-2.5">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-6 h-6 fill-white">
                    <path fill-rule="evenodd"
                          d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                          clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
    </div>


    <div class="bg-cyan-900/25 basis-1/6 text-white tracking-wider ml-12 min-h-screen">
        <div class="flex flex-col justify-items-center justify-center items-center">
            <div class="w-1/3 mt-6 mb-5">
                <x-splade-link href="/">
                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 278.87 72.7">
                    <defs>
                        <radialGradient id="radial-gradient" cx="28.24" cy="36.35" fx="28.24" fy="36.35" r="32.55"
                                        gradientTransform="translate(0 -17.01) scale(1 1.47)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#84cc16"/>
                            <stop offset=".3" stop-color="#87ce15"/>
                            <stop offset=".54" stop-color="#91d412"/>
                            <stop offset=".76" stop-color="#a2df0d"/>
                            <stop offset=".96" stop-color="#b9ee06"/>
                            <stop offset="1" stop-color="#bff205"/>
                        </radialGradient>
                        <linearGradient id="linear-gradient" x1="146.19" y1="36.35" x2="204.24" y2="36.35"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#84cc16"/>
                            <stop offset=".63" stop-color="#bff205"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-2" x1="270.34" y1="23.54" x2="216.34" y2="77.54"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#84cc16"/>
                            <stop offset=".19" stop-color="#97d810"/>
                            <stop offset=".48" stop-color="#ade60a"/>
                            <stop offset=".75" stop-color="#baef06"/>
                            <stop offset="1" stop-color="#bff205"/>
                        </linearGradient>
                        <radialGradient id="radial-gradient-2" cx="99.39" cy="36.13" fx="99.39" fy="36.13" r="36"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#65a30d"/>
                            <stop offset=".21" stop-color="#69a60c"/>
                            <stop offset=".42" stop-color="#75b10b"/>
                            <stop offset=".64" stop-color="#8ac309"/>
                            <stop offset=".85" stop-color="#a7dd07"/>
                            <stop offset="1" stop-color="#bff205"/>
                        </radialGradient>
                    </defs>
                    <path class="cls-4"
                          d="m27.69,72.7c-4.27,0-8.53-.47-12.8-1.4-4.27-.93-7.97-2.3-11.1-4.1-1.87-1-3.03-2.35-3.5-4.05-.47-1.7-.37-3.35.3-4.95.67-1.6,1.73-2.73,3.2-3.4,1.47-.67,3.23-.5,5.3.5,2.67,1.53,5.63,2.67,8.9,3.4,3.27.73,6.5,1.1,9.7,1.1,4.8,0,8.25-.75,10.35-2.25s3.15-3.38,3.15-5.65c0-1.93-.73-3.47-2.2-4.6-1.47-1.13-4.03-2.1-7.7-2.9l-11.3-2.4C7.39,39.33,1.09,32.8,1.09,22.4c0-4.47,1.2-8.38,3.6-11.75,2.4-3.37,5.75-5.98,10.05-7.85C19.04.93,24.02,0,29.69,0c3.73,0,7.4.45,11,1.35,3.6.9,6.77,2.22,9.5,3.95,1.67,1,2.7,2.3,3.1,3.9s.28,3.13-.35,4.6c-.63,1.47-1.7,2.5-3.2,3.1-1.5.6-3.35.37-5.55-.7-2.2-1.13-4.53-1.97-7-2.5-2.47-.53-5-.8-7.6-.8-4.2,0-7.45.82-9.75,2.45-2.3,1.63-3.45,3.75-3.45,6.35,0,1.93.7,3.5,2.1,4.7,1.4,1.2,3.83,2.17,7.3,2.9l11.3,2.4c12.93,2.8,19.4,9.13,19.4,19,0,4.4-1.18,8.25-3.55,11.55-2.37,3.3-5.7,5.87-10,7.7-4.3,1.83-9.38,2.75-15.25,2.75Z"/>
                    <path class="cls-1"
                          d="m153.99,72.5c-2.53,0-4.47-.7-5.8-2.1-1.33-1.4-2-3.37-2-5.9V8.1c0-2.53.67-4.48,2-5.85,1.33-1.37,3.27-2.05,5.8-2.05,5.13,0,7.7,2.63,7.7,7.9v23.7h.2l26.6-27.8c1.13-1.2,2.32-2.12,3.55-2.75,1.23-.63,2.65-.95,4.25-.95,2.27,0,3.93.6,5,1.8,1.07,1.2,1.53,2.62,1.4,4.25-.13,1.63-.87,3.12-2.2,4.45l-23.5,24,24.9,26.5c1.53,1.67,2.32,3.37,2.35,5.1.03,1.73-.53,3.18-1.7,4.35-1.17,1.17-2.88,1.75-5.15,1.75-1.93,0-3.48-.4-4.65-1.2s-2.45-1.97-3.85-3.5l-27-28.4h-.2v25.1c0,2.53-.65,4.5-1.95,5.9-1.3,1.4-3.22,2.1-5.75,2.1Z"/>
                    <path class="cls-3"
                          d="m214.69,72.5c-2.8,0-4.8-.93-6-2.8-1.2-1.87-1.17-4.17.1-6.9l25.6-56.1c1.07-2.27,2.33-3.92,3.8-4.95,1.47-1.03,3.17-1.55,5.1-1.55s3.63.52,5.1,1.55c1.47,1.03,2.7,2.68,3.7,4.95l25.8,56.1c1.27,2.8,1.32,5.12.15,6.95-1.17,1.83-3.05,2.75-5.65,2.75-2.27,0-4.02-.54-5.25-1.6-1.23-1.07-2.32-2.73-3.25-5l-4.2-9.6h-32.9l-4.1,9.6c-1,2.33-2.07,4.02-3.2,5.05-1.13,1.03-2.73,1.55-4.8,1.55Zm28.4-54.9l-11.1,26.6h22.6l-11.3-26.6h-.2Z"/>
                    <path class="cls-2"
                          d="m99.39.13c-19.88,0-36,16.12-36,36s16.12,36,36,36,36-16.12,36-36S119.27.13,99.39.13Zm0,59c-12.7,0-23-10.3-23-23s10.3-23,23-23,23,10.3,23,23-10.3,23-23,23Z"/>
                </svg>
                </x-splade-link>
            </div>

            <picture>
                <img loading="lazy" class="h-36 w-36 rounded-full ml-1 mr-3"
                     src="{{ $player->image }}"/>
            </picture>

            <div class="mt-3 text-center">
                <h2 class="text-white text-xl">{{ $player->name }}</h2>
                <div class="flex mt-2 mb-2">
                    <div class="w-6 h-6 mr-2">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g id="XMLID_00000093156248264949356020000012658668346877317530_">
                                    <path
                                          style="fill: {{ $player->payload['team_color'] }}"
                                          d="M126.3 15.8 182 0c27.4 32.5 118 35.7 148.2.6L332 0l58.9 17c17.8 5.2 34.4 13.9 48.8 25.6l47 38.5-38.5 95L407 153c-14-7.9-30.2 7.7-29.9 23.3l-.3 335.7H106V152l-69 40-37-88 68.8-57.7c16.8-14.2 36.4-24.6 57.5-30.5z"/>
                                    <path class="fill-yellow-300"
                                          d="M407 153v359h-30.2l.2-335.7c-.2-15.6 16-31.2 30-23.3zM512 102l-36 90-27.8-15.7 38.5-95.1z"/>
                                </g>
                            </svg>
                    </div>
                    <div class="absolute w-6 text-[9px] text-center mt-1"><span>{{ random_int(1, 30) }}</span></div>
                    <p class="text-gray-400">{{ $player->team->name }} | {{ $player->position }}</p>
                </div>
                <p class="text-gray-400">Born: {{ Carbon::parse($player->dob)->format('Y') }} | {{ $player->height}}</p>
            </div>

            <div class="px-3 pt-2 pb-2 w-[150px] h-[40px] rounded-full border border-gray-600 items-center mt-2 grid
            grid-cols-5 gap-2 justify-items-center">

                <a href="">
                    <svg class="w-5 h-5"
                         fill="#ddd"
                         version="1.1" id="Capa_1"
                         xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://wwww3.org/1999/xlink"
                         width="800px" height="800px" viewBox="0 0 36.09 36.09" xml:space="preserve"
                    >
                <g>
                    <path d="M36.042,13.909c-0.123-0.377-0.456-0.646-0.85-0.688l-11.549-1.172L18.96,1.43c-0.16-0.36-0.519-0.596-0.915-0.596
                        s-0.755,0.234-0.915,0.598L12.446,12.05L0.899,13.221c-0.394,0.04-0.728,0.312-0.85,0.688c-0.123,0.377-0.011,0.791,0.285,1.055
                        l8.652,7.738L6.533,34.045c-0.083,0.387,0.069,0.787,0.39,1.02c0.175,0.127,0.381,0.191,0.588,0.191
                        c0.173,0,0.347-0.045,0.503-0.137l10.032-5.84l10.03,5.84c0.342,0.197,0.77,0.178,1.091-0.059c0.32-0.229,0.474-0.633,0.391-1.02
                        l-2.453-11.344l8.653-7.737C36.052,14.699,36.165,14.285,36.042,13.909z M25.336,21.598c-0.268,0.24-0.387,0.605-0.311,0.957
                        l2.097,9.695l-8.574-4.99c-0.311-0.182-0.695-0.182-1.006,0l-8.576,4.99l2.097-9.695c0.076-0.352-0.043-0.717-0.311-0.957
                        l-7.396-6.613l9.87-1.002c0.358-0.035,0.668-0.264,0.814-0.592l4.004-9.077l4.003,9.077c0.146,0.328,0.456,0.557,0.814,0.592
                        l9.87,1.002L25.336,21.598z"/>
                </g>
                </svg>
                </a>

                <div class="w-[1px] h-[25px] bg-gray-600 shadow"></div>

                <a href="">
                    <svg class="w-5 h-5 fill-[#d7f205]" height="800px" width="800px" version="1.1" id="Capa_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 481.6 481.6" xml:space="preserve">
                <g>
                    <path d="M381.6,309.4c-27.7,0-52.4,13.2-68.2,33.6l-132.3-73.9c3.1-8.9,4.8-18.5,4.8-28.4c0-10-1.7-19.5-4.9-28.5l132.2-73.8
                        c15.7,20.5,40.5,33.8,68.3,33.8c47.4,0,86.1-38.6,86.1-86.1S429,0,381.5,0s-86.1,38.6-86.1,86.1c0,10,1.7,19.6,4.9,28.5
                        l-132.1,73.8c-15.7-20.6-40.5-33.8-68.3-33.8c-47.4,0-86.1,38.6-86.1,86.1s38.7,86.1,86.2,86.1c27.8,0,52.6-13.3,68.4-33.9
                        l132.2,73.9c-3.2,9-5,18.7-5,28.7c0,47.4,38.6,86.1,86.1,86.1s86.1-38.6,86.1-86.1S429.1,309.4,381.6,309.4z M381.6,27.1
                        c32.6,0,59.1,26.5,59.1,59.1s-26.5,59.1-59.1,59.1s-59.1-26.5-59.1-59.1S349.1,27.1,381.6,27.1z M100,299.8
                        c-32.6,0-59.1-26.5-59.1-59.1s26.5-59.1,59.1-59.1s59.1,26.5,59.1,59.1S132.5,299.8,100,299.8z M381.6,454.5
                        c-32.6,0-59.1-26.5-59.1-59.1c0-32.6,26.5-59.1,59.1-59.1s59.1,26.5,59.1,59.1C440.7,428,414.2,454.5,381.6,454.5z"/>
                </g>
                </svg>

                </a>

                <div class="w-[1px] h-[25px] bg-gray-600 shadow"></div>


                <a href="">
                    <svg class="w-6 h-6 fill-[#d7f205]" viewBox="0 -64 640 640" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M519.2 127.9l-47.6-47.6A56.252 56.252 0 0 0 432 64H205.2c-14.8 0-29.1 5.9-39.6 16.3L118 127.9H0v255.7h64c17.6 0 31.8-14.2 31.9-31.7h9.1l84.6 76.4c30.9 25.1 73.8 25.7 105.6 3.8 12.5 10.8 26 15.9 41.1 15.9 18.2 0 35.3-7.4 48.8-24 22.1 8.7 48.2 2.6 64-16.8l26.2-32.3c5.6-6.9 9.1-14.8 10.9-23h57.9c.1 17.5 14.4 31.7 31.9 31.7h64V127.9H519.2zM48 351.6c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16c0 8.9-7.2 16-16 16zm390-6.9l-26.1 32.2c-2.8 3.4-7.8 4-11.3 1.2l-23.9-19.4-30 36.5c-6 7.3-15 4.8-18 2.4l-36.8-31.5-15.6 19.2c-13.9 17.1-39.2 19.7-55.3 6.6l-97.3-88H96V175.8h41.9l61.7-61.6c2-.8 3.7-1.5 5.7-2.3H262l-38.7 35.5c-29.4 26.9-31.1 72.3-4.4 101.3 14.8 16.2 61.2 41.2 101.5 4.4l8.2-7.5 108.2 87.8c3.4 2.8 3.9 7.9 1.2 11.3zm106-40.8h-69.2c-2.3-2.8-4.9-5.4-7.7-7.7l-102.7-83.4 12.5-11.4c6.5-6 7-16.1 1-22.6L367 167.1c-6-6.5-16.1-6.9-22.6-1l-55.2 50.6c-9.5 8.7-25.7 9.4-34.6 0-9.3-9.9-8.5-25.1 1.2-33.9l65.6-60.1c7.4-6.8 17-10.5 27-10.5l83.7-.2c2.1 0 4.1.8 5.5 2.3l61.7 61.6H544v128zm48 47.7c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16c0 8.9-7.2 16-16 16z"/>
                    </svg>
                </a>

            </div>

            <div class="w-[120px] h-[120px] bg-[#d7f205] text-[#002731] rounded-lg flex flex-col justify-center mt-4">
                <h2 class="text-5xl  self-center mb-4">{{ $player->soka_score }}</h2>
                <p class="text-center self-center">Soka Score</p>
            </div>

            <div class="mt-10">
                <img src="{{ url('assets/images/img-5.png') }}" alt="">
            </div>
        </div>

        <div class="mt-5 ml-10">
            <h2 class="text-3xl text-white">{{ $player->payload['matches_played'] }} Matches</h2>
            <h2 class="text-white text-xl">{{ $player->payload['minutes_played'] }} Minutes</h2>
        </div>

        <div class="flex px-[30px] pt-5">
            <div class="basis-1/4 flex-col">
                <div class=" bg-[#38b745] h-2 rounded-l"></div>
                <div class="float-right relative mt-3 -mr-5">
                    <div class="bottom-0 inline-block px-3 text-white
                       bg-[#001920] rounded-full">
                        <span>W2</span>
                        <span class="absolute top-0 right-0 w-2 h-2 -mt-1 transform rotate-45 bg-[#001920]"
                              style="left:45%;"></span>
                    </div>

                </div>
            </div>
            <div class="basis-1/4 flex-col">
                <div class=" bg-[#b0c600] h-2"></div>
                <div class="float-right relative mt-3 -mr-5">
                    <div class="bottom-0 inline-block px-3 text-white
                       bg-[#001920] rounded-full">
                        <span>D2</span>
                        <span class="absolute top-0 right-0 w-2 h-2 -mt-1 transform rotate-45 bg-[#001920]"
                              style="left:45%;"></span>
                    </div>

                </div>
            </div>
            <div class="basis-2/4 flex-col">
                <div class="bg-[#d9513b] h-2 rounded-r"></div>
                <div class="float-right relative mt-3 -mr-5">
                    <div class="bottom-0 inline-block px-3 text-white
                       bg-[#001920] rounded-full">
                        <span>L4</span>
                        <span class="absolute top-0 right-0 w-2 h-2 -mt-1 transform rotate-45 bg-[#001920]"
                              style="left:45%;"></span>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-10 flex justify-center">
            <img src="{{ url('assets/images/img-6.png') }}" class="w-[80%]">
        </div>
    </div>

    <div class="basis-5/6 py-8 px-12">
        <h2 class="text-white text-4xl">
            {{ $player->payload['goal_contributions'] }} Goals Contributions
        </h2>
        <p class="text-s text-gray-600">Team Goals: {{ $player->payload['team_goals'] }}</p>
        <div class="w-[400px] h-[7px] mt-2 flex">
            <div class="basis-1/3 bg-[#12681a] rounded-l border-1"></div>
            <div class="basis-2/3 bg-[#21aa2e]"></div>
            <div class="basis-1/3 bg-[#89c28e] rounded-r border-1"></div>
        </div>

        <div class="grid grid-cols-3 mt-5 gap-6">
            <div>
                <div class="p-2 bg-gradient-to-r from-[#47085d] via-[#500d68] to-[#701f90]">
                    <div>
                        <div class="grid grid-cols-4">
                            <h3 class="text-white text-center col-start-2 col-end-3 flex flex-col">
                                <span class="text-[100px]">{{ $player->payload['goals'] }}</span>
                                <span class="-mt-8 text-2xl">Goals</span>
                            </h3>
                            <div class="col-start-4 bg-[#002729] p-1">
                                <div class="h-[170px] border-r-[1px] border-[#7aff87] flex flex-col justify-center">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-2">
                                        {{ $player->payload['goals_per_90_minutes'] }}
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-5 bg-[#002f31] px-4 pt-2 pb-4 border-[#59d3d9] border-2 rounded-md shadow-[#59d3d9] shandow-lg">
                        <h3 class="text-white"> {{ $player->payload['penalties'] }} Penalties</h3>
                        <div class="flex mt-5 text-white">
                            <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full">
                                <span class="p-3"> {{ $player->payload['penalties_on_target'] }}</span>
                            </div>
                            <div class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                <span class="p-3">{{ $player->payload['penalties_off_target'] }}</span>
                            </div>
                        </div>
                        <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                            <div>On Target</div>
                            <div>Off Target</div>
                        </div>
                    </div>
                    <div class="mt-5 bg-[#002f31] px-4 pt-2 pb-4  rounded-md">
                        <h3 class="text-white">{{ $player->payload['shots'] }} Shots</h3>
                        <div class="flex mt-5 text-white">
                            <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full">
                                <span class="p-3">{{ $player->payload['shots_on_target'] }}</span>
                            </div>
                            <div class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                <span class="p-3">{{ $player->payload['shots_off_target'] }}</span>
                            </div>
                        </div>
                        <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                            <div>On Target</div>
                            <div>Off Target</div>
                        </div>
                    </div>
                </div>
                <h2 class="text-white text-2xl mt-10 pb-2 ">Passing &amp; Possessions</h2>
                <div class="bg-[#4c6b8b] w-[250px] h-[3px] border-[#4c6b8b] border-b-4 rounded-[50px]"></div>
                <div class="mt-5 bg-[#002f31] rounded-md">
                    <div class="flex">
                        <div class="basis-3/4 p-4">
                            <div class="flex justify-between"><h3 class="text-white">{{ $player->payload['passes'] }}
                                    passes</h3>
                                <h3><span class="text-white">0.5</span> <span class="text-gray-600">{{ $player->payload['goals_per_90_minutes'] }}/ 90mins</span></h3>
                            </div>
                            <div class="flex mt-5 text-white">
                                <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full"><span
                                        class="p-3">{{ $player->payload['penalties_on_target'] }} </span></div>
                                <div
                                    class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                    <span class="p-3">{{ $player->payload['penalties_off_target'] }} </span></div>
                            </div>
                            <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                                <div>Complete</div>
                                <div>Incomplete</div>
                            </div>
                        </div>
                        <div class="basis-1/4 bg-[#002729] p-2">
                            <div class="h-full border-r-[2px] border-[#ff755e]"><h3
                                    class="text-center text-sm text-[#ff755e] pt-5"> {{ $player->payload['pass_accuracy'] }} % <br> Accuracy </h3></div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 bg-[#002f31] rounded-md">
                    <div class="flex">
                        <div class="basis-3/4 p-4">
                            <h3 class="text-white">Receptions</h3>
                            <div class="flex mt-5 text-white">
                                <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full"><span
                                        class="p-3">{{ $player->payload['receptions_successful'] }} </span></div>
                                <div
                                    class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                    <span class="p-3">{{ $player->payload['receptions_unsuccessful'] }}</span></div>
                            </div>
                            <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                                <div>Successful</div>
                                <div>Unsuccessful</div>
                            </div>
                        </div>
                        <div class="basis-1/4 bg-[#002729] p-2">
                            <div class="h-full border-r-[2px] border-[#ff755e]"><h3
                                    class="text-center text-sm text-[#ff755e] pt-5"> {{ $player->payload['receptions_success_rate'] }}% <br> Accuracy </h3></div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 bg-[#002f31] rounded-md">
                    <div class="flex">
                        <div class="basis-3/4 p-4">
                            <h3 class="text-white">Offsides</h3>
                            <div class="flex mt-5 text-white">
                                <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full"><span
                                        class="p-3">{{ $player->payload['beat_offside_trap'] }}</span></div>
                                <div
                                    class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                    <span class="p-3">{{ $player->payload['fell_offside'] }}</span></div>
                            </div>
                            <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                                <div>Beat Trap</div>
                                <div>Fell Offside</div>
                            </div>
                        </div>
                        <div class="basis-1/4 bg-[#002729] p-2">
                            <div class="h-full border-r-[2px] border-[#ff755e]"><h3
                                    class="text-center text-sm text-[#ff755e] pt-5"> {{ $player->payload['offside_success_rate'] }}% <br> Accuracy </h3></div>
                        </div>
                    </div>
                </div>


                <div class="mt-5 p-2 bg-[#00484b] rounded">
                    <div class="grid grid-cols-2 gap-2">
                        <div class="bg-[#002729] flex rounded">
                            <div class="bg-[#002f31] pt-4 px-5 pb-8 border-r-[2px] border-[#093545]">
                                <h3 class="text-white text-l text-center">{{ $player->payload['fouls_won'] }} <br>
                                    Fouls Won</h3>
                            </div>
                            <div class="grow p-2">
                                <div class="h-full border-r-[2px] border-[#7aff87]">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                        {{ $player->payload['fouls_won_per_90_minutes'] }}
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#002729] flex rounded">
                            <div class="bg-[#002f31] pt-4 px-5 pb-8 border-r-[2px] border-[#093545]">
                                <h3 class="text-white text-l text-center">{{ $player->payload['penalties_won'] }} <br>
                                    Penalties<br> Won</h3>
                            </div>
                            <div class="grow p-2">
                                <div class="h-full border-r-[2px] border-[#7aff87]">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                      {{ $player->payload['penalties_won_per_90_minutes'] }}
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2 mt-2">
                        <div class="bg-[#002729] flex rounded">
                            <div class="bg-[#002f31] pt-4 px-5 pb-8 border-r-[2px] border-[#093545]">
                                <h3 class="text-white text-l text-center"> {{ $player->payload['fouls_committed'] }} <br> Fouls <br> Committed</h3>
                            </div>
                            <div class="grow p-2">
                                <div class="h-full border-r-[2px] border-[#7aff87]">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                        {{ $player->payload['fouls_committed_per_90_minutes'] }}
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#002729] flex rounded">
                            <div class="bg-[#002f31] pt-4 px-5 pb-8 border-r-[2px] border-[#093545]">
                                <h3 class="text-white text-l text-center"> {{ $player->payload['penalties_committed'] }} <br> Penalties <br> Committed</h3>
                            </div>
                            <div class="grow p-2">
                                <div class="h-full border-r-[2px] border-[#7aff87]">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                        {{ $player->payload['penalties_committed_per_90_minutes'] }}
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="text-white text-2xl mt-10 pb-2 ">Defense</h2>
                <div class="bg-[#4c6b8b] w-[250px] h-[3px] border-[#4c6b8b] border-b-4 rounded-[50px]"></div>

                <div class="mt-5 bg-[#002f31] rounded-md">
                    <div class="p-4">
                        <h3 class="text-white">Defensive Record</h3>

                        <div class="flex mt-5 text-white">
                            <div class="h-[25px] basis-1/6 rounded-1 border-1 bg-[#109d1e] rounded-l-full"><span
                                    class="p-3">3</span></div>
                            <div class="h[25px] basis-3/6 rounded-1 border-1 bg-[#38b745]"></div>
                            <div
                                class="h-[25px] basis-2/6 rounded-1 border-1 bg-[#d9513b] rounded-r-full
                                    text-right">
                                <span class="p-3">9</span></div>
                        </div>
                        <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                            <div>Clean Sheets</div>
                            <div>2+ Goals</div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 bg-[#002f31] rounded-md">
                    <div class="flex">
                        <div class="basis-3/4 p-4">
                            <div class="flex justify-between"><h3 class="text-white">Offside Traps</h3>
                                <h3><span class="text-white">0.5</span> <span class="text-gray-600">/ 90mins</span></h3>
                            </div>
                            <div class="flex mt-5 text-white">
                                <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full"><span
                                        class="p-3">3</span></div>
                                <div
                                    class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                    <span class="p-3">9</span></div>
                            </div>
                            <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                                <div>Successful</div>
                                <div>Unsuccessful</div>
                            </div>
                        </div>
                        <div class="basis-1/4 bg-[#002729] p-2">
                            <div class="h-full border-r-[2px] border-[#ff755e]"><h3
                                    class="text-center text-sm text-[#ff755e] pt-5"> 26% <br> Success </h3></div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-2 mt-3">
                    <div class="bg-[#002729] flex rounded">
                        <div class="bg-[#002f31] pt-4 px-5 pb-8 border-r-[2px] border-[#093545]">
                            <h3 class="text-white text-l text-center">12 <br> Clearances</h3>
                        </div>
                        <div class="grow p-2">
                            <div class="h-full border-r-[2px] border-[#7aff87]">
                                <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                    0.5
                                    <br>
                                    / 90 mins
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-[#002729] flex rounded">
                        <div class="bg-[#002f31] pt-4 px-3 pb-8 border-r-[2px] border-[#093545]">
                            <h3 class="text-white text-l text-center">12 <br> Shots Blocked</h3>
                        </div>
                        <div class="grow p-2">
                            <div class="h-full border-r-[2px] border-[#7aff87]">
                                <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                    0.5
                                    <br>
                                    / 90 mins
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div>
                <div class="p-2 bg-gradient-to-r from-[#242d7e] via-[#264391] to-[#2965ac]">
                    <div>
                        <div class="grid grid-cols-4">
                            <h3 class="text-white text-center col-start-2 col-end-3 flex flex-col">
                                <span class="text-[100px]">12</span>
                                <span class="-mt-8 text-2xl">Assists</span>
                            </h3>
                            <div class="col-start-4 bg-[#002729] p-1">
                                <div class="h-[170px] border-r-[1px] border-[#7aff87] flex flex-col justify-center">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-2">
                                        0.5
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mt-5">
                        <div class="bg-[#002729] flex rounded">
                            <div class="bg-[#002f31] pt-4 px-5 pb-8 border-r-[2px] border-[#093545]">
                                <h3 class="text-white text-l text-center">9 <br> Chances <br> Created</h3>
                            </div>
                            <div class="grow p-2">
                                <div class="h-full border-r-[2px] border-[#7aff87]">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                        0.5
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#002729] flex rounded">
                            <div class="bg-[#002f31] pt-4 px-5 pb-8 border-r-[2px] border-[#093545]">
                                <h3 class="text-white text-l text-center">9 <br> Key Passes</h3>
                            </div>
                            <div class="grow p-2">
                                <div class="h-full border-r-[2px] border-[#7aff87]">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                        0.5
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 bg-[#002f31] rounded-md">
                        <div class="flex">
                            <div class="basis-3/4 p-4">
                                <div class="flex justify-between">
                                    <h3 class="text-white">12 Shots</h3>
                                    <h3><span class="text-white">0.5</span> <span class="text-gray-600">/ 90mins</span>
                                    </h3>
                                </div>
                                <div class="flex mt-5 text-white">
                                    <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full">
                                        <span class="p-3">3</span>
                                    </div>
                                    <div
                                        class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                        <span class="p-3">9</span>
                                    </div>
                                </div>
                                <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                                    <div>Complete</div>
                                    <div>Incomplete</div>
                                </div>
                            </div>
                            <div class="basis-1/4 bg-[#002729] p-2">
                                <div class="h-full border-r-[2px] border-[#ff755e]">
                                    <h3 class="text-center text-sm text-[#ff755e] pt-5">
                                        26%
                                        <br>
                                        Accuracy
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 bg-[#002f31] rounded-md mt-24">
                    <div class="flex">
                        <div class="basis-3/4 p-4">
                            <h3 class="text-white">Offsides</h3>
                            <div class="flex mt-5 text-white">
                                <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full"><span
                                        class="p-3">3</span></div>
                                <div
                                    class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                    <span class="p-3">9</span></div>
                            </div>
                            <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                                <div>Complete</div>
                                <div>Incomplete</div>
                            </div>
                        </div>
                        <div class="basis-1/4 bg-[#002729] p-2">
                            <div class="h-full border-r-[2px] border-[#ff755e]"><h3
                                    class="text-center text-sm text-[#ff755e] pt-5"> 26% <br> Accuracy </h3></div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#002f31] p-4 border-t-[#00484b] border-t-2">
                    <div class="flex justify-between">
                        <div>
                            <div class="flex flex-col">
                                <div class="h-[50px] bg-[#d9513b] rounded-t-full p-3">
                                    <span class="text-white">2</span>
                                </div>
                                <div
                                    class="h-[80px] bg-[#38b745] rounded-b-full p-3 flex">
                                    <span class="self-end text-white">5</span>
                                </div>
                                <div class="text-[#84b7b9] text-center mt-2">1</div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col">
                                <div class="h-[50px] bg-[#d9513b] rounded-t-full p-3">
                                    <span class="text-white">2</span>
                                </div>
                                <div
                                    class="h-[80px] bg-[#38b745] rounded-b-full p-3 flex">
                                    <span class="self-end text-white">5</span>
                                </div>
                                <div class="text-[#84b7b9] text-center mt-2">2</div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col">
                                <div class="h-[50px] bg-[#d9513b] rounded-t-full p-3">
                                    <span class="text-white">2</span>
                                </div>
                                <div
                                    class="h-[80px] bg-[#38b745] rounded-b-full p-3 flex">
                                    <span class="self-end text-white">5</span>
                                </div>
                                <div class="text-[#84b7b9] text-center mt-2">3</div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col">
                                <div class="h-[50px] bg-[#d9513b] rounded-t-full p-3">
                                    <span class="text-white">2</span>
                                </div>
                                <div
                                    class="h-[80px] bg-[#38b745] rounded-b-full p-3 flex">
                                    <span class="self-end text-white">5</span>
                                </div>
                                <div class="text-[#84b7b9] text-center mt-2">4</div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col">
                                <div class="h-[50px] bg-[#d9513b] rounded-t-full p-3">
                                    <span class="text-white">2</span>
                                </div>
                                <div
                                    class="h-[80px] bg-[#38b745] rounded-b-full p-3 flex">
                                    <span class="self-end text-white">5</span>
                                </div>
                                <div class="text-[#84b7b9] text-center mt-2">5</div>
                            </div>
                        </div>
                        <div class="flex">
                            <h3 class="text-white self-end text-[#84b7b9]">Touches</h3>
                        </div>
                    </div>
                </div>

                <div class="mt-5 bg-[#002f31] rounded-md">
                    <div class="flex">
                        <div class="basis-3/4 p-4">
                            <div class="flex justify-between">
                                <h3 class="text-white">{{ $player->payload['dribbles'] }} Dribbles</h3>
                                <h3><span class="text-white">{{ $player->payload['dribbles_per_90_minutes'] }}</span> <span class="text-gray-600">/ 90mins</span></h3>
                            </div>
                            <div class="flex mt-5 text-white">
                                <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full"><span
                                        class="p-3">{{ $player->payload['dribbles_successful'] }}</span></div>
                                <div
                                    class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                    <span class="p-3">{{ $player->payload['dribbles_unsuccessful'] }}</span></div>
                            </div>
                            <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                                <div>Complete</div>
                                <div>Incomplete</div>
                            </div>
                        </div>
                        <div class="basis-1/4 bg-[#002729] p-2">
                            <div class="h-full border-r-[2px] border-[#ff755e]"><h3
                                    class="text-center text-sm text-[#ff755e] pt-5"> {{ $player->payload['dribbles_accuracy'] }}% <br> Accuracy </h3></div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 bg-[#002f31] rounded-md">
                    <div class="flex">
                        <div class="basis-3/4 p-4">
                            <div class="flex justify-between">
                                <h3 class="text-white">{{ $player->payload['tackles'] }} Duels</h3>
                                <h3><span class="text-white">0.5</span> <span class="text-gray-600">{{ $player->payload['duels_per_90_minutes'] }}/ 90mins</span></h3>
                            </div>
                            <div class="flex mt-5 text-white">
                                <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full"><span
                                        class="p-3">{{ $player->payload['duels_won'] }}</span></div>
                                <div
                                    class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                    <span class="p-3">{{ $player->payload['duels_lost'] }}</span></div>
                            </div>
                            <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                                <div>Won</div>
                                <div>Lost</div>
                            </div>
                        </div>
                        <div class="basis-1/4 bg-[#002729] p-2">
                            <div class="h-full border-r-[2px] border-[#ff755e]"><h3
                                    class="text-center text-sm text-[#ff755e] pt-5"> {{ $player->payload['duels_success_rate'] }}% <br>
                                    Accuracy </h3></div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-2 mt-3">
                    <div class="bg-[#002729] flex rounded">
                        <div class="bg-[#002f31] pt-4 px-5 pb-8 border-r-[2px] border-[#093545]">
                            <h3 class="text-white text-l text-center">{{ $player->payload['carries'] }} <br> Carries</h3>
                        </div>
                        <div class="grow p-2">
                            <div class="h-full border-r-[2px] border-[#7aff87]">
                                <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                    {{ $player->payload['carries_per_90_minutes'] }}
                                    <br>
                                    / 90 mins
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-[#002729] flex rounded">
                        <div class="bg-[#002f31] pt-4 px-3 pb-8 border-r-[2px] border-[#093545]">
                            <h3 class="text-white text-l text-center"> {{ $player->payload['touches_in_the_box'] }} <br> Touches <br> in The box</h3>
                        </div>
                        <div class="grow p-2">
                            <div class="h-full border-r-[2px] border-[#7aff87]">
                                <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                    {{ $player->payload['touches_per_90_minutes'] }}
                                    <br>
                                    / 90 mins
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-2 bg-gradient-to-r from-[#242d7e] via-[#264391] to-[#2965ac] mt-[60px]">
                    <div>
                        <div class="grid grid-cols-4">
                            <h3 class="text-white text-center col-start-2 col-end-3 flex flex-col">
                                <span class="text-[100px]">{{ $player->payload['passes_intercepted'] }}</span>
                                <span class="-mt-8 text-2xl">Interceptions</span>
                            </h3>
                            <div class="col-start-4 bg-[#002729] p-1">
                                <div class="h-[170px] border-r-[1px] border-[#7aff87] flex flex-col justify-center">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-2">
                                        {{ $player->payload['interceptions_per_90_minutes'] }}
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mt-5">
                        <div class="bg-[#002729] flex rounded">
                            <div class="bg-[#002f31] pt-4 px-5 pb-8 border-r-[2px] border-[#093545]">
                                <h3 class="text-white text-l text-center">{{ $player->payload['dribbled_against_attempts'] }} <br> Dribbles</h3>
                            </div>
                            <div class="grow p-2">
                                <div class="h-full border-r-[2px] border-[#7aff87]">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                        {{ $player->payload['interceptions_per_90_minutes'] }}
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#002729] flex rounded">
                            <div class="bg-[#002f31] pt-4 px-5 pb-8 border-r-[2px] border-[#093545]">
                                <h3 class="text-white text-l text-center">{{ $player->payload['dribbled_against_attempts'] }} <br> Passes</h3>
                            </div>
                            <div class="grow p-2">
                                <div class="h-full border-r-[2px] border-[#7aff87]">
                                    <h3 class="text-center text-sm text-[#7aff87] pt-5">
                                        0
                                        <br>
                                        / 90 mins
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 bg-[#002f31] rounded-md">
                    <div class="flex">
                        <div class="basis-3/4 p-4">
                            <div class="flex justify-between">
                                <h3 class="text-white">{{ $player->payload['tackles'] }} Tackles</h3>
                                <h3><span class="text-white">0.5</span> <span class="text-gray-600">0/
                                        90mins</span></h3>
                            </div>
                            <div class="flex mt-5 text-white">
                                <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full"><span
                                        class="p-3">0</span></div>
                                <div
                                    class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                    <span class="p-3">0</span></div>
                            </div>
                            <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                                <div>Intercepted</div>
                                <div>Unsuccessful</div>
                            </div>
                        </div>
                        <div class="basis-1/4 bg-[#002729] p-2">
                            <div class="h-full border-r-[2px] border-[#ff755e]"><h3
                                    class="text-center text-sm text-[#ff755e] pt-5"> 26% <br> Accuracy </h3></div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 bg-[#002f31] rounded-md">
                    <div class="flex">
                        <div class="basis-3/4 p-4">
                            <div class="flex justify-between">
                                <h3 class="text-white">12 Defends Dribbles</h3>
                                <h3><span class="text-white">0.5</span> <span class="text-gray-600">0.5/
                                        90mins</span></h3>
                            </div>
                            <div class="flex mt-5 text-white">
                                <div class="h-[25px] basis-2/3 rounded-1 border-1 bg-[#38b745] rounded-l-full"><span
                                        class="p-3">3</span></div>
                                <div
                                    class="h-[25px] basis-1/3 rounded-1 border-1 bg-[#d9513b] rounded-r-full text-right">
                                    <span class="p-3">9</span></div>
                            </div>
                            <div class="flex mt-2 justify-between text-[#73b9bc] text-xs">
                                <div>Intercepted</div>
                                <div>Unsuccessful</div>
                            </div>
                        </div>
                        <div class="basis-1/4 bg-[#002729] p-2">
                            <div class="h-full border-r-[2px] border-[#ff755e]"><h3
                                    class="text-center text-sm text-[#ff755e] pt-5"> 26% <br> Accuracy </h3></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- third column -->
            <div>
                <div class="flex justify-center">
                    <x-splade-link href="{{ route('front.player.video', $player->id) }}" modal>
                        <div class="relative border-[#6e8e9c] border-4 rounded-md">
                            <img src="{{ url('assets/images/video-bg-1.jpg') }}" alt=""
                                 class="">
                            <div class="absolute top-0 bg-black bg-opacity-75 w-full p-1 rounded-md">

                                <div class="flex justify-between">
                                    <div>
                                        <div class="flex mt-2 mb-2">
                                            <div class="w-4 h-6 mr-2">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0"
                                                     y="0"
                                                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                                     xml:space="preserve">
                                            <g id="XMLID_00000093156248264949356020000012658668346877317530_">
                                                <path class="fill-red-500"
                                                      d="M126.3 15.8 182 0c27.4 32.5 118 35.7 148.2.6L332 0l58.9 17c17.8 5.2 34.4 13.9 48.8 25.6l47 38.5-38.5 95L407 153c-14-7.9-30.2 7.7-29.9 23.3l-.3 335.7H106V152l-69 40-37-88 68.8-57.7c16.8-14.2 36.4-24.6 57.5-30.5z"/>
                                                <path class="fill-yellow-300"
                                                      d="M407 153v359h-30.2l.2-335.7c-.2-15.6 16-31.2 30-23.3zM512 102l-36 90-27.8-15.7 38.5-95.1z"/>
                                            </g>
                                        </svg>
                                            </div>
                                            <div class="absolute w-6 text-[9px] text-center mt-1">
                                                <span>{{ random_int(1, 30) }}</span></div>
                                            <p class="text-white font-bold text-sm">{{ $player->name }}</p>
                                        </div>

                                        <div class="text-white ml-2 font-bold text-sm">12 Assists</div>
                                    </div>

                                    <div
                                        class="w-10 h-10 rounded-full bg-[#d7f205] flex justify-center items-center mt-1">
                                        <svg fill="#000" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler
                                       icon-tabler-player-play" width="24" height="24" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M7 4v16l13 -8z"/>
                                        </svg>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </x-splade-link>
                </div>

                <div class="flex justify-center mt-5">
                    <img src="{{ url('assets/images/img-2.jpg') }}">
                </div>

                <div class="flex justify-center">
                    <img src="{{ url('assets/images/img-3.png') }}" class="mt-20">
                </div>

                <div class="flex justify-center">
                </div>
            </div>
        </div>
    </div>

</div>
