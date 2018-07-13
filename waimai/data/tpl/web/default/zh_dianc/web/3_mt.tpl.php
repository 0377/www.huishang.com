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
    <li class="active"><a href="javascript:void(0);">门店媒体</a></li>
</ul>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
        <div class="panel panel-default ygdefault">
            <div class="panel-heading wyheader">
                门店媒体
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">音乐链接</label>
                    <div class="col-sm-10">
                        <input type="text"  name="store_mp3" value="<?php  echo $info['store_mp3'];?>" id="web_name" class="form-control" />
                         <span class="help-block">*请输入音乐链接，目前支持的格式有 m4a, aac, mp3, wav</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启音乐</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy1" name="is_mp3" value="1" <?php  if($info['is_mp3']==1 || empty($info['is_mp3'])) { ?>checked<?php  } ?> />
                            <label for="emailwy1">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy2" name="is_mp3" value="2" <?php  if($info['is_mp3']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy2">关闭</label>
                        </label>    
                    </div>
                </div>
                
                

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">视频链接</label>
                    <div class="col-sm-10">
                        <input type="text"  name="store_video" value="<?php  echo $info['store_video'];?>" id="web_name" class="form-control" />
                         <span class="help-block">*请输入视频链接，目前支持的格式有mp4, mov，avi</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启视频</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="emailwy3" name="is_video" value="1" <?php  if($info['is_video']==1 || empty($info['is_video'])) { ?>checked<?php  } ?> />
                            <label for="emailwy3">开启</label>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="emailwy4" name="is_video" value="2" <?php  if($info['is_video']==2) { ?>checked<?php  } ?> />
                            <label for="emailwy4">关闭</label>
                        </label>    
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
        $("#frame-4").show();
        $("#yframe-4").addClass("wyactive");
    })
</script>