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
                <h2><a href="/welcome/catalog/15">化纤</a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/16">粘胶</a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/17">导电塑料</a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/18">太阳能</a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/19">电子</a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/1110">玻璃</a></h2>
            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/1111">医药</a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/1112">冶金</a></h2>

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
              姓名:<br/>
                <input  name="name"  type="text"  />
            </li>
             <li>
              单位:<br/>
                 <input name="address"  type="text"  />
             </li>

             <li>
               电话:<br/>
                 <input    name="phone"  type="text"  />
            </li>
             <li>
               邮件:<br/>
                 <input  name="email"  type="text"  />
             </li>
             <li>
               信息:<br/>
                 <textarea  name="company" ></textarea>
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