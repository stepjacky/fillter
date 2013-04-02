<link href="/resources/styles/secondary.css" rel="stylesheet" type="text/css" />
<div class="main">
<div class="cont">
    <h1><?=lang('s6')?></h1>
    <div class="cont_dx"></div>

    <!--产品列表-->
    <div class="left_list">
        <div class="menu">

            <div class="item">
                <h2><a href="/welcome/catalog/61"><?=lang('s6')?></a></h2>
                <ol>
                    <li><a href="/welcome/catalog/61"><?=lang('s61')?></a></li>
                    <li><a href="/welcome/catalog/62"><?=lang('s62')?></a></li>
                    <li><a href="/welcome/catalog/63"><?=lang('s63')?></a></li>

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