<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
    <style type="text/css">
    body {
        background:#FFF
    }
    </style>
        <meta charset="utf-8">
        <title>添加公告信息</title>
        <link rel="stylesheet" type="text/css" href="/CSM/Public/css/common.css"/>
        <link rel="stylesheet" type="text/css" href="__PUBLIC_/css/main.css"/>
    </head>
    <body>
        <div class="tab-content" id="tab2">
            <div class="crumb-list"><i class="icon-font"> </i><a href="/CSM/index.php/Home/Sysmessage/../Index/main">首页 </a><span class="crumb-step">&gt;</span><span class="crumb-name">添加公告信息</span></div>
          <form action="/CSM/index.php/Home/Sysmessage/add" method="post"id="checkname">
              <table class="insert-tab" width="100%">
                  <tbody>
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <tr>
              <th><label>消息标题</label></th>
              <td><input class="text-input large-input" type="text" id="large-input" name="messagetitle" /></td>
          </tr>
            <tr>
              <th><label>消息内容</label><br /></th>
              <td><textarea class="text-input textarea" id="textarea" name="messagecontent" cols="79" rows="15"></textarea></td>
          </tr>
            <tr>
                <th><label>消息是否可见</label></th>
                <td><select class = 'small-input' name = 'messagevisible'>
                    <option value='0'>是</option>
                    <option value='1'>否</option>
                </select></td>
            </tr>
            <tr>
                <th></th>
              <td><input class="btn btn-primary btn6 mr10" onClick="return check()" type="submit" value="确认添加" />
                  <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button"></td>
          </tr>
      </tbody>
      </table>
            <div class="clear"></div>
            <!-- End .clear -->
          </form>
            <script>
                function check() {
                    if (checkname.messagetitle.value == "") {
                        alert("标题不能为空");
                        return false;
                    }
                    if (checkname.messagecontent.value == "") {
                        alert("内容不能为空");
                        return false;
                    }
                    if (checkname.messagevisible.value == "") {
                        alert("可见与否不能为空");
                        return false;
                    }
                    return true;
                }
                </script>


        </div>
        <!-- End #tab2 -->
    </body>
</html>