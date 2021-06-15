<!-- ONOMA : CHRISTINA PAPADODIMITRAKI -->
<!-- A.M.: 1684 -->

<?php
$content = [
    "Κινητά" => [
        "filters" => [
            "manufacturer" => [ "Apple", "Samsung", "Huawei" ],
            "os" => ["Android", "iOS"]
        ],
        "products" => [
            [
                "model" => "iPhone",
                "manufacturer" => "0",
                "os"=>"1",
                "image" => [
                    "src" => "images/iphone-12.jpeg",
                    "width" => 150,
                    "height" => 200
                ],
                "title" => "Apple iPhone 12",
                "description" => "Οθόνη: 6.1\", iOS 14, Μνήμη: 64GB, Κάμερα: 12MP + 12MP, Selfie: 12MP, CPU: Εξαπύρηνος (4+2), Κατασκευαστής: Apple",
                "price" => 732
            ],
            [
                "model" => "Galaxy",
                "manufacturer" => "1",
                "os"=> "0",
                "image" => [
                    "src" => "images/galaxy-s21.jpeg",
                    "width" => 150,
                    "height" => 200
                ],
                "title" => "Samsung Galaxy S21",
                "description" => "Οθόνη: 6.2\", Android 11, RAM: 8GB, Μνήμη: 128GB, Κάμερα: 12MP + 64MP + 12MP, Selfie: 10MP, CPU: Οκταπύρηνος (1+3+4), Κατασκευαστής: Samsung",
                "price" => 709
            ]
        ]
    ],
    "Laptop" => [
        "filters" => [
            "manufacturer" => [ "Apple", "Dell", "Lenovo" ],
            "os" => ["Windows", "MacOS", "Linux"]
        ],
        "products" => [
            [
                "model" => "MacBook",
                "manufacturer" => "0",
                "os"=>"1",
                "image" => [
                    "src" => "images/macbook.jpeg",
                    "width" => 200,
                    "height" => 150
                ],
                "title" => "Apple MacBook Air 13\" Retina 2020",
                "description" => "13.3\", Intel Core i5 1.1GΗz, RAM: 8GB, 512GB SSD, GPU: Intel Iris Plus Graphics, IPS Panel, 2560 x 1600, macOS",
                "price" => 1158
            ],
            [
                "model" => "Alienware",
                "manufacturer" => "1",
                "os"=>"0",
                "image" => [
                    "src" => "images/alienware.jpeg",
                    "width" => 200,
                    "height" => 150
                ],
                "title" => "Dell Alienware m15",
                "description" => "15.6\", Intel Core i7 2.2GΗz, RAM: 8GB, 1TB Hybrid, GPU: Nvidia GeForce RTX 2060, IPS Panel, 1920 x 1080, Windows 10",
                "price" => 2299
            ]
        ]
    ]
]

?>
<?php
$itemKinds = array("Κινητά","Laptop");
?>
