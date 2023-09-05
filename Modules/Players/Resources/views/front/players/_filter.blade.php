<div>



<x-splade-data default="{direction: 'right', min: 0, max: 100, inputValue: form.soka_score}">

    <div class="filter w-10/12 mx-auto mb-8">
        <p class="text-sm">Soka Score</p>
        <input id="filtersokascore"
               @change="handleFormSubmit(form.$all)"
               type="range"
               :min="data.min"
               :max="data.max"
               :value="form.soka_score"
               v-model="form.soka_score"
               class="rounded-lg
            appearance-none bg-cyan-900/50 h-1.5 w-full bg-gradient-to-r from-lime-300 to-lime-500 bg-no-repeat" :class="'bg-' + direction + '-top'" x-on:input="inputValue = filtersokascore.value;" :style="{backgroundSize: (max-inputValue) + '%'}" />
        <p class="text-xs text-right">@{{ form.soka_score }}%</p>
    </div>
</x-splade-data>

<!-- Age -->
<x-splade-data default="{direction: 'left', min: 10, max: 25, inputValue: form.age}">
    <div class="filter w-10/12 mx-auto mb-8">
        <p class="text-sm">Age</p>
        <input id="filterage"
               @change="handleFormSubmit(form.$all)"
               type="range"
               :min="data.min"
               :max="data.max"
               :value="form.age"
               class="rounded-lg appearance-none bg-cyan-900/50
                       h-1.5 w-full bg-gradient-to-r from-lime-300 to-lime-500 bg-no-repeat"
               v-bind:class="`bg-${data.direction}-top`"
               v-model="form.age"
               v-bind:style="`{backgroundSize: ${data.inputValue}%}`" />
        <p class="text-xs">
            @{{ form.age }}
        </p>
    </div>
</x-splade-data>

<x-splade-data default="{g: true, d: true, m: true, f: true, active: 'fill-lime-300', inactive: 'fill-slate-700'}">
    <div class="filter w-10/12 mx-auto mb-8">
        <p class="text-sm mb-2">Position</p>
        <div class="flex relative">
            <div class="basis-2/3 mx-auto">
                <svg version="1.1" id="svg2" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 656.8 491.9" style="enable-background:new 0 0 656.8 491.9" xml:space="preserve">
                            <g id="layer1">
                                <g id="g4041" transform="matrix(0 -1.50916 1.50633 0 -115.601 876.12)">
                                    <path id="path2194" class="fill-none stroke-cyan-900/50 stroke-[10px]" d="M580.5 512.8h-326l.7-435.3 325.3-.7v436z"/>
                                    <path id="path2212" d="M418.6 261.5c17.9 0 32.5 14.9 32.5 33.2 0 18.4-14.5 33.3-32.5 33.3-17.9 0-32.5-14.9-32.5-33.2 0-18.4 14.5-33.3 32.5-33.3z" class="fill-none stroke-cyan-900/50 stroke-[10px]"/>
                                    <path id="path2196" class="fill-none stroke-cyan-900/50 stroke-[10px]" d="M490.9 513v-60.6H345.6v60.2"/>
                                    <path id="path2198" class="fill-none stroke-cyan-900/50 stroke-[10px]" d="M383.8 512.5v-21.1l66.8.7v21.2"/>
                                    <path id="path2206" class="fill-none stroke-cyan-900/50 stroke-[10px]" d="M443.5 452.5c-11.1-19.2-41-18.4-51.9.1"/>
                                    <path id="path3091" class="fill-none stroke-cyan-900/50 stroke-[10px]" d="m490.9 77-.1 59.4H345.6V77.2"/>
                                    <path id="path3093" class="fill-none stroke-cyan-900/50 stroke-[10px]" d="M383.8 76.9v20.5l66.8-.7V77"/>
                                    <path id="path3097" class="fill-none stroke-cyan-900/50 stroke-[10px]" d="M443.5 136.6c-11.1 19.2-40.6 18.4-51.5-.1"/>
                                    <path id="path3107" class="fill-none stroke-cyan-900/50 stroke-[10px]" d="M254.6 294.4h325.3"/>
                                </g>
                            </g>
                        </svg>
            </div>
            <div class="flex flex-row absolute w-full pt-14 place-content-center select-none">
                <div class="basis-1/6 flex cursor-pointer place-content-center p-1.5" @click="form.position.g = !form.position.g;
                handleFormSubmit(form.$all)">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g id="XMLID_00000093156248264949356020000012658668346877317530_">
                                    <path v-bind:class="data.g ? data.active : data.inactive"
                                          d="M126.3 15.8 182 0c27.4 32.5 118 35.7 148.2.6L332 0l58.9 17c17.8 5.2 34.4 13.9 48.8 25.6l47 38.5-38.5 95L407 153c-14-7.9-30.2 7.7-29.9 23.3l-.3 335.7H106V152l-69 40-37-88 68.8-57.7c16.8-14.2 36.4-24.6 57.5-30.5z"/>
                                    <path v-bind:class="data.g ? data.active : data.inactive"
                                          d="M407 153v359h-30.2l.2-335.7c-.2-15.6 16-31.2 30-23.3zM512 102l-36 90-27.8-15.7 38.5-95.1z"/>
                                </g>
                            </svg>
                    <div class="absolute w-1/6 text-center text-slate-900 text-lg font-bold mt-1.5"
                         v-bind:class="{'text-slate-500': form.position.g}">G</div>
                </div>
                <div class="basis-1/6 flex cursor-pointer place-content-center p-1.5" @click="form.position.d = !form.position.d;
                handleFormSubmit(form.$all)">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g id="XMLID_00000093156248264949356020000012658668346877317530_">
                                    <path :class="data.d ? data.active : data.inactive"
                                          d="M126.3 15.8 182 0c27.4 32.5 118 35.7 148.2.6L332 0l58.9 17c17.8 5.2 34.4
                                           13.9 48.8 25.6l47 38.5-38.5 95L407 153c-14-7.9-30.2 7.7-29.9 23.3l-.3 335.7H106V152l-69 40-37-88 68.8-57.7c16.8-14.2 36.4-24.6 57.5-30.5z"/>
                                    <path :class="data.d ? data.active : data.inactive"
                                          d="M407 153v359h-30.2l.2-335.7c-.2-15.616-31.2 30-23.3zM512 102l-36 90-27.8-15.7 38.5-95.1z"/>
                                </g>
                            </svg>
                    <div class="absolute basis-1/6 text-slate-900 text-lg text-center font-bold mt-1.5"
                         v-bind:class="{'text-slate-500': form.position.d}">D</div>
                </div>
                <div class="basis-1/6 flex cursor-pointer place-content-center p-1.5" @click="form.position.m = !form.position.m;
                handleFormSubmit(form.$all)">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g id="XMLID_00000093156248264949356020000012658668346877317530_">
                                    <path :class="data.m ? data.active : data.inactive" d="M126.3 15.8 182 0c27.4 32.5
                                    118 35.7
                                     148.2.6L332 0l58.9 17c17.8 5.2 34.4 13.9 48.8 25.6l47 38.5-38.5 95L407 153c-14-7.9-30.2 7.7-29.9 23.3l-.3 335.7H106V152l-69 40-37-88 68.8-57.7c16.8-14.2 36.4-24.6 57.5-30.5z"/>
                                    <path :class="data.m ? data.active : data.inactive" d="M407 153v359h-30.2l.2-335.7c-
                                    .2-15.6 16-31.2 30-23.3zM512 102l-36 90-27.8-15.7 38.5-95.1z"/>
                                </g>
                            </svg>
                    <div class="absolute basis-1/6 text-slate-900 text-lg text-center font-bold mt-1.5"
                         :class="{'text-slate-500': form.position.m}">M</div>
                </div>
                <div class="basis-1/6 flex cursor-pointer place-content-center p-1.5" @click="form.position.f = !form.position.f;
                handleFormSubmit(form.$all)">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                <g id="XMLID_00000093156248264949356020000012658668346877317530_">
                                    <path :class="data.f ? data.active : data.inactive" d="M126.3 15.8 182 0c27.4 32.5
                                    118 35.7
                                     148.2.6L332 0l58.9 17c17.8 5.2 34.4 13.9 48.8 25.6l47 38.5-38.5 95L407 153c-14-7.9-30.2 7.7-29.9 23.3l-.3 335.7H106V152l-69 40-37-88 68.8-57.7c16.8-14.2 36.4-24.6 57.5-30.5z"/>
                                    <path :class="data.f ? data.active : data.inactive" d="M407 153v359h-30.2l.2-335.7c-
                                    .2-15.6
                                    16-31.2 30-23.3zM512 102l-36 90-27.8-15.7 38.5-95.1z"/>
                                </g>
                            </svg>
                    <div class="absolute basis-1/6 text-slate-900 text-lg text-center font-bold mt-1.5"
                         :class="{'text-slate-500': form.position.f}">F</div>
                </div>
            </div>
        </div>
    </div>

    <x-splade-data default="{direction: 'right', min: 100, max: 200, inputValue: 0}">
        <div class="filter w-10/12 mx-auto mb-8">
            <p class="text-sm">Height</p>
            <input id="filterheight"
                   @change="handleFormSubmit(form.$all)"
                   type="range"
                   :min="data.min"
                   :max="data.max"
                   :value="form.height"
                   v-model="form.height"
                   class="rounded-lg appearance-none bg-cyan-900/50
                       h-1.5 w-full bg-gradient-to-r from-lime-300 to-lime-500 bg-no-repeat" :class="'bg-' + direction + '-top'" x-on:input="inputValue = filterheight.value;" :style="{backgroundSize: (max-inputValue) + '%'}" />
            <p class="text-xs text-right">
                <span v-text="form.height ? `${form.height} cm` : ''"></span>
            </p>
        </div>
    </x-splade-data>


</x-splade-data>
</div>
