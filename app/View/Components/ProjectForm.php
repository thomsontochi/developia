<?php

namespace App\View\Components;

use Closure;
use App\Models\Project;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ProjectForm extends Component
{

    public $project;

    /**
     * Create a new component instance.
     */
    public function __construct(Project $project = null)
    {
        $this->project = $project ?? new Project();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project-form');
    }
}
