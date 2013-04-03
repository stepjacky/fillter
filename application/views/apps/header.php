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
                    <li><?=lang('cn-flag')?></li>
                    <li><a href="javascript:set_lang('zh-cn');">

                            <img src='/resources/images/menu/cn.png' /></a></li>
                    <li><?=lang('en-flag')?></li>
                    <li><a href="javascript:set_lang('en-us');">

                            <img src='/resources/images/menu/us.png' /></a></li>
                    <li> <?=lang('de-flag')?></li>
                    <li><a href="javascript:set_lang('de-de');">

                            <img src='/resources/images/menu/de.png' /></a></li>
                    <li><?=lang('fr-flag')?></li>
                    <li><a href="javascript:set_lang('fr-fr');">

                            <img src='/resources/images/menu/fr.png' /></a></li>
                    <li> <?=lang('ja-flag')?></li>
                    <li><a href="javascript:set_lang('ja');">

                            <img src='/resources/images/menu/ja.png' /></a></li>

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