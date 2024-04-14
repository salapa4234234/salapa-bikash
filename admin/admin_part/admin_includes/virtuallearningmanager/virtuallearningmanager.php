<div class="gallery_wrap_one">
    <div class="gallery_manage_one">
    	<div class="alert-danger">
        	<?php
				if(isset($_GET['msg'])){
					if($_GET['msg']=="contentexist"){
			?>
            <p style="line-height:30px; margin-top:10px; padding-left:10px;">
            There are contents in this topic. Please delete content first.
            </p>
            <?php
					}
				}
			?>
        </div>
        <div class="gallery_type_one">
        	<?php
				if(!isset($_GET['class'])){
			?>
            <h2>
                <span style="float:left;">
                    Class Manager 
                </span>
                <span style="float:right;"> 
                    <a href="loginsetup.php?topic=addclass"> 
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; 
                    Add Class  &nbsp; &nbsp;
                    </a>
                </span>
            </h2>
            <?php
				}
				else if((isset($_GET['class'])) && (!isset($_GET['subject'])) && (!isset($_GET['unit']))){
			?>
            
            <h2>
                <span style="float:left;">
                    Subject Manager 
                </span>
                <span style="float:right;"> 
                    <a href="loginsetup.php?topic=addsubject&class=<?php echo $_GET['class']; ?>"> 
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; 
                    Add Subject  &nbsp; &nbsp;
                    </a>
                </span>
            </h2>
            <?php
				}
				else if((isset($_GET['class'])) && (isset($_GET['subject'])) && (!isset($_GET['unit']))){
			?>
            
            <h2>
                <span style="float:left;">
                    Unit Manager 
                </span>
                <span style="float:right;"> 
                    <a href="loginsetup.php?topic=addunit&class=<?php echo $_GET['class']."&subject=".$_GET['subject']; ?>"> 
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; 
                    Add Unit  &nbsp; &nbsp;
                    </a>
                </span>
            </h2>
            <?php
				}
				else if((isset($_GET['class'])) && (isset($_GET['subject'])) && (isset($_GET['unit']))){
			?>
            
            <h2>
                <span style="float:left;">
                    Meterial Manager 
                </span>
                <span style="float:right;"> 
                    <a href="loginsetup.php?topic=addmeterials&class=<?php 
					echo $_GET['class']."&subject=".$_GET['subject']."&unit=".$_GET['unit']; ?>"> 
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; 
                        Add Meterials  &nbsp; &nbsp;
                    </a>
                </span>
            </h2>
            <?php
				}
			?>
        </div>
        <div class="all_gallery_one">
        	<table class="article_manage" width="100%">
            <?php
				if(!isset($_GET['class'])){
					
                $result=$obj->select("select * from tbl_class");
                while($data=mysqli_fetch_assoc($result)){
            ?>
            	<tr>
                	<td style="width:250px; text-align:left;">
                        <a href="loginsetup.php?topic=virtuallearningmanager&class=<?php echo $data['id']; ?>">
                        <li>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;
                        <?php echo $data['class']; ?> 
                        </li>
                        </a>
                    </td>
                    <td>
                    	<a href="loginsetup.php?topic=editclass&id=<?php echo $data['id']; ?>" 
                        style="display:inline; text-decoration:none;">
                            <img src="them_img/edit.gif">
                        </a>
                        <form style="display:inline; padding-left:20px;" 
                        action="admin_includes/virtuallearningmanager/deletesetup.php" method="post">
                        	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="submit" name="delete_class" value="" onClick="return confirm('are you sure?')" 
                            style="background:url(them_img/delete.gif) no-repeat; 
                            border:none; height:30px; width:30px;">
                        </form>
                    </td>
                </tr>
            <?php
                }
				}
				else if((isset($_GET['class'])) && (!isset($_GET['subject'])) && (!isset($_GET['unit']))){
				$classid=$_GET['class'];
				$result=$obj->select("select * from tbl_subject where classid='$classid'");
                while($data=mysqli_fetch_assoc($result)){
                    $subject=$data['id'];
            ?>
            	<tr>
                	<td style="width:250px; text-align:left;">
                        <a href="loginsetup.php?topic=virtuallearningmanager&class=<?php echo $classid."&subject=".$data['id']; ?>">
                        <li>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;
                        <?php echo $data['subject']; ?> 
                        </li>
                        </a>
                    </td>
                    <td>
                    	<a href="loginsetup.php?topic=editsubject&classid=<?php echo $classid; ?>&id=<?php echo $data['id']; ?>" 
                        style="display:inline; text-decoration:none;">
                            <img src="them_img/edit.gif">
                        </a>
                        <form style="display:inline; padding-left:20px;" 
                        action="admin_includes/virtuallearningmanager/deletesetup.php" method="post">
                        	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        	<input type="hidden" name="classid" value="<?php echo $classid; ?>">
                            <input type="submit" name="delete_subject" value="" onClick="return confirm('are you sure?')" 
                            style="background:url(them_img/delete.gif) no-repeat; 
                            border:none; height:30px; width:30px;">
                        </form>
                    </td>
                </tr>
            
            
            <?php
				}
				}
				else if((isset($_GET['class'])) && (isset($_GET['subject'])) && (!isset($_GET['unit']))){
				$classid=$_GET['class'];
				$subjectid=$_GET['subject'];
				$result=$obj->select("select * from tbl_unit where subjectid='$subjectid'");
                while($data=mysqli_fetch_assoc($result)){
                    $subject=$data['id'];
            ?>
            	<tr>
                	<td style="width:250px; text-align:left;">
                        <a href="loginsetup.php?topic=virtuallearningmanager&class=<?php 
						echo $classid."&subject=".$subjectid."&unit=".$data['id']; ?>">
                        <li>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;
                        <?php echo $data['unit']; ?> 
                        </li>
                        </a>
                    </td>
                    <td>
                    	<a href="loginsetup.php?topic=editunit&classid=<?php 
						echo $classid."&subjectid=".$subjectid."&id=".$data['id']; ?>" 
                        style="display:inline; text-decoration:none;">
                            <img src="them_img/edit.gif">
                        </a>
                        <form style="display:inline; padding-left:20px;" 
                        action="admin_includes/virtuallearningmanager/deletesetup.php" method="post">
                        	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        	<input type="hidden" name="classid" value="<?php echo $classid; ?>">
                        	<input type="hidden" name="subjectid" value="<?php echo $subjectid; ?>">
                            <input type="submit" name="delete_unit" value="" onClick="return confirm('are you sure?')" 
                            style="background:url(them_img/delete.gif) no-repeat; 
                            border:none; height:30px; width:30px;">
                        </form>
                    </td>
                </tr>
            
            
            <?php
				}
				}
				else if((isset($_GET['class'])) && (isset($_GET['subject'])) && (isset($_GET['unit']))){
				$classid=$_GET['class'];
				$subjectid=$_GET['subject'];
				$unitid=$_GET['unit'];
				$result=$obj->select("select * from tbl_meterial where unitid='$unitid'");
                while($data=mysqli_fetch_assoc($result)){
                    $subject=$data['id'];
            ?>
            	<tr>
                	<td style="width:250px; text-align:left;">
                        
                        	<?php
								if($data['category']=="Video"){
							?>
								<?php
                                	if($data['youtube']!=""){
                                ?>
                                    <a href="../../includes/videoplayer.php?id=<?php echo $data['id']; ?>" target="_blank">
                                    <li>
                                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span> &nbsp;
                                    <span class="glyphicon glyphicon-link" aria-hidden="true"></span> &nbsp;
                                    <?php echo $data['title']; ?>
                                    </li>
                                	</a>
                                <?php
                                	}
                                	else{
                                ?>
                                    <a href="../../files/virtualprogram/<?php echo $data['meterial']; ?>" target="_blank">
                                    <li>
                                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span> &nbsp;
                                    <?php echo $data['title']; ?>
                                    </li></a>
                                <?php
                               		}
                                }
								else if($data['category']=="Audio"){
							?>
                            <li>
                            <a href="../../files/virtualprogram/<?php echo $data['meterial']; ?>" target="_blank">
                            <span class="glyphicon glyphicon-music" aria-hidden="true"></span> &nbsp;
                                <?php echo $data['title']; ?> 
                            </li>
                            </a>
							<?php
								}
								else{
							?>
                            <a href="../../files/virtualprogram/<?php echo $data['meterial']; ?>" target="_blank">
                            <li>
                            <span class="glyphicon glyphicon-file" aria-hidden="true"></span> &nbsp;
                                <?php echo $data['title']; ?> 
                            </li>
                            </a>
                            <?php
								}
							?>
                            
                        </li>
                        </a>
                    </td>
                    <td>
                    	<a href="loginsetup.php?topic=editmeterial&classid=<?php 
						echo $classid."&subjectid=".$subjectid."&unitid=".$unitid."&id=".$data['id']; ?>" 
                        style="display:inline; text-decoration:none;">
                            <img src="them_img/edit.gif">
                        </a>
                        <form style="display:inline; padding-left:20px;" 
                        action="admin_includes/virtuallearningmanager/deletesetup.php" method="post">
                        	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        	<input type="hidden" name="classid" value="<?php echo $classid; ?>">
                        	<input type="hidden" name="subjectid" value="<?php echo $subjectid; ?>">
                        	<input type="hidden" name="unitid" value="<?php echo $unitid; ?>">
                        	<input type="hidden" name="prefile" value="<?php echo $data['meterial']; ?>">
                            <input type="submit" name="delete_meterial" value="" onClick="return confirm('are you sure?')" 
                            style="background:url(them_img/delete.gif) no-repeat; 
                            border:none; height:30px; width:30px;">
                        </form>
                    </td>
                </tr>
            
            
            <?php
				}
				}
			?>
            	<tr>
                	<td colspan="2" style="text-align:left;">
                    <?php
						if(!isset($_GET['class'])){
					?>
							<a href="loginsetup.php?topic=addclass" style="color:#F00; font-size:1.5em;"> 
							<li><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; 
							Add Class  &nbsp; &nbsp;</li>
							</a>
					<?php
						}
						else if((isset($_GET['class'])) && (!isset($_GET['subject'])) && (!isset($_GET['unit']))){
					?> 
							<a href="loginsetup.php?topic=addsubject&class=<?php echo $_GET['class']; ?>"
							style="color:#F00; font-size:1.5em;"> 
							<li><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; 
							Add Subject  &nbsp; &nbsp;</li>
							</a>
					<?php
						}
						else if((isset($_GET['class'])) && (isset($_GET['subject'])) && (!isset($_GET['unit']))){
					?> 
							<a href="loginsetup.php?topic=addunit&class=<?php 
							echo $_GET['class']."&subject=".$_GET['subject']; ?>"
							style="color:#F00; font-size:1.5em;"> 
							<li><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; 
							Add Unit  &nbsp; &nbsp;</li>
							</a>
					<?php
						}
						else if((isset($_GET['class'])) && (isset($_GET['subject'])) && (isset($_GET['unit']))){
					?>
					 
							<a href="loginsetup.php?topic=addmeterials&class=<?php 
							echo $_GET['class']."&subject=".$_GET['subject']."&unit=".$_GET['unit']; ?>"
							style="color:#F00; font-size:1.5em;"> 
								<li><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; 
								Add Meterials  &nbsp; &nbsp;</li>
							</a>
					<?php
						}
					?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>