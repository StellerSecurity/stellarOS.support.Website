<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

class FaqController extends Controller
{

    public function home()
    {

        $items = [
            [
                'id' => 1,
                'title' => 'How to install eSim',
                'description' => 'To install eSim on your phone do the following: <br><br>
                <li>Open owner-user</li>
                <li>Then open settings</li>
                <li>Then enable eSim-support</li>
                <li>Then open mobile & network, then add new simcard, then scan the QR-code</li><br><br>

                You have now the eSim installed. Remember to enable mobile-data.'
            ],
            [
                'id' => 2,
                'title' => 'How to install apps',
                'description' => 'Use Aptoide or fdroid to install apps.'
            ]
        ];

      //  $support = File::get(resource_path('faq.json'));



        return view('faq', ['items' => $items]);
    }

}
