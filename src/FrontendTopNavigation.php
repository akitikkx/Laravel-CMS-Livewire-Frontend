<?php

namespace Akitikkx\Frontend;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FrontendTopNavigation extends Component {

    /**
     * Get the top navigation links.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function topNavLinks()
    {
        return DB::table('navigation_menus')
            ->where('type', '=', 'TopNav')
            ->orderBy('sequence', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();
    }


}
