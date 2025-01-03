<?php

namespace App\View\Components\Editorjs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NestedList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $style, public array $items)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.editorjs.nested-list', [
            'style' => $this->style,
            'items' => $this->items,
        ]);
    }
}
