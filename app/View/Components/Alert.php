<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Alert extends Component
{
    /**
     * 警告タイプ
     *
     * @var string
     */
    public $type;

    /**
     * 警告メッセージ セッション
     *
     * @var string
     */
    public $session;

    /**
     * Create a new component instance.
     */
    public function __construct($type,$session)
    {
        $this->type = $type;
        $this->session = $session;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
