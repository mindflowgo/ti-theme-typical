<?php

/**
 * Theme config file
 */

return [
    // Set form fields for the admin theme customisation.
    'form' => [
        'general' => [
            'title' => 'General',
            'fields' => [
                'favicon' => [
                    'label' => 'Favicon',
                    'type' => 'mediafinder',
                    'span' => 'left',
                    'comment' => 'Upload your favicon ( png, ico, jpg, gif or bmp ).',
                ],                
                'header_breadcrumb' => [
                    'label' => 'Breadcrumb Image',
                    'span' => 'right',
                    'comment' => 'Upload custom header breadcrumb image to your website.',
                    'type' => 'mediafinder',
                ],
                'logo_image' => [
                    'label' => 'Logo Image',
                    'span' => 'left',
                    'comment' => 'Upload custom logo or text to your website.',
                    'type' => 'mediafinder',
                ],
                'reservation_image' => [
                    'label' => 'Reservation Image',
                    'span' => 'right',
                    'comment' => 'Upload custom image to your reservation page.',
                    'type' => 'mediafinder',
                ],
                'logo_text' => [
                    'label' => 'Logo Text',
                    'type' => 'text',
                    'span' => 'left',
                ],
                'logo_height' => [
                    'label' => 'Logo Height',
                    'type' => 'text',
                    'span' => 'right',
                    'default' => '40px',
                    'rules' => 'required',
                    'assetVar' => 'logo-height',
                ],
                'font.family' => [
                    'label' => 'Font Family',
                    'type' => 'text',
                    'span' => 'left',
                    'default' => '"Gilroy", helveticaneue-light, helvetica neue light',
                    'comment' => 'The font family to use for the main body text.',
                    'rules' => 'required',
                    'assetVar' => 'font-family-sans-serif',
                ],
                'font.weight' => [
                    'label' => 'Font Weight',
                    'type' => 'text',
                    'span' => 'right',
                    'rules' => 'required',
                    'default' => '400',
                    'assetVar' => 'font-weight-normal',
                ],
            ],
        ],
        'colors' => [
            'title' => 'Colors',
            'fields' => [
                'body.background' => [
                    'label' => 'Body background color',
                    'type' => 'colorpicker',
                    'span' => 'left',
                    'default' => '#EBE9E9',
                    'rules' => 'required',
                    'assetVar' => 'body-bg',
                ],
                'font.color' => [
                    'label' => 'Font Color',
                    'type' => 'colorpicker',
                    'span' => 'right',
                    'default' => '#808080',
                    'rules' => 'required',
                    'assetVar' => 'body-color',
                ],
                'button.primary.background' => [
                    'label' => 'Primary color',
                    'type' => 'colorpicker',
                    'span' => 'left',
                    'default' => '#F28934',
                    'rules' => 'required',
                    'assetVar' => 'primary',
                ],
                'button.default.background' => [
                    'label' => 'Secondary color',
                    'type' => 'colorpicker',
                    'span' => 'right',
                    'default' => '#29D884',
                    'rules' => 'required',
                    'assetVar' => 'secondary',
                ],
                'button.success.background' => [
                    'label' => 'Success color',
                    'type' => 'colorpicker',
                    'span' => 'left',
                    'default' => '#28A745',
                    'rules' => 'required',
                    'assetVar' => 'success',
                ],
                'button.info.background' => [
                    'label' => 'Info color',
                    'type' => 'colorpicker',
                    'span' => 'right',
                    'default' => '#17A2b8',
                    'rules' => 'required',
                    'assetVar' => 'info',
                ],
                'button.warning.background' => [
                    'label' => 'Warning color',
                    'type' => 'colorpicker',
                    'span' => 'left',
                    'default' => '#FFC107',
                    'rules' => 'required',
                    'assetVar' => 'warning',
                ],
                'button.danger.background' => [
                    'label' => 'Danger color',
                    'type' => 'colorpicker',
                    'span' => 'right',
                    'default' => '#DC3545',
                    'rules' => 'required',
                    'assetVar' => 'danger',
                ],
                'button.light.background' => [
                    'label' => 'Light color',
                    'type' => 'colorpicker',
                    'span' => 'left',
                    'default' => '#efeded',
                    'rules' => 'required',
                    'assetVar' => 'gray-100',
                ],
                'button.dark.background' => [
                    'label' => 'Dark color',
                    'type' => 'colorpicker',
                    'span' => 'right',
                    'default' => '#372b27',
                    'rules' => 'required',
                    'assetVar' => ['gray-800', 'gray-700'],
                ],
            ],
        ],
        'navigation' => [
            'title' => 'Navigation',
            'fields' => [
                'heading.background' => [
                    'label' => 'Nav background color',
                    'type' => 'colorpicker',
                    'span' => 'left',
                    'rules' => 'required',
                    'default' => '#FFFFFF',
                    'assetVar' => 'navbar-top-bg',
                ],
                'heading.color' => [
                    'label' => 'Nav font color',
                    'type' => 'colorpicker',
                    'span' => 'right',
                    'default' => '#1E1D23',
                    'rules' => 'required',
                    'assetVar' => 'navbar-link-color',
                ],
                'footer.background' => [
                    'label' => 'Footer background color',
                    'type' => 'colorpicker',
                    'span' => 'left',
                    'default' => '#181818',
                    'rules' => 'required',
                    'assetVar' => 'footer-bg',
                ],
                'footer.font_color' => [
                    'label' => 'Footer font color',
                    'type' => 'colorpicker',
                    'span' => 'right',
                    'default' => '#b0b0b0',
                    'rules' => 'required',
                    'assetVar' => 'footer-link-color',
                ],
            ],
        ],
        'social' => [
            'title' => 'Social',
            'fields' => [
                'social' => [
                    'type' => 'repeater',
                    'commentAbove' => 'Add full URL for your social network profiles',
                    'form' => [
                        'fields' => [
                            'class' => [
                                'label' => 'Icon css class',
                                'type' => 'text',
                                'rules' => 'required',
                                'default' => 'poco-icon-facebook',
                            ],
                            'title' => [
                                'label' => 'Icon title',
                                'type' => 'text',
                                'rules' => 'required',
                                'default' => 'Facebook',
                            ],
                            'url' => [
                                'label' => 'Icon Url',
                                'type' => 'text',
                                'rules' => 'required',
                            ],
                        ],
                    ],
                ],
            ],
        ],        
        'advanced' => [
            'title' => 'Advanced',
            'fields' => [
                'ga_tracking_code' => [
                    'label' => 'Google Analytics Tracking Code',
                    'type' => 'codeeditor',
                    'size' => 'small',
                    'mode' => 'js',
                    'comment' => 'Paste your Google Analytics Tracking Code here.',
                ],
                'custom_css' => [
                    'label' => 'Add custom CSS',
                    'comment' => 'Paste your custom CSS code here.',
                    'type' => 'codeeditor',
                    'span' => 'left',
                    'size' => 'small',
                ],
                'custom_js' => [
                    'label' => 'Add custom Javascript',
                    'comment' => 'Paste your custom Javascript code here.',
                    'type' => 'codeeditor',
                    'size' => 'small',
                    'span' => 'right',
                    'mode' => 'js',
                ],
            ],
        ],
        'gdpr' => [
            'title' => 'GDPR (EU cookie settings)',
            'fields' => [
                'enable_gdpr' => [
                    'label' => 'Enable Cookie Banner',
                    'type' => 'switch',
                    'default' => true,
                ],
                'gdpr_cookie_message' => [
                    'label' => 'Cookie Message',
                    'type' => 'textarea',
                    'default' => 'We use own and third party cookies to improve our services. If you continue to browse, consider accepting its use',
                    'rules' => 'required|string',
                    'attribute' => [
                        'rows' => '10',
                    ],
                ],
                'gdpr_accept_text' => [
                    'label' => 'Accept cookie text',
                    'type' => 'text',
                    'default' => 'OK',
                    'rules' => 'required|max:128',
                ],
                'gdpr_more_info_text' => [
                    'label' => 'More information text',
                    'type' => 'text',
                    'default' => 'More Information',
                    'rules' => 'required|max:128',
                ],
                'gdpr_more_info_link' => [
                    'label' => 'More information link',
                    'type' => 'select',
                    'options' => [\System\Models\Pages_model::class, 'getDropdownOptions'],
                    'rules' => 'string',
                ],
                'gdpr_background_color' => [
                    'label' => 'Cookie banner CSS background color attribute',
                    'type' => 'colorpicker',
                    'default' => '#FFF',
                    'rules' => 'required|string',
                ],
                'gdpr_text_color' => [
                    'label' => 'Cookie banner CSS text color attribute',
                    'type' => 'colorpicker',
                    'default' => '#000',
                    'rules' => 'required|string',
                ],
            ],
        ],
        'history' => [
            'title' => 'History Page',
            'fields' => [
                'enable_history' => [
                    'label' => 'Enable Restaurant\'s History Page',
                    'type' => 'switch',
                    'default' => false,
                ],
                'title_history' => [
                    'label' => 'General Title',
                    'type' => 'text',
                    'span' => 'left',
                ],
                'subtitle_history' => [
                    'label' => 'General Subtitle',
                    'type' => 'text',
                    'span' => 'right',
                ],
                'introduction_history' => [
                    'label' => 'Resume of the History',
                    'type' => 'textarea',
                ],
                'history_repeater' => [
                    'label' => 'Organize the history of your restaurant year by year. <strong>NOTE: Before choosing the image, fill in the above fields and save.</strong>',
                    'type' => 'repeater',
                    'form' => [
                        'fields' => [
                            'year' => [
                                'label' => 'Year',
                                'type' => 'number',
                                'span' => 'left',
                            ],
                            'year_title' => [
                                'label' => 'Year Title',
                                'type' => 'text',
                                'span' => 'left',
                            ],
                            'year_description' => [
                                'label' => 'Year Description',
                                'type' => 'textarea',
                                'span' => 'right',
                            ],
                            'year_image' => [
                                'label' => 'Year Image',
                                'type' => 'mediafinder',
                                'span' => 'right',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
