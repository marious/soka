<x-tomato-admin-layout>

<h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.create')}} {{__('Player')}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.players.store')}}" method="post"
                   :default="['playerVideos' => []]">

        @include('players::players._form')

        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} {{__('Player')}}" :spinner="true" />
    </x-splade-form>
</x-tomato-admin-layout>
