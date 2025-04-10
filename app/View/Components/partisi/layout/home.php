<?php

namespace App\View\Components\partisi\layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class home extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;

    public function __construct($title = 'Judul Default')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partisi.layout.home');
    }
}
