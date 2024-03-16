<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

class FaqController extends Controller
{

    public function home()
    {

        $support = File::get(resource_path('faq.json'));

        return view('faq');
    }

}
