<style type="text/css">

    <!--搜索页面-->
    .sch{ width:900px; overflow:hidden; min-height:750px; height: auto; margin:0 auto}
    .sch h1{font-family:"font-family:'Microsoft Yahei',Tahoma, Geneva, sans-serif";font-size:16px;color:#0f6f0f; font-weight:bold; padding-left:10px; padding-right:10px; padding-top:10px;line-height:30px;}
    .sch ul li{font-family:"font-family:'Microsoft Yahei',Tahoma, Geneva, sans-serif";font-size:14px;color:#333333; padding-top:10px; padding-left:10px; padding-right:10px; line-height:20px; list-style:square; margin-left:40px; *margin-left:20px;}
    <!--搜索页面-->

</style>

<!--二级页面内容-->
<div class="main">
    <h1>当前位置：首页 > 站内搜索</h1>
    <div class="cont_dx"></div>

    <!--内容详情-->
    <div class="sch">
        <h1>搜索 <?=$key?>  结果共<?=count($list)?>条 </h1>
        <ul>

           <?php foreach ($list as $lst):?>
              <li>
                <a href="/welcome/catalog/<?=$lst['aid']?>" target="_blank">
                  <?=$lst['name']?>
                </a>
              </li>
           <?php endforeach;?>


        </ul>
    </div>
</div>

    <!--内容详情-->

