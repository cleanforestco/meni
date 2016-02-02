jQuery(document).ready(function($){
    $("#wp-admin-bar-meni a").on("click", function(){
        $(".quicklinks li:not(#wp-admin-bar-meni)").toggle();
        $(".quicklinks li#wp-admin-bar-menu-toggle").toggle();
	});
});
