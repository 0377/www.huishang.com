<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_dianc/template/public/ygcsslist.css">
<style type="text/css">
    /*#frame-3{display: block;visibility: visible;}*/
    .yg5_key>div{float: left;line-height: 34px;}
    .store_td1{height: 45px;}
    .store_list_img{width: 60px;height: 60px;}
    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;text-align: center;}
    .yg5_tr2>td{padding: 15px;border: 1px solid #e5e5e5;text-align: center;}
    .yg5_tr1>th{
        border: 1px solid #e5e5e5;
        padding-left: 15px;
        background-color: #FAFAFA;
        font-weight: bold;
        text-align: center;
    }
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="<?php  echo $this->createWebUrl('area')?>">门店区域管理</a></li>
    <li><a href="<?php  echo $this->createWebUrl('addarea')?>">添加门店区域</a></li>
</ul>

<div class="main">
    <!-- <div class="panel panel-default">
        <div class="panel-body">
            <a class="btn btn-primary" href="javascript:location.reload()"><i class="fa fa-refresh"></i>刷新</a>
        </div>
    </div> -->
    <form action="" method="fieldset_post">
    	<div class="panel panel-default">        
            <div class="panel-heading">
                内容编辑
            </div>
            <input type="hidden" name="storeid" value="<?php  echo $storeid;?>" />
            <div class="panel-body" style="padding: 0px 15px;">
                <div class="row">
                    <table class="yg5_tabel col-md-12">
                        <tr class="yg5_tr1">
                            <th class="col-md-4 store_td1">顺序</th>
                            <th class="col-md-4">区域名称</th>
                            <th class="col-md-4">操作</th>
                        </tr>
                        <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <tr class="yg5_tr2">
                            <td><div class="type-parent"><?php  echo $row['num'];?>&nbsp;&nbsp;</div></td>
                            <td>
                                <div class="type-parent"><?php  echo $row['area_name'];?>&nbsp;&nbsp;</div>
                            </td>                        
                            <td>
                                <a href="<?php  echo $this->createWebUrl('addarea', array('op' => 'post', 'id' => $row['id']))?>" class="storespan btn btn-xs">
                                    <span class="fa fa-pencil"></span>
                                    <span class="bianji">编辑
                                        <span class="arrowdown"></span>
                                    </span>                                
                                </a>
                                <a href="javascript:void(0);" class="storespan btn btn-xs" data-toggle="modal" data-target="#myModal<?php  echo $row['id'];?>">
                                    <span class="fa fa-trash-o"></span>
                                    <span class="bianji">删除
                                        <span class="arrowdown"></span>
                                    </span>
                                </a>
                            <!-- <a class="btn btn-warning btn-xs" href="<?php  echo $this->createWebUrl('addarea', array('op' => 'post', 'id' => $row['id']))?>" title="编辑">改</a>&nbsp;&nbsp; <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php  echo $row['id'];?>">删</button> -->
                            </td>
                        </tr>
                        <div class="modal fade" id="myModal<?php  echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel" style="font-size: 20px;">提示</h4>
                                    </div>
                                    <div class="modal-body" style="font-size: 20px">
                                        确定删除么？
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                        <a href="<?php  echo $this->createWebUrl('area', array('op' => 'delete', 'id' => $row['id']))?>" type="button" class="btn btn-info" >确定</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php  } } ?>
                        <?php  if(empty($list)) { ?>
                         <tr class="yg5_tr2">
                            <td colspan="3">
                              暂无门店区域信息
                            </td>
                          </tr>
                         
                          <?php  } ?>                   
                    </table>
                </div>
            </div>        
    	</div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-3").addClass("in");
        $("#frame-3").show();
        $("#yframe-3").addClass("wyactive");
    })
</script>