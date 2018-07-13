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
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>
    <li class="active"><a href="<?php  echo $this->createWebUrl('addstore')?>">门店添加</a></li>    
    <li><a href="<?php  echo $this->createWebUrl('store')?>">门店列表</a></li>
    
    <!-- <li><a href="<?php  echo $this->createWebUrl('yg4')?>">门店回收站</a></li> -->
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <!--<input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" />-->
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                <span class="ygxian"></span>
                <div class="ygdangq">门店编辑:</div> 
            </div>
            <div class="panel-body panel">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">排序</label>
                    <div class="col-sm-9">
                        <input type="text" name="number" class="form-control" value="<?php  echo $info['number'];?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"><font color="red">*</font>门店名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="md_name" class="form-control" value="<?php  echo $info['md_name'];?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"><font color="red">*</font>门店logo</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('md_logo', $info['md_logo'])?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">门店简介</label>
                    <div class="col-sm-10">
                        <input type="text" name="md_content" class="form-control" value="<?php  echo $info['md_content'];?>" />
                        <div class="help-block">
                        * 请填写商户门店简介
                    </div>
                    </div>
                    
                </div> 
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="margin-right: 15px;"><font color="red">*</font>所属区域</label>
                    <select class="col-sm-8" name="md_area">
                        <?php  if(is_array($area)) { foreach($area as $key => $item2) { ?>
                        <?php  if($item['id']==$info['md_area']) { ?>
                        <option value="<?php  echo $item2['id'];?>" selected="selected"><?php  echo $item2['area_name'];?></option>
                        <?php  } else { ?>
                        <option value="<?php  echo $item2['id'];?>" ><?php  echo $item2['area_name'];?></option>
                        <?php  } ?>
                        <?php  } } ?>
                    </select>
                    <div class="help-block col-md-8 col-md-offset-2">
                        * 请选择商户所在区域
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="margin-right: 15px;"><font color="red">*</font>门店类型</label>
                    <select class="col-sm-8" name="md_type">
                        <?php  if(is_array($type)) { foreach($type as $key => $item) { ?>
                        <?php  if($item['id']==$info['md_type']) { ?>
                        <option value="<?php  echo $item['id'];?>" selected="selected"><?php  echo $item['type_name'];?></option>
                        <?php  } else { ?>
                        <option value="<?php  echo $item['id'];?>" ><?php  echo $item['type_name'];?></option>
                        <?php  } ?>
                        <?php  } } ?>
                    </select>
                    <div class="help-block col-md-8 col-md-offset-2">
                        * 请选择商户门店类型
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">商家支持</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline">
                        <?php  if($info['is_yy']==1) { ?>  
                        <input type="checkbox" name="is_yy" id="optionsRadios3" value="1" checked> 预约
                        <?php  } else { ?>
                        <input type="checkbox" name="is_yy" id="optionsRadios3" value="1" > 预约
                        <?php  } ?>
                        </label>
                        <label class="checkbox-inline">
                            <?php  if($info['is_dn']==1) { ?>  
                            <input type="checkbox" name="is_dn" id="optionsRadios4"  value="1" checked> 点餐
                              <?php  } else { ?>
                               <input type="checkbox" name="is_dn" id="optionsRadios4"  value="1" > 点餐
                               <?php  } ?>
                        </label>
                        <label class="checkbox-inline">
                           <?php  if($info['is_wm']==1) { ?>  
                            <input type="checkbox" name="is_wm" id="optionsRadios4"  value="1" checked> 外卖
                             <?php  } else { ?>
                                <input type="checkbox" name="is_wm" id="optionsRadios4"  value="1"> 外卖
                                 <?php  } ?>
                        </label>
                        <label class="checkbox-inline">
                             <?php  if($info['is_pd']==1) { ?>  
                                <input type="checkbox" name="is_pd" id="optionsRadios4"  value="1" checked>优惠券
                                <?php  } else { ?>
                                <input type="checkbox" name="is_pd" id="optionsRadios4"  value="1" >优惠券
                                 <?php  } ?>
                        </label>
                        <label class="checkbox-inline">
                        <?php  if($info['is_sy']==1) { ?>  
                            <input type="checkbox" name="is_sy" id="optionsRadios4"  value="1" checked> 收银
                             <?php  } else { ?>
                            <input type="checkbox" name="is_sy" id="optionsRadios4"  value="1" > 收银
                             <?php  } ?>
                        </label>
                        <p></p>
                        <div class="help-block">
                        * 备注：如果只勾选外卖,则点击商家直接进入外卖点餐页面
                        </div>
                    </div>
                </div>
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">是否显示门店</label>
                <div class="col-sm-10">
                    <div class="col-sm-8" style="padding: 0px;">
                        <select class="col-sm-12" name="is_open" style="margin-bottom: 10px;">
                            <?php  if($info['is_open']==1) { ?>
                            <option value="1" selected="selected">是</option>
                            <option value="2">否</option>
                            <?php  } else if($info['is_open']==2) { ?>
                            <option value="1">是</option>
                            <option value="2" selected="selected">否</option>
                            <?php  } else { ?>
                            <option value="1">是</option>
                            <option value="2">否</option>
                            <?php  } ?>
                        </select>
                        <div class="help-block">
                    * 备注：选择否，则小程序端不显示此门店信息
                    </div>
                    </div>
                    
                </div>
            </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">平台手续费</label>
                  <div class="col-sm-9">
                        <div class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="poundage" value="<?php  echo $info['poundage'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </div>
                        <div class="help-block">* 平台收取对应的手续费,如果不填则收取商户对应分类下的手续费</div>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">消费得积分(%)：</label>
                    <div class="col-sm-9">
                        <input type="number" name="integral2" value="<?php  echo $info['integral2'];?>" id="web_name" class="form-control" />
                        <div class="help-block">
                        *例如:填10就表示消费20元得2积分(20*10%)  不填或填0就已平台设置的为主
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">评论得积分：</label>
                    <div class="col-sm-9">
                        <input type="number" name="integral" value="<?php  echo $info['integral'];?>" id="web_name" class="form-control" />
                        <div class="help-block">
                        * 不填或填0就已平台设置的为主
                        </div>
                    </div>
                </div>
                <div class="form-group storeset">
                    <span class="ygxian"></span>
                    <div class="ygdangq storesetfont">自定义名称:</div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">预约</label>
                    <div class="col-md-3" style="padding-right: 0px;">
                        <input type="text" name="yy_name" class="form-control" value="<?php  echo $info['yy_name'];?>" placeholder="请填写预约名称"/>
                    </div>
                    <!-- <label class="col-md-1 control-label">预约前台图标</label>  -->
                    <div class="col-md-7 ygstoreimg" style="padding: 0px;">
                        <?php  echo tpl_form_field_image('yy_img', $info['yy_img'])?>
                    </div>
                    <div class="help-block col-md-offset-2 col-md-12">*请设置前台预约功能名称，为空或删除为默认值，图标大小63*63px</div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">点餐</label>
                    <div class="col-md-3" style="padding-right: 0px;">
                        <input type="text" name="dn_name" class="form-control" value="<?php  echo $info['dn_name'];?>" placeholder="请填写点餐名称"/>
                    </div>
                    <div class="col-md-7 ygstoreimg" style="padding: 0px;">
                        <?php  echo tpl_form_field_image('dn_img', $info['dn_img'])?>
                    </div>
                    <div class="help-block col-md-offset-2 col-md-12">*请设置前台点餐功能名称，为空或删除为默认值，图标大小63*63px</div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">外卖</label>
                    <div class="col-md-3" style="padding-right: 0px;">
                        <input type="text" name="wm_name" class="form-control" value="<?php  echo $info['wm_name'];?>" placeholder="请填写外卖名称"/>
                    </div>
                    <div class="col-md-7 ygstoreimg" style="padding: 0px;">
                        <?php  echo tpl_form_field_image('wm_img', $info['wm_img'])?>
                    </div>
                    <div class="help-block col-md-offset-2 col-md-12">*请设置前台外卖功能名称，为空或删除为默认值，图标大小63*63px</div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">优惠券</label>
                    <div class="col-md-3" style="padding-right: 0px;">
                        <input type="text" name="pd_name" class="form-control" value="<?php  echo $info['pd_name'];?>" placeholder="请填写优惠券名称"/>
                    </div>
                    <div class="col-md-7 ygstoreimg" style="padding: 0px;">
                        <?php  echo tpl_form_field_image('pd_img', $info['pd_img'])?>
                    </div>
                    <div class="help-block col-md-offset-2 col-md-12">*请设置前台优惠券功能名称，为空或删除为默认值，图标大小63*63px</div>
                </div>
                 
                <div class="form-group">
                    <label class="col-md-2 control-label">收银</label>
                    <div class="col-md-3" style="padding-right: 0px;">
                        <input type="text" name="sy_name" class="form-control" value="<?php  echo $info['sy_name'];?>"  placeholder="请填写收银名称"/>
                    </div>
                    <div class="col-md-7 ygstoreimg" style="padding: 0px;">
                        <?php  echo tpl_form_field_image('sy_img', $info['sy_img'])?>
                    </div>
                    <div class="help-block col-md-offset-2 col-md-12">*请设置前台收银功能名称，为空或删除为默认值，图标大小63*63px</div>
                </div> 
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">餐盒费</label>
                    <div class="col-sm-5">
                        <input type="text" name="box_name" value="<?php  echo $info['box_name'];?>" class="form-control" id="inputEmail3" placeholder="请填写餐盒费名称">
                        <div class="help-block">*请填写外卖订单页面餐盒费名称，为空或删除为默认值</div>
                    </div>
                </div>  
                
<!--                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="margin-right: 15px;"><font color="red">*</font>绑定提现人</label>
                    <select class="col-sm-8" name="user_id">
                    <?php  if($userinfo['name']) { ?>
                    <option value="<?php  echo $userinfo['id'];?>" selected="selected"><?php  echo $userinfo['name'];?></option>
                    <?php  } ?>
                        <?php  if(is_array($user)) { foreach($user as $key => $item3) { ?>
                        <option value="<?php  echo $item3['id'];?>" ><?php  echo $item3['name'];?></option>
                        <?php  } } ?>
                    </select>
                         <div class="help-block">
                    * 备注：选择否，则小程序端不显示此门店信息
                    </div>
                </div> -->
                <div class="form-group storeset">
                    <span class="ygxian"></span>
                    <div class="ygdangq storesetfont">自动提现设置:</div>
                </div>
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">绑定提现人</label>
                <div class="col-sm-10">
                    <div class="col-sm-12" style="padding: 0px;">
                        <select class="col-sm-6" name="user_id" id="username">
                           <?php  if($userinfo['name']) { ?>
                            <option value="<?php  echo $userinfo['id'];?>" selected="selected"><?php  echo $userinfo['name'];?></option>
                            <?php  } ?>
                            <?php  if(is_array($user)) { foreach($user as $key => $item3) { ?>
                            <option value="<?php  echo $item3['id'];?>" ><?php  echo $item3['name'];?></option>
                            <?php  } } ?>
                        </select>
                        <span class="btn btn-sm storeblue" data-toggle="modal" data-target="#myModal1" style="margin-left: 30px;">搜索管理员</span>
                        <div class="col-sm-9">
                            <div class="help-block">
                                * 用于商户微信提现时直接打款到绑定人的微信钱包，微信支付需开通企业付款到用户功能
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h5 class="modal-title" id="myModalLabel" style="font-size: 16px;">提示</h5>
                            </div>
                            <div class="modal-body ygsearch" style="font-size: 20px;padding: 15px 30px;">
                                <input type="text" id="ygsinput" placeholder="请输入微信昵称">
                                <span class="btn btn-sm storeblue ygbtn">搜索</span>
                                <div class="searchname" style="margin-top: 8px;"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

        <div class="form-group">
            <input type="submit" name="submit" value="提交" class="btn col-lg-3" style="color: white;background-color: #44ABF7;margin-left: 30%;"/>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        // $("#frame-0").addClass("in");
        $("#frame-0").show();
        $("#yframe-0").addClass("wyactive");
        $(".ygbtn").on("click",function(){
            var ygsinput = $("#ygsinput").val();
            console.log(ygsinput)
            if(ygsinput.length==''){
              $(".searchname").html('');
            }else{
              $(".searchname").html('')  
              var keywords = $("#ygsinput").val()
              $.ajax({
                  type:"post",
                  url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=SelectUser&m=zh_dianc",
                  dataType:"text",
                  data:{keywords:keywords},
                  success:function(data){                    
                      var data = eval('(' + data + ')')
                      console.log(data);
                      $(".searchname").show();
                      for(var i=0;i<data.length;i++){
                        $(".searchname").append('<div class="shnbox" data-dismiss="modal" id="'+data[i].id+'"><a href="javascript:void(0);"><p>'+data[i].name+'</p></a></div>')
                      }
                      $(".shnbox").each(function(){
                        $(this).click(function(){
                            // console.log($(this).attr("id"));
                            // $("#username").val($(this).html())
                            var thid = $(this).attr("id");
                            $('#username option[value='+thid+']').attr("selected", true);
                        })
                        
                      })
                      
                  }
              }) 
            }
            
        })
        
    })
</script>

