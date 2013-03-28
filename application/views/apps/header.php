<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=8" />

    <title>
        <?=lang('site_name')?>

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="/resources/jquery-1.8.2.js"></script>


    <link href="/resources/styles/index.css" rel="stylesheet" type="text/css"/>

    <link href="/resources/globle_cn.css" rel="stylesheet" type="text/css"/>
    <link href="/resources/globle_cn_ie6.css" rel="stylesheet" type="text/css"/>



</head>
<body>
<div id="header">
    <div class="bound">
        <div class="header_bg">
            <div class="logo">
              <a href="/">
                <img src="/resources/images/common/logo.png"  class="fix" /></div>
            </a>
            <div class="header_info">
                <ul style="float: right">
                    <li><a href="javascript:set_lang('zh-cn');"><img src='/resources/images/menu/cn.png' style="vertical-align: middle;"></a></li>
                    <li><a href="javascript:set_lang('en-us');"><img src='/resources/images/menu/us.png' style="vertical-align: middle;"/></a></li>
                    <li><a href="javascript:set_lang('de-de');"><img src='/resources/images/menu/de.png' style="vertical-align: middle;"/></a></li>
                    <li><a href="javascript:set_lang('fr-fr');"><img src='/resources/images/menu/fr.png' style="vertical-align: middle;"/></a></li>
                    <li><a href="javascript:set_lang('ja');"><img src='/resources/images/menu/ja.png' style="vertical-align: middle;"/></a></li>

                    <li><input id="s" type="text" class="search" /></li>
                    <li><input name="butn" type="button" onclick="search('s')"  class="search_ico" /></li>


                </ul>
            </div>
        </div>
    </div>
</div>
<form action="/welcome/changelang/" id='lform' target="_self"></form>
<form action="/welcome/search" id='sform'  target="_self"></form>
<script type="text/javascript">
    function set_lang(lang){
         var  lform = document.getElementById('lform');
         lform.action = '/welcome/changelang/'+lang;
         lform.submit();

    }

    function search(id){
        var stxt = $("#"+id).val();
        var  sfrom = document.getElementById('sform');
        sfrom.action = '/welcome/search/'+stxt;
        sfrom.submit();
    }

</script>



<div id="menu">
<div class="nav">
<ul>
<li is="menuindex">

    <a class="trad" href="javascript:void(0);" iblk="应用领域"><span>应用领域</span></a>
    <div class="menuitempanel" style="display: none;">
        <div class="menucontentdiv">
            <div class="menufillet_e"></div>
            <div class="trad clearfix">
                <ul class="list">



                    <h2><a href="/welcome/catalog/111">纺织</a></h2>
                    <h2><a href="/welcome/catalog/15">化纤</a></h2>
                    <h2><a href="/welcome/catalog/16">粘胶</a></h2>

                </ul>

                <ul class="list">
                    <h2><a href="/welcome/catalog/121">汽车</a></h2>
                    <h2><a href="/welcome/catalog/18">太阳能</a></h2>
                    <h2><a href="/welcome/catalog/19">电子</a></h2>
                </ul>
                <ul class="list">
                    <h2><a href="/welcome/catalog/131">设备</a></h2>
                    <h2><a href="/welcome/catalog/1111">玻璃</a></h2>
                    <h2><a href="/welcome/catalog/17">导电塑料</a></h2>
                </ul>

                <ul class="list last">
                    <h2><a href="/welcome/catalog/14">化工</a></h2>
                    <h2><a href="/welcome/catalog/1111">医药</a></h2>
                    <h2><a href="/welcome/catalog/1112">冶金</a></h2>
                </ul>

                <div class="verticalLine" style="height: 215px;"></div>

                <ul class="m_box">
                    <li><a href="#">
                            <img width="142" height="189" src="/resources/images/menu/1.jpg"></a></li>

                </ul>

            </div>
            <div class="shadow_b_layout"><div></div></div>
        </div>
    </div>
</li>

<li is="menuindex">
    <a class="trad" href="javascript:void(0);" iblk="产品信息"><span>产品信息</span></a>
    <div class="menuitempanel" style="display: none;">
        <div class="menucontentdiv">
            <div class="menufillet_e"></div>
            <div class="trad clearfix">


                <ul class="list ">

                            <h2><a target="_blank" href="/welcome/catalog/21">金属纤维</a></h2>
                            <li><a target="_blank" href="/welcome/catalog/211">不锈钢纤维</a></li>
                            <li><a target="_blank" href="/welcome/catalog/212">铁烙铝纤维</a></li>
                            <li><a target="_blank" href="/welcome/catalog/213">镍纤维</a></li>
                            <li><a target="_blank" href="/welcome/catalog/214">哈氏合金纤维</a></li>
                            <li><a target="_blank" href="/welcome/catalog/215">锆纤维</a></li>
                            <li><a target="_blank" href="/welcome/catalog/216">压花纤维</a></li>

                </ul>

                        <ul class="list">
                            <h2><a target="_blank" href="/welcome/catalog/22">纤维毡</a></h2>
                            <li><a target="_blank" href="/welcome/catalog/221">不锈钢纤维烧结毡</a></li>
                            <li><a target="_blank" href="/welcome/catalog/222">铁铬铝纤维烧结毡</a></li>
                            <li><a target="_blank" href="/welcome/catalog/223">非烧结毡</a></li>
                            <li><a target="_blank" href="/welcome/catalog/224">针刺毡</a></li>
                            <li><a target="_blank" href="/welcome/catalog/225">水刺毡</a></li>



                        </ul>



                        <ul class="list">
                            <h2><a target="_blank" href="/welcome/catalog/23">烧结网</a></h2>
                            <li><a target="_blank" href="/welcome/catalog/231">多层金属烧结网</a></li>
                            <li><a target="_blank" href="/welcome/catalog/232">五层金属烧结网</a></li>

                        </ul>


                        <ul class="list">
                            <h2><a target="_blank" href="/welcome/catalog/24">金属纤维制品</a></h2>
                            <li><a target="_blank" href="/welcome/catalog/241">金属纤维毡制作的滤芯</a></li>
                            <li><a target="_blank" href="/welcome/catalog/242">多层金属烧结网制作的滤芯</a></li>
                            <li><a target="_blank" href="/welcome/catalog/243">过滤碟片</a></li>
                            <li><a target="_blank" href="/welcome/catalog/244">高温气体除尘滤袋</a></li>
                            <li><a target="_blank" href="/welcome/catalog/245">太阳能回热器网芯</a></li>
                            <li><a target="_blank" href="/welcome/catalog/246">多层网片式过滤器</a></li>
                            <li><a target="_blank" href="/welcome/catalog/247">燃烧用编织网</a></li>
                        </ul>

                <div class="verticalLine" style="height: 215px;"></div>

                <ul class="m_box">
                    <li><a href=""><img width="142" height="189" src="/resources/images/menu/2.jpg"></a></li>

                </ul>

            </div>
            <div class="shadow_b_layout"><div></div></div>
        </div>
    </div>
</li>


<li is="menuindex">

    <a class="trad" href="javascript:void(0);" iblk="技术研发"><span>技术研发</span></a>
    <div class="menuitempanel" style="display: none;">
        <div class="menucontentdiv">
            <div class="menufillet_e"></div>
            <div class="trad clearfix">

                <ul class="list ">

                    <h2><a target="_blank" href="/welcome/catalog/31">研发平台</a></h2>
                    <li><a target="_blank" href="/welcome/catalog/311">多孔材料国家实验室</a></li>
                    <li><a target="_blank" href="/welcome/catalog/312">国家实验室认可的理化检测中心</a></li>
                    <li><a target="_blank" href="/welcome/catalog/313">公司市级技术中心</a></li>


                </ul>

                <ul class="list">
                    <h2><a target="_blank" href="/welcome/catalog/32">拥有技术</a></h2>
                    <li><a target="_blank" href="/welcome/catalog/321">金属纤维技术</a></li>
                    <li><a target="_blank" href="/welcome/catalog/322">金属纤维毡技术</a></li>
                    <li><a target="_blank" href="/welcome/catalog/323">金属烧结网技术</a></li>
                    <li><a target="_blank" href="/welcome/catalog/324">各种滤器的设计及加工技术</a></li>


                </ul>



                <ul class="list">
                    <h2><a target="_blank" href="/welcome/catalog/33">研发项目和课题</a></h2>
                    <li><a target="_blank" href="/welcome/catalog/331">金属纤维研发</a></li>
                    <li><a target="_blank" href="/welcome/catalog/332">金属纤维毡研发</a></li>
                    <li><a target="_blank" href="/welcome/catalog/333">金属烧结网研发</a></li>

                </ul>

                <div class="verticalLine" style="height: 215px;"></div>

                <ul class="m_box">
                    <li><a href=""><img width="142" height="189" src="/resources/images/menu/3.jpg"></a></li>

                </ul>

            </div>
            <div class="shadow_b_layout"><div></div></div>
        </div>
    </div>
</li>


<li is="menuindex">
    <a class="about_huawei" href="javascript:void(0);" iblk="质量控制"><span>质量控制</span></a>
    <div class="menuitempanel" style="display: none;">
        <div class="menucontentdiv">
            <div class="menufillet_e"></div>
            <div class="trad clearfix">

                <ul class="list">
                    <h2><a href="/welcome/catalog/41">质量方针</a></h2>


                </ul>

                <ul class="list">
                    <h2><a href="/welcome/catalog/42">ISO 9000质量管理体系</a></h2>


                </ul>
                <ul class="list">
                    <h2><a href="/welcome/catalog/43">严格分析检测体系</a></h2>

                </ul>
                <ul class="list last">
                    <h2><a href="/welcome/catalog/44">严格过程控制</a></h2>
                </ul>

                <div class="verticalLine" style="height: 215px;"></div>

                <ul class="m_box">
                    <li><a href=""><img width="142" height="189" src="/resources/images/menu/4.jpg"></a></li>

                </ul>

            </div>
            <div class="shadow_b_layout"><div></div></div>
        </div>
    </div>

</li>


<li is="menuindex">
    <a class="about_huawei" href="javascript:void(0);" iblk="公司概况"><span>公司概况</span></a>
    <div class="menuitempanel" style="display: none;">
        <div class="menucontentdiv">
            <div class="menufillet_e"></div>
            <div class="trad clearfix">

                <ul class="list">
                    <h2><a href="/welcome/catalog/51">公司简介</a></h2>
                    <h2><a href="/welcome/catalog/52">发展历程</a></h2>

                </ul>

                <ul class="list">
                    <h2><a href="/welcome/catalog/53">企业文化</a></h2>
                    <h2><a href="/welcome/catalog/54">企业荣誉</a></h2>


                </ul>
                <ul class="list">
                    <h2><a href="/welcome/catalog/55">领导关怀</a></h2>
                    <h2><a href="/welcome/catalog/56">社会责任</a></h2>


                </ul>
                <ul class="list last">
                    <h2><a href="/welcome/catalog/57">企业宣传册</a></h2>
                </ul>

                <div class="verticalLine" style="height: 215px;"></div>

                <ul class="m_box">
                    <li><a href=""><img width="142" height="189" src="/resources/images/menu/5.jpg"></a></li>

                 </ul>

            </div>
            <div class="shadow_b_layout"><div></div></div>
        </div>
    </div>
</li>
</ul>
</div>
</div>

