<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/plugins/events/blueprints/event.yaml',
    'modified' => 1556180313,
    'data' => [
        'title' => 'Event',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'event' => [
                            'type' => 'tab',
                            'title' => 'Event',
                            'fields' => [
                                'header.event.dt' => [
                                    'type' => 'section',
                                    'title' => 'Date & Time',
                                    'underline' => true
                                ],
                                'header.event.start' => [
                                    'type' => 'datetime',
                                    'label' => 'Start',
                                    'help' => 'Use the date selector to enter a start date and time for this event.',
                                    'validate' => [
                                        'type' => 'required'
                                    ]
                                ],
                                'header.event.end' => [
                                    'type' => 'datetime',
                                    'label' => 'End',
                                    'help' => 'Use the date selector to enter an end date and time for this event.',
                                    'validate' => [
                                        'type' => 'required'
                                    ]
                                ],
                                'header.event.repeat' => [
                                    'type' => 'text',
                                    'label' => 'Repeat',
                                    'help' => 'Using MTWRFSU to specify what days of the week this event repeats. For example, MWF.',
                                    'placeholder' => 'MTWRFSU'
                                ],
                                'header.event.freq' => [
                                    'type' => 'select',
                                    'label' => 'Frequency',
                                    'help' => 'How often should this event repeat?',
                                    'options' => [
                                        '' => 'None',
                                        'daily' => 'Daily',
                                        'weekly' => 'Weekly',
                                        'monthly' => 'Monthly',
                                        'yearly' => 'Yearly'
                                    ]
                                ],
                                'header.event.until' => [
                                    'type' => 'datetime',
                                    'label' => 'Until',
                                    'help' => 'How long should this event repeat? (3 months automatically if Repeat or Frequency are set)'
                                ],
                                'header.event.lct' => [
                                    'type' => 'section',
                                    'title' => 'Location',
                                    'underline' => true
                                ],
                                'header.event.location' => [
                                    'type' => 'text',
                                    'label' => 'Location',
                                    'help' => 'Where is this event located? If you enter an address it will be geocoded below.'
                                ],
                                'header.event.coordinates' => [
                                    'type' => 'text',
                                    'label' => 'Coordinates',
                                    'placeholder' => 'Latitude, Longitude',
                                    'help' => 'These are automatically generated from the location field.'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
