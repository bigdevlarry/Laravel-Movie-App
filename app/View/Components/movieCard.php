<?php

namespace App\View\Components;

use Illuminate\View\Component;

class movieCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $movie;
    public $genres;

    public function __construct($movie, $genres)
    {
        $this->movie = $movie;
        $this->genres = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
