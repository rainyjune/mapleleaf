// JavaScript Document
function selectTag(showContent,selfObj){
	
	//alert(selfObj+showContent);
	// 操作标签
	var tag = document.getElementById("tags").getElementsByTagName("li");
//	alert(tag);
	var taglength = tag.length;
//	alert(taglength);
	for(i=0; i<taglength; i++){
		tag[i].className = "";
	}
	selfObj.parentNode.className = "selectTag";
	// 操作内容
	for(i=0; j=document.getElementById("tagContent"+i); i++){
		j.style.display = "none";
	}
	document.getElementById(showContent).style.display = "block";
	
	
}