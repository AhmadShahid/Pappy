var InviteUser = InviteUser||{};

(function($,Inviteuser){
	var setting = {
		clone_html : $(".clone-html").eq(0).clone(),
		append_to  : $(".append-to"),
	};

	Inviteuser.init = function(){

		this.bindUI();
	},

	Inviteuser.bindUI = function() { 

		$(document).on('click','.cloneRow',function(e) {
			e.preventDefault();
			var clone_html =  $(".clone-html").last().clone();
			setting.append_to.append(clone_html);
		});

		$(document).on('click','.emoji',function(e) {
			$(this).closest(".clone-html").remove();
		});
	
	}





}(jQuery,InviteUser));

(function(){
	InviteUser.init();
}());