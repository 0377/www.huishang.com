<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_dianc/template/public/ygcss.css">
<style type="text/css">
    .storeset{border-bottom: 1px solid #eee;padding-bottom: 10px;}
    .storesetfont{font-size: 14px;font-weight: bold;}
    .ygstoreimg>.input-group:nth-child(1){float: left;width: 50%;margin-right: 30px;}
    .ygstoreimg>.input-group:nth-child(2){float: left;width: 50px;}
    .btn{padding: 7px 12px;}
    .ygstoreimg>.input-group:nth-child(2)>img{width: 45px;height: 35px;margin-top: -7px;}
    .wyheader{height: 40px;}
</style>
<style type="text/css">
    .ygmargin{margin-top: 10px;color: #999;}
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
    <li class="active"><a href="javascript:void(0);">系统信息</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <!--<input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" />-->
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                <span class="ygxian"></span>
                <div class="ygdangq storesetfont">系统信息</div>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">平台名称</label>
                    <div class="col-sm-9">
                       <input type="text" name="pt_name" class="form-control" value="<?php  echo $item['pt_name'];?>" />
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">平台电话</label>
                    <div class="col-sm-9">
                       <input type="number" name="tel" class="form-control" value="<?php  echo $item['tel'];?>" />
                    </div>
                </div>        
               <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">平台风格颜色</label>
                    <div class="col-sm-9">
                       <?php  echo tpl_form_field_color('color', $item['color'])?> 
                        <div class="ygmargin">*不填写会默认选中蓝色</div>
                    </div>
                </div> 
               <?php  if($item['msgn']==1) { ?>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">平台模式</label>
                    <div class="col-sm-9">
                        <span class="radio-inline">
                            <input id="mored" type="radio" name="more" value="1" <?php  if($item['more']==1 || empty($item['more'])) { ?>checked<?php  } ?> />
                            <label for="mored">多店版</label>              
                        </span>
                        <span class="radio-inline">
                            <input id="moredan" type="radio" name="more" value="2" <?php  if($item['more']==2) { ?>checked<?php  } ?> /> 
                            <label for="moredan">单店版</label>
                        </span>
                    </div>
                </div>
                <?php  } ?> 
                
                <?php  if($item['more']==2) { ?>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">默认门店</label>
                    <div class="col-sm-10 col-lg-9">
                        <select name="default_store" class="form-control" id="groupid">
                            <?php  if(is_array($stores)) { foreach($stores as $row) { ?>
                            <option value="<?php  echo $row['id'];?>" <?php  if($item['default_store']==$row['id']) { ?>selected<?php  } ?>><?php  echo $row['md_name'];?></option>
                            <?php  } } ?>
                        </select>
                        <span class="help-block">默认显示的门店</span>
                    </div>
                </div>
                <?php  } ?>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">配送信息 </label>
                    <div class="col-sm-9">
                        <span class="radio-inline">
                            <input id="is_psxx1" type="radio" name="is_psxx" value="1" <?php  if($item['is_psxx']==1) { ?>checked<?php  } ?> />
                            <label for="is_psxx1">开启</label>              
                        </span>
                        <span class="radio-inline">
                            <input id="is_psxx2" type="radio" name="is_psxx" value="2" <?php  if($item['is_psxx']==2 || empty($item['is_psxx'])) { ?>checked<?php  } ?> /> 
                            <label for="is_psxx2">关闭</label>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">平台简介</label>
                    <div class="col-sm-9">
                         <?php  echo tpl_ueditor('details',$item['details']);?>
                    </div>
                </div>

                <div class="form-group storeset">
                    <span class="ygxian"></span>
                    <div class="ygdangq storesetfont">订单页面自定义名称:</div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">外卖</label>
                    <div class="col-sm-9">
                        <input type="text" name="wm_name" class="form-control" value="<?php  echo $item['wm_name'];?>" />
                        <div class="help-block">
                        * 请设置前台外卖订单页面名称，为空或删除为默认值
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">点餐</label>
                    <div class="col-sm-9">
                        <input type="text" name="dc_name" class="form-control" value="<?php  echo $item['dc_name'];?>" />
                        <div class="help-block">
                        * 请设置前台点餐订单页面名称，为空或删除为默认值
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">预定</label>
                    <div class="col-sm-9">
                        <input type="text" name="yd_name" class="form-control" value="<?php  echo $item['yd_name'];?>" />
                        <div class="help-block">
                        * 请设置前台预定订单页面名称，为空或删除为默认值
                        </div>
                    </div>
                </div>
                

            </div>

        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="提交" class="btn col-lg-3" style="color: white;background-color: #44ABF7;"/>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
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