<?php

namespace App\View\Components;

use App\Models\Repository;
use Illuminate\View\Component;

class RepositoryElement extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($repository = null)
    {
        $this->repository = $repository;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = ['repository' => $this->repository];
        return view('components.repository-element', $params);
    }
}
