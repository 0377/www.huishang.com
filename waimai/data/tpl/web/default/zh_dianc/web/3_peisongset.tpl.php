<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_dianc/template/public/ygcss.css">
<style type="text/css">
    .form-horizontal .control-label{text-align: left;}
    .ygmargin{margin-top: 10px;color: #999;}
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0);">配送设置</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                配送设置
            </div>
            <div class="panel-body">
                <div class="form-group">
                <label class="col-sm-offset-1 col-sm-1 control-label">配送费</label>
                <div class="col-sm-10">
                    <input type="number" name="freight" value="<?php  echo $info['freight'];?>" class="form-control" id="inputEmail3"
                           placeholder="请填写配送费,单位元">
                </div>
            </div>
                        <div class="form-group">
                <label class="col-sm-offset-1 col-sm-1 control-label">配送时间</label>
                <div class="col-sm-10">
                    <input type="text" name="sd_time" value="<?php  echo $info['sd_time'];?>" class="form-control" id="inputEmail3"
                           placeholder="请填写配送时间">
                    <div class="ygmargin">*例如 : 30分钟</div>
                </div>
            </div>
             <div class="form-group">
                <label for="inputEmail3" class="col-sm-offset-1 col-sm-1 control-label">配送方式</label>
                <div class="col-sm-10">
                    <select class="form-control" name="ps_mode">
                        <?php  if($info['ps_mode']==1) { ?>
                        <option value="1" selected="selected">达达配送</option>
                        <option value="2">商家配送</option>
                        <option value="3">uu跑腿</option>
                        <option value="4">人人快递</option>
                        <option value="5">快服务</option>
                        <?php  } else if($info['ps_mode']==2) { ?>
                        <option value="1">达达配送</option>
                        <option value="2" selected="selected">商家配送</option>
                        <option value="3">uu跑腿</option>
                         <option value="4">人人快递</option>
                          <option value="5">快服务</option>
                        <?php  } else if($info['ps_mode']==3) { ?>
                        <option value="1">达达配送</option>
                        <option value="2" >商家配送</option>
                        <option value="3" selected="selected">uu跑腿</option>
                        <option value="4">人人快递</option>
                         <option value="5">快服务</option>
                        <?php  } else if($info['ps_mode']==4) { ?>
                        <option value="1">达达配送</option>
                        <option value="2" >商家配送</option>
                        <option value="3" >uu跑腿</option>
                         <option value="4" selected="selected">人人快递</option>
                          <option value="5">快服务</option>
                           <?php  } else if($info['ps_mode']==5) { ?>
                        <option value="1">达达配送</option>
                        <option value="2" >商家配送</option>
                        <option value="3" >uu跑腿</option>
                         <option value="4" >人人快递</option>
                          <option value="5" selected="selected">快服务</option>
                        <?php  } else { ?>
                        <option value="1">达达配送</option>
                        <option value="2">商家配送</option>
                        <option value="3">uu跑腿</option>
                         <option value="5">快服务</option>
                        <!--  <option value="4">人人快递</option> -->
                        <?php  } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-offset-1 col-sm-1 control-label">配送距离设置</label>
                <div class="col-sm-10">
                 <input type="number" name="distance" value="<?php  echo $info['distance'];?>" class="form-control" id="inputEmail3"
                        placeholder="请填写配送的最大距离,单位千米">
                    <div class="ygmargin">*单位为:公里(千米)</div>
             </div>
         </div> 
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="保存设置" class="btn col-xs-3" style="color: white;background-color: #44ABF7;" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $("#frame-0").show();
        $("#yframe-0").addClass("wyactive");
    })
</script>

