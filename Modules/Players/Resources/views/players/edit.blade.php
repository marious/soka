<x-tomato-admin-layout>
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} {{__('Player')}} #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.players.update', $model->id)}}" method="post" :default="$model">

        @include('players::players._form')

        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} {{__('Player')}}" :spinner="true" />
    </x-splade-form>
</x-tomato-admin-layout>
