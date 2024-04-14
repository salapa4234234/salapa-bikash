<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}
	else{
		$id="no";
	}
?>
<?php
	$result=$obj->select("select * from tbl_client where id='$id'");
	$data=mysqli_fetch_assoc($result);
	$name=$data['name'];
	$email=$data['email'];
	$contact=$data['contact'];
	$subject=$data['subject'];
	$file=$data['file'];
	$message=$data['message'];
	$date=$data['dates'];
?>
<style>
	.new_articles tr th, .new_articles tr td{
		padding:10px 0px !important;}
</style>
<table cellpadding="0" cellspacing="0" width="100%" class="new_articles table">
    <tr>
    	<th>Date</th>
        <td><?php echo $data['dates']; ?></td>
    </tr>
	<tr>
    	<th>Name</th>
        <td><?php echo $data['name']; ?></td>
    </tr>
    <tr>
    	<th>Email</th>
        <td><?php echo $data['email']; ?></td>
    </tr>
    <tr>
    	<th>Conatact</th>
        <td><?php echo $data['contact']; ?></td>
    </tr>
    <tr>
    	<th>Subject</th>
        <td>
        	<?php echo $data['subject']; ?>
        </td>
    </tr>
    <tr>
    	<th>Form File</th>
        <td><a href="../../includes/formtopdf/examples/<?php echo $data['file']; ?>" target="_blank">Download & print</a></td>
        </td>
    </tr>
    <tr>
    	<th>Message</th>
        <td><?php echo $data['message']; ?>
        </td>
    </tr>
</table>