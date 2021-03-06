<?php

namespace Akitikkx\Frontend;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FrontendTopNavigationMobile extends FrontendTopNavigation {

    /**
     * The livewire render function.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function render()
    {
        return view('livewire.frontend-top-navigation-mobile', [
            'topNavLinks' => $this->topNavLinks(),
        ]);
    }

}
