
<style>


.container{
	width: 100%;
	margin: 10px auto;
	padding: 10px 0;
	background: white;
	border: 2px solid #DBDBDB;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	overflow: hidden;
}

.upload input{
	display: none;
}

.pure-button{
	margin: 5px 0;
}

.status{
	display: none;
	padding: 0px;
	background: #F47063;
	width: 100%;
	color: white;
	margin: 8px 0;
	line-height:20px;
}

.progress {
	position: relative;
	width: 90%;
	margin: 10px auto;
	border: 1px solid #DDD;
	padding: 0px;
	border-radius: 3px;
}
.bar{
	background: #008DE6;
	height: 20px;
	line-height:20px;
	width: 0%;
	/* transition animation */
	-webkit-transition: width .3s;
		-moz-transition: width .3s;
			transition: width .3s;

}
.percent {
	position: absolute;
	display: inline-block;
	top: 1px;
	left: 48%;
	color: #333;
}
</style>
<script type="text/javascript">
	var counter = 1;
	var limit = 4;
	function addInput(divName){
		 if (counter == limit)  {
			  alert("You have reached the limit of adding " + counter + " inputs");
		 }
		 else {
			  var newdiv = document.createElement('div');
			  newid='dynamicInput'+counter;
			  newdiv.id=newid;
			  newdiv.innerHTML = "Image " + (counter + 1) + 
			  " <tr><th><input type='file' name='files[]' multiple id='files' class='myClass'></th><td> <a href='#' onClick='removeRow(" + newid + ");'>Remove</a></td></tr>";
			  document.getElementById(divName).appendChild(newdiv);
			  counter++;
		 }
	}
	
	function removeRow(r)
	{		
		return r.parentNode.removeChild(r);
	}

</script>


	<form action="admin_includes/productManager/addimagesetup.php"
    method="post"  enctype="multipart/form-data" class="pure-form" id="myForm">
    <input type="hidden" name="parenttable" value="tbl_product" />
    <input type="hidden" name="parentid" value="<?php echo $_GET['id']; ?>" />

            <!-- status message will be appear here -->
            <div class="status" id="statusid"></div>      
            <div class="container" >	
                <!-- multiple file upload form -->
                <div class="formbox" id="formbox" style="text-align:left; padding-left:20px;">
                        
                        <input type="hidden" name="categoryid" value="1">
                        <div id="dynamicInput" style="float:left; ">
                             <div style="float:left; width:100%; text-align:left;">Image 1</div>
                                <input type="file" name="files[]" multiple id="files" class="myClass">	
                             </div>
                         <div style="float:left; width:100%;">
                         <a href="#" style="color:#F00;"
                         onClick="addInput('dynamicInput');"> + New File</a>
                         </div>
                         <div style="float:left; width:100%;">
                        </div>
                    <div style="clear:both;"></div>
                <!-- progress bar -->
                <div class="progress">
                    <div class="bar"></div >
                    <div class="percent">0%</div >
                </div>
    			<input type="submit" name="imageupload"
            	class="pure-button pure-button-primary" style="float:left;">
                </div>
            </div><!-- end .container -->
    </form>

    <!-- multiple file upload javascript -->
    <script type="text/javascript" src="js/multiplefileupload1.js"></script>
    <script type="text/javascript" src="js/multiplefileupload.js"></script>
    <script type="text/javascript" src="js/multiplefileupload2.js"></script>