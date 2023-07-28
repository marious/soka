<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.view')}} {{ __('Player') }} #{{$model->id}}</h1>

    <div class="flex flex-col space-y-4">
        
          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Team')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->Team->name}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Name')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->name}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Dob')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->dob}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Position')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->position}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Height')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->height}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Matches')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->matches}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Soka score')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->soka_score}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Attacking')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->attacking}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Defensive')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->defensive}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Passing')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->passing}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Possession')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->possession}}
                  </h3>
              </div>
          </div>

    </div>
</x-splade-modal>
