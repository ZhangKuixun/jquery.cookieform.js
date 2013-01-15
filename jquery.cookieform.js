;(function($){
  var defaults={
		cookie_name:'data01',
	}

	$.fn.getcookie=function(config){
		var options=$.extend(defaults, config);
		if($.cookie(defaults.cookie_name)){
			var obj = JSON.parse($.cookie(defaults.cookie_name));
			$('input').each(function() {
				$(this).val(obj[$(this).attr('id')]);
			});
		}
	};

	$.fn.setcookie=function(config){
		var options=$.extend(defaults, config);

		$(this).on('click',function(){
			$.cookie.json = true;
			var data = {};
			
			$('.class_form input[type="text"]').each(function() {
				var key = $(this).attr('id');
				data[key] = $(this).val();
			});
			$.cookie(defaults.cookie_name, data);
console.log($.cookie('data01'));
		});
		
//		$(this).off('click');
	};
	
})(jQuery);
