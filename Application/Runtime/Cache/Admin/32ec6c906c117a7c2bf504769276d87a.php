<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/tp/qidian/Public/login/css/bootstrap.min.css" rel="stylesheet" media="screen" />
        <!-- <link href="/tp/qidian/Public/login/css/glyphicons.css" rel="stylesheet" /> -->
        <link href="/tp/qidian/Public/login/css/font-awesome.min.css" rel="stylesheet" />
        <link href="/tp/qidian/Public/login/css/nprogress.css" rel="stylesheet" />
        <!-- <link rel="stylesheet" href=".//assets/css/bootstrap-theme.min.css"> -->
        <link href="/tp/qidian/Public/login/css/default/default.css" rel="stylesheet" />
    </head>
    <body>
            <div class="container-fluid tofocus">
                <div id="login" class="center-block">
                    <div class="avatar">
                        <img alt="" class="avatar img-circle hide1" src="/tp/qidian/Public/login/img/avatar/avatar.png">
                    </div>
                    <form action="/tp/qidian/admin.php/Login/login" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                <input type="text" name="account" class="form-control" placeholder="登录名" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-key"></span></span><!-- keys -->
                                <input type="password" name="password" class="form-control" placeholder="密码" />
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" value="TRUE" /> 记住我
                            </label>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block">登陆</button>
                    </form>
                    <div class="tips">
                    </div>
                </div>
            </div>
            <script src="/tp/qidian/Public/login/js/jquery-3.1.0.min.js"></script>
            <script src="/tp/qidian/Public/login/js/bootstrap.min.js"></script>
            <script src="/tp/qidian/Public/login/js/nprogress.js"></script>
            <script src="/tp/qidian/Public/login/js/default.js"></script>
    </body>
</html>