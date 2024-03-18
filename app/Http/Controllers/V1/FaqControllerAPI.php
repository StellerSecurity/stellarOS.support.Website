<?php

namespace App\Http\Controllers\V1;

use App\Http\Service\FaqService;

class FaqControllerAPI
{

    public function __construct(private FaqService $faqService) {

    }

    public function faq()
    {
        return response()->json($this->faqService->items());
    }

}
