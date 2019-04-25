<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/plugins/events/blueprints/events.yaml',
    'modified' => 1556180313,
    'data' => [
        'title' => 'Events',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'contact' => [
                            'type' => 'tab',
                            'title' => 'Events',
                            'fields' => [
                                'header.content.items.@taxonomy.type' => [
                                    'type' => 'text',
                                    'label' => 'Taxonomy Type',
                                    'default' => 'event'
                                ],
                                'header.content.items.@taxonomy.event_repeat' => [
                                    'type' => 'text',
                                    'label' => 'Repeats On',
                                    'placeholder' => '[M,T,W,R,F,S,U]'
                                ],
                                'header.content.items.@taxonomy.event_freq' => [
                                    'type' => 'text',
                                    'label' => 'Frequency',
                                    'placeholder' => 'weekly'
                                ],
                                'header.content.dateRange.start' => [
                                    'type' => 'date',
                                    'label' => 'Start Date'
                                ],
                                'header.content.dateRange.end' => [
                                    'type' => 'date',
                                    'label' => 'End Date'
                                ],
                                'header.content.order.by' => [
                                    'type' => 'text',
                                    'label' => 'Order By',
                                    'default' => 'date'
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'text',
                                    'label' => 'Order Direction',
                                    'default' => 'asc'
                                ],
                                'header.content.limit' => [
                                    'type' => 'text',
                                    'label' => 'limit',
                                    'default' => 10
                                ],
                                'header.content.pagination' => [
                                    'label' => 'Pagination',
                                    'type' => 'toggle',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
