<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/themes/editorial/blueprints.yaml',
    'modified' => 1555126275,
    'data' => [
        'name' => 'Editorial',
        'version' => '0.1.3',
        'description' => 'Port of the Editorial theme from HTML5Up.net',
        'icon' => 'paint-brush',
        'author' => [
            'name' => 'Jeremy Gonyea',
            'email' => 'jeremy.gonyea@gmail.com'
        ],
        'homepage' => 'https://github.com/jeremy-gonyea/grav-theme-editorial',
        'keywords' => 'grav, theme, html5up, editorial',
        'bugs' => 'https://github.com/jeremy-gonyea/grav-theme-editorial/issues',
        'readme' => 'https://github.com/jeremy-gonyea/grav-theme-editorial/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'auto-date',
            1 => 'simplesearch'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'configOptions.spacer' => [
                    'type' => 'spacer',
                    'title' => 'Theme Config',
                    'underline' => false
                ],
                'themeSlogan' => [
                    'type' => 'text',
                    'label' => 'Theme Slogan',
                    'help' => 'Use this to add a text snippet to the sitename.'
                ],
                'sidebarEnabled' => [
                    'type' => 'toggle',
                    'label' => 'Sidebar Default State',
                    'highlight' => 'active',
                    'default' => 'inactive',
                    'options' => [
                        'active' => 'Open',
                        'inactive' => 'Closed'
                    ]
                ],
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'contact.spacer' => [
                    'type' => 'spacer',
                    'title' => 'Contact Information',
                    'text' => 'Contact information is displayed in the sidebar area.'
                ],
                'contact.statement' => [
                    'label' => 'Contact Statement',
                    'type' => 'textarea'
                ],
                'contact.email' => [
                    'label' => 'Email',
                    'type' => 'email',
                    'default' => 'webmaster@example.com'
                ],
                'contact.phone' => [
                    'label' => 'Phone',
                    'type' => 'text',
                    'default' => '(555) 555-5555'
                ],
                'contact.street' => [
                    'label' => 'Street Address',
                    'type' => 'text',
                    'default' => '123 Any Street'
                ],
                'contact.city' => [
                    'label' => 'City',
                    'type' => 'text',
                    'default' => 'AnyTown'
                ],
                'contact.state' => [
                    'label' => 'State',
                    'type' => 'text',
                    'default' => 'CA'
                ],
                'contact.zip' => [
                    'label' => 'Postal Code',
                    'type' => 'text',
                    'default' => 12345
                ],
                'social.spacer' => [
                    'type' => 'spacer',
                    'title' => 'Social Media',
                    'text' => 'Include full url\'s to your various social media presences.  An icon/ link will appear at the top of the page for each respective platform.',
                    'underline' => false
                ],
                'social.twitter' => [
                    'label' => 'Twitter',
                    'type' => 'text'
                ],
                'social.facebook' => [
                    'label' => 'Facebook',
                    'type' => 'text'
                ],
                'social.snap' => [
                    'label' => 'Snapchat',
                    'type' => 'text'
                ],
                'social.instagram' => [
                    'label' => 'Instagram',
                    'type' => 'text'
                ],
                'social.medium' => [
                    'label' => 'Medium',
                    'type' => 'text'
                ]
            ]
        ]
    ]
];
