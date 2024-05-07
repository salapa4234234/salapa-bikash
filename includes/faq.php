<style>
.card {
   color: #058100;
   margin: 10px 0px
}

.card-header {
   line-height: 50px;
   border: 1px solid;
   padding-left: 15px;
   font-weight: bold;
}

.card-block {
   padding-left: 10px;
}

.card-header:hover {
   color: #f50403;
   cursor: pointer;
}
</style>

<div class="container">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="alert alert-warning alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
         </button>
         <strong>Something else we can help you with? Feel Free to Contact Us. </strong>
      </div>
      <br />
      <div class="" id="accordion">
         <?php
			$count=1;
			$result=$obj->select("select * from tbl_faq where status='1' and del='1'");
       		while($data=mysqli_fetch_assoc($result)){
		?>
         <div id="heading" class="card">
            <div class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
               href="<?php echo "#collaps".$count; ?>">
               <h4 class="card-header">
                  <?php
						echo "(".$count.") ".$data['question'];
					?>
               </h4>
            </div>
            <div id="<?php echo "collaps".$count; ?>"
               class="panel-collapse collapse <?php if($count==1)  {echo "in"; }?>">
               <div class="card-block">
                  <?php
					   		echo $data['answer'];
					   ?>
               </div>
            </div>
         </div>
         <?php
			$count++;
			}
		?>
      </div>
   </div>
</div>