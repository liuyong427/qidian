<?php
namespace Index\Controller;
use Think\Controller;
class ApplyController extends Controller {
    public function add(){
        $data['name'] = trim(I('post.name'),' ');
		$data['email'] = trim(I('post.email'));
		$data['phone'] = trim(I('post.phone'));
		$data['content'] = trim(I('post.content'));
		if(empty($data['name'])){
			$rdata['status'] = 0;
			$rdata['msg'] = "姓名未填写";
			$this->ajaxReturn($rdata);
		}
		if(empty($data['email'])){
			$rdata['status'] = 0;
			$rdata['msg'] = "邮箱未填写";
			$this->ajaxReturn($rdata);
		}
		if(empty($data['phone'])){
			$rdata['status'] = 0;
			$rdata['msg'] = "电话未填写";
			$this->ajaxReturn($rdata);
		}
		if(empty($data['content'])){
			$rdata['status'] = 0;
			$rdata['msg'] = "内容未填写";
			$this->ajaxReturn($rdata);
		}
        $data['add_time'] = date('Y-m-d H:i:s',time());
        $rs = M('emails')->add($data);
        $rs1 = $this->sendEmail();		
        if($rs && $rs1){
			$rdata['status'] = 1;
			$rdata['msg'] = "提交成功，我们会尽快联系你";
			$this->ajaxReturn($rdata);
		}else{
			$rdata['status'] = 0;
			$rdata['msg'] = "网络错误";
			$this->ajaxReturn($rdata);
		}
		
	}
	
	public function sendEmail(){
		import("Org.Email.Smtp"); 
		//$smtp = new \Smtp();
		//echo $smtp->smtp_port;return;
		$smtpserver = "smtp.126.com";//SMTP服务器
		$smtpserverport =25;//SMTP服务器端口
		$smtpusermail = C('E_USER');//SMTP服务器的用户邮箱
		$smtpemailto = C('E_RECEIVER');//发送给谁
		$smtpuser = C('E_USER');//SMTP服务器的用户帐号
		$smtppass = C('E_PWD');//SMTP服务器的用户密码qidian123456
		$mailtitle = "系统咨询";//邮件主题
		$mailcontent = "<div>姓名：".$_POST['name']."</div>";
		$mailcontent .= "<div>电话：".$_POST['phone']."</div>";
		$mailcontent .= "<div>邮箱：".$_POST['email']."</div>";
		$mailcontent .="<div>内容：".$_POST['content']."</div>";//邮件内容 $_POST['content']
		//$mailcontent ="你好啊 嘿嘿";
		$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
		//************************ 配置信息 ****************************
		$smtp = new \smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
		$smtp->debug = false;//是否显示发送的调试信息
		$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
		if($state==""){
		  return false;
		}
		return true;
	}	
	
	
	
}

    