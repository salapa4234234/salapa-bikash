<div class="accordion-wrapper">
    <div class="ac-pane 
    	<?php
			if($topic=="articles" || $topic=="new_article" 
			|| $topic=="articles_delete" || $topic=="articles_trash"){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Article Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
            <a href="loginsetup.php?topic=articles">
            	<li>
                    <span class="glyphicon glyphicon-eye-open" 
                    aria-hidden="true"></span> 
                    View All Articles
                </li>
            </a>
            <a href="loginsetup.php?topic=new_article">
            	<li>
                	<span class="glyphicon glyphicon-plus" 
                    aria-hidden="true"></span>
                    Add New Article
				</li>
            </a>
            <a href="loginsetup.php?topic=articles_delete">
            	<li>
                	<span class="glyphicon glyphicon-remove" 
                    aria-hidden="true"></span>
                    Delete Article
				</li>
            </a>
            <a href="loginsetup.php?topic=articles_trash">
            	<li>
                	<span class="glyphicon glyphicon-trash" 
                    aria-hidden="true"></span>
                    Trash
				</li>
            </a>
        </div>
    </div>
    <div class="ac-pane 
    	<?php
			if($topic=="downloadmanager" || $topic=="adddownload" || $topic=="downloaddelete"
			|| $topic=="trashdownload"){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Download Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
            <a href="loginsetup.php?topic=downloadmanager">
            	<li>
                    <span class="glyphicon glyphicon-eye-open" 
                    aria-hidden="true"></span> 
                    Download Manager
                </li>
            </a>
            <a href="loginsetup.php?topic=adddownload">
            	<li>
                	<span class="glyphicon glyphicon-plus" 
                    aria-hidden="true"></span>
                    Add New File
				</li>
            </a>
            <a href="loginsetup.php?topic=downloaddelete">
            	<li>
                	<span class="glyphicon glyphicon-remove" 
                    aria-hidden="true"></span>
                    Delete File
				</li>
            </a>
            <a href="loginsetup.php?topic=trashdownload">
            	<li>
                	<span class="glyphicon glyphicon-trash" 
                    aria-hidden="true"></span>
                    Trash
				</li>
            </a>
        </div>
    </div>
    
    <div class="ac-pane 
    	<?php
			if($topic=="publicationmanager" || $topic=="newpublication" 
			|| $topic=="deletepublication" || $topic=="trashpublication"){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Publication Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
            <a href="loginsetup.php?topic=publicationmanager">
            	<li>
                    <span class="glyphicon glyphicon-eye-open" 
                    aria-hidden="true"></span> 
                    View All publication
                </li>
            </a>
            <a href="loginsetup.php?topic=newpublication">
            	<li>
                	<span class="glyphicon glyphicon-plus" 
                    aria-hidden="true"></span>
                    Add New publication
				</li>
            </a>
            <a href="loginsetup.php?topic=deletepublication">
            	<li>
                	<span class="glyphicon glyphicon-remove" 
                    aria-hidden="true"></span>
                    Delete publication
				</li>
            </a>
            <a href="loginsetup.php?topic=trashpublication">
            	<li>
                	<span class="glyphicon glyphicon-trash" 
                    aria-hidden="true"></span>
                    Trash
				</li>
            </a>
        </div>
    </div>
    <div class="ac-pane 
    	<?php
			if($topic=="informationmanager" || $topic=="newinformation" 
			|| $topic=="deleteinformation" || $topic=="trashinformation"){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Notice Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
            <a href="loginsetup.php?topic=informationmanager">
            	<li>
                    <span class="glyphicon glyphicon-eye-open" 
                    aria-hidden="true"></span> 
                    View All Notices
                </li>
            </a>
            <a href="loginsetup.php?topic=newinformation">
            	<li>
                	<span class="glyphicon glyphicon-plus" 
                    aria-hidden="true"></span>
                    Add New Notice
				</li>
            </a>
            <a href="loginsetup.php?topic=deleteinformation">
            	<li>
                	<span class="glyphicon glyphicon-remove" 
                    aria-hidden="true"></span>
                    Delete Notices
				</li>
            </a>
            <a href="loginsetup.php?topic=trashinformation">
            	<li>
                	<span class="glyphicon glyphicon-trash" 
                    aria-hidden="true"></span>
                    Trash
				</li>
            </a>
        </div>
    </div>
    <div class="ac-pane 
    	<?php
			if($topic=="newsandeventmanager" || $topic=="newnewsandevent" 
			|| $topic=="deletenewsandevent" || $topic=="trashnewsandevent"){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>News & Events Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
            <a href="loginsetup.php?topic=newsandeventmanager">
            	<li>
                    <span class="glyphicon glyphicon-eye-open" 
                    aria-hidden="true"></span> 
                    View All News & Events 
                </li>
            </a>
            <a href="loginsetup.php?topic=newnewsandevent">
            	<li>
                	<span class="glyphicon glyphicon-plus" 
                    aria-hidden="true"></span>
                    Add News & Events 
				</li>
            </a>
            <a href="loginsetup.php?topic=deletenewsandevent">
            	<li>
                	<span class="glyphicon glyphicon-remove" 
                    aria-hidden="true"></span>
                    Delete News & Events 
				</li>
            </a>
            <a href="loginsetup.php?topic=trashnewsandevent">
            	<li>
                	<span class="glyphicon glyphicon-trash" 
                    aria-hidden="true"></span>
                    Trash
				</li>
            </a>
        </div>
    </div>
    <div class="ac-pane
    	<?php
			if($topic=="menu" || $topic=="submenu" || $topic=="menu_add"
			|| $topic=="submenu_add" || $topic=="menu_delete" 
			|| $topic=="dubmenu_delete" || $topic=="menu_trash" 
			|| $topic=="submenu_trash" ){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Menu Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
            <a href="loginsetup.php?topic=menu">
            	<li>View All Menu</li>
            </a>
            <a href="loginsetup.php?topic=menu_add">
            	<li>Add New Menu</li>
            </a>
            <a href="loginsetup.php?topic=menu_delete">
            	<li>Delete Menu</li>
            </a>
            <a href="loginsetup.php?topic=menu_trash">
            	<li>Trash Menu</li>
            </a>
        </div>
    </div>
    
    <div class="ac-pane
    	<?php
			if($topic=="advertise" || $topic=="advertise_add" 
			|| $topic=="advertise_delete" || $topic=="advertise_trash" ){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Investor Relation Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
            <a href="loginsetup.php?topic=advertise">
            	<li>View All Investor Relation</li>
            </a>
            <a href="loginsetup.php?topic=advertise_add">
            	<li>Add New Investor Relation</li>
            </a>
            <a href="loginsetup.php?topic=advertise_delete">
            	<li>Delete Investor Relation</li>
            </a>
            <a href="loginsetup.php?topic=advertise_trash">
            	<li>Trash Investor Relation</li>
            </a>
        </div>
    </div>
    
    <div class="ac-pane
    	<?php
			if($topic=="faq" || $topic=="faq_add"
			|| $topic=="faq_delete" 
			|| $topic=="faq_trash"){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>FAQ Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
            <a href="loginsetup.php?topic=faq">
            	<li>View All FAQ</li>
            </a>
            <a href="loginsetup.php?topic=faq_add">
            	<li>Add New FAQ</li>
            </a>
            <a href="loginsetup.php?topic=faq_delete">
            	<li>Delete FAQ</li>
            </a>
            <a href="loginsetup.php?topic=faq_trash">
            	<li>Trash FAQ</li>
            </a>
        </div>
    </div>
    
    <div class="ac-pane
    	<?php
			if($topic=="gallery" || $topic=="gallery_add" 
			|| $topic=="gallery_image_add" || $topic=="gallery_edit" 
			|| $topic=="gallery_images_edit" || $topic=="gallery_delete" 
			|| $topic=="gallery_image_delete"
			|| $topic=="gallery_trash"
			|| $topic=="gallery_image_trash" ){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Gallery Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
            <a href="loginsetup.php?topic=gallery">
            	<li>Gallery Manager</li>
            </a>
            <a href="loginsetup.php?topic=gallery_add">
            	<li>Create New Gallery</li>
            </a>
            <a href="loginsetup.php?topic=gallery_delete">
            	<li>Delete Gallery</li>
            </a>
            <a href="loginsetup.php?topic=gallery_trash">
            	<li>Trash</li>
            </a>
        </div>
    </div>
    <div class="ac-pane
		<?php
			if($topic=="branches" || $topic=="addBranch" || $topic=="deleteBranch" 
			|| $topic=="trashBranch" || $topic=="updateBranch"){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Branch Manage</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
        	<a href="loginsetup.php?topic=branches">
            	<li>Branch Manage</li>
            </a>
            <a href="loginsetup.php?topic=addBranch">
            	<li>Add New Branch</li>
            </a>
            <a href="loginsetup.php?topic=deleteBranch">
            	<li>Delete Branch</li>
            </a>
            <a href="loginsetup.php?topic=trashBranch">
            	<li>Trash</li>
            </a>
        </div>
    </div>
    <div class="ac-pane
		<?php
			if($topic=="membertype" || $topic=="member" || $topic=="memberAdd" 
			|| $topic=="memberDelete" || $topic=="memberTrash"){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Member Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
        	<a href="loginsetup.php?topic=membertype">
            	<li>Member Type Manager</li>
            </a>
            <a href="loginsetup.php?topic=member">
            	<li>View All Member</li>
            </a>
            <a href="loginsetup.php?topic=memberAdd">
            	<li>Add New Member</li>
            </a>
            <a href="loginsetup.php?topic=memberDelete">
            	<li>Delete Member</li>
            </a>
            <a href="loginsetup.php?topic=memberTrash">
            	<li>Trash</li>
            </a>
        </div>
    </div>
    <div class="ac-pane
    	<?php
			if($topic=="setting"){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Admin Setting Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
             <a href="loginsetup.php?topic=setting">
             	<li>Change Your Setting</li>
             </a>
        </div>
    </div>
    <div class="ac-pane
    	<?php
			if($topic=="profile"){
				echo "active";
			} 
		?>
    ">
        <a href="#" class="ac-title" data-accordion="true">
            <span>Company Profile Manager</span>
            <i class="fa"></i>
        </a>
        <div class="ac-content">
             <a href="loginsetup.php?topic=profile">
             	<li>View Your Profile</li>
             </a>
        </div>
    </div>
</div>
<div class="clear"></div>
