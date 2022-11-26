    <footer>
        <div class="bg-blue-200 p-3.5 text-center">初回購入は靴下無料!</div>
        <div class = "flex justify-around my-3.5 p-2">
            <ul>

                <p class = "font-bold text-blue-200">TABI</p>
                <li><a href="<?php echo home_url(); ?>/tabi/#function">TABIの機能</a></li>
                <li><a href="<?php echo home_url(); ?>/tabi/#process">TABIの作り方</a></li>
                <li><a href="<?php echo home_url(); ?>/tabi/#feature">TABIの特徴</a></li>

            </ul>
            <ul>
                <p class = "font-bold text-blue-200">SHOP</p>
                <li><a href="<?php echo home_url(); ?>/sportsjog/">スポーツジョグⅡ</a></li>
                <li><a href="<?php echo home_url(); ?>/sportsjogair/">スポーツジョグAIR</a></li>
                <li><a href="<?php echo home_url(); ?>/hitoe/">hitoe</a></li>
            </ul>
            <ul>
                <p class = "font-bold text-blue-200">サービス</p>
                <li><a href="<?php echo home_url(); ?>/toku/">特定商取引法に基づく表示</a></li>
                <li><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>
                <li><a href="<?php echo home_url(); ?>/#">※よくある質問</a></li>

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

    var methodButton = document.querySelector('#method-button');
    var careButton = document.querySelector('#care-button');
    var deliveryButton = document.querySelector('#delivery-button');
    var method = document.querySelector('#method');
    var care = document.querySelector('#care');
    var delivery = document.querySelector('#delivery');

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
</script>