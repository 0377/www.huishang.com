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
    <li class="active"><a href="javascript:void(0);">积分设置</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                积分设置
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">评价得积分</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy1" name="is_jf" value="1" <?php  if($info['is_jf']==1 || empty($info['is_jf'])) { ?>checked<?php  } ?> />
                            <label for="emailwy1">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy2" name="is_jf" value="2" <?php  if($info['is_jf']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy2">关闭</label>
                        </label>    
                        <div class="help-block">
                        * 选择关闭，用户评价则不获得积分
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">外卖消费得积分</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy12" name="is_wmjf" value="1" <?php  if($info['is_wmjf']==1 || empty($info['is_wmjf'])) { ?>checked<?php  } ?> />
                            <label for="emailwy12">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy3" name="is_wmjf" value="2" <?php  if($info['is_wmjf']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy3">关闭</label>
                        </label>    
                        <div class="help-block">
                        * 选择关闭，外卖订单完成，则不获得积分
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">店内消费得积分</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy4" name="is_dnjf" value="1" <?php  if($info['is_dnjf']==1 || empty($info['is_dnjf'])) { ?>checked<?php  } ?> />
                            <label for="emailwy4">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy5" name="is_dnjf" value="2" <?php  if($info['is_dnjf']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy5">关闭</label>
                        </label>    
                        <div class="help-block">
                        * 选择关闭，店内订单完成，则不获得积分
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">预定消费得积分</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy6" name="is_yyjf" value="1" <?php  if($info['is_yyjf']==1 || empty($info['is_yyjf'])) { ?>checked<?php  } ?> />
                            <label for="emailwy6">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy7" name="is_yyjf" value="2" <?php  if($info['is_yyjf']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy7">关闭</label>
                        </label>    
                        <div class="help-block">
                        * 选择关闭，预定订单完成，则不获得积分
                        </div>
                    </div>  

                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">当面付消费得积分</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy8" name="is_dmjf" value="1" <?php  if($info['is_dmjf']==1 || empty($info['is_dmjf'])) { ?>checked<?php  } ?> />
                            <label for="emailwy8">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy9" name="is_dmjf" value="2" <?php  if($info['is_dmjf']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy9">关闭</label>
                        </label>    
                        <div class="help-block">
                        * 选择关闭，当面付订单完成，则不获得积分
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">余额支付得积分</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy10" name="is_yuejf" value="1" <?php  if($info['is_yuejf']==1 || empty($info['is_yuejf'])) { ?>checked<?php  } ?> />
                            <label for="emailwy10">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy11" name="is_yuejf" value="2" <?php  if($info['is_yuejf']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy11">关闭</label>
                        </label>    
                        <div class="help-block">
                        * 选择关闭，用户选择余额支付时，则不获得积分
                        </div>
                    </div>

                </div>


            </div>
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #44ABF7;" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            <input type="hidden" name="id" value="<?php  echo $info['id'];?>" />
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $("#frame-0").show();
        $("#yframe-0").addClass("wyactive");
    })
</script>
