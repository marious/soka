<x-splade-modal max-width="4xl" class="bg-[#0F172A]">
    <div class="p-2">
        @if ($videos)
        <x-splade-data :default="['current' => isset($videos[0]) ? $videos[0] : null, 'videoCodes' => $videos]">
            <div>
                <iframe width="100%" height="400" v-bind:src="`https://www.youtube.com/embed/${data.current}?autoplay=1`"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen autoplay></iframe>
            </div>
            <div class="mt-5 grid grid-cols-4 gap-3">
                <div v-for="video in data.videoCodes" v-bind:key="video">
                    <a href="#" @click.prevent="data.current = video" >
                        <img v-bind:src="`https://img.youtube.com/vi/${video}/maxresdefault.jpg`" alt=""
                             class="border-[#6e8e9c] border-2 rounded-md">
                    </a>
                </div>
            </div>
        </x-splade-data>
        @else
            <h2 class="text-white text-2xl text-center">No Videos Found for this player ):</h2>
        @endif
    </div>
</x-splade-modal>
