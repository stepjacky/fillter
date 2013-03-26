<link href="/resources/styles/secondary.css" rel="stylesheet" type="text/css" />
<div class="main">
<div class="cont">
    <h1>应用领域→<?=$tree['pName']?></h1>
    <div class="cont_dx"></div>
    <!--产品列表-->
    <div class="left_list">
        <div class="menu">

            <div class="item">
                <h2>纺织</h2>
                <ol>
                    <li><a href="/welcome/catalog/111">纯金属纤维线</a></li>
                    <li><a href="/welcome/catalog/112">金色纤维混纺纱</a></li>

                </ol>
            </div>

            <div class="item">
                <h2>汽车</h2>
                <ol>
                    <li><a href="/welcome/catalog/121">柴油机尾气过滤</a></li>
                    <li><a href="/welcome/catalog/122">汽车座椅加热</a></li>
                    <li><a href="/welcome/catalog/123">汽车安全气囊</a></li>

                </ol>
            </div>

            <div class="item">
                <h2>设备</h2>
                <ol>
                    <li><a href="/welcome/catalog/131">燃烧器</a></li>
                    <li><a href="/welcome/catalog/132">喷墨打印机</a></li>
                </ol>
            </div>
            <div class="item">
                <h2>化工</h2>
                <ol>
                    <li><a href="/welcome/catalog/141">煤化工</a></li>
                    <li><a href="/welcome/catalog/142">稠化器</a></li>
                </ol>
            </div>
            <div class="item">
                <h2>化纤</h2>
                <ol>
                    <li><a href="/welcome/catalog/15">化纤</a></li>

                </ol>
            </div>
            <div class="item">
                <h2>粘胶</h2>
                <ol>
                    <li><a href="/welcome/catalog/16">粘胶</a></li>

                </ol>
            </div>
            <div class="item">
                <h2>导电塑料</h2>
                <ol>
                    <li><a href="/welcome/catalog/17">导电塑料</a></li>

                </ol>
            </div>
            <div class="item">
                <h2>太阳能</h2>
                <ol>
                    <li><a href="/welcome/catalog/18">太阳能</a></li>

                </ol>
            </div>
            <div class="item">
                <h2>电子</h2>
                <ol>
                    <li><a href="/welcome/catalog/19">电子</a></li>

                </ol>
            </div>
            <div class="item">
                <h2>玻璃</h2>
                <ol>
                    <li><a href="/welcome/catalog/1110">玻璃</a></li>

                </ol>
            </div>
            <div class="item">
                <h2>医药</h2>
                <ol>
                    <li><a href="/welcome/catalog/1111">医药</a></li>

                </ol>
            </div>
            <div class="item">
                <h2>冶金</h2>
                <ol>
                    <li><a href="/welcome/catalog/1112">冶金</a></li>

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