<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
    .yg9_content{padding:0px;font-size: 14px;}
    .yg9_content>li{padding-left: 0px;}
    .yg9_content>li:nth-child(2)>.col-md-12{
        border:1px solid #eee;
    }
    .gkfour,.gkthree{
        padding: 8px 0px;
        border:1px solid #eee;
    }
    .gkfour{margin-top: 10px;}
    
    .vipbanner{padding:0px;}
    .vipbox{
        background-color: white;
        box-shadow: 0px 0px 8px rgba(0,0,0,0.1);
        border-radius: 6px;
        overflow: hidden;
    }
    .vipbig1{padding-left: 0px;} 
    .vipbig2{padding-right: 0px;}
    .vipcontent{
        border-bottom: 1px solid #E4EAEC;
        height: 60px;
        line-height: 60px;
        padding:0px;
    }  
    .vipright{float: right;}
    .vipleft{float: left;}
    .vipleft>img{
        width: 20px;
        height: 20px;
    }
    .vipadd{
        height: 210px;
        text-align: center;
    }
    .vipadd>li{
        padding-top: 50px;
    }
    .font1{font-size: 30px;color: #333;}
    .font2{font-size: 15px;color: #666;margin-top: 15px;}
    .vipsell{padding:0px;}
    .vipsell>li:nth-child(1){padding-left: 0px;}
    .vipsell>li:nth-child(2){padding-right: 0px;}
    .vipsell{
        height: 210px;
        padding: 25px 0px;
    }
    .vipsell>li{height: 100%;}
    .vipsell>li>div{
        background-color: #F7F7F7;
        height: 100%;
        border-radius: 6px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .xuni{color: #666;text-align: center;}
    .xuni>span{color: #ff6363;}
    .viptitle{
        color: #333;
        border-bottom:1px solid #DEDEDE;
        padding-bottom: 15px;
        margin-bottom: 20px;
        text-align: center;
        width: 50%;
        font-size: 16px;
    }
    .botul{
        display: flex;
    }
    .botul>li{
        width: 13%;
        margin-right: 1.5%;
        height: 190px;
        background-color: white;
        padding: 50px 0px;
    }
    .botul>li:last-child{
        margin-right:0px;
        box-shadow: 0px 0px 8px rgba(0,0,0,0.1);
    }
    .boxcon{
        width: 100%;
        height: 100%;
        text-align: center;
    }
    .boxcon>img{
        margin-bottom: 10px;
        width: 55px;
        height: 55px;
    }
    .bfont1{
        color: #666;
        font-size: 15px;
        margin-bottom: 5px;
    }
    .bfont2{
        color: #ED5D5D;
        font-size: 20px;
    }
    .gkbackimg,.backimg{text-align: center;}
    .backimg>img{
        width: 31px;
        height: 35px;
        margin-top: 17px;
    }
    .gkbackimg>img{
        width: 31px;
        height: 35px;
        margin-top: 20px;
    }
    .datanum{line-height: 23px;}
    .datanum2{line-height: 35px;font-size: 15px;text-align: center;}
    .datanum3{padding: 15px 15px 0px;border:1px solid #eee;}
    .tmoney{font-size: 26px;text-align: center;}
    .today{font-size: 14px;text-align: center;cursor: pointer;}    
    .todaybox2,.todaybox3,.todaybox4,.todaybox1{position: absolute;left: -10%;top: -22px;z-index: 10;width: 200px;height: 65px;padding: 10px;
        background-color: rgba(0,0,0,0.7);border-radius: 6px;color: white;font-size: 12px;text-indent: 1em;display: none;}
    .arrow-down{width: 0;height: 0;border-bottom: 10px solid rgba(0,0,0,0.7);  border-left: 10px solid transparent;transform: rotate(45deg);
        position: absolute;left: 50%;top: 60px;
    }
    .gkborder{margin-top: 15px;}
    .gkborder2{margin-top: 16px;}
    .gkborder2,.gkborder{border-top: 1px solid #eee;padding: 20px 0px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;}
    .gkborder>li{padding: 10px 5px 10px 5px;text-align: center;}
    .gkborder2>li{padding: 9px 5px;text-align: center;}
    .gkborder2>li:nth-child(3),.gkborder>li:nth-child(1){border-right: 1px solid #eee;}
    .gkborder2>li:nth-child(1),.gkborder2>li:nth-child(2),.gkborder>li:nth-child(2){border-right: 1px solid #eee;}
    .gkfont1{line-height: 30px;font-weight: bold;}
    .gkfont2{line-height: 30px;font-size: 12px;}
    .gktitle{padding-left: 30px;font-size: 12px;}
    .ygxian{width: 3px;height: 17px;float:left;background-color: #44ABF7;margin-top: 6px;border:none;}
</style>
<div class="main">
    <div class="panel">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-12">
                    <span class="ygxian"></span>
                    <div class="col-md-1 gkfont2">今日收益</div>
                          <form action="" method="post" class="col-md-4">
                    <div class="col-md-4">
              
                        <div class="input-group" style="width: 100px">
                            <?php  echo tpl_form_field_daterange('time',array(),true);?>
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default" name="submit" value="查找"/>
                            </span>
                        </div>
                    </div>
                    <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
                    </form>
                    <div class="col-md-2 gkfont1">总平台统计报表</div>
                </div>
            </div>
        </div>
        <div class="panel-body">        
            <ul class="col-md-12 yg9_content" style="margin-bottom: 10px;">
                <li class="col-md-4">
                    <div class="col-md-12 datanum3">
                        <!-- <div class="col"></div> -->
                        <div class="col-md-6 backimg">
                            <img src="../addons/zh_dianc/template/images/xinxi1.png">
                        </div>
                        <div class="col-md-6 datanum2" style="padding: 0px;">
                            <div>今日平台总收入</div>
                            <div>¥&nbsp;<?php  if($total) { ?><?php  echo $total;?><?php  } else { ?>0.00<?php  } ?></div>
                        </div>
                    
                        <ul class="col-md-12 gkborder">
                            <li class="col-md-4">
                                <div>微信支付收入</div>
                                <div class="gkbold">¥&nbsp;<?php  if($wxtotal) { ?><?php  echo $wxtotal;?><?php  } else { ?>0.00<?php  } ?></div>
                            </li>
                            <li class="col-md-4">
                                <div>余额支付收入</div>
                                <div class="gkbold">¥&nbsp;<?php  if($yuetotal) { ?><?php  echo $yuetotal;?><?php  } else { ?>0.00<?php  } ?></div>
                            </li>
                            <li class="col-md-4">
                                <div>积分支付收入</div>
                                <div class="gkbold">¥&nbsp;<?php  if($jftotal) { ?><?php  echo $jftotal;?><?php  } else { ?>0.00<?php  } ?></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="col-md-12 datanum3">
                        <div class="col-md-6 backimg">
                            <img src="../addons/zh_dianc/template/images/xinxi2.png">
                        </div>
                        <div class="col-md-6 datanum2" style="padding: 0px;">
                            <div>今日已完成订单</div>
                            <div><?php  echo $total2;?></div>
                        </div>
                    
                        <ul class="col-md-12 gkborder2">
                            <li class="col-md-3">
                                <div>外卖订单数</div>
                                <div class="gkbold"><?php  echo count($wm2)?></div>
                            </li>
                            <li class="col-md-3">
                                <div>店内订单数</div>
                                <div class="gkbold"><?php  echo count($dn2)?></div>
                            </li>
                            <li class="col-md-3">
                                <div>预定订单数</div>
                                <div class="gkbold"><?php  echo count($yd2)?></div>
                            </li>
                            <li class="col-md-3">
                                <div>当面订单数</div>
                                <div class="gkbold"><?php  echo count($dm2)?></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="col-md-12 gkthree">
                        <div class="col-md-4 col-xs-3 gkbackimg">
                            <img src="../addons/zh_dianc/template/images/cz.png">
                        </div>
                        <div class="col-xs-8">
                            <p class="tmoney">¥&nbsp;<?php  if($cz) { ?><?php  echo $cz;?><?php  } else { ?>0.00<?php  } ?></p>
                            <p class="today jinri1">今日新增储值
                                <!-- <i class="fa fa-question-circle" aria-hidden="true"></i>
                                <div class="todaybox1">指来自外卖、店内、预约、优惠买单等业务中，状态为已完成的微信支付订单总金额
                                    <div class="arrow-down"></div>
                                </div>  -->                               
                            </p>                            
                        </div>
                    </div>
                    <div class="col-md-12 gkfour">
                        <div class="col-md-4 col-xs-3 gkbackimg">
                            <img src="../addons/zh_dianc/template/images/tk.png">
                        </div>
                        <div class="col-xs-8">
                            <p class="tmoney">¥&nbsp;<?php  if($tk) { ?><?php  echo $tk;?><?php  } else { ?>0.00<?php  } ?></p>
                            <p class="today jinri1">今日新增退款
                                <!-- <i class="fa fa-question-circle" aria-hidden="true"></i>
                                <div class="todaybox1">指来自外卖、店内、预约、优惠买单等业务中，状态为已完成的微信支付订单总金额
                                    <div class="arrow-down"></div>
                                </div>  -->                               
                            </p>                            
                        </div>
                    </div>
                </li>
            </ul>
        </div>        
    </div>
    <div class="panel panel-default">
        <div class="panel-heading gktitle">
            昨日收益
        </div>
        <div class="panel-body">        
            <ul class="col-md-12 yg9_content" style="margin-bottom: 10px;">
                <li class="col-md-4">
                    <div class="col-md-12 datanum3">
                        <div class="col-md-6 backimg">
                            <img src="../addons/zh_dianc/template/images/xinxi1.png">
                        </div>
                        <div class="col-md-6 datanum2" style="padding: 0px;">
                            <div>昨日平台总收入</div>
                            <div>¥&nbsp;<?php  if($zttotal) { ?><?php  echo $zttotal;?><?php  } else { ?>0.00<?php  } ?></div>
                        </div>
                    
                        <ul class="col-md-12 gkborder">
                            <li class="col-md-4">
                                <div>微信支付收入</div>
                                <div class="gkbold">¥&nbsp;<?php  if($wxzttotal) { ?><?php  echo $wxzttotal;?><?php  } else { ?>0.00<?php  } ?></div>
                            </li>
                            <li class="col-md-4">
                                <div>余额支付收入</div>
                                <div class="gkbold">¥&nbsp;<?php  if($yuezttotal) { ?><?php  echo $yuezttotal;?><?php  } else { ?>0.00<?php  } ?></div>
                            </li>
                            <li class="col-md-4">
                                <div>积分支付收入</div>
                                <div class="gkbold">¥&nbsp;<?php  if($jfzttotal) { ?><?php  echo $jfzttotal;?><?php  } else { ?>0.00<?php  } ?></div>
                            </li>
                        </ul>
                    </div>
                    
                </li>
                <li class="col-md-4">
                    <div class="col-md-12 datanum3">
                        <div class="col-md-6 backimg">
                            <img src="../addons/zh_dianc/template/images/xinxi2.png">
                        </div>
                        <div class="col-md-6 datanum2" style="padding: 0px;">
                            <div>昨日已完成订单</div>
                            <div><?php  echo $zttotal2;?></div>
                        </div>
                    
                        <ul class="col-md-12 gkborder2">
                            <li class="col-md-3">
                                <div>外卖订单数</div>
                                <div class="gkbold"><?php  echo count($ztwm2)?></div>
                            </li>
                            <li class="col-md-3">
                                <div>店内订单数</div>
                                <div class="gkbold"><?php  echo count($ztdn2)?></div>
                            </li>
                            <li class="col-md-3">
                                <div>预定订单数</div>
                                <div class="gkbold"><?php  echo count($ztyd2)?></div>
                            </li>
                            <li class="col-md-3">
                                <div>当面订单数</div>
                                <div class="gkbold"><?php  echo count($ztdm2)?></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="col-md-12 gkthree">
                        <div class="col-md-4 col-xs-3 gkbackimg">
                            <img src="../addons/zh_dianc/template/images/cz.png">
                        </div>
                        <div class="col-xs-8">
                            <p class="tmoney">¥&nbsp;<?php  if($ztcz) { ?><?php  echo $ztcz;?><?php  } else { ?>0.00<?php  } ?></p>
                            <p class="today jinri1">昨日新增储值
                                <!-- <i class="fa fa-question-circle" aria-hidden="true"></i>
                                <div class="todaybox1">指来自外卖、店内、预约、优惠买单等业务中，状态为已完成的微信支付订单总金额
                                    <div class="arrow-down"></div>
                                </div>  -->                               
                            </p>                            
                        </div>
                    </div>
                    <div class="col-md-12 gkfour">
                        <div class="col-md-4 col-xs-3 gkbackimg">
                            <img src="../addons/zh_dianc/template/images/tk.png">
                        </div>
                        <div class="col-xs-8">
                            <p class="tmoney">¥&nbsp;<?php  if($zttk) { ?><?php  echo $zttk;?><?php  } else { ?>0.00<?php  } ?></p>
                            <p class="today jinri1">昨日新增退款
                                <!-- <i class="fa fa-question-circle" aria-hidden="true"></i>
                                <div class="todaybox1">指来自外卖、店内、预约、优惠买单等业务中，状态为已完成的微信支付订单总金额
                                    <div class="arrow-down"></div>
                                </div>  -->                               
                            </p>                            
                        </div>
                    </div>
                </li>
            </ul>
        </div>        
    </div>
 </div>
 <div class="main" style="height: 270px;">
    <div class="col-md-12 vipbanner">
        <div class="col-md-6 vipbig1">
            <div class="col-md-12 vipbox">
                <div class="col-md-12 vipcontent">
                    <div class="vipleft">
                        <img src="../addons/zh_dianc/template/images/ygrz.png">
                        <span>会员信息</span>
                    </div>
                    <div class="vipright">(单位：  人)</div>
                </div>
                <ul class="col-md-12 vipadd">
                    <li class="col-md-3">
                        <p class="font1"><?php  echo $jr;?></p>
                        <p class="font2">今日新增</p>
                    </li>
                    <li class="col-md-3">
                        <p class="font1"><?php  echo $zuor;?></p>
                        <p class="font2">昨日新增</p>
                    </li>
                    <li class="col-md-3">
                        <p class="font1"><?php  echo $beny;?></p>
                        <p class="font2">本月新增</p>
                    </li>
                    <li class="col-md-3">
                        <p class="font1"><?php  echo $totalhy['count'];?></p>
                        <p class="font2">会员总数</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 vipbig2">
            <div class="col-md-12 vipbox">
                <div class="col-md-12 vipcontent">
                    <div class="vipleft">
                        <img src="../addons/zh_dianc/template/images/6.png">
                        <span>提现申请</span>
                    </div>
                    <div class="vipright">(单位：件)</div>
                </div>
                <ul class="col-md-12 vipsell">
                    <li class="col-md-6">
                        <div>
                            <div class="viptitle">提现</div>
                            <div class="col-md-12">
                                <div class="col-md-6 xuni">待提现：<span><?php  echo $dtx;?></span></div>
                                <div class="col-md-6 xuni">已通过：<span><?php  echo $ytx;?></span></div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-6">
                        <div>
                            <div class="viptitle">订单</div>
                            <div class="col-md-12">
                                <div class="col-md-6 xuni">有效订单：<span><?php  echo $total3;?></span></div>
                                <div class="col-md-6 xuni">无效订单：<span><?php  echo $total4;?></span></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <ul class="botul">
   
        <li>
         <a href="<?php  echo $this->createWebUrl('store');?>">
            <div class="boxcon">
                <img src="../addons/zh_dianc/template/images/gkdata2.png">
                <p class="bfont1">门店管理</p>
            </div>
            </a>
        </li>
        
        <li>
        <a href="<?php  echo $this->createWebUrl('user');?>">
            <div class="boxcon">
                <img src="../addons/zh_dianc/template/images/gkdata1.png">
                <p class="bfont1">会员管理</p>
            </div>
            </a>
        </li>
        <li>
        <a href="<?php  echo $this->createWebUrl('ad');?>">
            <div class="boxcon">
                <img src="../addons/zh_dianc/template/images/gkdata3.png">
                <p class="bfont1">广告管理</p>
            </div>
            </a>
        </li>
        <li>
         <a href="<?php  echo $this->createWebUrl('jfgoods');?>">
            <div class="boxcon">
                <img src="../addons/zh_dianc/template/images/gkdata4.png">
                <p class="bfont1">积分商城</p>
            </div>
            </a>
        </li>
        <li>
        <a href="<?php  echo $this->createWebUrl('ruzhu');?>">
            <div class="boxcon">
                <img src="../addons/zh_dianc/template/images/gkdata5.png">
                <p class="bfont1">入驻管理</p>
            </div>
            </a>
        </li>
        <li>
        <a href="<?php  echo $this->createWebUrl('txlist');?>">
            <div class="boxcon">
                <img src="../addons/zh_dianc/template/images/gkdata6.png">
                <p class="bfont1">提现管理</p>
            </div>
            </a>
        </li>
        <li>
         <a href="<?php  echo $this->createWebUrl('settings');?>">
            <div class="boxcon">
                <img src="../addons/zh_dianc/template/images/gkdata7.png">
                <p class="bfont1">系统设置</p>
            </div>
            </a>
        </li>
    </ul>
</div>
<script type="text/javascript">
    $(function(){
        $("#frame-0").show();
        $("#yframe-0").addClass("wyactive");
        // $(".jinri1").mouseover(function(){
        //     $(".todaybox1").show();
        // })
        // $(".jinri1").mouseout(function(){
        //     $(".todaybox1").hide();
        // })
        // $(".jinri2").mouseover(function(){
        //     $(".todaybox2").show();
        // })
        // $(".jinri2").mouseout(function(){
        //     $(".todaybox2").hide();
        // })
        // $(".jinri3").mouseover(function(){
        //     $(".todaybox3").show();
        // })
        // $(".jinri3").mouseout(function(){
        //     $(".todaybox3").hide();
        // })
        // $(".jinri4").mouseover(function(){
        //     $(".todaybox4").show();
        // })
        // $(".jinri4").mouseout(function(){
        //     $(".todaybox4").hide();
        // })
    })
</script>
