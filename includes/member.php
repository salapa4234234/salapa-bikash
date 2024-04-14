<style>
	.memberbox{
		margin:10px 0px;
		text-align:center;}
	.memberbox b{
		font-size:1.3em;
		text-transform:uppercase;}
</style>
<div class="container">
    <div class="col-lg-12 col-md-12">
		<?php
			$result=$obj->select("select * from tbl_membertype where status='1'");
			while($data=mysqli_fetch_assoc($result)){
			$membertypeid=$data['id'];
				if($data['slug']==$topic){
        ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p style="color:#258000; line-height:40px; padding-left:10px; 
                        font-size:1.3em; border-bottom:1px solid #CCC;">
                        	<?php echo $data['membertype']; ?>
                        </p>
                    </div>
                    <?php
						$result1=$obj->select("select * from tbl_member where 
						membertypeid='$membertypeid' 
						and del='1' and status='1'");
						while($data1=mysqli_fetch_assoc($result1)){
                    ?>
                    
                    		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 memberbox">
                    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<?php
                                        if($data1['image']!=""){
                                    ?>
                                        <img src="images/memberImages/<?php echo $data1['image']; ?>"
                                        style="width:80%;" />
                                    <?php
                                        }
                                        else{
                                    ?>
                                        <img src="them_img/dmem.jpg" style="width:80%;"/>
                                    <?php
                                        }
                                    ?>
                    			</div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:10px;">
                                    Name: &nbsp;  <?php echo $data1['memberName']; ?><br>
                                    <b> <?php echo $data1['position']; ?> </b><br>
                                    Contact: <?php echo $data1['contact']; ?><br>
                                    Email: <?php echo $data1['email']; ?><br>
                                </div>
                                <div class="clear"></div>
                            </div>
                    <?php
						}
                    ?>
        <?php
				}
			}
        ?>
        <div class="clear"></div>
    </div>
</div>
