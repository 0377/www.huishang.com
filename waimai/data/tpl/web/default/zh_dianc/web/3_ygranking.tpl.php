<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_dianc/template/public/ygcsslist.css">
<style type="text/css">
    .row{padding-top: 20px;padding-bottom: 50px;}
    .neirong>tr:nth-child(odd){background-color: #F4F6F7;}
    .ranktitle{border-bottom: 1px solid #EFEFEF;padding-top: 10px;padding-bottom: 20px;}
    .ranktitle>div{padding-left: 0px;padding-right: 0px;}
    .radius50{border-radius: 50%;margin-right: 5px;}
    .table tr{height: 24px;}
    .table>tbody>tr>td{line-height: 30px;text-align: center;}
    .table>tbody>tr>td:nth-child(2){padding-left:10%;text-align: left;}
    .table>thead>tr>th{text-align: center;}
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0)">消费排行</a></li>
</ul>
<div class="main">
    <!-- <div class="panel panel-default">
        <div class="panel-body">
            <a class="btn btn-primary" href="javascript:location.reload()"><i class="fa fa-refresh"></i>刷新</a>
        </div>
    </div> -->
    <div class="panel panel-default">
        <div class="panel-heading">
            消费排行
        </div>
        <div class="panel-body" style="padding: 0px 15px;">

            <div class="row">
            <form action="" method="POST" class="col-md-8">
                <div class="col-md-12 ranktitle">
                  
                    <div class="col-md-2">
                        <input type="text" class="input-sm form-control" name="keywords"  placeholder="请输入昵称">
                    </div>
                    <div class="col-md-1"><input type="submit" class="btn btn-default"  name="submit" value="搜索"> </div>
                    <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
                    </form>
                </div>
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-1">排行</th>
                                <th class="col-md-3">粉丝</th>
                                <th class="col-md-2">姓名</th>
                                <th class="col-md-2">手机号</th>
                                <th class="col-md-2">消费金额</th>
                                <th class="col-md-2">订单数</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php  if(is_array($list)) { foreach($list as $key => $row) { ?>
                        <?php  $num=($key+1)+(($_GPC['page']-1)*$pagesize)?>
                            <tr class="rank">
                                <td>
                                    <labe class='label storered' style='padding:8px; <?php  if($num==1 || $num==2 || $num==3) { ?><?php  } else { ?>background-color: #ccc<?php  } ?>' >&nbsp;<?php  echo $num;?>&nbsp;</labe>
                                </td>
                                <td>
                                <img class="radius50" src="<?php  echo $row['img'];?>" style='padding:1px;width:30px;height:30px;border:1px solid #ccc'  onerror="this.src='../addons/ewei_shopv2/static/images/noface.png'" />
                                    <?php  echo $row['name'];?></td>
                                <td><?php  if($row['user_name']) { ?><?php  echo $row['user_name'];?><?php  } else { ?>无<?php  } ?></td>
                                <td><?php  if($row['user_tel']) { ?><?php  echo $row['user_tel'];?><?php  } else { ?>无<?php  } ?></td>
                                <td><?php  echo $row['order_money'];?></td>
                                <td><?php  echo $row['order_number'];?></td>
                            </tr>
                            <?php  } } ?>
                           <!--  <tr class="rank">
                                <td>
                                    <labe class='label label-default' style='padding:8px;background-color: #ccc'>&nbsp;2&nbsp;</labe>
                                </td>
                                <td>
                                <img class="radius50" src="http://wx.qlogo.cn/mmopen/jRoggJ2RF3CfD1N9hDZhh0JpMlHcfzque63gL52Y6T6kicQuomgJ464GOarQATiaDRMV9aW3xMvcBulWyQTKqzSQ/132" style='padding:1px;width:30px;height:30px;border:1px solid #ccc'  onerror="this.src='../addons/ewei_shopv2/static/images/noface.png'" />
                                    A小朱 </td>
                                <td>猪猪</td>
                                <td>18571502268</td>
                                <td>50000.04</td>
                                <td>5</td>
                            </tr> -->
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="text-right we7-margin-top">
     <?php  echo $pager;?>
</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-5").addClass("in");
        $("#frame-5").show();
        $("#yframe-5").addClass("wyactive");
    })
</script>
