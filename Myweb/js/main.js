;$(function() {
	'use strict';
	
	var sidebar = $('#sidebar'),//选择侧栏
		mask = $('.mask'),//选择mask
		backButton = $('.back-to-top'),//选择返回
		sidebar_trigger = $('#sidebar_trigger');//选择侧栏触发器
	
	function showSideBar()//显示侧栏
	{
		mask.fadeIn();//显示mask蒙版
		sidebar.css('right',0);//调整侧栏相关的css位置
		
	}
	
	function hideSideBar() //隐藏侧栏
	{
		mask.fadeOut();//隐藏mask
		sidebar.css('right',-sidebar.width());//隐藏侧栏位置
		
	}
	
	sidebar_trigger.on('click',showSideBar);//监听侧栏触发器
	mask.on('click',hideSideBar);//监听mask
	
	backButton.on('click',function()//监听返回按钮
	{
		$('html, body').animate({
			scrollTop:0
		},800)
	})
	
	$(window).on('scroll',function()//监听window的scroll事件
	{
		if($(window).scrollTop() > $(window).height())
		//如果已经滚动的部分高于窗口高度，
			backButton.fadeIn();
			//显示返回按钮
		else
			backButton.fadeOut();
			//隐藏返回按钮
	})
	
	$(window).trigger('scroll');//每次刷新都触发scroll事件
})


