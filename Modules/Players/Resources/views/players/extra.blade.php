<x-tomato-admin-layout>

    <h1 class="text-2xl font-bold mb-4">
       Player ({{ $player->name  }}) Extra Data
    </h1>

    <x-splade-form class="flex flex-col space-y-4 pb-5" action="{{route('admin.players.extra.store', $player->id)}}"
                   method="post"
                   :default="['payload' => $player->payload]">

        <div class="grid grid-cols-3 gap-4">

        @foreach($player->payload as $key => $value)
            <div class="flex justify-between">
                <x-splade-input v-model="form.payload['{{$key}}']" name="payload['{{ $key }}']" type="text"
                                label="{{ str_replace('_', ' ', $key) }}"/>
            </div>
        @endforeach
        </div>


        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} {{__('Player')}}" :spinner="true" />
    </x-splade-form>
</x-tomato-admin-layout>
