<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Show extends Component
{
    public $post;
    function __construct($post)
    {
        $this->post = $post;
    }
    public function render()
    {
        return view('livewire.post.show');
    }
}
