    <footer >
        <div class="bg-blue-100 p-3.5 text-center">団体でのお買い求めはお問合せフォームからお願いします</div>
        <div class = "flex justify-around my-3.5 p-2 py-16">
            <ul>

                <p class = "font-bold text-blue-200">TABI</p>
                <li class="pt-1"><a href="<?php echo home_url(); ?>/tabi/#function">TABIの機能</a></li>
                <li class="pt-1"><a href="<?php echo home_url(); ?>/tabi/#process">TABIの作り方</a></li>
                <li class="pt-1"><a href="<?php echo home_url(); ?>/tabi/#feature">TABIの特徴</a></li>

            </ul>
            <ul>
                <p class = "font-bold text-blue-200">SHOP</p>
                <li class="pt-1"><a href="<?php echo home_url(); ?>/sportsjog/">スポーツジョグⅡ</a></li>
                <li class="pt-1"><a href="<?php echo home_url(); ?>/sportsjog3/">スポーツジョグⅢ</a></li>
                <li class="pt-1"><a href="<?php echo home_url(); ?>/sportsjog-air/">スポーツジョグAIR</a></li>
                <li class="pt-1"><a href="<?php echo home_url(); ?>/hitoe/">hitoe</a></li>
            </ul>
            <ul>
                <p class = "font-bold text-blue-200">サービス</p>
                <li class="pt-1"><a href="<?php echo home_url(); ?>/toku/">特定商取引法に基づく表示</a></li>
                <li class="pt-1"><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>
            </ul>
        </div>
        <hr size="5">
        <p class="copyright text-center text-xs p-2">&copy; 2022-<?php echo date('Y') ?> スポーツ　足袋</p>
    </footer>
</body>
<script>
    var jog2Main = document.querySelector('#jog2-main');
    var jog20 = document.querySelector('#jog2-0');
    var jog21 = document.querySelector('#jog2-1');
    var jog22 = document.querySelector('#jog2-2');
    var jog23 = document.querySelector('#jog2-3');
    var jog24 = document.querySelector('#jog2-4');
    var jog25 = document.querySelector('#jog2-5');
   
    var jog3Main = document.querySelector('#jog3-main');
    var jog30 = document.querySelector('#jog3-0');
    var jog31 = document.querySelector('#jog3-1');
    var jog32 = document.querySelector('#jog3-2');
    var jog33 = document.querySelector('#jog3-3');
    var jog34 = document.querySelector('#jog3-4');
    var jog35 = document.querySelector('#jog3-5');

    var jogairMain = document.querySelector('#jogair-main');
    var jogair0 = document.querySelector('#jogair-0');
    var jogair1 = document.querySelector('#jogair-1');
    var jogair2 = document.querySelector('#jogair-2');
    var jogair3 = document.querySelector('#jogair-3');
    var jogair4 = document.querySelector('#jogair-4');
    var jogair5 = document.querySelector('#jogair-5');

    var hitoeMain = document.querySelector('#hitoe-main');
    var hitoe0 = document.querySelector('#hitoe-0');
    var hitoe1 = document.querySelector('#hitoe-1');
    var hitoe2 = document.querySelector('#hitoe-2');
    var hitoe3 = document.querySelector('#hitoe-3');
    var hitoe4 = document.querySelector('#hitoe-4');
    var hitoe5 = document.querySelector('#hitoe-5');

    var methodButton = document.querySelector('#method-button');
    var careButton = document.querySelector('#care-button');
    var deliveryButton = document.querySelector('#delivery-button');
    var method = document.querySelector('#method');
    var care = document.querySelector('#care');
    var delivery = document.querySelector('#delivery');

    var tabi = document.querySelector('#tabi');
    var tabis = document.querySelector('#tabis');
    var tabiButton = document.querySelector('#tabi-button')

    if (jog2Main != null){
        jog20.addEventListener("click", function(){
            jog2Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog/sportsjog-top.jpeg');
        })
        jog21.addEventListener("click", function(){
            jog2Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog/1.jpeg');
        })
        jog22.addEventListener("click", function(){
            jog2Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog/2.jpeg');
        })
        jog23.addEventListener("click", function(){
            jog2Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog/3.jpeg');
        })
        jog24.addEventListener("click", function(){
            jog2Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog/4.jpeg');
        })
        jog25.addEventListener("click", function(){
            jog2Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog/5.jpeg');
        })
    }

    if (jog3Main != null){
        jog30.addEventListener("click", function(){
            jog3Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog3/1.jpg');
        })
        jog31.addEventListener("click", function(){
            jog3Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog3/2.jpg');
        })
        jog32.addEventListener("click", function(){
            jog3Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog3/3.jpg');
        })
        jog33.addEventListener("click", function(){
            jog3Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog3/4.jpg');
        })
        jog34.addEventListener("click", function(){
            jog3Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog3/5.jpg');
        })
        jog35.addEventListener("click", function(){
            jog3Main.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsjog3/6.jpg');
        })
    }
    
    if (jogairMain != null){
        jogair0.addEventListener("click", function(){
            jogairMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsair/1.jpg');
        })
        jogair1.addEventListener("click", function(){
            jogairMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsair/2.jpg');
        })
        jogair2.addEventListener("click", function(){
            jogairMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsair/3.jpg');
        })
        jogair3.addEventListener("click", function(){
            jogairMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsair/4.jpg');
        })
        jogair4.addEventListener("click", function(){
            jogairMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsair/5.jpg');
        })
        jogair5.addEventListener("click", function(){
            jogairMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/sportsair/6.jpg');
        })
    }

    if (hitoeMain != null){
        hitoe0.addEventListener("click", function(){
            hitoeMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/hitoe/1.jpg');
        })
        hitoe1.addEventListener("click", function(){
            hitoeMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/hitoe/2.jpg');
        })
        hitoe2.addEventListener("click", function(){
            hitoeMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/hitoe/3.jpg');
        })
        hitoe3.addEventListener("click", function(){
            hitoeMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/hitoe/4.jpg');
        })
        hitoe4.addEventListener("click", function(){
            hitoeMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/hitoe/5.jpg');
        })
        hitoe5.addEventListener("click", function(){
            hitoeMain.setAttribute('src', '<?php echo get_template_directory_uri(); ?>/images/hitoe/6.jpg');
        })
    }

    if(methodButton != null){
        methodButton.addEventListener("click", function(){//クリックされたら
            method.style.display = 'table-cell';
            care.style.display = 'none';
            delivery.style.display = 'none';
        })
        careButton.addEventListener("click", function(){//クリックされたら
            method.style.display = 'none';
            care.style.display = 'table-cell';
            delivery.style.display = 'none';
        })
        deliveryButton.addEventListener("click", function(){//クリックされたら
            method.style.display = 'none';
            care.style.display = 'none';
            delivery.style.display = 'table-cell';
        })
    }

    tabi.addEventListener("mouseover", function(){
        tabis.classList.remove('hidden');
    })

    tabiButton.addEventListener("mouseleave", function(){
        tabis.classList.add('hidden');
    })
</script>