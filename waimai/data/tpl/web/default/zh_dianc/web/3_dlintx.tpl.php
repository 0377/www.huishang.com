<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_dianc/template/public/ygcss.css">
<style type="text/css">
    .apply{height: 40px;line-height: 30px;}
    .apply_money{font-size: 30px;color: #44ABF7;margin-right: 10px;}
    .apply_tishi{color: #999;}
    .apply_bei{color: #999;margin-top: 5px;}
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
    <li><a href="<?php  echo $this->createWebUrl2('dlintxlist');?>">提现明细</a></li>
    <li class="active"><a href="javascript:void(0);">申请提现</a></li>
</ul>

<div class="main">

    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">

        <div class="panel panel-default ygdefault">

            <div class="panel-heading wyheader">申请提现</div>

            <div class="panel-body">                

                <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label" style="padding-top: 10px;">当前可提现金额</label>

                    <div class="col-sm-10">

                      <div class="apply"><span class="apply_money"><?php  echo $ktxcost;?></span><span>元</span></div>

                      <div class="apply_tishi">*当前账户余额如果小于最低提现金额(<?php  echo $system['tx_money'];?>)，则不能提现</div>

                    </div>

                </div>

                <div class="form-group">

                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">账户类型</label>

                    <div class="col-sm-9">
                        <?php  if($system['is_zfb']==1) { ?>
                        <label class="radio-inline">

                            <input type="radio" id="emailwy1" name="type" value="1" checked>
                            <label for="emailwy1">支付宝</label>

                        </label>
                        <?php  } ?>
                        <?php  if($system['is_wx']==1) { ?>
                        <label class="radio-inline">

                            <input type="radio" id="emailwy2" name="type" value="2">
                            <label for="emailwy2">微信</label>

                        </label>
                        <?php  } ?>
                        <?php  if($system['is_yhk']==1) { ?>
                        <label class="radio-inline">

                            <input type="radio" id="emailwy3" name="type" value="3">
                            <label for="emailwy3">银行卡</label>

                        </label>
                        <?php  } ?>
                    </div>

                </div>

                <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label">账号</label>

                    <div class="col-sm-10">

                      <input type="text" name="username" class="form-control" value="" />
                     <div class="apply_bei">*请仔细填写账号信息，如果由于您填写错误导致资金流失，平台概不负责</div>
                    </div>

                </div>                

                <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label">真实姓名</label>

                    <div class="col-sm-10">

                      <input type="text" name="name" class="form-control" value="" />

                     

                    </div>

                </div>
                <div class="form-group">

                    <label class="col-sm-2 control-label">提现金额</label>

                    <div class="col-sm-5">

                        <div class="input-group">

                            <input class="form-control" name="tx_cost" id="" type="text" value="" placeholder="请输入提现金额">

                            <span class="input-group-addon">元</span>                        

                        </div>

                        <div class="apply_bei">*提现手续费<?php  echo $poundage;?>%</div>

                    </div>

                    

                </div>

                

            </div>

        </div>

        <div class="form-group">

            <input type="submit" name="submit" value="保存设置" class="btn yg5_btn col-lg-3" style="color: white;background-color: #44ABF7;" />

            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />

        </div>

    </form>

</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-6").addClass("in");
        $("#frame-6").show();
        $("#yframe-6").addClass("wyactive");
    })
</script>