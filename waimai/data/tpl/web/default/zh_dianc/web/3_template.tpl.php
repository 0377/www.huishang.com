<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>

<link rel="stylesheet" type="text/css" href="../addons/zh_dianc/template/public/ygcss.css">

<ul class="nav nav-tabs">

    <span class="ygxian"></span>

    <div class="ygdangq">当前位置:</div>    

    <li class="active"><a href="javascript:void(0);">模板消息</a></li>

</ul>

  <div class="main">

    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">

        <div class="panel panel-default ygdefault">

            <div class="panel-heading wyheader">

                系统设置&nbsp;>&nbsp;模板消息

            </div>

            <div class="panel-body">

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">外卖订单通知：</label>

                    <div class="col-sm-9">

                        <p class="form-control-static">

                             <input type="text" name="tid" value="<?php  echo $item['tid'];?>" id="points" class="form-control" />

                        </p>

                        <div style="color: #999;">*模板编号AT0009,关键词(订单编号,联系人姓名,联系人手机号,金额,时间)</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">客户预约点餐通知：</label>

                    <div class="col-sm-9">

                        <p class="form-control-static">

                             <input type="text" name="yy_tid" value="<?php  echo $item['yy_tid'];?>" id="points" class="form-control" />

                        </p>

                        <div style="color: #999;">*模板编号AT0104,关键词(门店,时间,姓名,电话,就餐人数,备注)</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">客户当面付点餐通知：</label>

                    <div class="col-sm-9">

                        <p class="form-control-static">

                             <input type="text" name="dm_tid" value="<?php  echo $item['dm_tid'];?>" id="points" class="form-control" />

                        </p>

                        <div style="color: #999;">*模板编号AT0005,关键词(商家名称,付款金额,付款时间)</div>

                    </div>

                </div>



                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号商家新订单通知：</label>

                    <div class="col-sm-9">

                        <p class="form-control-static">

                             <input type="text" name="sj_tid" value="<?php  echo $item['sj_tid'];?>" id="points" class="form-control" />

                        </p>

                        <div style="color: red;">*模板编号OPENTM200523662  标题:新订单通知(请将公众平台模板消息所在行业选择为： IT科技/互联网|电子商务 其他|其他，所选行业不一致将会导致模板消息不可用。)</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号商家预约通知：</label>

                    <div class="col-sm-9">

                        <p class="form-control-static">

                             <input type="text" name="sj_tid2" value="<?php  echo $item['sj_tid2'];?>" id="points" class="form-control" />

                        </p>

                        <div style="color: red;">*模板编号OPENTM405628250 标题:预定就餐提醒(请将公众平台模板消息所在行业选择为： IT科技/互联网|电子商务 其他|其他，所选行业不一致将会导致模板消息不可用。)</div>

                    </div>

                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">通知公众号appid：</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">
                             <input type="text" name="wx_appid" value="<?php  echo $item['wx_appid'];?>" id="points" class="form-control" />
                        </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">通知公众号AppSecret：</label>
                    <div class="col-sm-9">
                        <p class="form-control-static">
                             <input type="text" name="wx_secret" value="<?php  echo $item['wx_secret'];?>" id="points" class="form-control" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #44ABF7;" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            <input type="hidden" name="id" value="<?php  echo $item['id'];?>"/>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-14").addClass("in");
        $("#frame-14").show();
        $("#yframe-14").addClass("wyactive");
    })
</script>

