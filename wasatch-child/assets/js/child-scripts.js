/*
=============================================================================================================
Teacher Access menu
=============================================================================================================
*/
jQuery(".teacherActivate").click(function() {
	return false;
});
jQuery(".teacherActivate").click(function() {
		if(jQuery("#teacherAccess").css("margin-top") != "-290px") {
			jQuery("#teacherAccess").css("margin-top", "-290px");
			jQuery("#teacherAccess ul").css("display", "block");
		} else {
			jQuery("#teacherAccess").css("margin-top", "-38px");
			jQuery("#teacherAccess ul").css("display", "none");
		}
});