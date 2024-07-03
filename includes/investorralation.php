


<style>
/* Style the tab */
.tab {
    display: flex;
    border: 1px solid #ccc;
    background-color: #058100;
    color: #ffff;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    font-weight: 600;
    text-wrap: nowrap;
}

.tab button:not(:last-child) {
    border-right: 1px solid #ccc;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: white;
    color: black;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: white;
    color: black;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    width: 100%;
}

.report-tab {
    min-width: 500px;
}

.report-tabs {
    width: 100%;
    overflow-x: auto;
}
</style>
<div class="container">
    <div class="report-tabs">
        <div class="report-tab">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Financial')">Financial Report</button>
                <button class="tablinks" onclick="openCity(event, 'Qarterly')">Qarterly Report</button>
                <button class="tablinks" onclick="openCity(event, 'Annual')">Annual Report</button>
                <button class="tablinks" onclick="openCity(event, 'Basel')">Basel Report</button>
                <button class="tablinks" onclick="openCity(event, 'Base')">Base Rate & Spread Rate</button>
            </div>

            <div id="Financial" class="tabcontent" style="display:block">
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

            <div id="Qarterly" class="tabcontent">
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

            <div id="Annual" class="tabcontent">
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
            <div id="Basel" class="tabcontent">
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
            <div id="Base" class="tabcontent">
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
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>