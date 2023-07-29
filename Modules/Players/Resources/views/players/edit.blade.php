<x-tomato-admin-layout>
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} {{__('Player')}} #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.players.update', $model->id)}}" method="post" :default="$model">

          <x-splade-select label="{{__('team')}}" placeholder="Team id" name="team_id" remote-url="/admin/teams/api" remote-root="model.data" option-label=name option-value="id" choices/>
          <x-splade-input label="{{__('Name')}}" name="name" type="text"  placeholder="Name" />
          <x-splade-input label="{{__('Dob')}}" placeholder="Dob" name="dob" date />
          <x-splade-input label="{{__('Position')}}" name="position" type="text"  placeholder="Position" />
          <x-splade-input label="{{__('Height')}}" type='number' name="height" placeholder="Height" />
          <x-splade-input label="{{__('Matches')}}" type='number' name="matches" placeholder="Matches" />
          <x-splade-input label="{{__('Soka score')}}" type='number' name="soka_score" placeholder="Soka score" />
          <x-splade-input label="{{__('Attacking')}}" type='number' name="attacking" placeholder="Attacking" />
          <x-splade-input label="{{__('Defensive')}}" type='number' name="defensive" placeholder="Defensive" />
          <x-splade-input label="{{__('Passing')}}" type='number' name="passing" placeholder="Passing" />
          <x-splade-input label="{{__('Possession')}}" type='number' name="possession" placeholder="Possession" />

        <x-tomato-repeater name="playerVideos"  label="{{ __('Player Videos') }}">
            <x-splade-input label="{{ __('Video URL') }}" type="text" name="video"
                            v-model="repeater.main[key]"/>
        </x-tomato-repeater>

        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} {{__('Player')}}" :spinner="true" />
    </x-splade-form>
</x-tomato-admin-layout>
