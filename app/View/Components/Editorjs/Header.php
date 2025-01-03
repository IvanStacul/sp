<?php

namespace App\View\Components\Editorjs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public int $level, public string $text)
    {
        //
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view(
            'components.editorjs.header',
            [
                'level' => $this->level,
                'text' => $this->text
            ]
        );
    }
}
