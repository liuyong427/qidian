
$("#login form").submit(function(){
    User.login(this);
    return false;//阻止form表单提交
});

var Cosmo = {
    shake : function(){
        Cosmo.shakeByCss();
    },
    shakeByCss : function() {
        if(this.stopShake)
            clearTimeout(this.stopShake);
        $("#login form").addClass("shake");
        this.stopShake = setTimeout("$('#login form').removeClass('shake')",1000);
    },
    shakeByJs : function() {
        this.shakeFlag = 0;
        this.timeloop  = new Object;

        $("#login form").css("position","relative");
        this.timeloop = setInterval("Cosmo.shakeAction()",100);

        this.shakeAction = function(){
            this.shakeFlag % 2 == 0 || this.shakeFlag == 0 ? $("#login form").css("left","5px") : $("#login form").css("left","0px");
            this.shakeFlag++;
            if(this.shakeFlag == 10){
                this.shakeFlag = 0;
                clearInterval(this.timeloop);
                $("#login form").css("position","static");
            }
        }
    }
}

var User = {
    verify : function(formid) {
        var status = 0;
        var alert  = 'info';
        var msg    = '';
        var username_len = $(formid).find("input[name='account']").val().length;
        var password_len = $(formid).find("input[name='password']").val().length;
        if(username_len == 0) {
            status = 101;
            msg   = '<strong>提示:</strong>用户名为空!';
        }
		/*
        else if(username_len < 5) {
            status = 104;
            msg   = '<strong>提示:</strong>用户名长度不少于5位!';
        }
        else if (username_len > 12) {
            status = 105;
            msg   = '<strong>提示:</strong>用户名长度不大于12位!';
        }*/
        else if(password_len == 0) {
            status = 102;
            msg   = '<strong>提示:</strong>密码为空!"';
        }
        return "{STATUS: " + status + ", MSG: {alert: '" + alert + "', tips: '" + msg + "'}}";
    },
    json2Obj : function(json) {
        return eval("("+json+")");
    },
    login : function(formid) {
        var info = User.json2Obj(User.verify(formid));
        if(info.STATUS == 0) {
            $.ajax({
                url     : $(formid).attr("action"),
                type    : $(formid).attr("method"),
                data    : $(formid).serialize(),
                success : function(json) {
                    //var data = User.json2Obj(json); 
					var data = json;
                    if(data.STATUS == 0) {
                        window.location.href = data.MSG;
                    }
                    else {
                        User.error(data.MSG.alert, data.MSG.tips);
                    }
                }
            });
        }
        else {
            User.error(info.MSG.alert, info.MSG.tips);
        }
    },
    error : function(alert, tips) {
        Cosmo.shake();
        $("div.tips").html(Tips.openAutoClose(alert,tips,3000));
    }
}
var Tips = {
    open : function(alertClass,info) {
        var autoClose = 0;
        var tip = "<div class='alert alert-"+alertClass+" alert-dismissible fade in'>";
            tip += "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
            tip += "<span aria-hidden='true'>&times;</span>";
            tip += "</button>"+info+"</div>";
        return tip;
    },
    openAutoClose : function(alertClass,info,ms) {
        if(this.autoClose)
            clearTimeout(this.autoClose);
        var tip = Tips.open(alertClass,info);
        this.autoClose = setTimeout("Tips.close('div.tips .alert')",ms);
        return tip;
    },
    close : function(tip){
        $(tip).alert('close');
    }
}
var Process = {
    start : function() {
        $(window).on("ready",function(){
            //开启进度环
            NProgress.configure({ showSpinner: true });
            //进度条开始
            NProgress.start();
        });
    },
    end : function() {
        $(window).on("load",function(){
            NProgress.done(true);
        });
    }
}
Process.start();
Process.end();