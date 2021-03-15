<?php

namespace Akitikkx\Frontend;

use Livewire\Component;

class FrontendSection extends Component
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
    public function mount($urlslug)
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
        $data = PageSection::where('slug', $urlslug)->first();

        $this->title = $data->title;
        $this->content = $data->content;

    }

    public function render()
    {
        return view('livewire.frontend-section');
    }
}
