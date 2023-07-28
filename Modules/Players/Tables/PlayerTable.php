<?php

namespace Modules\Players\Tables;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class PlayerTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return \Modules\Players\Entities\Player::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(label: trans('tomato-admin::global.search'),columns: ['id','team.name','name',])
            ->bulkAction(
                label: trans('tomato-admin::global.crud.delete'),
                each: fn (\Modules\Players\Entities\Player $model) => $model->delete(),
                after: fn () => Toast::danger(__('Player Has Been Deleted'))->autoDismiss(2),
                confirm: true
            )
            ->export()
            ->defaultSort('id')
            ->column(
                key: 'id',
                label: __('Id'),
                sortable: true)
            ->column(
                key: 'team.name',
                label: __('Team'),
                sortable: true,
                searchable: true)
            ->column(
                key: 'name',
                label: __('Name'),
                sortable: true)
            ->column(
                key: 'dob',
                label: __('Dob'),
                sortable: true)
            ->column(
                key: 'position',
                label: __('Position'),
                sortable: true)
            ->column(
                key: 'height',
                label: __('Height'),
                sortable: true)
            ->column(
                key: 'matches',
                label: __('Matches'),
                sortable: true)
            ->column(
                key: 'soka_score',
                label: __('Soka score'),
                sortable: true)
            ->column(
                key: 'attacking',
                label: __('Attacking'),
                sortable: true)
            ->column(
                key: 'defensive',
                label: __('Defensive'),
                sortable: true)
            ->column(
                key: 'passing',
                label: __('Passing'),
                sortable: true)
            ->column(
                key: 'possession',
                label: __('Possession'),
                sortable: true)
            ->column(key: 'actions',label: trans('tomato-admin::global.crud.actions'))
            ->paginate(15);
    }
}
