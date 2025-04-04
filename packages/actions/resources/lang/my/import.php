<?php

return [

    'label' => 'တင်သွင်းရန်',

    'modal' => [

        'heading' => ':label တင်သွင်းရန်',

        'form' => [

            'file' => [
                'label' => 'ဖိုင်',
                'placeholder' => 'CSV ဖိုင်တင်ရန်',
            ],

            'columns' => [
                'label' => 'ကော်လံများ',
                'placeholder' => 'ကော်လံရွေးချယ်ရန်',
            ],

        ],

        'actions' => [

            'download_example' => [
                'label' => 'နမူနာ CSV ဖိုင်ကို ဒေါင်းလုပ်ရန်',
            ],

            'import' => [
                'label' => 'တင်သွင်းရန်',
            ],

        ],

    ],

    'notifications' => [

        'completed' => [

            'title' => 'တင်သွင်းခြင်း ပြီးဆုံးပါပြီ',

            'actions' => [

                'download_failed_rows_csv' => [
                    'label' => 'မအောင်မြင်သော အချက်အလက်များကို ဒေါင်းလုပ်ရန်',
                ],

            ],

        ],

        'max_rows' => [
            'title' => 'CSV ဖိုင်သည် အလွန်ကြီးနေပါသည်',
            'body' => 'တစ်ကြိမ်တည်းတွင် စာကြောင်းရေ :count ထက်ပို၍ တင်သွင်း၍မရပါ။',
        ],

        'started' => [
            'title' => 'တင်သွင်းခြင်း စတင်ပါပြီ',
            'body' => 'တင်သွင်းခြင်း စတင်ပြီး စာကြောင်းရေ :count ကို နောက်ကွယ်တွင် လုပ်ဆောင်နေပါသည်။',
        ],

    ],

    'example_csv' => [
        'file_name' => ':importer-နမူနာ',
    ],

    'failure_csv' => [
        'file_name' => 'တင်သွင်းခြင်း-:import_id-:csv_name-မအောင်မြင်သောအချက်အလက်များ',
        'error_header' => 'အမှား',
        'system_error' => 'စနစ်အမှားဖြစ်ပါသည်။ အကူအညီရယူရန် ဆက်သွယ်ပါ။',
        'column_mapping_required_for_new_record' => ':attribute ကော်လံသည် ဖိုင်ထဲရှိ မည်သည့်ကော်လံနှင့်မှ ချိတ်ဆက်ထားခြင်းမရှိသော်လည်း မှတ်တမ်းအသစ်များ ဖန်တီးရန်အတွက် လိုအပ်ပါသည်။',
    ],

];