<div class="header-bottom">
    <button type="button" id="nav-toggler">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
    <div class="container flex-container">
        <a href="" class="logo-main">
            <img src="them_img/<?php echo $companyData['companyLogo']; ?>"
                alt="<?php echo $companyData['companyName']; ?>">
        </a>
        <ul class="main-nav">
            <?php
        /* ************* query for unicode conversion  */
        //mysqli_query('SET NAMES utf8');
        /* ************* query for unicode conversion  */
        $result=$obj->select("SELECT * FROM tbl_menu WHERE parent='' 
        AND status='1' and feature='1' and del='1' ORDER BY position");
        while($data=mysqli_fetch_assoc($result)){
        
        $id=$data['id'];
        $resu=$obj->select("select * from tbl_menu where parent='$id' 
        and menu='' and submenu!='' and del='1' and status='1' and feature='1'");
        $rows=mysqli_num_rows($resu);
        ?>
            <?php
        if(isset($_GET['topic'])){
			$activs=$_GET['topic'];
			$activs=base64_decode($activs);
			$activs=strtolower($activs);
			$link=$data['link'];
			$link=strtolower($link);
        }
        else{
			$activs="home";
			$link=$data['link'];
			$link=strtolower($link);
        }
        ?>
            <?php
        if($link!="home"){
        ?>
            <li class="sub-toggler <?php if($activs==$link){ echo "active"; } ?>">
                <a href="<?php
                	if($rows>0){
						echo "javascript:void(0)";
					}
                else{
					echo "main/".base64_encode($data['link']); 
				}
				?>">
                    <!-- <img src="them_img/icon/<?php echo $data['icon'];?>" alt="">  -->
                    <?php echo $data['menu']; ?>
                </a>
                <?php
                if($rows>0){
            ?>
                <ul class="mega-menu">
                    <?php
				$id=$data['id'];
				$result1=$obj->select("SELECT * FROM tbl_menu WHERE 
				parent='$id' AND status=1 and del='1' ORDER BY position");
				if($result1){
					while($data1=mysqli_fetch_assoc($result1)){
					$ids=$data1['id'];
        
					$resu1=$obj->select("select * from tbl_menu where parent='$ids' 
					and del='1' and status='1' and feature='1'");
					$rows1=mysqli_num_rows($resu1);
        			
					if($rows1>=1){ 
        	?>
                    <li class='has-child'>
                        <a href="javascript:void(0)">
                            <?php echo $data1['submenu']; ?>
                        </a>
                        <ul class='mega-sub'>
                            <?php
                            $ids=$data1['id'];
                            $result2=$obj->select("SELECT * FROM tbl_menu WHERE 
                            parent='$ids' AND status=1 and del='1' ORDER BY position");
                            while($data2=mysqli_fetch_assoc($result2)){
                        ?>
                            <li>
                                <a href="main/<?php echo base64_encode($data2['link']); ?>">
                                    <?php echo $data2['child']; ?>
                                </a>
                            </li>
                            <?php
							}
                        ?>
                        </ul>
                    </li>
                    <?php
					}
        			else{
        		?>
                    <li class=''>
                        <a href="main/<?php echo base64_encode($data1['link']); ?>">
                            <?php echo $data1['submenu']; ?>
                        </a>
                    </li>
                    <?php
					}
        		?>
                    <?php
					}
        	?>
                </ul>
                <?php
        }
        ?>
            </li>
            <?php
        }
		}
		}
		?>
        </ul>
    </div>
</div>