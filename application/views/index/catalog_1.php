<link href="/resources/styles/secondary.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/resources/styles/index/index-<?=lang('style-local')?>.css" media="screen,print"/>
<div class="main">
<div class="cont">
    <h1>
        <?=lang('s1')?>
        →<?=$tree['pName']?></h1>
    <div class="cont_dx"></div>
    <!--产品列表-->
    <div class="left_list">
        <div class="menu">

            <div class="item">
                <h2><a href="/welcome/catalog/111"> <?=lang('s11')?></a></h2>
                <ol>
                    <li><a href="/welcome/catalog/111"> <?=lang('s111')?></a></li>
                    <li><a href="/welcome/catalog/112"> <?=lang('s112')?></a></li>

                </ol>
            </div>

            <div class="item">
                <h2><a href="/welcome/catalog/121"> <?=lang('s12')?></a></h2>
                <ol>
                    <li><a href="/welcome/catalog/121"> <?=lang('s121')?></a></li>
                    <li><a href="/welcome/catalog/122"> <?=lang('s122')?></a></li>
                    <li><a href="/welcome/catalog/123"> <?=lang('s123')?></a></li>

                </ol>
            </div>

            <div class="item">
                <h2><a href="/welcome/catalog/131"> <?=lang('s13')?></a></h2>
                <ol>
                    <li><a href="/welcome/catalog/131"> <?=lang('s131')?></a></li>
                    <li><a href="/welcome/catalog/132"> <?=lang('s132')?></a></li>
                </ol>
            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/141"> <?=lang('s14')?></a></h2>
                <ol>
                    <li><a href="/welcome/catalog/141"> <?=lang('s141')?></a></li>
                    <li><a href="/welcome/catalog/142"> <?=lang('s142')?></a></li>
                </ol>
            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/15"> <?=lang('s15')?></a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/16"> <?=lang('s16')?></a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/17"> <?=lang('s17')?></a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/18"> <?=lang('s18')?></a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/19"> <?=lang('s19')?></a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/1110"> <?=lang('s1110')?></a></h2>
            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/1111"> <?=lang('s1111')?></a></h2>

            </div>
            <div class="item">
                <h2><a href="/welcome/catalog/1112"> <?=lang('s1112')?></a></h2>

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
        <h1> <?=lang('s6')?></h1>
        <?=lang('contact-details')?>

        <h1><?=lang('contact-title')?></h1>
          <form id="cform">
            <ul class="contact-box">
            <li>
                <?=lang('contact-user')?>:<br/>
                <input  name="name"  type="text"  />
            </li>
             <li>
                 <?=lang('contact-unit')?>:<br/>
                 <input name="address"  type="text"  />
             </li>

             <li>
                 <?=lang('contact-phone')?>:<br/>
                 <input    name="phone"  type="text"  />
            </li>
             <li>
                 <?=lang('contact-email')?>:<br/>
                 <input  name="email"  type="text"  />
             </li>
             <li>
                 <?=lang('contact-message')?>:<br/>
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