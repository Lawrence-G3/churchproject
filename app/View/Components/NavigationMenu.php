<?php

// app/View/Components/NavigationMenu.php

namespace App\View\Components;

use Illuminate\View\Component;

class NavigationMenu extends Component
{
    public function render()
    {
        return view('components.nav-link');
    }
}
