<?php

namespace App\View\Components;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\View\Component;

class WebsiteLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('website.layout.main', [
            'setting' => Setting::find(1),
            'pages' => Page::where('status', 'active')->get(),
            'locale' => app()->getLocale(),
        ]);
    }
}
