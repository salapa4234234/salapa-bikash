<style>
.memberbox {
   margin: 10px 0px;
   text-align: center;
}

.memberbox b {
   font-size: 1.3em;
   text-transform: uppercase;
}

@media (min-width: 900px) {}

.member-container {
   display: flex;
   flex-wrap: wrap;
   gap: 6rem;
   justify-content: center;
   padding-bottom: 3rem;
}

.profile {
   display: flex;
   flex-direction: column;
   align-items: center;
   position: relative;
   overflow: hidden;
   width: 29rem;
   height: 100%;
   box-shadow: 0 5px 18px rgba(0, 0, 0, 0.6);
   cursor: pointer;
   transition: 0.5s;
   background: #fff;
   border-radius: 5px;
}

.profile img {
   width: 100%;
   height: 100%;
   object-fit: cover;
   transition: all 0.9s;
   z-index: 2;
   position: relative;

}

.profile:hover img {
   transform: translateY(-130px);
   opacity: 0.5;
}

.profile:hover .profile_footer {
   opacity: 1;
}

.profile_footer {
   position: absolute;
   bottom: 0;
   left: 0;
   padding: 2rem;
   z-index: 1;
   opacity: 0;
   transition: all 0.9s;
}

.profile_title {
   font-size: 2rem;
   color: green;
   font-weight: 600;
   text-align: center;
   padding: 2rem;
}
</style>
<div class="container">
   <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <?php
			$result=$obj->select("select * from tbl_membertype where status='1'");
			while($data=mysqli_fetch_assoc($result)){
			$membertypeid=$data['id'];
				if($data['slug']==$topic){
        ?>
      <div>
         <p class="profile_title">
            <?php echo $data['membertype']; ?>
         </p>
      </div>
      <div class="member-container">
         <?php
						$result1=$obj->select("select * from tbl_member where 
						membertypeid='$membertypeid' 
						and del='1' and status='1'");
						while($data1=mysqli_fetch_assoc($result1)){
                    ?>

         <div class="profile">
            <div>
               <?php
                                        if($data1['image']!=""){
                                    ?>
               <img src="images/memberImages/<?php echo $data1['image']; ?>" />
               <?php
                                        }
                                        else{
                                    ?>
               <img src="them_img/dmem.jpg" style="width:80%;" />
               <?php
                                        }
                                    ?>
            </div>
            <div class="profile_footer">
               <?php echo $data1['memberName']; ?><br>
               <b> <?php echo $data1['position']; ?> </b><br>
               <?php echo $data1['contact']; ?><br>
               <?php echo $data1['email']; ?><br>
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
      </div>
      <div class="clear"></div>
   </div>
</div>