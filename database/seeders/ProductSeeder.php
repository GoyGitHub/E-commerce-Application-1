<?php

    namespace Database\Seeders;

    use App\Models\Product;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class ProductSeeder extends Seeder
    {
        public function run(): void
        {
            $products = [
                [
        'name' => 'Apple iPhone 13',
        'description' => 'The latest iPhone with A15 Bionic chip, improved cameras, and longer battery life.',
        'price' => 999.99,
        'image' => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-pink-select?wid=940&hei=1112&fmt=png-alpha&.v=1645572315935',
        'category' => 'Smartphones',
        'brand' => 'Apple',
        'stock' => 50,
        'is_featured' => true,
        'is_new' => true,
    ],
    [
        'name' => 'Samsung Galaxy S21',
        'description' => 'A powerful Android smartphone with a stunning display and versatile camera system.',
        'price' => 899.99,
        'image' => 'https://images.samsung.com/is/image/samsung/p6pim/ph/galaxy-s21/gallery/ph-galaxy-s21-5g-g991-371956-sm-g991bzngxaa-368404227?$720_576_PNG$',
        'category' => 'Smartphones',
        'brand' => 'Samsung',
        'stock' => 40,
        'is_featured' => true,
        'is_new' => true,
    ],
    [
        'name' => 'Sony WH-1000XM4 Headphones',
        'description' => 'Industry-leading noise-canceling headphones with exceptional sound quality.',
        'price' => 349.99,
        'image' => 'https://m.media-amazon.com/images/I/71o8Q5XJS5L._AC_SL1500_.jpg',
        'category' => 'Audio',
        'brand' => 'Sony',
        'stock' => 30,
        'is_featured' => false,
        'is_new' => false,
    ],
    [
        'name' => 'Dell XPS 13 Laptop',
        'description' => 'Compact and powerful laptop with Intel i7 processor, ideal for productivity and creative work.',
        'price' => 1199.99,
        'image' => 'https://i.dell.com/sites/csimages/App-Merchandizing_Images/all/xps-13-9305-laptop_celestial-silver.jpg',
        'category' => 'Computers',
        'brand' => 'Dell',
        'stock' => 25,
        'is_featured' => true,
        'is_new' => true,
    ],
    [
        'name' => 'Apple MacBook Air M2',
        'description' => 'Lightweight laptop with M2 chip, exceptional battery life, and Retina display.',
        'price' => 1299.99,
        'image' => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/macbook-air-m2-spacegray-select-202206?wid=904&hei=840&fmt=png-alpha&.v=1652822831404',
        'category' => 'Computers',
        'brand' => 'Apple',
        'stock' => 20,
        'is_featured' => true,
        'is_new' => true,
    ],
    [
        'name' => 'Google Pixel 7',
        'description' => 'Google’s flagship smartphone with pure Android experience and advanced camera features.',
        'price' => 799.99,
        'image' => 'https://store.google.com/product-images-module_pixel_7_colors_02.png',
        'category' => 'Smartphones',
        'brand' => 'Google',
        'stock' => 35,
        'is_featured' => false,
        'is_new' => true,
    ],
    [
        'name' => 'Bose QuietComfort Earbuds',
        'description' => 'True wireless earbuds with excellent noise cancellation and sound clarity.',
        'price' => 279.99,
        'image' => 'https://assets.bose.com/content/dam/Bose_DAM/Web/consumer_electronics/global/products/headphones/quietcomfort_earbuds/product_silo_images/qce_product_silver_EC_hero.psd/jcr:content/renditions/cq5dam.web.320.320.png',
        'category' => 'Audio',
        'brand' => 'Bose',
        'stock' => 45,
        'is_featured' => false,
        'is_new' => true,
    ],
    [
        'name' => 'Samsung 55" QLED TV',
        'description' => '4K Smart QLED TV with vibrant colors, deep blacks, and smart features.',
        'price' => 699.99,
        'image' => 'https://images.samsung.com/is/image/samsung/p6pim/ph/qn55q60cafxza/gallery/ph-qled-q60c-qa55q60cafxza-534116530?$1300_1038_PNG$',
        'category' => 'Electronics',
        'brand' => 'Samsung',
        'stock' => 15,
        'is_featured' => true,
        'is_new' => false,
    ],
    [
        'name' => 'Canon EOS R6 Camera',
        'description' => 'Full-frame mirrorless camera with high-speed autofocus and excellent low-light performance.',
        'price' => 2499.99,
        'image' => 'https://m.media-amazon.com/images/I/81zs0vGO4BL._AC_SL1500_.jpg',
        'category' => 'Photography',
        'brand' => 'Canon',
        'stock' => 10,
        'is_featured' => true,
        'is_new' => true,
    ],
    [
        'name' => 'Fitbit Charge 5',
        'description' => 'Advanced fitness tracker with heart rate monitoring, sleep tracking, and GPS.',
        'price' => 149.99,
        'image' => 'https://static.techspot.com/images/products/2022/healthtracker/fitbit-charge5-black.jpg',
        'category' => 'Wearables',
        'brand' => 'Fitbit',
        'stock' => 60,
        'is_featured' => false,
        'is_new' => true,
    ],
            ];

            foreach ($products as $product) {
                Product::create([
                    ...$product,
                    'slug' => Str::slug($product['name']),
                ]);
            }
        }
    }