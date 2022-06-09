<?php

namespace App\View\Components;

use Illuminate\View\Component;

class title extends Component
{
    public $title;
    public $beforePage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$beforePage)
    {
        $this->title = $title;
        $this->beforePage = $beforePage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.title');
    }
}
