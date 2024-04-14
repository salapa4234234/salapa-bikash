
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
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles">
	<form action="admin_includes/faq_manager/add_faq_setup.php"
    method="post" name="new_faq" enctype="multipart/form-data"  onSubmit="return(faq_validate());">
    <input type="hidden" name="admin" value="<?php echo $_SESSION['user']; ?>" />
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d');?>" />
	<tr>
    	<th>Faq Question</th>
        <td>
            <textarea type="text" class="question" name="question" id="question" style="width:100%"></textarea>
        </td>
    </tr>
    <tr>
    	<th>Faq Answer</th>
        <td>
        	<textarea name="answer" id="answer"></textarea>
        </td>
    </tr>
    <tr>
    	<th>Status</th>
        <td>
        	<select name="status" id="status">
            	<option value="">Select Status</option>
                <option value="1">Active</option>
            	<option value="">Deactive</option>
            </select>
        </td>
    </tr>
    <tr> 
    	<th>Feature</th>
        <td>
        	<select name="feature" id="feature">
            	<option value="">Select Feature</option>
                <option value="">No</option>
            	<option value="1">Yes</option>
            </select>
        </td>
    </tr>
    <tr>
    	<th></th>
        <td>
        	<input type="submit" name="faq_add" value="Add faq" style="width:130px; float:left; 
            cursor:pointer; background:#069; border:none; color:#FFF; font-weight:bold;">
        </td>
    </tr>
    </form>
</table>