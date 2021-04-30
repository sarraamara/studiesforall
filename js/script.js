
function addFileAndUpdateViewFunc(){
	const rbs = document.querySelectorAll('input[name="format"]');
	var x = document.getElementById("myFile");
	if(x.files.length==0){
		console.log("No file selected.");
	}
	else{
	let objectURL = URL.createObjectURL(x.files[0]);
	var linkHtml="<li><a href=\""+objectURL+"\"download=\""+x.files[0].name+"\">"+x.files[0].name+"</a></li>";
	var selectedValue;
	for(const rb of rbs){
		if(rb.checked){
			selectedValue=rb.value;
			break;
		}
	  }
	  document.getElementById("coursListe").innerHTML+=linkHtml;
	  }
	  
	}

	
