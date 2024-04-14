
<script>
	function faq_validate()
{
	if( document.new_faq.question.value == "" ){
		 alert( "Please enter the FAQ Question First!" );
		 document.new_faq.question.focus() ;
		 document.new_faq.question.style.backgroundColor="#FDD";
		 return false;
	}
	else if( document.new_faq.answer.value == "" ){
		 alert( "Please enter the FAQ Answer!" );
		 document.new_faq.answer.focus() ;
		 document.new_faq.answer.style.backgroundColor="#FDD";
		 return false;
	}
	else{
		return( true );
	}
}
</script>
<?php
	$result=$obj->select("select * from tbl_faq where id='$id'");
	$data=mysqli_fetch_assoc($result);
	$id=$data['id'];
	$status=$data['status'];
?>

<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/faq_manager/edit_faq_setup.php"
    method="post" name="new_faq" enctype="multipart/form-data"  onSubmit="return(faq_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	<tr>
    	<th>Auestion</th>
        <td>
        	 <textarea type="text" class="question" name="question" id="question" style="width:100%"><?php 
			 echo $data['question']; ?></textarea>
        </td>
    </tr>
    <tr>
    	<th>Answer</th>
        <td>
        	<textarea name="answer" id="answer"><?php echo $data['answer']; ?></textarea>
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1" <?php if($status=="1") echo "selected"; ?>>Active</option>
            	<option value="" <?php if($status!="1") echo "selected"; ?>>Deactive</option>
            </select>
        </td>
    </tr>
    <tr> 
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature">
            	<option value="">Select Feature</option>
                <option value="" <?php if($data['feature']!="1") echo "selected"; ?>>No</option>
            	<option value="1"<?php if($data['feature']=="1") echo "selected"; ?>>Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="faq_edit" value="Edit FAQ" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>