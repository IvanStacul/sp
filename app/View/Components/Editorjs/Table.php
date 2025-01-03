<?php

namespace App\View\Components\Editorjs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public bool $withHeadings, public array $content)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.editorjs.table', [
            'withHeadings' => $this->withHeadings,
            'content' => $this->content,
        ]);
    }
}
