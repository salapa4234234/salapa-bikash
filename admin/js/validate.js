// JavaScript Document
function goBack(){
		window.history.back()
	}


function article_validate()
{	
	var title=document.getElementById('mtitle').value;
	
	var category=document.getElementById('category').value;
	var contentFile=document.getElementById('contentFile').value
	var ex1=contentFile.substr(contentFile.lastIndexOf('.')+1).toLowerCase();
	var image=document.getElementById('image').value
	var ex=image.substr(image.lastIndexOf('.')+1).toLowerCase();
   if(title=="" || title=="null")
   {
     alert( "Please Enter Content Title!" );
     document.new_article.mtitle.focus() ;
	 document.new_article.mtitle.style.backgroundColor="#FDD";
     return false;
   }
   else if( category=="" || category =="null")
   {
     alert( "Please Select Category!" );
     document.new_article.category.focus() ;
	 document.new_article.category.style.backgroundColor="#FDD";
     return false;
   }
   else if( contentFile !="" && ex1!="pdf" && ex1!="doc" && ex1!="docx" && ex1!="xls" && ex1!="xlsx" && ex1!="ppt" && ex1!="pptx"){
		alert( "Change file into pdf or doc or xls or ppt format first!" );
		document.new_article.contentFile.focus() ;
		document.new_article.contentFile.style.backgroundColor="#FDD";
		return false;
   }
   else if( image !="" && ex!="jpg" && ex!="jpeg" && ex!="png" && ex!="gif"){
		alert( "Change image into jpg or gif or png format first!" );
		document.new_article.image.focus() ;
		document.new_article.image.style.backgroundColor="#FDD";
		return false;
   }
   else{
   	return true;
   }
}




function category_validate()
{
   if( document.new_category.category.value == "" )
   {
     alert( "Please enter the category!" );
     document.new_category.category.focus() ;
	 document.new_category.category.style.backgroundColor="#FDD";
     return false;
   }
   if( document.new_category.links.value == "" )
   {
     alert( "Please enter the links!" );
     document.new_category.links.focus() ;
	 document.new_category.links.style.backgroundColor="#FDD";
     return false;
   }
   return( true );
}

function menu_validate()
{
   if( document.new_menu.menu.value == "" )
   {
     alert( "Please enter the Menu First!" );
     document.new_menu.menu.focus() ;
	 document.new_menu.menu.style.backgroundColor="#FDD";
     return false;
   }
   if( document.new_menu.links.value == "" )
   {
     alert( "Please enter the links!" );
     document.new_menu.links.focus() ;
	 document.new_menu.links.style.backgroundColor="#FDD";
     return false;
   }
   return( true );
}

function advertise_validate(){
	var client=document.getElementById('client').value;
	var image=document.getElementById('image').value;
	var ex=image.substr(image.lastIndexOf('.')+1).toLowerCase();
   if(client=="" || client=="null")
   {
     alert( "Please Enter title first!" );
     document.new_add.client.focus() ;
	 document.new_add.client.style.backgroundColor="#FDD";
     return false;
   }
   else if( document.new_add.type.value == "" ){
	alert( "Please Select Investor Relation Type!" );
	document.new_add.type.focus() ;
	document.new_add.type.style.backgroundColor="#FDD";
	return false;
   }
   else if(image==""){
	   alert( "Please choose investor relation file first!" );
		document.new_add.image.focus() ;
		document.new_add.image.style.backgroundColor="#FDD";
		return false;
   }
   else if(image !="" && ex!="pdf"){
		alert( "only pdf file supported!" );
		document.new_add.image.focus() ;
		document.new_add.image.style.backgroundColor="#FDD";
		return false;
   }
   else{
   	return true;
   }
}

function gallery_validate(){
	var gallery=document.getElementById('gallery').value;
	var c=document.getElementById('categorys').value;
	var cn=document.getElementById('category_news').value;
   if(document.new_gallery.gallery.value == "")
   {
     alert( "Please Enter Gallery Name!" );
     document.new_gallery.gallery.focus() ;
	 document.new_gallery.gallery.style.backgroundColor="#FDD";
     return false;
   }
   else if( document.new_gallery.categorys.value != "" && document.new_gallery.category_news.value != "" ){
	alert("Only one at a time!" );
	document.new_gallery.categorys.focus() ;
	document.new_gallery.categorys.style.backgroundColor="#FDD";
	document.new_gallery.category_news.style.backgroundColor="#FDD";
	return false;
   }
   else if((c=="" || c =="null") && (cn=="" || cn=="null"))
   {
     alert( "Please Select Category!" );
     document.new_gallery.categorys.focus() ;
	 document.new_gallery.categorys.style.backgroundColor="#FDD";
     return false;
   }
   else{
   	return true;
   }
}

function gallery_image_add_validate(){
	var image=document.getElementById('image').value;
	var ex=image.substr(image.lastIndexOf('.')+1).toLowerCase();
	
   if(document.new_gallery_image.gallerys.value== "" || document.new_gallery_image.gallerys.value== "null" )
   {
     alert( "Please Select Gallery!" );
     document.new_gallery_image.gallerys.focus() ;
	 document.new_gallery_image.gallerys.style.backgroundColor="#FDD";
     return false;
   }
   else if(image=="" || image=="null"){
	   alert( "Please choose image first!" );
		document.new_gallery_image.image.focus() ;
		document.new_gallery_image.image.style.backgroundColor="#FDD";
		return false;
   }
   else if( image !="" && ex!="jpg" && ex!="jpeg" && ex!="png" && ex!="gif"){
		alert( "Change image into jpg or gif or png format first!" );
		document.new_gallery_image.image.focus() ;
		document.new_gallery_image.image.style.backgroundColor="#FDD";
		return false;
   }
   else{
   	return true;
   }
}

function video_adds(){
	
   if(document.new_video.types.value== "" || document.new_video.types.value== "null" )
   {
     alert( "Please Select Video Type First!" );
     document.new_video.types.focus() ;
	 document.new_video.types.style.backgroundColor="#FDD";
     return false;
   }
   else if(document.new_video.url.value=="" || document.new_video.url.value=="null"){
	   alert( "Please Enter Video Url!" );
		document.new_video.url.focus() ;
		document.new_video.url.style.backgroundColor="#FDD";
		return false;
   }
    else if(document.new_video.title.value== "" || document.new_video.title.value=="null"){
	   alert( "Please Enter Video Title!" );
		document.new_video.title.focus() ;
		document.new_video.title.style.backgroundColor="#FDD";
		return false;
   }
   else{
   	return true;
   }
}


function event_set(){
	
   if(document.set_event.event_name.value== "" || document.set_event.event_name.value== "null" )
   {
     alert( "Please Provide Event Name First!" );
     document.set_event.event_name.focus() ;
	 document.set_event.event_name.style.backgroundColor="#FDD";
     return false;
   }
   else if(document.set_event.event_year.value=="" || document.set_event.event_year.value=="null"){
	   alert( "Please Select Year First!" );
		document.set_event.event_year.focus() ;
		document.set_event.event_year.style.backgroundColor="#FDD";
		return false;
   }
   else if(document.set_event.event_month.value== "" || document.set_event.event_month.value=="null"){
	   alert( "Please Select Month First!" );
		document.set_event.event_month.focus() ;
		document.set_event.event_month.style.backgroundColor="#FDD";
		return false;
   }
   else if(document.set_event.event_day.value== "" || document.set_event.event_day.value=="null"){
	   alert( "Please Select Day First!" );
		document.set_event.event_day.focus() ;
		document.set_event.event_day.style.backgroundColor="#FDD";
		return false;
   }
   else if(document.set_event.event_greeting.value== "" || document.set_event.event_greeting.value=="null"){
	   alert( "Please Provide Event Greeting!" );
		document.set_event.event_greeting.focus() ;
		document.set_event.event_greeting.style.backgroundColor="#FDD";
		return false;
   }
   else{
   	return true;
   }
}