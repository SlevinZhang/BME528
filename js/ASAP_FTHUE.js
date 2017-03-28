// JavaScript Document

$(".slider").slider({
	 from: 0, to: 100, step: 1, round: 1, format: { format: '##', locale: 'de' }, skin: "round" 
	 });

function Reset(objid){
	$(objid).timer('stop');
	$(objid).val("0");
	};


$(function(){
	$('#Evaluation_Date').datepicker({format:"yyyy/mm/dd"});
//	$('.C').hide();
//	$('.D').hide();
//	$('.F').hide();
	
	$('#A1Time').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A2ATime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});		
	$('#A2BTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});			
	$('#A3CTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A3DTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A3ETime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A4FTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A4GTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A4HTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A5ITime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A5JTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A5KTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A6LTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A6MTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A6NTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A7OTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A7PTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#A7QTime').timer({
		delay: 100,
		repeat: true,
		autostart: false,
		callback: function( index ) {
			val =  index/10;
			var minutes = Math.floor(val/60);
			var seconds = (Math.round(index-minutes*600))/10;
			var html = minutes+":"+seconds;
			$(this).val(html);
		}
	});	
	$('#nextbtn').click(function(){
			$('#prevbtn').attr('href','#'+$(".tab-pane.active").prev().attr('id'));
			if($(".tab-pane.active + div").attr('id')!=undefined)
			{
				$('#nextbtn').attr('href','#'+$(".tab-pane.active + div").attr('id'));
			}
			else
			{
				$('#nextbtn').attr('href','#'+$(".tab-pane.active").attr('id'));
			}
			$('#prevbtn').tab('show');
			$('#nextbtn').tab('show');
		
		});
	$('#prevbtn').click(function(){
			if($(".tab-pane.active").prev().attr('id')!=undefined)
			{
				$('#prevbtn').attr('href','#'+$(".tab-pane.active").prev().attr('id'));
			}
			else
			{
				$('#prevbtn').attr('href','#'+$(".tab-pane.active").attr('id'));
			}
			$('#nextbtn').attr('href','#'+$(".tab-pane.active + div").attr('id'));
			$('#nextbtn').tab('show');
			$('#prevbtn').tab('show');
		});

	$('[name*="LResult"]').change(function(){
			var Lresult = $(':selected',this).val();
			switch (Lresult)
			{
				case "2":
					$(this).parents('table').find('.B').fadeIn();
					$(this).parents('table').find('.C').fadeIn();
					$(this).parents('table').find('.D').fadeIn();
					$(this).parents('table').find('.E').fadeOut();					
					$(this).parents('table').find('.F').fadeOut();										
					$(this).parents('table').find('.Ltime').val('3:00');
					break;
				case "3":
					$(this).parents('table').find('.B').fadeIn();
					$(this).parents('table').find('.C').fadeOut();					
					$(this).parents('table').find('.D').fadeOut();
					$(this).parents('table').find('.E').fadeOut();
					$(this).parents('table').find('.F').fadeIn();			
					$(this).parents('table').find('.Ltime').val('3:00');
					break;	
				case "4":
					$(this).parents('table').find('.B').fadeOut();
					$(this).parents('table').find('.C').fadeOut();					
					$(this).parents('table').find('.D').fadeOut();
					$(this).parents('table').find('.E').fadeOut();
					$(this).parents('table').find('.F').fadeOut();							
					break;
				case "1":
					$(this).parents('table').find('.B').fadeIn();
					$(this).parents('table').find('.C').fadeOut();					
					$(this).parents('table').find('.D').fadeOut();
					$(this).parents('table').find('.E').fadeIn();					
					$(this).parents('table').find('.F').fadeOut();					
			}
		
		});
	});

