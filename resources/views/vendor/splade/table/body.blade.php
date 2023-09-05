<tbody class="divide-y divide-gray-200 dark:divide-gray-600 bg-white dark:bg-gray-800">
    @forelse($table->resource as $itemKey => $item)
        <tr
            :class="{
                'bg-gray-50 dark:bg-gray-700 ': table.striped && @js($itemKey) % 2,
                'hover:bg-gray-100 dark:hover:bg-gray-600': table.striped,
                'hover:bg-gray-50 dark:hover:bg-gray-800 ': !table.striped
            }"
            class="tr-body"
        >
            @if($hasBulkActions = $table->hasBulkActions())
                <td width="64" class="text-xs px-6 py-4 border-b border-gray-200 dark:border-gray-500">
                    @php $itemPrimaryKey = $table->findPrimaryKey($item) @endphp
                    <input
                        @change="(e) => table.setSelectedItem(@js($itemPrimaryKey), e.target.checked)"
                        :checked="table.itemIsSelected(@js($itemPrimaryKey))"
                        :disabled="table.allItemsFromAllPagesAreSelected"
                        class="rounded dark:bg-gray-500 border-gray-300 dark:border-gray-600 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:opacity-50"
                        name="table-row-bulk-action"
                        type="checkbox"
                        value="{{ $itemPrimaryKey }}"
                    />
                </td>
            @endif

            @foreach($table->columns() as $column)
                <td
                    @if($table->rowLinks->has($itemKey))
                        @click="(event) => table.visit(@js($table->rowLinks->get($itemKey)), @js($table->rowLinkType), event)"
                    @endif
                    v-show="table.columnIsVisible(@js($column->key))"
                    :class="{
                        'table_action':table.striped && @js($itemKey) % 2
                    }"
                    class="md:last:sticky last:w-0 table_shadow rtl:last:border-r last:border-l border-b border-gray-200 dark:border-gray-500 rtl:last:left-0 ltr:last:right-0 last:bg-white last:dark:bg-gray-800 table_action_hover whitespace-nowrap ltr:capitalize text-sm @if($loop->first && $hasBulkActions) pr-6 @else px-10 @endif py-4 @if($column->highlight) text-gray-900 dark:text-white font-medium @else text-gray-500 dark:text-gray-200 @endif @if($table->rowLinks->has($itemKey)) cursor-pointer @endif {{ $column->classes }}"
                >
                    @isset(${'spladeTableCell' . $column->keyHash()})
                        {{ ${'spladeTableCell' . $column->keyHash()}($item, $itemKey) }}
                    @else
                        {!! nl2br(e($getColumnDataFromItem($item, $column))) !!}
                    @endisset
                </td>
            @endforeach
        </tr>
    @empty
        <tr>
            <td colspan="{{ $table->columns()->count() }}" class="whitespace-nowrap">
                @if(isset($emptyState) && !!$emptyState)
                    {{ $emptyState }}
                @else
                    <p class="text-gray-700 px-6 py-12 font-medium text-sm text-center">
                        {{ __('There are no items to show.') }}
                    </p>
                @endif
            </td>
        </tr>
    @endforelse
</tbody>
