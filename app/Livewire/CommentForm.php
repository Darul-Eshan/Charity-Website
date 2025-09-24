<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentForm extends Component
{
    public $blogsId, $user_name, $user_email, $comment, $parent_id=null;
    protected $rules = [
      'user_name' => 'nullable|string|max:255',
      'user_email' => 'nullable|string|max:255',
      'comment' => 'nullable|string|max:2000',
    ];
    public function mount($blogsId, $parentId = null)
    {
        $this->blogsId = $blogsId;
        $this->parentId = $parentId;
    }
    public function submit()
    {
        $this->validate();
        Comment::create(
            [
                'blogs_id' => $this->blogsId,
                'user_name' => $this->user_name,
                'user_email' => $this->user_email,
                'comment' => $this->comment,
                'parent_id' => $this->parent_id,
                'is_approved' => false,

            ]
        );
        $this->user_name = null;
        $this->user_email = null;
        $this->comment = null;
        $this->parent_id = null;
        session()->flash('message', 'Comment submitted successfully.');
        $this->emit('commentSubmitted');

    }
    public function render()
    {
        return view('livewire.comment-form');
    }
}
