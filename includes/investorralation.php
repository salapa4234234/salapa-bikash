
<style>
	.cwarp{
		min-height:500px;}
	.tabs {
		position: relative;
		margin: 3rem 0;
		background: #058100;
		height: 14.75rem;
	}
	.tabs::before,
	.tabs::after {
		content: "";
		display: table;
	}
	.tabs::after {
		clear: both;
	}
	.tab {
		float: left;
	}
	.tab-switch {
		display: none;
	}
	.tab-label {
		position: relative;
		display: block;
		line-height: 2.75em;
		height: 3em;
		padding: 0 1.618em;
		background: #058100;
		border-right: 0.125rem solid #16a085;
		color: #fff;
		cursor: pointer;
		top: 0;
		transition: all 0.25s;
	}
	.tab-label:hover {
		top: -0.25rem;
		transition: top 0.25s;
	}
	.tab-content {
		min-height:200px;
		width:100%;
		position: absolute;
		z-index: 1;
		top: 2.75em;
		left: 0;
		padding: 1.618rem;
		background: #fff;
		color: #2c3e50;
		border-bottom: 0.25rem solid #bdc3c7;
		opacity: 0;
		transition: all 0.35s;
	}
	.tab-switch:checked + .tab-label {
		background: #fff;
		color: #2c3e50;
		border-bottom: 0;
		border-right: 0.125rem solid #fff;
		transition: all 0.35s;
		z-index: 1;
		top: -0.0625rem;
	}
	.tab-switch:checked + label + .tab-content {
		z-index: 2;
		opacity: 1;
		transition: all 0.35s;
	}
	
	.fa{
		color:#39C;
		height:100%;
		width:100%;}
	.fa:hover{
		color:#F00;}
</style>
<div class="container cwarp">
<div class="wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div style="color:#058100; text-align:center; font-size:2em; padding-top:20px;">
		<span> Investor Relations</span>
    </div>
    <div class="tabs">
        <div class="tab">
            <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
            <label for="tab-1" class="tab-label">Financial Indicators</label>
            <div class="tab-content">
                <table class="table" style="text-align:center; color:#54a8d7;">
                	<tr>
                    	<th style="text-align:center;">S.N</th>
                        <th style="text-align:center;">Title</th>
                    	<th style="text-align:center;">Fiscal Year </th>
                    	<th style="text-align:center;">Published Date </th>
                        <th style="text-align:center;">Download</th>
                    </tr>
                    <?php
						$result=$obj->select("select * from tbl_add where type='financialindicators' 
						and del='1' order by id desc");
						$c=1;
						while($data=mysqli_fetch_assoc($result)){
					?>
                    <tr>
                    	<td><?php echo $c; ?></td>
                        <td><?php echo $data['client_name']; ?></td>
                        <td><?php echo $data['url']; ?></td>
                        <td><?php echo $data['dates']; ?></td>
                        <td>
                        	<a href="images/add_images/<?php echo $data['image']; ?>" target="_blank">            
                    			<i class="fa fa-download" aria-hidden="true"></i>
                			</a>
                		</td>
                    </tr>
                    <?php
						}
					?>
                </table>
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
            <label for="tab-2" class="tab-label">Qarterly Report</label>
            <div class="tab-content">
                <table class="table" style="text-align:center; color:#54a8d7;">
                	<tr>
                    	<th style="text-align:center;">S.N</th>
                        <th style="text-align:center;">Title</th>
                    	<th style="text-align:center;">Fiscal Year </th>
                    	<th style="text-align:center;">Published Date </th>
                        <th style="text-align:center;">Download</th>
                    </tr>
                    <?php
						$result=$obj->select("select * from tbl_add where type='quarterlyreport' 
						and del='1' order by id desc");
						$c=1;
						while($data=mysqli_fetch_assoc($result)){
					?>
                    <tr>
                    	<td><?php echo $c; ?></td>
                        <td><?php echo $data['client_name']; ?></td>
                        <td><?php echo $data['url']; ?></td>
                        <td><?php echo $data['dates']; ?></td>
                        <td>
                        	<a href="images/add_images/<?php echo $data['image']; ?>" target="_blank">            
                    			<i class="fa fa-download" aria-hidden="true"></i>
                			</a>
                		</td>
                    </tr>
                    <?php
						}
					?>
                </table>
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
            <label for="tab-3" class="tab-label">Annual Report</label>
            <div class="tab-content">
                <table class="table" style="text-align:center; color:#54a8d7;">
                	<tr>
                    	<th style="text-align:center;">S.N</th>
                        <th style="text-align:center;">Title</th>
                    	<th style="text-align:center;">Fiscal Year </th>
                    	<th style="text-align:center;">Published Date </th>
                        <th style="text-align:center;">Download</th>
                    </tr>
                    <?php
						$result=$obj->select("select * from tbl_add where type='annualreport'
						and del='1' order by id desc");
						$c=1;
						while($data=mysqli_fetch_assoc($result)){
					?>
                    <tr>
                    	<td><?php echo $c; ?></td>
                        <td><?php echo $data['client_name']; ?></td>
                        <td><?php echo $data['url']; ?></td>
                        <td><?php echo $data['dates']; ?></td>
                        <td>
                        	<a href="images/add_images/<?php echo $data['image']; ?>" target="_blank">            
                    			<i class="fa fa-download" aria-hidden="true"></i>
                			</a>
                		</td>
                    </tr>
                    <?php
						}
					?>
                </table>
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="css-tabs" id="tab-4" class="tab-switch">
            <label for="tab-4" class="tab-label">Basel Report</label>
            <div class="tab-content">
               <table class="table" style="text-align:center; color:#54a8d7;">
                	<tr>
                    	<th style="text-align:center;">S.N</th>
                        <th style="text-align:center;">Title</th>
                    	<th style="text-align:center;">Fiscal Year </th>
                    	<th style="text-align:center;">Published Date </th>
                        <th style="text-align:center;">Download</th>
                    </tr>
                    <?php
						$result=$obj->select("select * from tbl_add where type='baselreport'
						and del='1' order by id desc");
						$c=1;
						while($data=mysqli_fetch_assoc($result)){
					?>
                    <tr>
                    	<td><?php echo $c; ?></td>
                        <td><?php echo $data['client_name']; ?></td>
                        <td><?php echo $data['url']; ?></td>
                        <td><?php echo $data['dates']; ?></td>
                        <td>
                        	<a href="images/add_images/<?php echo $data['image']; ?>" target="_blank">            
                    			<i class="fa fa-download" aria-hidden="true"></i>
                			</a>
                		</td>
                    </tr>
                    <?php
						}
					?>
                </table>
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="css-tabs" id="tab-5" class="tab-switch">
            <label for="tab-5" class="tab-label">Base Rate & Spread Rate</label>
            <div class="tab-content">
                <table class="table" style="text-align:center; color:#54a8d7;">
                	<tr>
                    	<th style="text-align:center;">S.N</th>
                        <th style="text-align:center;">Title</th>
                    	<th style="text-align:center;">Fiscal Year </th>
                    	<th style="text-align:center;">Published Date </th>
                        <th style="text-align:center;">Download</th>
                    </tr>
                    <?php
						$result=$obj->select("select * from tbl_add where type='baserateandspreadrate'
						and del='1' order by id desc");
						$c=1;
						while($data=mysqli_fetch_assoc($result)){
					?>
                    <tr>
                    	<td><?php echo $c; ?></td>
                        <td><?php echo $data['client_name']; ?></td>
                        <td><?php echo $data['url']; ?></td>
                        <td><?php echo $data['dates']; ?></td>
                        <td>
                        	<a href="images/add_images/<?php echo $data['image']; ?>" target="_blank">            
                    			<i class="fa fa-download" aria-hidden="true"></i>
                			</a>
                		</td>
                    </tr>
                    <?php
						}
					?>
                </table>
            </div>
        </div>
    </div>
</div>
</div>