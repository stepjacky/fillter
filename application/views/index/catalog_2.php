<link href="/resources/styles/secondary.css" rel="stylesheet" type="text/css" />
<div class="main">
<div class="cont">
    <h1>产品信息→<?=$tree['pName']?></h1>
    <div class="cont_dx"></div>

    <!--产品列表-->
    <div class="left_list">
        <div class="menu">

            <div class="item">
                <h2>金属纤维</h2>
                <ol>
                    <li><a href="/welcome/catalog/211">不锈钢纤维</a></li>
                    <li><a href="/welcome/catalog/212">铁烙铝纤维</a></li>
                    <li><a href="/welcome/catalog/213">镍纤维</a></li>
                    <li><a href="/welcome/catalog/214">哈氏合金纤维</a></li>
                    <li><a href="/welcome/catalog/215">锆纤维</a></li>
                    <li><a href="/welcome/catalog/216">压花纤维</a></li>

                </ol>
            </div>

            <div class="item">
                <h2>纤维毡</h2>
                <ol>
                    <li><a href="/welcome/catalog/221">不锈钢纤维烧结毡</a></li>
                    <li><a href="/welcome/catalog/222">铁铬铝纤维烧结毡</a></li>
                    <li><a href="/welcome/catalog/223">非烧结毡</a></li>
                    <li><a href="/welcome/catalog/224">针刺毡</a></li>
                    <li><a href="/welcome/catalog/225">水刺毡</a></li>

                </ol>
            </div>

            <div class="item">
                <h2>多层金属烧结网</h2>
                <ol>
                    <li><a href="/welcome/catalog/231">五层金属烧结网</a></li>

                </ol>
            </div>
            <div class="item">
                <h2>金属纤维制品</h2>
                <ol>
                    <li><a href="/welcome/catalog/241">金属纤维毡制作的滤芯</a></li>
                    <li><a href="/welcome/catalog/242">多层金属烧结网制作的滤芯</a></li>
                    <li><a href="/welcome/catalog/243">过滤碟片</a></li>
                    <li><a href="/welcome/catalog/244">高温气体除尘滤袋</a></li>
                    <li><a href="/welcome/catalog/245">太阳能回热器网芯</a></li>
                    <li><a href="/welcome/catalog/246">多层网片式过滤器</a></li>
                    <li><a href="/welcome/catalog/247">燃烧用编织网</a></li>
                </ol>
            </div>
        </div>
    </div>

    <!--产品列表-->

    <!--内容详情-->
    <div class="list_detail">
        <?=$tree['content']?>

    </div>
    <!--内容详情-->


    <!--联系方式-->
    <div class="contact">
        <h1>联系方式</h1>
        <ul>
            <li>地址:中国西安经济技术开发区泾渭工业园西金路15号</li>
            <li>邮编：710201</li>
            <li>电话：029-86968425  029-86968420</li>
            <li>传真：029-86968425  029-86968420</li>
            <li>E-MAIL:xianfilter@gmail.com（销售）</li>
            <li>xianfilter@gmail.com（技术支持）</li>
            <li>Website: www.c-frt.com</li>


        </ul>
        <h1>简易联系框</h1>
        <form id="cform">
            <ul class="contact-box">
                <li>
                    邮件:<input  name="email"  type="text"  />
                </li>
                <li>
                    电话:<input    name="phone"  type="text"  />
                </li>
                <li>
                    公司:<input  name="company"  type="text"  />
                </li>
                <li>
                    地址:<input  name="address"  type="text"  />
                </li>
                <li>
                    <a href="#" onclick="contactMe('cform')">
                        <img  src="/resources/images/common/contact.png"   />
                    </a>
                </li>

            </ul>
        </form>
    </div>
    <!--联系方式-->

</div>
</div>

<script type="text/javascript" src="/resources/scripts/index/catalog.js"></script>