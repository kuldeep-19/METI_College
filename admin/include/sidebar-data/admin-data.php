<?php
$menu = [
    [
        "title" => "Home Page",
        "icon" => "fas fa-tachometer-alt",
        "submenu" => [
            [
                "name" => "Banner Section",
                "submenu" => [
                    ["name" => "Add Banner", "link" => "addbanner.php"],
                    ["name" => "View Banner", "link" => "viewbanner.php"]
                ]
            ],
            [
                "name" => "Content Section",
                "submenu" => [
                    ["name" => "Add Content", "link" => "add-content.php"],
                    ["name" => "View Content", "link" => "view-content.php"]
                ]
            ]
        ]
    ]
];
?>
