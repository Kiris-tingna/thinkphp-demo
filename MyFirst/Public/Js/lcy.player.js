$(document).ready(function(){
	// 播放列表
	var playlist = new Array();
	/* 预设置
	*	repeat		本地存储 重复 否
	* 	shuffle 	本地存储 随机 否
	*  	continous	连续播放 是
	*   autoplay	自动播放 是
	*/
	var repeat 		= localStorage.repeat || 0,
		shuffle 	= localStorage.shuffle || 'false',
		continous 	= true,
		autoplay 	= true,
		// 歌词监听事件
		currentH 	= 0,
		text 		= new Array(),
		time 		= new Array(),
		// 歌词是否滚动
		isScorllor	= false,
		preloadH	= 5;//多少航后开始滚动

	// 列表数据 获取
	$("#playlist li").each(function(){
		var obj 	= {};
		// 组合对象
		obj.title 	= this.title.replace('.mp3','');
		obj.mp3 	= './Data/' + this.title;
		obj.artist = 'ceshi';
		// json数组
		playlist.push(obj);	//组合一个json数组playlist
	});

	var time = new Date(),															//当前时间
		currentTrack = shuffle === 'true' ? time.getTime() % playlist.length : 0,	//当前第几首 随机一首 第一首 
		// getTime() 返回从 1970 年 1 月 1 日至今的毫秒数  %取余 
		trigger = false,//不明
		audio, timeout, isPlaying, playCounts;
		// audio 音频对象
		
	// 播放函数
	var play = function(){
		audio.play();								//play方法开始播放当前的音频或视频
		$('.playback').find('i').removeClass("fa-pause").addClass("fa-play");			//暂停->播放
		timeout = setInterval(updateProgress, 500);	//0.5秒更新一次进度条 timeout为更新函数的ID标示
		isPlaying = true;							//正在播放状态
	}

	// 暂停函数
	var pause = function(){
		audio.pause();								//pause方法暂停当前的音频或视频
		$('.playback').find('i').removeClass("fa-play").addClass("fa-pause");		//播放->暂停
		clearInterval(updateProgress);				//清除更新进度条
		isPlaying = false;							//暂停状态
	}

	// 根据毫秒数进度条位置
	var setProgress = function(value){
		var currentSec = parseInt(value%60) < 10 ? '0' + parseInt(value%60) : parseInt(value%60),
			ratio = value / audio.duration * 100;			//已播放毫秒数占总时间的百分比

		$('.timer').html(parseInt(value/60)+':'+currentSec);//分:秒
		$('.progress .pace').css('width', ratio + '%');		//占总长度的百分比
		$('.progress .slider span').css('left', ratio + '%');	//指针位置百分比
	}
	//更新进度条
	var updateProgress = function(){
		setProgress(audio.currentTime);						//currentTime当前毫秒数
	}

	// 进度条滑块
	$('.progress .slider').slider({step: 0.1, slide: function(event, ui){
		clearInterval(updateProgress);							//清除更新进度条事件
		// jquery ui slider max预设100 min预设0 步进0.1
		audio.pause();//暂停
		$(this).addClass('enable');						//设置样式
		setProgress(audio.duration * ui.value / 100);	//ui.value 当前滑块值 100为满
	}, stop: function(event, ui){
		// 停止拖动
		audio.play();//播放
		audio.currentTime = audio.duration * ui.value / 100;//设置歌曲当前时间
		$(this).removeClass('enable');					//去除样式
		timeout = setInterval(updateProgress, 500);		//继续绑定更新进度条的事件
	}});

	// 声音滑块
	var setVolume = function(value){
		// 根据相对值(1 为 满 一般为 0.x )来设置样式
		audio.volume = localStorage.volume = value;
		$('.volume .pace').css('width', value * 100 + '%');
		$('.volume .slider span').css('left', value * 100 + '%');
	}

	var volume = localStorage.volume || 0.5;//声音预设50%
	//声音拖动
	$('.volume .slider').slider({max: 1, min: 0, step: 0.01, value: volume, slide: function(event, ui){
		setVolume(ui.value);
		$(this).addClass('enable');
		$('.mute').find('i').removeClass('fa-volume-off').addClass('fa-volume-up');	//不静音
	}, stop: function(){
		$(this).removeClass('enable');
	}}).children('.pace').css('width', volume * 100 + '%');
	//静音的切换
	$('.mute').click(function(){
		if ($(this).find('i').hasClass('fa-volume-off')){
			setVolume($(this).data('volume'));
			$(this).find('i').removeClass('fa-volume-off').addClass('fa-volume-up');
		} else {
			$(this).data('volume', audio.volume).find('i').removeClass('fa-volume-up').addClass('fa-volume-off');
			setVolume(0);
		}
	});

	// 根据序号加载歌曲
	var switchTrack = function(i){
		// 0.1.2.3.4.5.... playlist.length-1
		if (i < 0){
			track = currentTrack = playlist.length - 1; //最后一首
		} else if (i >= playlist.length){
			track = currentTrack = 0;					//第一首
		} else {	
			track = currentTrack = i;									//第i+1首
		}

		$('audio').remove();
		loadMusic(track);								//加载歌曲
		if (isPlaying == true) play();					//自动播放
	}

	// 随机播放
	var shufflePlay = function(){
		var time = new Date(),
			lastTrack = currentTrack;					//当前的歌曲序号
		currentTrack = time.getTime() % playlist.length;//随机数字
		if (lastTrack == currentTrack) ++currentTrack;	//随机到自己 播放下一首
		switchTrack(currentTrack);						//根据目前序号 加载播放
	}
	// 播放完毕
	var ended = function(){
		pause();
		audio.currentTime = 0;
		playCounts++;
		if (continous == true) isPlaying = true;
		if (repeat == 1){
			lrcPreload();
			play();//重复当前播放
		} else {
			if (shuffle === 'true'){
				shufflePlay();//随机播放
			} else {
				if (repeat == 2){
				// repeat = 2
					switchTrack(++currentTrack);//播放下一首
				} else {
				//repeat = 0
					if (currentTrack < playlist.length) switchTrack(++currentTrack);
				}
			}
		}
	}
	// 总长度的预先加载
	var beforeLoad = function(){
		var endVal = this.seekable && this.seekable.length ? this.seekable.end(0) : 0;
		$('.progress .loaded').css('width', (100 / (this.duration || 1) * endVal) +'%');
	}
	// 加载完之后自动播放
	var afterLoad = function(){
		if (autoplay == true) play();
	}
	
	//对半查找
	var find_mid = function( arr, minp , maxp ,k){
		// var mid = parseInt((minv + maxv) / 2);
		// // alert(mid);
		// if(maxv == minv + 1){//find
		// 	// alert(minv);
		// 	return minv;
		// }else if(arr[mid] < k){
		// 	find_mid(arr , mid , maxv ,k);
		// }else{
		// 	find_mid(arr , minv , mid ,k);
		// }
		pivot = Math.floor(maxp);
		while(minp <= pivot && pivot <= maxp){
 			if(arr[pivot] <= k && (pivot == maxp || k < arr[pivot+1])) { 
 			//最左端或最右端 
            	break;  
            }else if( arr[pivot] > k ) { /* left */  
                maxp = pivot;  
            }else{ /* right */  
                minp = pivot;  
            }

            tmp = minp + Math.floor((maxp - minp) / 2);
            if(tmp == pivot) break;
            pivot = tmp;
		}
		return pivot;
	}
	// 歌词监听事件
	var lrc = function(){
		// update lrc
		currentH = find_mid(time , 0 , time.length - 1 , audio.currentTime * 1000);
		// $('.currentH').html('time:'+(audio.currentTime*1000)+' line:'+currentH);
		var lrc_li = $("#lrc .lrc-main ul li");
		// 当前播放样式
		lrc_li.removeClass('current').eq(currentH).addClass('current');
		// 滚动 
		if(isScorllor){
			var lrc_h = lrc_li.height();
			$("#lrc .lrc-main ul").css('margin-top', (-(currentH-preloadH+1)*lrc_h)+'px');
		}
		
		// 标志的更新
		if (!isScorllor && currentH >= preloadH){
			isScorllor = true;
		}
	}
	// ajax请求歌词文件斌填充
	var lrcLoad = function(){
		// 加载歌词
		$.ajax({
			url:url,
			type:'post',
			data:{name:'Suara.lrc'},
			dataType:'json',
			success:function (data){
				// 放入数组中
				time = data['time'];
				text = data['data'];
				// 填充
				var lrcArea = $("#lrc .lrc-main ul");
				lrcArea.empty();//清空
				// 遍历text数组组装歌词
				for(var i =0 ; i<text.length ;i++)  {
					$("<li>").attr('data-time',time[i]).html(text[i]).appendTo(lrcArea);
				}
			}
		});
	}
	// lrc预处理
	var lrcPreload = function(){
		// 标志位设置
		// item对象为歌曲对象集合
		currentH = 0;
		isScorllor =  false;
		// 清除margin-top
		$("#lrc .lrc-main ul").css('margin-top','0px');
	}
	// 载入歌曲
	var loadMusic = function(i){
		var item = playlist[i],
			newaudio = $('<audio>').html('<source src="'+item.mp3+'"><source src="'+item.ogg+'">').appendTo('#player');
		
		$('.cover').html('<img src="'+item.cover+'" alt="'+item.album+'">');
		
		$('.tag strong').text(item.title);
		$('.tag span.artist').text(item.artist);
		$('.tag span.album').text(item.album);
		
		// 歌曲列表显示当前播放的歌曲
		$('#playlist li').removeClass('playing').eq(i).addClass('playing');

		// 加载歌词
		lrcPreload();
		lrcLoad();
		// <audio></audio> ->audio对象
		audio = newaudio[0];
		audio.volume = $('.mute').hasClass('enable') ? 0 : volume;	//音量设置
		audio.addEventListener('progress', beforeLoad, false);		//当浏览器正在下载音频/视频时
		audio.addEventListener('durationchange', beforeLoad, false);//当音频/视频的时长已更改时
		audio.addEventListener('canplay', afterLoad, false);		//当浏览器可以播放音频/视频时
		audio.addEventListener('ended', ended, false);				//当目前的播放列表已结束时
		audio.addEventListener('timeupdate', lrc, false);			//歌词监听
	}

	// 加载歌曲播放
	loadMusic(currentTrack);
	// 控制面板函数
	// 播放/暂停
	$('.playback').on('click', function(){
		if ($(this).find('i').hasClass('fa-play')){
			pause();
		} else {
			play();
		}
	});
	// 前一曲
	$('.rewind').on('click', function(){
		if (shuffle === 'true'){
			shufflePlay();
		} else {
			switchTrack(--currentTrack);
		}
	});
	// 后一曲
	$('.fastforward').on('click', function(){
		if (shuffle === 'true'){
			shufflePlay();
		} else {
			switchTrack(++currentTrack);
		}
	});
	// 播放列表点击
	$('#playlist li').each(function(i){
		var _i = i;
		$(this).on('click', function(){
			switchTrack(_i);
		});
	});
	//随机播放
	if (shuffle === 'true') $('.shuffle').addClass('enable');
	if (repeat == 1){
		$('.repeat').addClass('once');//单曲
	} else if (repeat == 2){
		$('.repeat').addClass('all');//全部
	}
	// 重复
	$('.repeat').on('click', function(){
		if ($(this).hasClass('once')){
			repeat = localStorage.repeat = 2;//单曲->全部
			$(this).removeClass('once').addClass('all');
		} else if ($(this).hasClass('all')){
			repeat = localStorage.repeat = 0;//全部->不重复
			$(this).removeClass('all');
		} else {
			repeat = localStorage.repeat = 1;//不重复->单曲
			$(this).addClass('once');
		}
	});
	$('.repeat').hover(function(){
		r_i = $(this).find("i");
		if (r_i.hasClass('fa-spin')){

		} else {
			r_i.addClass('fa-spin');
		}
	},function(){
		r_i.removeClass('fa-spin');
	});
	// 随机
	$('.shuffle').on('click', function(){
		if ($(this).hasClass('enable')){
			shuffle = localStorage.shuffle = 'false';
			$(this).removeClass('enable');
		} else {
			shuffle = localStorage.shuffle = 'true';
			$(this).addClass('enable');
		}
	});
	$('.shuffle').hover(function(){
		s_i = $(this).find("i");
		if (s_i.hasClass('fa-spin')){

		} else {
			s_i.addClass('fa-spin');
		}
	},function(){
		s_i.removeClass('fa-spin');
	});
});