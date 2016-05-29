/**
 * 幻灯片插件cubeslide
 * @param  {options} $ 传入参数
 * @return {动作和html}   
 */
(function($) {
	// 全局设置
	var setting 	= new Array;//设置数组
	var imgsrc	 	= new Array;//图像数组
	var imgtitle 	= new Array;//图像数组
	var content 	= new Array;//外层
	var order		= new Array;
	var interval	= new Array;
	var params		= new Array;//设置数组
	var appInterval = new Array;

	var animateTran	= 0;
	var imagePos 	= 0;
	var squarePos 	= 0;
	var liPos		= 0;
	var reverse		= 1;
	// 设置
	$.fn.cubeslider= $.fn.CubeSlider = function(options){

		init = function( object ){
			// 默认default values
			var defaults = {	
				width: 900,  // width of slider panel
				height: 500, // height of slider panel
				spw: 6, // squares per width
				sph: 3, // squares per height
				delay: 3000, // delay between images in ms
				sDelay: 50, // delay beetwen squares in ms
				// opacity: 0.7, // opacity of title and navigation
				// titleSpeed: 500, // speed of title appereance in ms
				effect: '', // random, swirl, rain, straight
			// links : true, // show images as links 
				// hoverPause: true // pause on hover		
			};
			// 设置数组
			setting = $.extend({}, defaults , options);

			var id = object.attr('id');
			// 原来的source层 ul 层实现隐藏
			source 			= object.find('ul.slide_Feed').hide();
			var img 		= source.find("li").find("img");
			// var text_des 	= source.find("li").find("p.desprition");

			// 压入数组
			img.each(function(){
				imgsrc.push($(this).attr('src'));
				imgtitle.push($(this).attr('alt'));
			});

			// content区
			object.find('div.slide_Content').css({
				width:setting.width,
				height:setting.height
			});

			// info区
			object.find('div.slide_Handel').css({
				bottom: 	(setting.height/2),
			});

			imagePos 	= 0;
			animateTran	= 0;
			squarePos 	= 0;
			reverse		= 1;
			// 动画匹配
			params      = [
			[3,1],
			[3,2],
			[3,3],
			[3,4],
			[3,5],
			[3,6],
			[3,7],
			[3,8],
			[0,9],
			[0,10],
			[0,11]
			];
			// 样式和防止小方块
			$.setPannel();
			$.setHandel();
			// 调用
			$.transition(1);
			$.transitionCall();
		}
		// 设置样式函数
		$.setPannel = function(){
			// 创建一种绝对定位的block
			// ********************block样式**********************
			var block = $("<div>").addClass('cube');
			var cube  = new Array;
			var inner_a = new Array;
			var inner_b = new Array;

			// 计算位置
			counter = sLeft = sTop = 0;
			// 计算宽度和长度
			tWidth  = sWidth  = parseInt(setting.width/setting.spw);
			tHeight = sHeight = parseInt(setting.height/setting.sph);

			tgapx = gapx = setting.width - setting.spw  * sWidth;//剩余宽度
			tgapy = gapy = setting.height - setting.sph * sHeight;//剩余长度
			// 剩余距离的处理
			for (var i = 1; i <= setting.sph; i++) {
				gapx = tgapx;
				// 每次重置gapx
				if (gapy > 0) {
					gapy--;
					sHeight = tHeight + 1;
				} else{
					sHeight = tHeight;
				}

				for (var j = 1; j <= setting.spw; j++) {
					if (gapx > 0) {
						gapx--;
						sWidth = tWidth + 1;
					} else{
						sWidth = tWidth;
					}
					// 计数器+1
					counter++;
					// clone 方法不返回addClass之后的元素
					cube = block.clone().attr('id','cube_'+i+'_'+j).css({
						// 大小设置
						'width': sWidth,
						'height':sHeight,
						'top':   sTop,
						'left':  sLeft
					});
					inner_a = block.clone().attr('class','inner_a').css({
						'width':sWidth - 1,
						'height':sHeight -1,						
						'background-image':'url('+imgsrc[0]+')',
						'background-position': -sLeft +'px '+(-sTop+'px'),
					});
					inner_b = block.clone().attr('class','inner_b').css({
						'width':sWidth - 1,
						'height':sHeight -1,						
						'background-image':'url('+imgsrc[0]+')',
						'background-position': -sLeft +'px '+(-sTop+'px'),
					});
					cube.append(inner_a);
					cube.append(inner_b);
					$('.slide_Content').append(cube);

					// 累加位置
					sLeft += sWidth;
				}
				// 累加位置
				sTop += sHeight;
				sLeft = 0;
			}
			// 是否暂停
			// if(options.hoverPause){
			// li.each(function(){
			// 	$(this).mouseover(function(){
			// 		options.pause = true;
			// 	});
			// 	$(this).mouseout(function(){
			// 		options.pause = false;
			// 	});
			// });						
			// }
		};
		$.setHandel = function(){
			var slideUl = $(".slide_Nav").find('ul');

			for( var i = 0; i < imgsrc.length ; i++){
				var temp = $("<li>").attr('data-order',i);
				slideUl.append(temp);
			}

			$(".slide_Nav").find("ul>li").on('mouseenter', function(){

				if(liPos == $(this).attr('data-order')){
					return;
				}
				else{
					var Pos= $(this).attr('data-order');
					liPos = Pos;
					$(this).addClass("active").siblings().removeClass("active");
					// 解除绑定
					clearInterval(interval);
					$.transition(parseInt(Pos));
				}
			});

			$(".slide_Nav").find("ul>li").on('mouseleave', function(){
				$.transitionCall();
			});
		}
		// 
		$.transitionCall = function(){
			clearInterval(interval);	
			delay = setting.delay + setting.spw * setting.sph * setting.sDelay;
			interval = setInterval(function() { $.transition() }, delay);
		}

		// transitions
		// 参数 e 效果类型索引
		// 参数 t 效果动画索引
		$.transition = function(direction){

			clearInterval(appInterval);
			// a层在上
			$(".inner_a").css({
				'opacity':1,
				'top':0,
				'left':0,
				'background-image': 'url('+imgsrc[imagePos]+')' 
			});
			if(typeof(direction) == "undefined")
				imagePos++;
			else
				if(direction == 'prev')
					imagePos--;
				else
					imagePos= direction;

			if  (imagePos == imgsrc.length) {
				imagePos = 0;
			}
			
			if (imagePos  == -1){
				imagePos = imgsrc.length-1;
			}
			// if(options.pause == true) return;
			// alert(imagePos);
			if(animateTran >= 11)
				animateTran = 0;

			var ani_e = params[animateTran][0];
			var ani_t = params[animateTran][1];

			$.effect(ani_e);//产生order数组

			$('.slide_Info').find('a').html(imgtitle[imagePos]);
			liPos = imagePos;//跟新lipos
			$('.slide_Nav').find('ul>li').eq(imagePos).addClass("active").siblings().removeClass("active");
			squarePos = 0;
			appInterval = setInterval(function() { $.appereance(order[squarePos] , ani_t );},setting.sDelay);

			animateTran ++;
		};

		$.appereance = function(sid , t){

			if (squarePos == setting.spw * setting.sph) {
				clearInterval(appInterval);
				return;
			}

			eval('$.animatePic'+t+'(sid);');
			// switch (t) {
			// 	case 1:
			// $.animatePic1(sid);
			// 	break;
			// 	case 2:
			// $.animatePic2(sid);
			// 	break;
			// 	case 3:
			// $.animatePic3(sid);
			// 	break;
			// 	case 4:
			// $.animatePic4(sid);
			// 	break;
			// 	case 5:
			// $.animatePic5(sid);
			// 	break;
			// 	case 6:
			// $.animatePic6(sid);
			// 	break;
			// 	case 7:
			// $.animatePic7(sid);
			// 	break;
			// 	case 8:
			// $.animatePic8(sid);
			// 	break;
			// 	case 9:
			// $.animatePic9(sid);
			// 	break;
			// 	case 10:
			// $.animatePic10(sid);
			// 	break;
			// 	case 11:
			// $.animatePic11(sid);
			// 	break;
			// 	default:
			// $.animatePic1(sid);	
			// 	break;
			// }
			//动画效果
			squarePos ++;
		};
		// transition
		$.animatePic1 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = $('#cube_'+sid).width();
			var h = $('#cube_'+sid).height();

			inner_b.css({ 
				opacity: 0, 
				'background-image': 'url('+imgsrc[imagePos]+')',
				top:h,
				left:-w
			});
			// 出现
			inner_b.animate({ 
				top:0,
				left:0,
				opacity: 1
			},300,'easeInOutCirc');
			// 小时
			inner_a.animate({ 
				top: -h,
        		left: w,
        		opacity: 0
			}, 300,'easeInOutCirc');


		};
		// 
		$.animatePic2 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = $('#cube_'+sid).width();
			var h = $('#cube_'+sid).height();

			inner_b.css({ 
				opacity: 0, 
				'background-image': 'url('+imgsrc[imagePos]+')',
				top:h,
			});
			// 出现
			inner_b.animate({ 
				top:0,
				opacity: 1
			},300,'easeInOutCirc');
			// 小时
			inner_a.animate({ 
				top: -h,
        		opacity: 0
			}, 300,'easeInOutCirc');
		};
		// 
		$.animatePic3 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = $('#cube_'+sid).width();
			var h = $('#cube_'+sid).height();

			inner_b.css({ 
				opacity: 0, 
				'background-image': 'url('+imgsrc[imagePos]+')',
				top:-h,
			});
			// 出现
			inner_b.animate({ 
				top:0,
				opacity: 1
			},500,'easeInOutCirc');
			// 小时
			inner_a.animate({ 
				top: h,
        		opacity: 0
			},500,'easeInOutCirc');
		};
		// 
		$.animatePic4 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = inner_b.width();
			var h = inner_b.height();

			inner_b.hide();
			// a
			inner_a.animate({ 
				top: 	h/4,
        		left: 	w/4,
        		width: 	w/2,
        		height: h/2,
        		opacity: 0.5
			}, 300,'easeInBack',function(){
				$(this).css('background-image','url('+imgsrc[imagePos]+')').animate({
					top:0,
					left:0,
					width:w,
					height:h,
					opacity:1
				},300,'easeOutBack');
			});
			inner_b.show();
		};
		// 比较好！！！！！
		$.animatePic5 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = $('#cube_'+sid).width();
			var h = $('#cube_'+sid).height();

			inner_b.css({ 
				opacity: 1, 
				'background-image': 'url('+imgsrc[imagePos]+')',
			});

			inner_a.animate({
				opacity:0,
			},300);
		};
		// 比教好
		$.animatePic6 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = inner_b.width();
			var h = inner_b.height();

			inner_b.css({
				'background-image': 'url('+imgsrc[imagePos]+')',
			});

			inner_a.animate({
				height:0,
				opacity:0.1,
			},150,function(){
				$(this).css({
					height:h,
					opacity:0
				});
			});
		};
		// 
		$.animatePic7 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = inner_b.width();
			var h = inner_b.height();

			inner_b.css({
				'background-image': 'url('+imgsrc[imagePos]+')',
			});
			// a
			inner_a.animate({ 
				top: 	h/4,
        		left: 	w/4,
        		width: 	w/2,
        		height: h/2,
        		opacity: 0
			}, 500,'easeOutExpo',function(){
				$(this).css({
					width: 	w,
					height: h,
					opacity:0
				});
			});
		};
		// 
		$.animatePic8 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = $('#cube_'+sid).width();
			var h = $('#cube_'+sid).height();

			inner_b.css({ 
				opacity: 1, 
				'background-image': 'url('+imgsrc[imagePos]+')',
			});

			inner_a.animate({
				left: 	w,
				opacity:0,
			},100);
		};
		$.animatePic9 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = $('#cube_'+sid).width();
			var h = $('#cube_'+sid).height();

			inner_b.css({ 
				opacity: 1,
				top: -h, 
				'background-image': 'url('+imgsrc[imagePos]+')',
			});

			inner_a.animate({
				top: 	h,
			},250);

			inner_b.animate({
				top: 	0,
			},250);
		};
		// 
		$.animatePic10 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = $('#cube_'+sid).width();
			var h = $('#cube_'+sid).height();

			var _up = $.randomDirection();
      		var _left = $.randomDirection();

      		if(!_up && !_left){
      			_up = 1;//1,0
      		}else if(_up == 1 && _left == 1){
      			_up--;//0,1
      		}else if(_up == -1 && _left == -1){
      			_up++;//0,-1
      		}else if(_up * _left == -1){
      			_up = -1;
      			_left = 0;
      		}else{

      		}

      		inner_b.css({
      			opacity: 1,
				top: -1 * _up * h,
				left:-1 * _left * w,
				'background-image': 'url('+imgsrc[imagePos]+')',
      		});
      		inner_b.animate({
      			top: 0,
      			left: 0,
      		},250);

      		inner_a.animate({
      			top: h * _up,
      			left: w *_left,
      		},250);
		};
		$.animatePic11 = function(sid){
			var inner_a = $('#cube_'+sid).find(".inner_a");
			var inner_b = $('#cube_'+sid).find(".inner_b");
			var w = $('#cube_'+sid).width();
			var h = $('#cube_'+sid).height();

			var _up = $.randomDirection();
      		var _left = $.randomDirection();

      		if(!_up && !_left){
      			_up = 1;//1,0
      		}else if(_up == 1 && _left == 1){
      			_up--;//0,1
      		}else if(_up == -1 && _left == -1){
      			_up++;//0,-1
      		}else if(_up * _left == -1){
      			_up = -1;
      			_left = 0;
      		}else{
      			
      		}

      		inner_b.css({
      			opacity: 1,
				top: 0,
				left:0,
				'background-image': 'url('+imgsrc[imagePos]+')',
      		});

      		inner_a.animate({
      			top: h * _up,
      			left: w *_left,
      			opacity : 0,
      		},250);
		};
		// 
		$.randomDirection = function(){
			var interger = Math.random();
			if (interger < 0.333) 
      			interger = -1;
      		else if (interger < 0.666) 
      			interger = 0;
      		else 
      			interger = 1;
			return interger;
		};
		// effects 
		$.effect = function(e){
			
			effA = ['random','swirl','rain','straight'];

			if(setting.effect == '')
				eff = effA[e];
			else
				eff = setting.effect;

			order = new Array();

			if(eff == 'random'){
				counter = 0;
					for(i=1;i <= setting.sph;i++){
				  		for(j=1; j <= setting.spw; j++){	
				  			order[counter] = i+'_'+j;
							counter++;
				  		}
				  	}	
				$.random(order);
			}
			
			if(eff == 'rain')	{
				$.rain();
			}
			
			if(eff == 'swirl')
				$.swirl();
				
			if(eff == 'straight')
				$.straight();
				
			reverse *= -1;

			if(reverse > 0){
				// order.reverse();
			}

		};
		// shuffle array function
		$.random = function(arr) {
						
		  var i = arr.length;
		  if ( i == 0 ) return false;
		  while ( --i ) {
		     var j = Math.floor( Math.random() * ( i + 1 ) );
		     var tempi = arr[i];
		     var tempj = arr[j];
		     arr[i] = tempj;
		     arr[j] = tempi;
		   }
		};

		//swirl effect by milos popovic
		$.swirl = function(){

			var n = setting.sph;
			var m = setting.spw;

			var x = 1;
			var y = 1;
			var going = 0;
			var num = 0;
			var c = 0;
			
			var dowhile = true;
						
			while(dowhile) {
				
				num = (going==0 || going==2) ? m : n;
				
				for (i=1;i<=num;i++){
					
					order[c] = x+'_'+y;
					c++;

					if(i!=num){
						switch(going){
							case 0 : y++; break;
							case 1 : x++; break;
							case 2 : y--; break;
							case 3 : x--; break;
						
						}
					}
				}
				
				going = (going+1)%4;

				switch(going){
					case 0 : m--; y++; break;
					case 1 : n--; x++; break;
					case 2 : m--; y--; break;
					case 3 : n--; x--; break;		
				}
				
				check = $.max(n,m) - $.min(n,m);			
				if(m<=check && n<=check)
					dowhile = false;
									
			}
		};
		// rain effect
		$.rain = function(){
			var n = setting.sph;
			var m = setting.spw;

			var c = 0;
			var to = to2 = from = 1;
			var dowhile = true;


			while(dowhile){
				
				for(i=from;i<=to;i++){
					order[c] = i+'_'+parseInt(to2-i+1);
					c++;
				}
				
				to2++;
				
				if(to < n && to2 < m && n<m){
					to++;	
				}
				
				if(to < n && n>=m){
					to++;	
				}
				
				if(to2 > m){
					from++;
				}
				
				if(from > to) dowhile= false;
				
			}			

		};
		// straight effect
		$.straight = function(object){
			counter = 0;
			for(i=1;i <= setting.sph;i++){
				for(j=1; j <= setting.spw; j++){	
					order[counter] = i+'_'+j;
					counter++;
				}
				
			}
		}

		$.min = function(n,m){
			if (n>m) return m;
			else return n;
		}
		
		$.max = function(n,m){
			if (n<m) return m;
			else return n;
		}
		//初始化
		init(this);
	}

})(jQuery);