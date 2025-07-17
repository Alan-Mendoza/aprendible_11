<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    // public $metaTitle = 'Default Title';
    // public $metaDescription = 'Default description for the app layout.';

    // public function __construct($metaTitle = null, $metaDescription = null)
    // {
    //     $this->metaTitle = $metaTitle ?? $this->metaTitle;
    //     $this->metaDescription = $metaDescription ?? $this->metaDescription;
    // }
    // Simplificando con php 8
    public function __construct(
        public string $metaTitle = 'Default Title',
        public string $metaDescription = 'Default description for the app layout.'
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
