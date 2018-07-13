<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
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
    <li><a href="<?php  echo $this->createWebUrl('account')?>">账号管理</a></li>
    <li class="active"><a href="<?php  echo $this->createWebUrl('countadd')?>">添加/编辑账号</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader"> 添加/编辑账号</div>
            <div class="panel-body panel">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">所属门店</label>
                    <div class="col-sm-10 col-lg-9">
                        <select name="storeid" class="form-control" id="groupid">
                            <?php  if(is_array($stores)) { foreach($stores as $row) { ?>
                            <option value="<?php  echo $row['id'];?>" <?php  if($account['storeid']==$row['id'] || $storeid==$row['id']) { ?>selected<?php  } ?>><?php  echo $row['md_name'];?></option>
                            <?php  } } ?>
                        </select>
                        <span class="help-block">*请选择管理门店</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">登录账号</label>
                    <div class="col-sm-10 col-lg-9">
                        <input id="" name="username" type="text" class="form-control" value="<?php  echo $users['username'];?>"/>
                        <span class="help-block">*请输入用户名，用户名为 3 到 15 个字符组成，包括汉字，大小写字母（不区分大小写）</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">登录密码</label>
                    <div class="col-sm-10 col-lg-9">
                        <input id="password" name="password" type="password" class="form-control" value="" autocomplete="off"/>
                        <span class="help-block">*请填写密码，最小长度为 8 个字符</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label">确认密码</label>
                    <div class="col-sm-10 col-lg-9">
                        <input id="repassword" type="password" class="form-control" value="" autocomplete="off"/>
                        <span class="help-block">*重复输入密码，确认正确输入</span>
                    </div>
                </div>
                
              
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
                    <div class="col-sm-9">
                    	<label class="radio-inline">
                        	<input type="radio" id="qiyongc" name="status" value="2" <?php  if($users['status']==2 || empty($users)) { ?>checked<?php  } ?>>
                        	<label for="qiyongc">启用</label> 
                        </label>
                        <label class="radio-inline">
                        	<input type="radio" id="qiyongc2" name="status" value="1" <?php  if($users['status']== 1) { ?>checked<?php  } ?>>
                        	<label for="qiyongc2">关闭</label>
                    	</label>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #44ABF7;"/>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-0").addClass("in");
        $("#frame-0").show();
        $("#yframe-0").addClass("wyactive");
    })
</script>