<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_dianc/template/public/ygcss.css">
<style type="text/css">
    input[type="radio"] + label::before {
        content: "\a0"; /*不换行空格*/
        display: inline-block;
        vertical-align: middle;
        font-size: 16px;
        width: 1em;
        height: 1em;
        margin-right: .4em;
        border-radius: 50%;
        border: 2px solid #ddd;
        text-indent: .15em;
        line-height: 1; 
    }
    input[type="radio"]:checked + label::before {
        background-color: #44ABF7;
        background-clip: content-box;
        padding: .1em;
        border: 2px solid #44ABF7;
    }
    input[type="radio"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
    }
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0);">短信设置</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                短信设置（聚合短信服务，短信申请地址： <a href="https://www.juhe.cn/">https://www.juhe.cn/</a>）
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">应用key：</label>
                    <div class="col-sm-5">
                        <input type="text" name="appkey" value="<?php  echo $item['appkey'];?>" id="web_name" class="form-control" />
                        <div class="help-block">
                        * 请输入聚合短信的AppKey
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-md-2 control-label">外卖提醒通知：</label>
                    <div class="col-md-4">
                        <input type="number" name="tpl_id" value="<?php  echo $item['tpl_id'];?>" id="web_name" class="form-control" />
                    </div>
                    <div class="col-sm-6">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy1" name="is_wmsms" value="1" <?php  if($item['is_wmsms']==1 || empty($item['is_wmsms'])) { ?>checked<?php  } ?> />
                            <label for="emailwy1">启用</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy2" name="is_wmsms" value="2" <?php  if($item['is_wmsms']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy2">禁用</label>
                        </label>
                        <!-- <div class="help-block">
                        * 选择不开启，用户下单商家则收不到短信提醒
                        </div> -->    
                    </div>
                    <div class="help-block col-md-8 col-md-offset-2">
                        * 请输入短信模板ID
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">店内提醒通知：</label>
                    <div class="col-md-4">
                        <input type="number" name="tpl3_id" value="<?php  echo $item['tpl3_id'];?>" id="web_name" class="form-control" />                        
                    </div>
                    <div class="col-md-6">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy5" name="is_dnsms" value="1" <?php  if($item['is_dnsms']==1 || empty($item['is_dnsms'])) { ?>checked<?php  } ?> />
                            <label for="emailwy5">启用</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy6" name="is_dnsms" value="2" <?php  if($item['is_dnsms']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy6">禁用</label>
                        </label>
                           
                    </div>
                    <div class="help-block col-md-8 col-md-offset-2">
                        *  请输入短信模板ID
                    </div> 
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">预定提醒通知：</label>
                    <div class="col-md-4">
                        <input type="number" name="tpl2_id" value="<?php  echo $item['tpl2_id'];?>" id="web_name" class="form-control" />                        
                    </div>
                    <div class="col-md-6">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy3" name="is_yysms" value="1" <?php  if($item['is_yysms']==1 || empty($item['is_yysms'])) { ?>checked<?php  } ?> />
                            <label for="emailwy3">启用</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy4" name="is_yysms" value="2" <?php  if($item['is_yysms']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy4">禁用</label>
                        </label>
                    </div>
                    <div class="help-block col-md-8 col-md-offset-2">
                        * 请输入短信模板ID
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">接收人手机号：</label>
                    <div class="col-sm-5">
                        <input type="text" name="tel" value="<?php  echo $item['tel'];?>" id="web_name" class="form-control" />
                        <div class="help-block">
                            * 请绑定接收人手机号，有新订单会发送短信到此手机号
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">接收人邮箱：</label>
                    <div class="col-sm-5">
                        <input type="text" name="email" value="<?php  echo $item['email'];?>" id="web_name" class="form-control" />
                        <div class="help-block">
                            * 请绑定接收人邮箱，有新订单会发送邮件到此账号
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">接收人openid：</label>
                    <div class="col-sm-5">
                        <input type="text" name="sj_openid" value="<?php  echo $item['sj_openid'];?>" id="web_name" class="form-control" />
                        <div class="help-block">
                            * 请绑定接收人openid，有新订单会发送模板消息到此账号
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #44ABF7;" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $("#frame-4").show();
        $("#yframe-4").addClass("wyactive");
    })
</script>
