<?php
	if(isset($_POST['new_Branch'])){
		include('../../../../php/db.php');
		$category=$obj->sql_inject($_POST['category']);
		$branchName=$obj->sql_inject($_POST['branchName']);
		$branchAddress=$obj->sql_inject($_POST['branchAddress']);
		
		$gioLocation=$obj->sql_inject($_POST['gioLocation']);
		$contact=$obj->sql_inject($_POST['contact']);
		$email=$obj->sql_inject($_POST['email']);
		$contactPersion=$obj->sql_inject($_POST['contactPersion']);
		$status=$obj->sql_inject($_POST['status']);
		$feature=$obj->sql_inject($_POST['feature']);
		$publishedDate=$_POST['dates'];
		$publishedBy=$_POST['admin'];
		
		$location1="location:../../loginsetup.php?topic=branches&msg=error";
		$location2="location:../../loginsetup.php?topic=branches&msg=yes";
			
		/* code for add data into database */

        
        $qry1="INSERT INTO `tbl_branches`(
            `category`, 
            `name`, 
            `address`, 
            `gioLocation`, 
            `contact`, 
            `email`, 
            `contactPersion`, 
            `status`, 
            `feature`, 
            `del`, 
            `publishedDate`, 
            `publishedBy`)
            VALUES (
                '$category',
                '$branchName',
                '$branchAddress',
                '$gioLocation',
                '$contact',
                '$email',
                '$contactPersion',
                '$status',
                '$feature',
                '1',
                '$publishedDate',
                '$publishedBy')";

		$result=$obj->insert($qry1);
		if($result){
			header($location2);
		}
		else{
			header($location1);
		}
	}
?>