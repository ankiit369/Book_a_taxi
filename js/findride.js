function destinationcheck(){
	var x=document.getElementById("destid").value;
	if(x.localeCompare("")==0)
		document.getElementById("destinationerror").innerHTML="Enter destination";
	else
		document.getElementById("destinationerror").innerHTML="";
}
function isvalidatedtwo(){
	var a=document.getElementById("destinationerror").innerHTML;
	
	var x=document.getElementById("destid").value;
	
	if(!(a.localeCompare("")==0 )){
		document.getElementById("headerror2").innerHTML="Fill the details";
		return false;
	}else if(x.localeCompare("")==0){
		document.getElementById("headerror2").innerHTML="Fill the details";
		return false;
	}else{
		return true;
	}
}
