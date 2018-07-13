<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>

<link rel="stylesheet" type="text/css" href="../addons/zh_dianc/template/public/ygcss.css">
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li ><a href="<?php  echo $this->createWebUrl('spec',array('dishes_id'=>$_GPC['dishes_id']))?>">规格管理</a></li>
    <li class="active"><a href="<?php  echo $this->createWebUrl('addspec',array('dishes_id'=>$_GPC['dishes_id']))?>">添加/编辑规格</a></li>
</ul>
<div class="main">
  <div class="panel panel-default ygdefault">

        <div class="panel-heading wyheader">添加/编辑规格</div>

        <div class="panel-body">

<form class="form-horizontal" action="" method="POST">



  <div class="form-group">

    <label for="inputEmail3" class="col-sm-2 control-label">规格名称</label>

    <div class="col-sm-10">

      <input type="text"  name="name" value="<?php  echo $list['name'];?>" class="form-control" id="inputEmail3" placeholder="请填写规格名称">

    </div>

  </div>
<div class="form-group">

    <label for="inputEmail3" class="col-sm-2 control-label">规格价格</label>

    <div class="col-sm-10">

       <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="cost" value="<?php  echo $list['cost'];?>" class="form-control" id="inputEmail3" placeholder="请填写规格价格">
    </div>

  </div>

    <div class="form-group">
          <input type="submit" name="submit" value="提交" class="btn col-lg-3 col-lg-offset-3" style="color: white;background-color: #44ABF7;"/>
          <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
          <input type="hidden" name="id" value="<?php  echo $list['id'];?>" />
      </div>

</form>

</div>
</div>
</div>
<script type="text/javascript">
  $(function(){
      $("#frame-2").show();
      $("#yframe-2").addClass("wyactive");
  })
</script>