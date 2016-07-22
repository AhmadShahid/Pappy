var InviteUser = InviteUser||{};

(function($,Inviteuser){
	var setting = {
		clone_html : $(".clone-html").eq(0).clone(),
		append_to  : $(".append-to"),
	};

	Inviteuser.init = function(){

		this.bindUI();
		this.initilizePlugin();
	},
	Inviteuser.initilizePlugin = function() { 

            var countries = $(".select-org").data('suggestion');

			$('.person_orgs').autocomplete({
			    lookup: countries,
			    onSelect: function (suggestion) {
			        $(this).val(suggestion.value);
			    }
			});
		//$(".person_orgs").easyAutocomplete(options);
	},

	Inviteuser.bindUI = function() { 

		$(document).on('click','.cloneRow',function(e) {
			e.preventDefault();
			var length = parseInt($(".clone-html").length + 1) ;
			var clone_html =  $(".clone-html").last().clone();
			$(clone_html).find('.name').attr('name','invite['+length+'][name]').attr('value','').removeAttr('readonly');
			$(clone_html).find('.id').attr('name','invite['+length+'][id]').attr('value','').removeAttr('readonly');
			$(clone_html).find('.email').attr('name','invite['+length+'][email]').attr('value','').removeAttr('readonly');
			$(clone_html).find('.title').attr('name','invite['+length+'][title]').attr('value','').removeAttr('readonly');
			$(clone_html).find('.organization').attr('name','invite['+length+'][organization]').attr('value','').removeAttr('readonly');
			setting.append_to.append(clone_html);
		});

		$(document).on('click','.emoji',function(e) {
			debugger;
			var $selector = $("#remove_user");
			var prev_value = $selector.val();
			var current_delted_user = $(this).attr('user-id');
			if( typeof(current_delted_user) !=="undefined")  {
				if(typeof(prev_value) !=="undefined" && prev_value !="")
					$selector.val(prev_value+","+current_delted_user);
				else
					$selector.val(current_delted_user);
			}
			$(this).closest(".clone-html").remove();
		});


		$(document).on('change','#organization',function(e) {
			var value = $(this).val();
		});

		
	
	},

	Inviteuser.redirectTo = function( url ) { 
		return window.location.href = url;
	}





}(jQuery,InviteUser));

(function(){
	InviteUser.init();
}());