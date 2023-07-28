<?php

namespace Modules\Teams\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class TeamController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'teams::teams.index',
            table: \Modules\Teams\Tables\TeamTable::class,
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function api(Request $request): JsonResponse
    {
        return Tomato::json(
            request: $request,
            model: \Modules\Teams\Entities\Team::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'teams::teams.create',
        );
    }

    /**
     * @param \Modules\Teams\Http\Requests\Team\TeamStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\Modules\Teams\Http\Requests\Team\TeamStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \Modules\Teams\Entities\Team::class,
            message: __('Team created successfully'),
            redirect: 'admin.teams.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \Modules\Teams\Entities\Team $model
     * @return View
     */
    public function show(\Modules\Teams\Entities\Team $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'teams::teams.show',
        );
    }

    /**
     * @param \Modules\Teams\Entities\Team $model
     * @return View
     */
    public function edit(\Modules\Teams\Entities\Team $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'teams::teams.edit',
        );
    }

    /**
     * @param \Modules\Teams\Http\Requests\Team\TeamUpdateRequest $request
     * @param \Modules\Teams\Entities\Team $user
     * @return RedirectResponse
     */
    public function update(\Modules\Teams\Http\Requests\Team\TeamUpdateRequest $request, \Modules\Teams\Entities\Team $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('Team updated successfully'),
            redirect: 'admin.teams.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \Modules\Teams\Entities\Team $model
     * @return RedirectResponse
     */
    public function destroy(\Modules\Teams\Entities\Team $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: __('Team deleted successfully'),
            redirect: 'admin.teams.index',
        );
    }
}
