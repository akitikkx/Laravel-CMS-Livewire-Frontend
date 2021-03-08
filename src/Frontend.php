<?php

namespace Akitikkx\Frontend;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Frontend extends Component
{
    public $urlslug;
    public $title;
    public $content;

    /**
     * The livewire mount function.
     *
     * @param mixed $urlslug
     * @return void
     */
    public function mount($urlslug = null)
    {
        $this->retrieveContent($urlslug);
    }

    /**
     * Retrieves the content of the page.
     *
     * @param mixed $urlslug
     * @return void
     */
    public function retrieveContent($urlslug)
    {
        // Get home page if slug is empty
        if (empty($urlslug)) {
            $data = Page::where('is_default_home', true)->first();
        } else {

            // Get the page according to the slug value
            $data = Page::where('slug', $urlslug)->first();

            // If we can't retrieve anything, let's get the default 404 not found page
            if (!$data) {
                $data = Page::where('is_default_not_found', true)->first();
            }
        }

        if ($data != null) {
            $this->title = $data->title;
            $this->content = $data->content;
        }
    }

    /**
     * Gets all the sidebar links.
     *
     * @return \Illuminate\Support\Collection
     */
    private function sideBarLinks()
    {
        return DB::table('navigation_menus')
            ->where('type', '=', 'SidebarNav')
            ->orderBy('sequence', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();
    }

    /**
     * Get the top navigation links.
     *
     * @return \Illuminate\Support\Collection
     */
    private function topNavLinks()
    {
        return DB::table('navigation_menus')
            ->where('type', '=', 'TopNav')
            ->orderBy('sequence', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();
    }


    /**
     * The livewire render function.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function render()
    {
        return view('livewire.frontend', [
            'sideBarLinks' => $this->sideBarLinks(),
            'topNavLinks' => $this->topNavLinks(),
        ]);
    }
}
