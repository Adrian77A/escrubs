<?php

namespace App\Livewire\Blog;

use App\Models\Blog as ModelsBlog;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{

    use WithPagination;
 
    public $data;
    public $search = '';


    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $blogs = ModelsBlog::status()->select('title', 'description', 'img', 'order', 'created_at')->paginate(5);
          // Simplificar los datos de paginación para evitar problemas con Livewire
          $pagination = [
            'current_page' => $blogs->currentPage(),
            'data' => $blogs->items(),
            'first_page_url' => $blogs->url(1),
            'from' => $blogs->firstItem(),
            'last_page' => $blogs->lastPage(),
            'last_page_url' => $blogs->url($blogs->lastPage()),
            'next_page_url' => $blogs->nextPageUrl(),
            'path' => $blogs->path(),
            'per_page' => $blogs->perPage(),
            'prev_page_url' => $blogs->previousPageUrl(),
            'to' => $blogs->lastItem(),
            'total' => $blogs->total(),
        ];
        return view('livewire.blog.blog', [
            'blogs' =>$pagination['data'],  // Solo los datos paginados
            'pagination' =>  $pagination   
        ]);
    }

    public function gotoPageAndReload($page)
    {
        $this->gotoPage($page);
        $this->emit('reloadPage');
    }
}
