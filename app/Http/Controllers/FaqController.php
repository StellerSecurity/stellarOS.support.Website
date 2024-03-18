<?php

namespace App\Http\Controllers;
use App\Http\Service\FaqService;
use Illuminate\Support\Facades\File;

class FaqController extends Controller
{

    public function __construct(private FaqService $faqService) {

    }

    public function home()
    {
        return view('faq', ['items' => $this->faqService->items()]);
    }

}
