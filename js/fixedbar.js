function usercheckLv(){
	var x=document.getElementById("userID").value;
	if(x.localeCompare("")==0)
		document.getElementById("usererror").innerHTML="Enter username";
	else
		document.getElementById("usererror").innerHTML="";
}
function passwordcheckLv(){
	var x=document.getElementById("passwordID").value;
	if(x.localeCompare("")==0)
		document.getElementById("passworderror").innerHTML="Enter password";
	else
		document.getElementById("passworderror").innerHTML="";
}
function isvalidated(){
	var a=document.getElementById("usererror").innerHTML;
	var b=document.getElementById("passworderror").innerHTML;
	var x=document.getElementById("userID").value;
	var y=document.getElementById("passwordID").value;
	if(!(a.localeCompare("")==0 && b.localeCompare("")==0)){
		document.getElementById("headerror").innerHTML="Fill the details";
		return false;
	}else if(x.localeCompare("")==0||y.localeCompare("")==0){
		document.getElementById("headerror").innerHTML="Fill the details";
		return false;
	}else{
		return true;
	}
}
function viewprofileclicked(){
	window.location.href = "profile.php";
}
function signoutclicked(){
	window.location.href = "findride.php";
}
$(document).ready(function () {
$('.active-links').click(function () {
        if ($('#signin-dropdown').is(":visible")) {
            $('#signin-dropdown').hide()
			$('#session').removeClass('active');
        } else {
            $('#signin-dropdown').show()
			$('#session').addClass('active');
        }
		return false;
    });
	$('#signin-dropdown').click(function(e) {
        e.stopPropagation();
    });
    $(document).click(function() {
        $('#signin-dropdown').hide();
		$('#session').removeClass('active');
    });
});     
