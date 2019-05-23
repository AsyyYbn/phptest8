<meta charset="UTF-8">
<style type="text/css">
img{height:280px;width:950px;}
li{list-style:none;}
#slider{width:950px;height:300px;margin:auto;position:relative;}
.slider_list li{position:absolute;display:none;}
.slider_list li:first-child{display:block;}
.slider_icon{position:absolute;z-index:1;left:40%;bottom:20px;font-size:0;padding:4px 8px;border-radius:12px;background-color:hsla(0,0%,100%,.3);}
.slider_icon i{display:inline-block;width:12px;height:12px;border-radius:50%;margin:0 5px;}
.btn{background:#fff;}
.arrow{display:none;width:30px;height:60px;background-color:rgba(0,0,0,.2);position:absolute;top:50%;margin-top:-30px;}
.prve{left:0;}
.next{right:0;}
.arrow span{display:block;width:10px;height:10px;border-bottom:2px solid #fff;border-left:2px solid #fff;}
.slider_left{margin:25px 0 0 10px;transform:rotate(45deg);}
.slider_right{margin:25px 0 0 5px;transform:rotate(-135deg);}
.arrow:hover{background:#444;}
#slider:hover .arrow{display:block;}
.btn_act{background:#db192a;}
</style>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(function(){
	var count = 0;
	var $li = $("#slider>ul>li");
	$(".next").click(function(){
		count++;				
		if(count == $li.length){
			count =0;
		}
		$li.eq(count).fadeIn().siblings().fadeOut();
		$(".slider_icon i").eq(count).addClass("btn_act").siblings().removeClass('btn_act');
		console.log(count);
	});
	$(".prve").click(function(){
		count--;
		if(count == -1){
			count = $li.length-1;
		}
		console.log(count);
		$li.eq(count).fadeIn().siblings().fadeOut();
		$(".slider_icon i").eq(count).addClass("btn_act").siblings().removeClass('btn_act');
	});
	$(".slider_icon i").mouseenter(function(){
		$(this).addClass('btn_act').siblings().removeClass("btn_act");
		$li.eq($(this).index()).fadeIn().siblings().fadeOut();
		count = $(this).index();
	});
});
</script>



<div id="slider">
	<ul class="slider_list">
		<li><a href="#"><img src="img/1.jpg"></a></li>
		<li><a href="#"><img src="img/2.jpg"></a></li>
		<li><a href="#"><img src="img/3.jpg"></a></li>
		<li><a href="#"><img src="img/4.jpg"></a></li>
		<li><a href="#"><img src="img/5.jpg"></a></li>
		<li><a href="#"><img src="img/6.jpg"></a></li>
		<li><a href="#"><img src="img/7.jpg"></a></li>
		<li><a href="#"><img src="img/9.jpg"></a></li>
	</ul>
	<div class="slider_icon">
		<i class="btn btn_act"></i>
		<i class="btn"></i>
		<i class="btn"></i>
		<i class="btn"></i>
		<i class="btn"></i>
		<i class="btn"></i>
		<i class="btn"></i>
		<i class="btn"></i>
	</div>
	<a href="javascript:;" class="arrow prve">
		<span class="slider_left"></span>
	</a>
	<a href="javascript:;" class="arrow next">
		<span class="slider_right"></span>
	</a>
</div>
</div>
