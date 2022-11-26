    <footer>
        <div class = "flex justify-around my-3.5">
            <ul>
                <li><a href="/">HOME</li>
                <li><a href="/tabi/">TABI</a></li>
                <li><a href="/size/">サイズの選び方</a></li>
                <li><a href="/shop/">SHOP</a></li>
                <li><a href="/oto/">お問い合わせ</a></li>
            </ul>
            <ul class =" ">

                <li><a href="<?php echo home_url(); ?>/toku/">特定商取引法人</a></li>
                <li><a href="/p/">プライバシー</a></li>
                

            </ul>
            

        </div>
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