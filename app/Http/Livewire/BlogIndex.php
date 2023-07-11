<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;

class BlogIndex extends Component
{
    public $count=4;
    public $categories;
    public $blogs1=false;

    function pilus()
    {
        $this->count=$this->count+2;
        $this->render();
    }

    function category($id)
    {
        if ($id!==0){
        $this->blogs1=Blog::where('school_id',env('SCHOOL_ID'))->where('category_id',"$id")->get();
        }else{
            $this->blogs1=false;
        }
    }

    public function render()
    {
        $this->categories=Category::all();
        if(!$this->blogs1){
        $blogs =Blog::where('school_id',env('SCHOOL_ID'))->take($this->count)->orderByDesc('id')->get();
        }else{
           $blogs=$this->blogs1;
        }

        return view('livewire.blog-index',compact('blogs'));
    }
}
