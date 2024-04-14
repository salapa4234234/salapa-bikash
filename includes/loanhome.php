<section class="products-overview container flex-container">
	<?php
		$result=$obj->select("SELECT * FROM tbl_content WHERE category='loaninterest' AND status='1'
		AND display_order='1' AND del='1' order by id");
        while($data=mysqli_fetch_assoc($result)){		
	?>
    <div class="products"> 
        <img src="images/content_images/<?php echo $data['image']; ?>" alt="">
        <h3> 
            <small>Base Rate +</small> <span class="text-purple text-semi-bold"> Upto 
            <span class="count" data-count="<?php echo $data['title']; ?>">0</span>%</span> 
            <small><?php echo $data['mtitle']; ?></small> 
        </h3>
    </div>
    <?php
		}
	?>
</section>