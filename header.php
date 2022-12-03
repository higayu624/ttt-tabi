<!doctype html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title></title>
    <meta name="description">
</head>
<body class="text-base m-0 tracking-widest">
    <div class="h-12 bg-blue-100 w-full text-center py-4">
        <p class="text-sm">団体でのお買い求めはお問合せフォームからお願いします</p>
    </div>
    <header class="border-b-2 sticky border-b top-0 bg-white">
        <div class="w-full h-20 flex max-w-7xl mx-auto justify-between">
            <div class="items-center leading-10 px-2.5 py-5 overflow-hidden">
                <a href="/">TABI-TTT</a>
            </div>
            <ul class="flex items-center leading-10 px-2.5 py-3 overflow-hidden">
                <li class="ml-5"><a href="<?php echo home_url(); ?>/" class="mr-2">HOME</a></li>
                <li class="ml-5" id="tabi-button">
                    <a href="<?php echo home_url(); ?>/tabi" class="mr-2" id="tabi">TABIについて</a>
                    <div class="absolute hidden" id="tabis">
                        <a href="<?php echo home_url(); ?>/sportsjog"><p class="hover:bg-blue-100 text-center p-1 bg-gray-100 border border-gray-200">SPORTS JOG Ⅱ</p></a>
                        <a href="<?php echo home_url(); ?>/sportsjog-air"><p class="hover:bg-blue-100 text-center p-1 bg-gray-100 border border-gray-200">SPORTS JOG AIR</p></a>
                        <a href="<?php echo home_url(); ?>/sportsjog3"><p class="hover:bg-blue-100 text-center p-1 bg-gray-100 border border-gray-200">SPORTS JOG Ⅲ</p></a>
                        <a href="<?php echo home_url(); ?>/hitoe"><p class="hover:bg-blue-100 text-center p-1 bg-gray-100 border border-gray-200">hitoe</p></a>
                    </div>
                </li>
                <li class="ml-5"><a href="<?php echo home_url(); ?>/size" class="mr-2">サイズの選び方</a></li>
                <li class="ml-5"><a href="<?php echo home_url(); ?>/shop" class="mr-2">SHOP</a></li>
                <li class="ml-5"><a href="<?php echo home_url(); ?>/contact" class="mr-2">お問い合わせ</a></li>
            </ul>
        </div>
    </header>