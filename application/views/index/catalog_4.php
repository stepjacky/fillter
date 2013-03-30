<link href="/resources/styles/secondary.css" rel="stylesheet" type="text/css" />
<div class="main">

<div class="cont">
    <h1><?=lang('s4')?>→<?=$tree['pName']?></h1>
    <div class="cont_dx"></div>

    <!--产品列表-->
    <div class="left_list">
        <div class="menu">

            <div class="item">
                <h2><?=lang('s4')?></h2>
                <ol>
                    <li><a href="/welcome/catalog/41"><?=lang('s41')?></a></li>
                    <li><a href="/welcome/catalog/42"><?=lang('s42')?></a></li>
                    <li><a href="/welcome/catalog/43#"><?=lang('s43')?></a></li>
                    <li><a href="/welcome/catalog/44"><?=lang('s44')?></a></li>
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