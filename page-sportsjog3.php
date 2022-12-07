<?php get_header(); ?>
<main class="pt-20 pb-20">
    <div class="flex max-w-7xl justify-around" style="margin:0 auto;">
        <div class="max-w-2xl"><!-- 左側 -->
            <div><!-- 写真 -->
                <div style="margin:0 auto"><img id="jog3-main" class="w-full" src="<?php echo get_template_directory_uri(); ?>/images/sportsjog3/1.jpg"></div>
                <div class="flex mt-5">
                    <div class="w-28 hover:scale-125" id="jog3-0"><img src="<?php echo get_template_directory_uri(); ?>/images/sportsjog3/1.jpg"></div>
                    <div class="w-28 hover:scale-125 ml-8" id="jog3-1"><img src="<?php echo get_template_directory_uri(); ?>/images/sportsjog3/2.jpg"></div>
                    <div class="w-28 hover:scale-125 ml-8" id="jog3-2"><img src="<?php echo get_template_directory_uri(); ?>/images/sportsjog3/3.jpg"></div>
                    <div class="w-28 hover:scale-125 ml-8" id="jog3-3"><img src="<?php echo get_template_directory_uri(); ?>/images/sportsjog3/4.jpg"></div>
                    <div class="w-28 hover:scale-125 ml-8" id="jog3-4"><img src="<?php echo get_template_directory_uri(); ?>/images/sportsjog3/5.jpg"></div>
                    <div class="w-28 hover:scale-125 ml-8" id="jog3-5"><img src="<?php echo get_template_directory_uri(); ?>/images/sportsjog3/6.jpg"></div>
                </div>
            </div>
            <div class="pt-20"><!-- 仕様 -->
                <table class="border border-gray-200 w-full">
                    <tr class="border border-gray-200">
                        <th id="method-button" class="border border-gray-200 p-2 font-normal">仕様</th>
                        <th id="care-button" class="border border-gray-200 p-2 font-normal bg-gray-100">お手入れ</th>
                        <th id="delivery-button" class="border border-gray-200 p-2 font-normal bg-gray-200">配送</th>
                    </tr>
                    <tr class="border border-gray-200">
                        <td id="method" style="display:table-cell;" class="border border-gray-200 p-8" colspan="3" rowspan="3">
                            <ul>
                                <li>・アッパー材：ポリエステル</li>
                                <li>・底材：ゴム</li>
                                <li>・足幅：標準</li>
                                <li>・片足重量：240g(26.0㎝代表値)</li>
                                <li>・生産国：中国</li>
                            </ul>
                        </td>
                        <td id="care" style="display:none;" class="border border-gray-200 p-8 bg-gray-100" colspan="3" rowspan="3">
                            水かぬるま湯で手洗いを行った後、直射日光が当たる場所を避けて、風通しの良い日陰で
                            形を整えて干してください。<br>保管も直射日光が当たる場所は避けて湿度が高くなく、風通
                            しの良い場所で保管してください。<br>（汚れが気になる場合は中性洗剤を使用してください。)
                        </td>
                        <td id="delivery" style="display:none;" class="hidden border border-gray-200 p-8 bg-gray-200" colspan="3" rowspan="3">
                            <ul>
                                <li>・配送料は無料です。</li>
                                <li>・平日14時30分までのご注文で最短翌日出荷いたします。</li>
                                <li>・土日・祝日のご注文は、翌営業日に出荷いたします。</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <section class="w-full pt-20">
                <div class="w-full text-center">
                    <p class="text-2xl font-medium">Related</p>
                    <h3 class="text-xs">関連商品</h3>
                </div>
                <div class="max-w-5xl" style="margin:0 auto;">
                    <a href="<?php echo home_url(); ?>/sportsjog">
                        <div class="inline-block w-44 mt-9 ml-9">
                            <div class="w-full">
                                <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/images/sportsjog/1.jpg">
                            </div>
                            <ul>
                                <li class="mt-1 text-gray-300">スポーツ足袋</li>
                                <li class="font-bold">スポーツジョグⅡ</li>
                                <li>￥5090</li>
                            </ul>
                        </div>
                    </a>
                    <a href="<?php echo home_url(); ?>/sportsjog-air">
                        <div class="inline-block w-44 mt-9 ml-9">
                            <div class="w-full">
                                <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/images/sportsair/1.jpg">
                            </div>
                            <ul>
                                <li class="mt-1 text-gray-300">スポーツ足袋</li>
                                <li class="font-bold">スポーツジョグAIR</li>
                                <li>￥6930</li>
                            </ul>
                        </div>
                    </a>
                    <a href="<?php echo home_url(); ?>/hitoe">
                        <div class="inline-block w-44 mt-9 ml-9">
                            <div class="w-full">
                                <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/images/hitoe/1.jpg">
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
        </div>
        <div class="w-80"><!-- 右側 -->
            <div><!-- 名前 値段 -->
                <h1 class="font-bold text-2xl pt-10">スポーツジョグⅢ</h1>
                <h3 class="font-black text-xl pt-20">¥8,800</h3>
                <p class="pt-5">カラー/ネイビー 画像のサイズ/22.5</p>
                <div class="pt-10">
                理想的な歩き方とされる「あおり歩行」を自然に促すアウトソール設計を用いて開発されたトレーニングシューズ。<br>
                クッションはスムーズな体重移動を促す最適なヒール高であり、インソールは長時間歩行も快適な低反発クッションを採用。<br>
                <span class="text-red-500">ジョギングやランニング<br>足袋型トレーニングシューズの初心者の方向け！</span>
                </div>
            </div>
            <div class="flex justify-between pt-20">
                <a class="hover:scale-125" href="https://sportstabi.base.shop/items/69019862"><div class="w-16"><img src="<?php echo get_template_directory_uri(); ?>/images/sportsjog3/1.jpg"></div></a>
                <a class="hover:scale-125" href="https://sportstabi.base.shop/items/69019901"><div class="w-16"><img src="<?php echo get_template_directory_uri(); ?>/images/sportsjog3/7.jpg"></div></a>
                <a class="hover:scale-125" href="https://sportstabi.base.shop/items/69019947"><div class="w-16"><img src="<?php echo get_template_directory_uri(); ?>/images/sportsjog3/8.jpg"></div></a>
            </div>
            <div class="pt-20"><!-- サイズ一覧 -->
                <table class="border border-gray-200 w-full">
                    <tr>
                        <th colspan="2" class="border border-gray-200 p-3">サイズ表</th>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/23
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100"><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/23.5
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100" ><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/24
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100" ><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/24.5
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100" ><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/25
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100" ><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/25.5
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100" ><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/26
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100" ><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/26.5
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100" ><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/27
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100" ><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/28
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100" ><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                    <tr>
                        <td class="pl-5 py-3 border border-gray-200">ネイビー/29
                        </td><td class="p-3 border border-gray-200 hover:bg-blue-100" ><a  href="https://sportstabi.base.shop/">詳細を見る</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>