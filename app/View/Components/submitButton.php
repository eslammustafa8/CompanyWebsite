<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class submitButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $color;

    public function __construct(public string $label)
    {
        if($this->label == 'Submit') {
            $this->color = 'primary';
        } else {
            $this->color = 'success';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.submit-button');
    }
}
