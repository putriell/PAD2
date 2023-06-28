<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentHome extends Controller
{
    public function show()
    {
        $data_content = Content::all();
        
        return view('Page/home', compact('data_content'));
    }
}
