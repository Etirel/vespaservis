<?php

namespace App\Services;

use App\Models\Page;
use Illuminate\Support\Facades\App;

class PageService
{

    public function getPageContent($pageName)
    {
        $page = Page::where('page_name', $pageName)->first();

        return $page->page_content;
    }

}
