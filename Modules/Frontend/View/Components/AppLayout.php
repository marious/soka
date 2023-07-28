<?php
namespace Modules\Frontend\View\Components;

use ProtoneMedia\Splade\Components\PersistentComponent;

class AppLayout extends PersistentComponent
{
    public function render()
    {
        return view('frontend::layouts.master');
    }
}
