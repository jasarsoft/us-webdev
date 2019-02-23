function emailValidacija(inputText){  
		var formatMejla = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if(inputText.value.match(formatMejla)){  
			document.email.tekst.focus();  
				alert("tacno unesen mejl");
			return true;  
		}  
		else{  
			alert("Uneli ste pogresan mejl");  
			document.email.tekst.focus();  
			return false;  
			}  
		}  