<div class="forex-pop" style="display: none;">
    <div class="table-responsive">
        <table class="table forex-table">
            <thead>
                <tr>
                    <th>Branches</th>
                    <th>Contact Number</th>
                    <th>Email Address</th>
                    <th>Contact Person</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $quickResult=$obj->select("select * from tbl_branches where status='1' and feature='1' and del='1'");
                
                while($quickData=mysqli_fetch_assoc($quickResult)){
            ?>
                <tr>
                    <td><?php echo $quickData['name']; ?></td>
                    <td><?php echo $quickData['contact']; ?></td>
                    <td><?php echo $quickData['email']; ?></td>
                    <td><?php echo $quickData['contactPersion']; ?></td>
                </tr>
                <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    <button class="close-forex">x</button>
</div>