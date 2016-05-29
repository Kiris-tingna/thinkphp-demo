$(document).ready(function () {
			var totalPic  = 5;//当前图片总数
			var currentPic = 0;//当前土拍缩影
			var playPic	=	0;//自动播放土拍缩影

			var timer = null;
			var SlideHandel = new Array();
			var pics = $('.BPics a');
			var pich = $(".BHansControl");
			var picb = $(".BPblockBg");
			var dropBlock = function(index){
				var Blockli = pich.eq(index).position();

				picb.animate({
					top:Blockli.top,
					left:Blockli.left,
				},150,'easeOutBounce');
			};
			var displayImage = function(index){
				currentPic = index;
				// alert(currentPic);
				// 添加样式
				dropBlock(currentPic);
				pich.eq(currentPic).addClass("current").siblings().removeClass("current");
				pics.eq(currentPic).fadeIn().siblings().fadeOut();
			};
			var showImage = function(index){
				clearInterval(SlideHandel);
				displayImage(index);
			};
			var showImageCall = function(){
				if(SlideHandel) clearInterval(SlideHandel);

				SlideHandel = setInterval(function(){
					currentPic++;
					if(currentPic==totalPic){
						currentPic = 0;
					}
					if(currentPic == -1){
						currentPic = totalPic - 1;
					}
					displayImage(currentPic); 
				},6000);
			};
			// 初始化
			displayImage(0);
			showImageCall();
			// 注意延迟函数的使用 必须使用闭包函数
			$(".BHansControl").on('mouseenter',function(){
				var el= $(this).index();
				clearTimeout(timer);
				timer = setTimeout(function(){showImage(el);},300);
			});
			$(".BHansControl").on('mouseleave',function(){
				clearTimeout(timer);
				timer = setTimeout(function(){showImageCall();},300);
			});
});

/*
固定列：浮动布局
定位
*/
$(function() {
	
	var oContainer = $('#content');
	var iCells = 0;
	var iWidth = 200;
	var iSpace = 10;
	var iOuterWidth = iWidth + iSpace;
	var sUrl = 'http://www.wookmark.com/api/json/popular?callback=?';
	var arrT = [];
	var arrL = [];
	var iPage = 0;
	var iBtn = true;
	
	function setCell() {
		iCells = Math.floor($(window).innerWidth() / iOuterWidth);
		if (iCells < 3) {
			iCells = 3;
		} else if (iCells > 5) {
			iCells = 5;
		}
		//alert(iCells);
		oContainer.css('width', iCells * iOuterWidth) - 10;
	}
	setCell();
	
	for (var i=0; i<iCells; i++) {
		arrT[i] = 0;
		arrL[i] = iOuterWidth * i;
	}
	//console.log(iCells);
	//console.log(arrL);
	
	function getData() {
		if (!iBtn) {
			return ;
		}
		iBtn = false;
		iPage++;
		$.getJSON(sUrl, {page:iPage}, function(jData) {
			$('#loader').show();
			$.each(jData, function(index, obj) {
				
				var oImg = $('<img />');
				var p =$("<p>").append('这里添加故事').addClass('p_des');
				var oDiv = $('<div>').addClass('p_block').append(oImg).append(p);
				//宽高
				var iHeight = obj.height * (iWidth / obj.width);
				oImg.css({
					width	:	iWidth,
					height	:	iHeight
				});
				oDiv.css({
					width : iWidth,
					height: iHeight + p.height(),
				});
				var _index = getMin();
				oDiv.css({
					left	:	arrL[_index],
					top		:	arrT[_index]
				});

				arrT[_index] += oDiv.height()+50;
				
				oContainer.append(oDiv);
				if(oContainer.height() < arrT[_index]+iHeight){
					oContainer.css({
						height:arrT[_index]+iHeight,
					});
				}
				
				var objImg = new Image();
				objImg.onload = function() {
					oImg.attr('src', this.src);
				}
				objImg.src = obj.preview;
				
				setTimeout(function() {
					$('#loader').hide();
				},1000)
				
				iBtn = true;
				
			})
			
		});
	}
	getData();
	//arrT = [11,23,5,7];
	
	function getMin() {
		var v = arrT[0];
		var _index = 0;
		
		for (var i=1; i<arrT.length; i++) {
			if (arrT[i] < v) {
				v = arrT[i];
				_index = i;
			}
		}
		return _index;
	}
	
	//alert(getMin());
	
	$(window).on('scroll', function() {
		var _index =getMin();
		var iH = $(window).scrollTop() + $(window).innerHeight();
		document.title = iH + ':' + (arrT[_index] + 50);
		if (arrT[_index] + 50 < iH) {
			getData();
		}
		
	})
	
	$(window).on('resize', function() {
		var iLen = iCells;
		setCell();
		if (iLen == iCells) {
			return ;
		}
		arrT = [];
		arrL = [];
		for (var i=0; i<iCells; i++) {
			arrT[i] = 0;
			arrL[i] = iOuterWidth * i;
		}
		oContainer.find('img').each(function() {
			
			var _index = getMin();
			/*$(this).css({
				left	:	arrL[_index],
				top		:	arrT[_index]
			});*/
			$(this).animate({
				left	:	arrL[_index],
				top		:	arrT[_index]
			}, 1000);
			arrT[_index] += $(this).height() + 10;
			
		});
	})
	
	
	
})