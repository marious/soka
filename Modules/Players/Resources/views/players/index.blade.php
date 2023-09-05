<x-tomato-admin-layout>
    <x-slot name="header">
        {{ __('Player') }}
    </x-slot>
    <x-slot name="headerBody">
        <Link  href="/admin/players/create" class="filament-button inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 filament-page-button-action">
            {{trans('tomato-admin::global.crud.create-new')}} {{__('Player')}}
        </Link>
    </x-slot>


    <div class="pb-12" v-cloak>
        <div class="mx-auto">
            <x-splade-table :for="$table" striped>
                <x-splade-cell actions>
                    <div class="flex justify-start">
                        <Link href="/admin/players/{{ $item->id }}" class="px-2 text-blue-500" slideover>
                            <div class="flex justify-start space-x-2">
                                <x-heroicon-s-eye class="h-4 w-4 ltr:mr-2 rtl:ml-2"/>
                            </div>
                        </Link>
                        <Link href="/admin/players/{{ $item->id }}/edit" class="px-2 text-yellow-400">
                            <div class="flex justify-start space-x-2">
                                <x-heroicon-s-pencil class="h-4 w-4 ltr:mr-2 rtl:ml-2"/>
                            </div>
                        </Link>
                        <Link href="/admin/players/{{ $item->id }}/extra" class="px-2 text-green-400">
                        <div class="flex justify-start space-x-2">
                            <x-heroicon-s-cog class="h-4 w-4 ltr:mr-2 rtl:ml-2"/>
                        </div>
                        </Link>
                        <Link href="/admin/players/{{ $item->id }}"
                              confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                              confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                              confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                              cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                              class="px-2 text-red-500"
                              method="delete"

                        >
                            <div class="flex justify-start space-x-2">
                                <x-heroicon-s-trash class="h-4 w-4 ltr:mr-2 rtl:ml-2"/>
                            </div>
                        </Link>
                    </div>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>
</x-tomato-admin-layout>
