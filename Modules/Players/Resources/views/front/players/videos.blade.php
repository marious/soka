<x-splade-modal max-width="4xl" class="bg-[#0F172A]">
    <div class="p-2">
        <x-splade-data default="{videoCodes: ['KMXnEpUxNz8', 'jP7AtTj8vUQ', 'OWOjRdmpM6I', 'DQ3jAuEDVT0'], current: 'KMXnEpUxNz8'}">
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
    </div>
</x-splade-modal>
