<link href="/resources/styles/secondary.css" rel="stylesheet" type="text/css" />
<div class="main">

<div class="cont">
    <h1>技术研发→<?=$tree['pName']?></h1>
    <div class="cont_dx"></div>

    <!--产品列表-->
    <div class="left_list">
        <div class="menu">

            <div class="item">
                <h2>研发平台</h2>
                <ol>
                    <li><a href="/welcome/catalog/311">多孔材料国家实验室</a></li>
                    <li><a href="/welcome/catalog/312">国家实验室认可的理化检测中心</a></li>
                    <li><a href="/welcome/catalog/313">公司市级技术中心</a></li>

                </ol>
            </div>

            <div class="item">
                <h2>拥有技术</h2>
                <ol>
                    <li><a href="/welcome/catalog/321">金属纤维技术</a></li>
                    <li><a href="/welcome/catalog/322">金属纤维毡技术</a></li>
                    <li><a href="/welcome/catalog/323">金属烧结网技术</a></li>
                    <li><a href="/welcome/catalog/324">各种滤器的设计及加工技术</a></li>

                </ol>
            </div>

            <div class="item">
                <h2>研发项目、课题及专利</h2>
                <ol>
                    <li><a href="/welcome/catalog/331">重点研发项目</a></li>
                    <li><a href="/welcome/catalog/332">重点研发课题</a></li>
                    <li><a href="/welcome/catalog/333">专利</a></li>
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