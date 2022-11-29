<?php get_header(); ?>
<main class="pb-20">
    <section class="py-16 border-b">
        <p class="text-4xl font-serif text-center font-black ">スポーツ足袋</p>
        <ul class="flex justify-center mt-10">
           <a href="/"><li class="py-8 px-6">HOME</li></a>
            <a href="/shoes"><li class="py-8 px-6">TABI</li></a>
            <a href="/size"><li class="py-8 px-6">サイズの選び方</li></a>
            <a href="/shop"><li class="py-8 px-6">SHOP</li></a>
            <a href="contact"><li class="py-8 px-6">お問い合わせ</li></a>
        </ul>
    </section>
    <section class="w-full">
        <div class="w-full">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/images/home_top.jpeg" alt="tabi">
        </div>
    </section>
    <section class="w-full pt-16">
        <div class="w-full pb-16 text-center">
            <p class="text-4xl font-medium">PICK UP ITEMS</p>
            <h3 class="text-base">おすすめの商品</h3>
        </div>
        <div class="max-w-5xl" style="margin:0 auto;">
        <a href="<?php echo home_url(); ?>/sportsjog">
            <div class="inline-block w-72 mt-9 ml-9">
                <div class="w-full">
                    <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/images/sport-jog.jpeg">
                </div>
                <ul>
                    <li class="mt-1 text-gray-300">スポーツ足袋</li>
                    <li class="font-bold">スポーツジョグⅡ</li>
                    <li>￥5090</li>
                </ul>
            </div>
        </a>
        <a href="<?php echo home_url(); ?>/sportsjog-air">
            <div class="inline-block w-72 mt-9 ml-9">
                <div class="w-full">
                    <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/images/sports-air.jpeg">
                </div>
                <ul>
                    <li class="mt-1 text-gray-300">スポーツ足袋</li>
                    <li class="font-bold">スポーツジョグAIR</li>
                    <li>￥6930</li>
                </ul>
            </div>
        </a>
        <a href="<?php echo home_url(); ?>/sportsjog3">
            <div class="inline-block w-72 mt-9 ml-9">
                <div class="w-full">
                    <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/images/sports-jog3.jpeg">
                </div>
                <ul>
                    <li class="mt-1 text-gray-300">スポーツ足袋</li>
                    <li class="font-bold">スポーツジョグⅢ</li>
                    <li>￥8800</li>
                </ul>
            </div>
        </a>
        <a href="<?php echo home_url(); ?>/hitoe">
            <div class="inline-block w-72 mt-9 ml-9">
                <div class="w-full">
                    <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/images/hitoe.jpeg">
                </div>
                <ul>
                    <li class="mt-1 text-gray-300">スポーツ足袋</li>
                    <li class="font-bold">hitoe</li>
                    <li>￥13200</li>
                </ul>
            </div>
        </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>