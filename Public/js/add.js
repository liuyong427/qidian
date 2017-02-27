
$(".cp-block").click(function(){
var id =$(this).attr('id');
getCpnew(id);
	$('body').css('overflow-y','hidden');
	var height= window.innerHeight;
	var height_bar = $('.mbtn').outerHeight();
	$("#map").css({
				  "top":0,
				  "position":"fixed",
				  "height":height+"px",
				  "width":"100%"
				 // "overflow":"auto"
				  });
	$("#map .mcon").css({'margin-top':height_bar+'px'});
	divMap();
	
	$("#map").show("slow");
	
});

$('.btn-back').click(function(){
	$('body').css('overflow-y','visible');
    $("#map").hide("slow");
	
});

$('.btn-get').click(function(){ 
   getCpnew($(this).val());
});
function getCpnew(id){
   var pid = $('#cppid').val();//alert(id);
   $.ajax({
	    type:"POST",
		url:"/News/cpnew",
		data:{'id':id,'pid':pid},
		success:function(msg){
		    $('.mc-1').html(msg['title']);
			$('.mc-2').html(msg['content']);
			if(msg['pre_id']!=null){
				$('.btn-get-pre').val(msg['pre_id']);
				$('.btn-get-pre').removeAttr('disabled').html('上一篇');
			}else{
				$('.btn-get-pre').attr('disabled','disabled').html('没有了');
                
			}
			if(msg['next_id']!=null){
				$('.btn-get-next').val(msg['next_id']);
				$('.btn-get-next').removeAttr('disabled').html('下一篇');
			}else{
				$('.btn-get-next').attr('disabled','disabled').html('没有了');
                
			}
		}
	});
}

$('.submit').click(function(){ 
   $(this).attr('disabled','disabled');
    var name = $('.name').val();
	var phone = $('.phone').val();
	var email = $('.email').val();
	var content = $('.content').val();
	var flag = false;
	$('.required').each(function(){
	    if($(this).val() == $(this).attr('title')){
		    show($(this).attr('title'),false);
  			flag = true;
			return false;
		}
	});
	if(flag == true){
	   $(this).removeAttr('disabled');
	   return  false;
	}
	$.ajax({
		type:"POST",
		url:"/Apply/add",
		data:{name:name,phone:phone,email:email,content:content},
		success:function(data){
		    if(data['status'] == 1){
			   show(data['msg'],true);
			   $('.required').each(function(){
			      $(this).html($(this).attr('title'));
				   $(this).val($(this).attr('title'));
			   });
			}else{
			    show(data['msg'],false);
			}
			$('.submit').removeAttr('disabled');
		}
	});
});

function show(info,flag){

   var color = flag == false? 'red':'green';
   var place = $('.alert-success');
   place.html(info);
   place.css('color',color).show();
   place.fadeOut(3000);
}