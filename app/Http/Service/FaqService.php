<?php

namespace App\Http\Service;

class FaqService
{

    public function items()
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
            ],
            [
                'id' => 3,
                'title' => 'Why does my phone auto reboot?',
                'description' => 'When your phone havent been unlocked for a certain time, StellarOS will automatically do a lean reboot. This sets your phone in a state called BFU-mode.<br>This makes your phone more secure against any attack towards your data since all encryption keys, data at rest and so on has been cleared and removed.'
            ]
        ];

        return $items;
    }

}
