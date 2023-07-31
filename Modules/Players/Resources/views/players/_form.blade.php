<x-splade-file filepond preview name="image"/>
<x-splade-select label="{{__('team')}}" placeholder="Team id" name="team_id" remote-url="/admin/teams/api" remote-root="model.data" option-label=name option-value="id" choices/>
<x-splade-input label="{{__('Name')}}" name="name" type="text"  placeholder="Name" />
<x-splade-input label="{{__('Dob')}}" placeholder="Dob" name="dob" date />
<x-splade-input label="{{__('Position')}}" name="position" type="text"  placeholder="Position" />
<x-splade-input label="{{__('Height')}}" type='number' name="height" placeholder="Height" step="any" />
<x-splade-input label="{{__('Matches')}}" type='number' name="matches" placeholder="Matches" />
<x-splade-input label="{{__('Soka score')}}" type='number' name="soka_score" placeholder="Soka score"
                step="any" />
<x-splade-input label="{{__('Attacking')}}" type='number' name="attacking" placeholder="Attacking"
                step="any" />
<x-splade-input label="{{__('Defensive')}}" type='number' name="defensive" placeholder="Defensive"
                step="any" />
<x-splade-input label="{{__('Passing')}}" type='number' name="passing" placeholder="Passing" step="any" />
<x-splade-input label="{{__('Possession')}}" type='number' name="possession" placeholder="Possession"
                step="any" />

<x-tomato-repeater name="playerVideos"  label="{{ __('Player Videos') }}">
    <x-splade-input label="{{ __('Video URL') }}" type="text" name="video"
                    v-model="repeater.main[key]"/>
</x-tomato-repeater>
