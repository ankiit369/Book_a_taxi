function fnamecheckLv(){
		var x=document.getElementById("fnameID").value;
		if(x.localeCompare("")==0)
			document.getElementById("fnameerror").innerHTML="Enter first name";
		else
			document.getElementById("fnameerror").innerHTML="";
	}
	function snamecheckLv(){
		var x=document.getElementById("snameID").value;
		if(x.localeCompare("")==0)
			document.getElementById("snameerror").innerHTML="Enter second name";
		else
			document.getElementById("snameerror").innerHTML="";
	}
	function usercheckLv2(){
		var x=document.getElementById("userID2").value;
		var y=document.getElementById("usererror2").innerHTML;
		if(y.localeCompare("Username already taken")==0)
			document.getElementById("usererror2").innerHTML="Username already taken";
		else if(x.localeCompare("")==0)
			document.getElementById("usererror2").innerHTML="Enter username";
		else
			document.getElementById("usererror2").innerHTML="";
	}
	function passwordcheck2(){
		var x=document.getElementById("passwordID2");
		var y=document.getElementById("passworderror2");
		var txtpass=x.value;
		var desc = new Array();
		desc[0] = "Very Weak";
		desc[1] = "Weak";
		desc[2] = "Better";
		desc[3] = "Medium";
		desc[4] = "Strong";
		desc[5] = "Very Strong";
	        var score   = 0;

	        //if txtpass bigger than 6 give 1 point
	        if (txtpass.length > 6) score++;

	        //if txtpass has both lower and uppercase characters give 1 point
	        if ( ( txtpass.match(/[a-z]/) ) && ( txtpass.match(/[A-Z]/) ) ) score++;

	        //if txtpass has at least one number give 1 point
	        if (txtpass.match(/\d+/)) score++;

	        //if txtpass has at least one special caracther give 1 point
	        if ( txtpass.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

	        //if txtpass bigger than 12 give another 1 point
	        if (txtpass.length > 12) score++;

	        y.innerHTML = "Password Strength : "+desc[score];
	}
	function passwordcheckLv2(){
		var x=document.getElementById("passwordID2").value;
		if(x.localeCompare("")==0){
			document.getElementById("passworderror2").innerHTML="Enter password";
		}else{
			document.getElementById("passworderror2").innerHTML="";
		}
		var y=document.getElementById("passwordID2").value;
		if(!(x.localeCompare(y)))
			document.getElementById("rppassworderror2").innerHTML="Confirm password";
	}
	function rppasswordcheck2(){
		var a = document.getElementById('passwordID2').value;
		var b = document.getElementById('rppasswordID2').value;
		if(a!=b){
			document.getElementById('rppassworderror2').innerHTML="Password do not match";
		}else{
			document.getElementById('rppassworderror2').innerHTML="Password matched";
		}
	}
	function rppasswordcheckLv2(){
		var a=document.getElementById('rppassworderror2').innerHTML;
		if(a.localeCompare("Password matched")==0){
			document.getElementById('rppassworderror2').innerHTML="";
		}
		var b = document.getElementById('rppasswordID2').value;
		var c = document.getElementById('passwordID2').value;
		if(a.localeCompare("Confirm password")==0&&b.localeCompare(c)==0){
			document.getElementById('rppassworderror2').innerHTML="";
		}
		if(b.localeCompare("")==0)
			document.getElementById('rppassworderror2').innerHTML="Confirm password";
		if(b.localeCompare("")==0&&c.localeCompare("")==0)
			document.getElementById('passworderror2').innerHTML="Enter password";
	}
	function mobilenumcheckLv(){
		var x=document.getElementById("mobilenumID").value;
		if(x.length!=10)
			document.getElementById("mobilenumerror").innerHTML="Enter 10 digit mobile number";
		else
			document.getElementById("mobilenumerror").innerHTML="";
	}
	function emailcheckLv(){
		var x=document.getElementById("emailID").value;	
		var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    		if(!(pattern.test(x))){         
			document.getElementById("emailerror").innerHTML="Enter a valid email ID";  
    		}else{
			document.getElementById("emailerror").innerHTML="";    
    		}
	}
	function isvalidatedsign(){
		var a=document.getElementById("fnameerror").innerHTML;
		var b=document.getElementById("snameerror").innerHTML;
		var c=document.getElementById("usererror2").innerHTML;
		var d=document.getElementById("passworderror2").innerHTML;
		var e=document.getElementById("rppassworderror2").innerHTML;
		var f=document.getElementById("mobilenumerror").innerHTML;
		var g=document.getElementById("emailerror").innerHTML;
		var h=document.getElementById("fnameID").value;
		var i=document.getElementById("snameID").value;
		var j=document.getElementById("userID2").value;
		var k=document.getElementById("passwordID2").value;
		var l=document.getElementById("rppasswordID2").value;
		var m=document.getElementById("mobilenumID").value;
		var n=document.getElementById("emailerror").value;
		if(!(a.localeCompare("")==0 && b.localeCompare("")==0 && c.localeCompare("")==0 && d.localeCompare("")==0 && e.localeCompare("")==0 && f.localeCompare("")==0 && g.localeCompare("")==0)){
			document.getElementById("headerror").innerHTML="Complete the form correctly!";
			return false;
		}else if(h.localeCompare("")==0||i.localeCompare("")==0||j.localeCompare("")==0||k.localeCompare("")==0||l.localeCompare("")==0||m.localeCompare("")==0||n.localeCompare("")==0){
			document.getElementById("headerror").innerHTML="Complete the form correctly!";
			return false;
		}else{
			return true;
		}
	}
function checkusername2(str){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", "http://localhost/taxif/ajax/checkusername.php?q="+str, true);
       	xmlhttp.send();
       	xmlhttp.onreadystatechange = function() {
           	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           	   	document.getElementById("usererror2").innerHTML = xmlhttp.responseText;
            	}
	}
}
