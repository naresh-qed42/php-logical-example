<?php

$list = [
    'type' => 'ol',
    'items' => [
        [
            'text' => 'India',
            'child' => [
                'type' => 'ol',
                'items' => [
                    [
                        'text' => 'Maharashtra',
                        'child' => [
                            'type' => 'ul',
                            'items' => [
                                [
                                    'text' => 'Pune',
                                ],
                                [
                                    'text' => 'Nashik',
                                ],
                            ],
                        ],
                    ],
                    [
                        'text' => 'Karnataka',
                    ],
                    [
                        'text' => 'Rajasthan',
                        'child' => [
                            'type' => 'ul',
                            'items' => [
                                [
                                    'text' => 'Pushkar',
                                ],
                            ],
                        ],
                    ],
                ]
            ]
        ],
        [
            'text' => 'US',
            'child' => [
                'type' => 'ul',
                'items' => [
                    [
                        'text' => 'New York',
                    ],
                    [
                        'text' => 'Kansas',
                    ],
                ],
            ],
        ],
        [
            'text' => 'Pakistan',
            'child' => [
                'type' => 'ol',
                'items' => [
                    [
                        'text' => 'Balochistan',
                    ],
                    [
                        'text' => 'Punjab',
                        'child' => [
                            'type' => 'ul',
                            'items' => [
                                [
                                    'text' => 'Lahore',
                                ],
                                [
                                    'text' => 'Faisalabad',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]
    ],
];

function array_to_html_list($list) {

  print "<" . $list['type'] . ">";
  foreach ($list['items'] as $sub_item) {
    print "<li>";
    print $sub_item['text'];
    if ($sub_item['child']) {
      array_to_html_list($sub_item['child']);
    }
    print "</li>";
  }
  print "</" . $list['type'] . ">";
}

array_to_html_list($list);

function my_function($name) {
  echo "naresh";
}

my_function();
?>