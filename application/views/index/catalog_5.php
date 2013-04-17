<link href="/resources/styles/secondary.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/resources/styles/index/index-<?=lang('style-local')?>.css" media="screen,print"/>
<div class="main">
<div class="cont">
    <h1><?=lang('s5')?></h1>
    <div class="cont_dx"></div>

    <!--产品列表-->
    <div class="left_list">
        <div class="menu">

            <div class="item">
                <h2><a href="/welcome/catalog/51"><?=lang('s5')?></a></h2>
                <ol>
                    <li><a href="/welcome/catalog/51"><?=lang('s51')?></a></li>
                    <li><a href="/welcome/catalog/52"><?=lang('s52')?></a></li>
                    <li><a href="/welcome/catalog/53"><?=lang('s53')?></a></li>
                    <li><a href="/welcome/catalog/54"><?=lang('s54')?></a></li>
                    <li><a href="/welcome/catalog/55"><?=lang('s55')?></a></li>
                    <li><a href="/welcome/catalog/561"><?=lang('s56')?></a></li>
                   
                    <!--<li><a href="/welcome/catalog/57"><?/*=lang('s57')*/?></a></li>-->

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