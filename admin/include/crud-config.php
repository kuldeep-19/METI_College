<?php
// Define the configuration for each section of the website
$crud_sections = [
    'banners' => [
        'title' => 'Banner Slider',
        'table' => 'banaer_slider',
        'fields' => [
            'title' => ['label' => 'Title', 'type' => 'text', 'required' => true],
            'subtitle' => ['label' => 'Subtitle', 'type' => 'text', 'required' => false],
            'button_text' => ['label' => 'Button Text', 'type' => 'text', 'required' => false],
            'button_link' => ['label' => 'Button Link', 'type' => 'url', 'required' => false],
            'image' => ['label' => 'Image', 'type' => 'file', 'required' => true],
            'status' => ['label' => 'Status', 'type' => 'status']
        ],
        'upload_path' => 'uploads/',
        'view_link' => 'master-view.php?section=banners',
        'form_link' => 'master-form.php?section=banners'
    ],
    'content' => [
        'title' => 'Content Section',
        'table' => 'content_section',
        'fields' => [
            'title' => ['label' => 'Title', 'type' => 'text', 'required' => true],
            'description' => ['label' => 'Description', 'type' => 'textarea', 'required' => true],
            'button_text' => ['label' => 'Button Text', 'type' => 'text', 'required' => false],
            'button_link' => ['label' => 'Button Link', 'type' => 'url', 'required' => false],
            'image' => ['label' => 'Image', 'type' => 'file', 'required' => false],
            'status' => ['label' => 'Status', 'type' => 'status']
        ],
        'upload_path' => 'uploads/',
        'view_link' => 'master-view.php?section=content',
        'form_link' => 'master-form.php?section=content',
        'single_record' => true
    ],
    'counts' => [
        'title' => 'Counts Section',
        'table' => 'counters',
        'fields' => [
            'label' => ['label' => 'Label', 'type' => 'text', 'required' => true],
            'value' => ['label' => 'Value', 'type' => 'number', 'required' => true],
            'delay' => ['label' => 'Animation Delay', 'type' => 'number', 'required' => false],
            'status' => ['label' => 'Status', 'type' => 'status']
        ],
        'view_link' => 'master-view.php?section=counts',
        'form_link' => 'master-form.php?section=counts'
    ],

    'testimonials' => [
        'title' => 'Testimonials',
        'table' => 'testimonials',
        'fields' => [
            'image' => ['label' => 'Image', 'type' => 'file', 'required' => true],
            'name' => ['label' => 'Name', 'type' => 'text', 'required' => true],
            'message' => ['label' => 'Message', 'type' => 'textarea', 'required' => true],
            'designation' => ['label' => 'Designation', 'type' => 'text', 'required' => false],
            'status' => ['label' => 'Status', 'type' => 'status'],
            'rating' => ['label' => 'Rating', 'type' => 'number', 'required' => false, 'min' => 1, 'max' => 5],
        ],
        'view_link' => 'master-view.php?section=testimonials',
        'form_link' => 'master-form.php?section=testimonials'
    ]
];
?>
