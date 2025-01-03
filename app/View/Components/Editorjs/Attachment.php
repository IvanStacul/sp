<?php

namespace App\View\Components\Editorjs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Attachment extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public array $fileData)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.editorjs.attachment', [
            'attachment' => $this->fileData,
        ]);
    }
}
