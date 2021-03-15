<?php

namespace Akitikkx\Frontend;

use Livewire\Component;

class FrontendSection extends Component
{
    public $urlslug;
    public $title;
    public $content;
    public $title_class;
    public $content_class;

    /**
     * The livewire mount function.
     *
     * @param mixed $urlslug
     * @param $title_class
     * @param $content_class
     * @return void
     */
    public function mount($urlslug, $title_class, $content_class)
    {
        $this->title_class = $title_class;
        $this->content_class = $content_class;
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
