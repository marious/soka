<?php

namespace Modules\Players\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoPHP\Services\Tomato;

class PlayerController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            view: 'players::players.index',
            table: \Modules\Players\Tables\PlayerTable::class,
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
            model: \Modules\Players\Entities\Player::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'players::players.create',
        );
    }

    /**
     * @param \Modules\Players\Http\Requests\Player\PlayerStoreRequest $request
     * @return RedirectResponse
     */
    public function store(\Modules\Players\Http\Requests\Player\PlayerStoreRequest $request): RedirectResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \Modules\Players\Entities\Player::class,
            message: __('Player created successfully'),
            redirect: 'admin.players.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \Modules\Players\Entities\Player $model
     * @return View
     */
    public function show(\Modules\Players\Entities\Player $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'players::players.show',
        );
    }

    /**
     * @param \Modules\Players\Entities\Player $model
     * @return View
     */
    public function edit(\Modules\Players\Entities\Player $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'players::players.edit',
        );
    }

    /**
     * @param \Modules\Players\Http\Requests\Player\PlayerUpdateRequest $request
     * @param \Modules\Players\Entities\Player $user
     * @return RedirectResponse
     */
    public function update(\Modules\Players\Http\Requests\Player\PlayerUpdateRequest $request, \Modules\Players\Entities\Player $model): RedirectResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            message: __('Player updated successfully'),
            redirect: 'admin.players.index',
        );

        return $response['redirect'];
    }

    /**
     * @param \Modules\Players\Entities\Player $model
     * @return RedirectResponse
     */
    public function destroy(\Modules\Players\Entities\Player $model): RedirectResponse
    {
        return Tomato::destroy(
            model: $model,
            message: __('Player deleted successfully'),
            redirect: 'admin.players.index',
        );
    }
}
