<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" type="text/css" href="../addons/zh_dianc/template/public/ygcsslist.css">
<style type="text/css">

    .row{padding-top: 20px;padding-bottom: 50px;}
    .neirong>tr:nth-child(odd){background-color: #F4F6F7;}
    .datatitle>th{text-align: center;}
    .table{text-align: center;}
</style>
<ul class="nav nav-tabs">
    <span class="ygxian"></span>
    <div class="ygdangq">当前位置:</div>    
    <li class="active"><a href="javascript:void(0)">销售统计</a></li>
</ul>
<div class="main">
    <!-- <div class="panel panel-default">
        <div class="panel-body">
            <a class="btn btn-primary" href="javascript:location.reload()"><i class="fa fa-refresh"></i>刷新</a>
        </div>
    </div> -->
    <div class="panel panel-default">
        <div class="panel-heading">
            销售统计
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <div class="row">
            <input type="hidden" value="<?php  echo $storeid;?>" id="storeid" >
                <div class="col-md-12">
                    <div class="col-md-2">
                        <select name="year" class='form-control'>
                            <option value="2010"  >2010年</option>
                            <option value="2011"  >2011年</option>
                            <option value="2012"  >2012年</option>
                            <option value="2013"  >2013年</option>
                            <option value="2014"  >2014年</option>
                            <option value="2015"  >2015年</option>
                            <option value="2016"  >2016年</option>
                            <option value="2017"  >2017年</option>
                            <option value="2018" selected="selected">2018年</option>
                            <option value="2019">2019年</option>
                            <option value="2020"  >2020年</option>
                            <option value="2021"  >2021年</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="month" class='form-control' id="sele">
                            <option value='0'>月份</option>
                            <option value="1"  >1月</option>
                            <option value="2"  >2月</option>
                            <option value="3"  >3月</option>
                            <option value="4"  >4月</option>
                            <option value="5"  >5月</option>
                            <option value="6"  >6月</option>
                            <option value="7"  >7月</option>
                            <option value="8"  >8月</option>
                            <option value="9"  >9月</option>
                            <option value="10"  >10月</option>
                            <option value="11"  >11月</option>
                            <option value="12"  >12月</option>
                        </select>
                    </div>
                    <div class="col-md-1"><button class="btn btn-md storeblue" id="tijiao" type="submit"> 搜索</button></div>
                </div>
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead >
                            <tr class="datatitle">
                                <th class="col-md-1">日期</th>
                                <th class="col-md-2">交易单数</th>
                                <th class="col-md-2">销售额</th>
                                <th class="col-md-7"></th>
                            </tr>
                        </thead>
                        <tbody class="neirong">
                            <!-- <tr>
                                <td class="col-md-1">1</td>
                                <td class="col-md-11">0.00</td>
                            </tr>     -->                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php  echo $pager;?>
</div>
<!-- <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?> -->

<script language='javascript'>
    // $("#frame-5").addClass("in");
    $("#frame-5").show();
    $("#yframe-5").addClass("wyactive");

    var year = $('select[name=year]').val();
    var month =$('select[name=month]').val();
    var inpname = $("#storeid").val();
    // console.log(inpname)

    var sele = $('#sele').val();
    $.ajax({
        type:"post",
        url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=Time2&m=zh_dianc",
        dataType:"json",
        data:{nian:year,store_id:inpname},
        success:function(data){
            // console.log(data);
            // location.reload();
            var myue=1;
            for(var i=0;i<data.length;i++){
                var content = $('<tr><td class="col-md-1">'+myue+'</td><td class="col-md-2">'+data[i].number+'</td><td class="col-md-2">'+data[i].money+'</td><th class="col-md-7"></th></tr>');
                $(".neirong").append(content);
                myue++;
            }
        }
    })
    $('#tijiao').click(function(){
        var year = $('select[name=year]').val();
        var month =$('select[name=month]').val();
        var sele = $('#sele').val();
        $(".neirong").html('');
        if(sele==0){
            // console.log(sele)
            $.ajax({
                type:"post",
                url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=Time2&m=zh_dianc",
                dataType:"json",
                data:{nian:year,store_id:inpname},
                success:function(data){
                    // console.log(data);
                    // location.reload();
                    var myue=1;
                    for(var i=0;i<data.length;i++){
                        var content = $('<tr><td class="col-md-1">'+myue+'</td><td class="col-md-2">'+data[i].number+'</td><td class="col-md-2">'+data[i].money+'</td><th class="col-md-7"></th></tr>');
                        $(".neirong").append(content);
                        myue++;
                    }
                }
            })
        }else{

            // console.log(sele)
            $.ajax({
                type:"post",
                url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=Time&m=zh_dianc",
                dataType:"json",
                data:{nian:year,yue:month,store_id:inpname},
                success:function(data){
                     console.log(data);
                    // location.reload();
                    var myue=1;
                    for(var i=0;i<data.length;i++){
                        var content = $('<tr><td class="col-md-1">'+myue+'</td><td class="col-md-2">'+data[i].number+'</td><td class="col-md-2">'+data[i].money+'</td><th class="col-md-7"></th></tr>');
                        $(".neirong").append(content);
                        myue++;
                    }
                }
            })
        }       
        
    })
 </script>