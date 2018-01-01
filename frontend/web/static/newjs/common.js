//屏蔽右键相关
var jsArgument = document.getElementsByTagName("script")[document.getElementsByTagName("script").length-1].src;	//获取传递的参数
rightButton = jsArgument.substr(jsArgument.indexOf("rightButton=") + "rightButton=".length, 1);
if (rightButton == "1")
{
	document.oncontextmenu = function(e){return false;}
	document.onselectstart = function(e){return false;}
	if (navigator.userAgent.indexOf("Firefox") > 0)
	{
		document.writeln("<style>body {-moz-user-select: none;}</style>");
	}
}

//滚动
function marquee(i, direction)
{
	var obj = document.getElementById("marquee" + i);
	var obj1 = document.getElementById("marquee" + i + "_1");
	var obj2 = document.getElementById("marquee" + i + "_2");

	if (direction == "up")
	{
		if (obj2.offsetTop - obj.scrollTop <= 0)
		{
			obj.scrollTop -= (obj1.offsetHeight + 20);
		}
		else
		{
			var tmp = obj.scrollTop;
			obj.scrollTop++;
			if (obj.scrollTop == tmp)
			{
				obj.scrollTop = 1;
			}
		}
	}
	else
	{
		if (obj2.offsetWidth - obj.scrollLeft <= 0)
		{
			obj.scrollLeft -= obj1.offsetWidth;
		}
		else
		{
			obj.scrollLeft++;
		}
	}
}

function marqueeStart(i, direction)
{
	var obj = document.getElementById("marquee" + i);
	var obj1 = document.getElementById("marquee" + i + "_1");
	var obj2 = document.getElementById("marquee" + i + "_2");

	obj2.innerHTML = obj1.innerHTML;
	var marqueeVar = window.setInterval("marquee("+ i +", '"+ direction +"')", 20);
	obj.onmouseover = function(){window.clearInterval(marqueeVar);}
	obj.onmouseout = function(){marqueeVar = window.setInterval("marquee("+ i +", '"+ direction +"')", 20);}
}

//设为首页
function setHomePage()
{
	if(document.all)
	{
		var obj = document.links(0);
		if (obj)
		{
			obj.style.behavior = 'url(#default#homepage)';
			obj.setHomePage(window.location.href);
		}
  	}
	else
	{
		if(window.netscape)
		{
			try
			{
				netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
			}
			catch (e)
			{
				window.alert("此操作被浏览器拒绝，请通过浏览器菜单完成此操作！");
			}
		}
   	}
}

//加入收藏
function addFavorite()
{
	var url		= document.location.href;
	var title	= document.title;
    try
    {
        window.external.addFavorite(sURL, sTitle);
    }
    catch (e)
    {
        try
        {
            window.sidebar.addPanel(sTitle, sURL, "");
        }
        catch (e)
        {
            alert("加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}

//jquery 返回顶部
$(function(){
	$(".gotop").css("right",($("html").outerWidth() - 980) /2 -84).hide();
	$(window).scroll(function(){
		$(".gotop").css("right",($("html").outerWidth() - 980) /2 -84);
	})
	$('.gotop').click(function(){
		var goTop = setInterval(function(){
			$(window).scrollTop($(window).scrollTop()/1.1)
			if($(window).scrollTop() < 1) clearInterval(goTop);
		},8);  
		return false;
	});
	$(window).scroll(function(){
		var top = $(window).scrollTop();
		if(top > 200) {
			$('.gotop').show();
		} else {
			$('.gotop').hide();
		}
	});
});

//左右等高
function equalHeight(){
	var a = $(".sidebar").height();
	var b = $(".main").height();
	if ( a >= b){
		$(".main").height(a);
	}
	else if ( a <= b){
		$(".sidebar").height(b);
	}
}

//横向菜单
function Nav_1(){
	$(".nav li").hover(function(){
		$(this).find("a:eq(0)").addClass("current");
		$(this).find(".subNav").width($(this).find(".subNav a").length*$(this).find(".subNav a").innerWidth());
		$(this).find(".subNav").slideToggle();
	},function(){
		$(this).find(".subNav").hide();
		$(this).find("a:eq(0)").removeClass("current");
	})
	$(".subNav").hover(function(){
	},function(){
		$(this).hide();
	})
}

//纵向菜单
function Nav(){
	var mst;
	$(".nav li").hover(function(){
		var _this = $(this)
		$(this).find("a:eq(0)").addClass("cur");
		mst = setTimeout(function(){
			_this.find(".subNavBox").slideDown(200);
			mst = null;
		},300)
	},function(){
		if(mst!=null) {clearTimeout(mst)};
		$(this).find("a:eq(0)").removeClass("cur");
		$(this).find(".subNavBox").slideUp(200);
	})
	$(".subNavBox").hover(function(){
	},function(){
		$(this).slideUp(200);
	})
}

function nowDate(){
var d, s = "";
var x = new Array("星期日", "星期一", "星期二","星期三","星期四", "星期五","星期六");
d = new Date();
s+=d.getFullYear()+"-"+(d.getMonth() + 1)+"-"+d.getDate()+" ";
s+=x[d.getDay()];
document.write(s);
}