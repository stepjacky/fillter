<link href="/resources/styles/secondary.css" rel="stylesheet" type="text/css" />
<div class="main">
<div class="cont">
    <h1><?=lang('s2')?>→<?=$tree['pName']?></h1>
    <div class="cont_dx"></div>

    <!--产品列表-->
    <div class="left_list">
        <div class="menu">

            <div class="item">
                <h2><?=lang('s21')?></h2>
                <ol>
                    <li><a href="/welcome/catalog/211"><?=lang('s211')?></a></li>
                    <li><a href="/welcome/catalog/212"><?=lang('s212')?></a></li>
                    <li><a href="/welcome/catalog/213"><?=lang('s213')?></a></li>
                    <li><a href="/welcome/catalog/214"><?=lang('s214')?></a></li>
                    <li><a href="/welcome/catalog/215"><?=lang('s215')?></a></li>
                    <li><a href="/welcome/catalog/216"><?=lang('s216')?></a></li>

                </ol>
            </div>

            <div class="item">
                <h2><?=lang('s22')?></h2>
                <ol>
                    <li><a href="/welcome/catalog/221"><?=lang('s221')?></a></li>
                    <li><a href="/welcome/catalog/222"><?=lang('s222')?></a></li>
                    <li><a href="/welcome/catalog/223"><?=lang('s223')?></a></li>
                    <li><a href="/welcome/catalog/224"><?=lang('s224')?></a></li>
                    <li><a href="/welcome/catalog/225"><?=lang('s225')?></a></li>

                </ol>
            </div>

            <div class="item">
                <h2><?=lang('s23')?></h2>
                <ol>
                    <li><a href="/welcome/catalog/231"><?=lang('s231')?></a></li>

                </ol>
            </div>
            <div class="item">
                <h2><?=lang('s24')?></h2>
                <ol>
                    <li><a href="/welcome/catalog/241"><?=lang('s241')?></a></li>
                    <li><a href="/welcome/catalog/242"><?=lang('s242')?></a></li>
                    <li><a href="/welcome/catalog/243"><?=lang('s243')?></a></li>
                    <li><a href="/welcome/catalog/244"><?=lang('s244')?></a></li>
                    <li><a href="/welcome/catalog/245"><?=lang('s245')?></a></li>
                    <li><a href="/welcome/catalog/246"><?=lang('s246')?></a></li>
                    <li><a href="/welcome/catalog/247"><?=lang('s247')?></a></li>
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