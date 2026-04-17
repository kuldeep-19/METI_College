<?php
$menu = [
    [
        "title" => "Home Page",
        "icon" => "fas fa-tachometer-alt",
        "submenu" => [
            [
                "name" => "Banner Section",
                "submenu" => [
                    ["name" => "Add Banner", "link" => "master-form.php?section=banners"],
                    ["name" => "View Banner", "link" => "master-view.php?section=banners"]
                ]
            ],
            [
                "name" => "Content Section",
                "submenu" => [
                    ["name" => "Update Content", "link" => "master-form.php?section=content"],
                    ["name" => "View Content", "link" => "master-view.php?section=content"]
                ]
            ],
            [
                "name" => "Counts Section",
                "submenu" => [
                    ["name" => "Add Counts", "link" => "master-form.php?section=counts"],
                    ["name" => "View Counts", "link" => "master-view.php?section=counts"]
                ]
            ],
            [
                "name" => "Testimonials Section",
                "submenu" => [
                    ["name" => "Add Testimonial", "link" => "master-form.php?section=testimonials"],
                    ["name" => "View Testimonial", "link" => "master-view.php?section=testimonials"]
                ]
            ]
        ]
    ]
];
?>
