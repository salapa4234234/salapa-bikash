<section style="background:#f9f9f9;">
<div style="background:#f9f9f9; margin-bottom:15px; <?php if($topic=="home") echo "margin-top:0px;"; ?>">
<?php
	if(isset($_GET['websearch'])){
		include('includes/searchsetup.php');
	}
	elseif($topic=="faq"){
		include('includes/faq.php');
	}elseif($topic=="branches"){
		include('includes/branches.php');
	}
	elseif($topic=="home"){
		include('includes/home.php');
	}
	elseif($topic=="fixeddeposit" || $topic=="savingdeposit"){
		include('includes/depositandsaving.php');
	}
	elseif($topic=="currentdeposit" || $topic=="calldeposit"){
		include('includes/calldeposit.php');
	}
	elseif($topic=="businessoverdraft" || $topic=="personaloverdraft" || $topic=="personalterm" ||
	$topic=="deprivedsectorschedule" || $topic=="deprivedsectornonschedule" || $topic=="womenentrepreneur" || 
	$topic=="womenentrepreneurshipterm" || $topic=="agricultureodloan" || $topic=="agriculturetermloan" ||
	$topic=="businessterm" || $topic=="hirepurchase" || $topic=="goldloan" || $topic=="agricultureloan"){
		include('includes/loan.php');
	}
	elseif($topic=="boardofdirectors" || $topic=="managementteam" || 
	$topic=="staff" || $topic=="member" || $topic=="ourteam"){
            include('includes/member.php');
	}
	elseif($topic=="principals" || $topic=="bibyasaprecidents" || $topic=="teachers"
	|| $topic=="bibyasa" || $topic=="othersstaff" || $topic=="teacherparents" 
	|| $topic=="bibyasacounseller"){
            include('includes/memberbycategory.php');
	}
	elseif($topic=="download" || $topic=="downloads" || $topic=="newinformation" 
	|| $topic=="newpublication" || $topic=="newnewsandevent" || $topic=="publications" 
	|| $topic=="newsandvent"|| $topic=="newsandvents"){
		include('includes/download.php');	
	}
	elseif($topic=="investorralations" && $tid=="no"){
		include('includes/investorralation.php');	
	}
	elseif($topic=="notices" && $tid=="no"){
		include('includes/notices.php');	
	}
	elseif($topic=="syllabus"){
		include('includes/syllabus.php');	
	}
	elseif($topic=="contactus" || 
	$topic=="contactus" || $topic=="contact" || $topic=="contacts"){
		include('includes/contact_us.php');
	}
	elseif($topic=="video"){
		include('includes/videos.php');	
	}
	elseif($topic=="gallery"){
		include('includes/gallery.php');	
	}
	elseif($topic=="videogallery"){
		include('includes/videogallery.php');
	}
	elseif($topic=="audiogallery"){
		include('includes/audiogallery.php');
	}
	elseif($topic=="career"){
		include('includes/career.php');
	}
	else{
		include('includes/view_point.php');
	}
?>
	<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</section>