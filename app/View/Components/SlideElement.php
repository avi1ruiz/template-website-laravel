<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SlideElement extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($title = null, $imagedir = null, $slanguage = null, $type = null, $purl = null)
    {
        $this->title = $title;
        $this->imagedir = $imagedir;
        $this->slanguage = $slanguage;
        $this->type = $type;
        $this->purl = $purl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = ["title" => $this->title, "imagedir" => $this->imagedir, "slanguage" => $this->slanguage, "type" => $this->type, "purl" => $this->purl];
        return view('components.slide-element', $params);
    }
}
