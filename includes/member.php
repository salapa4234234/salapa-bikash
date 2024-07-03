<style>
.memberbox {
    position: relative;
    margin: 10px 0px;
    text-align: center;
}

.memberbox b {
    font-size: 1.3em;
    text-transform: uppercase;
}

@media (min-width: 900px) {}

.member-container {
    position: relative;
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

.popups {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s, visibility 0.3s;
    z-index: 999;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow-y: scroll;
    height: 100%;
}

.pop-overlays {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(209, 209, 209, 0.8);
}

.pop-containers {
    border-radius: 10px;
    padding: 2rem;
    width: 100%;
    max-width: 600px;
    position: relative;
    box-shadow: 0 0 80px 30px rgba(0, 0, 0, 0.3);
    background: rgb(2, 0, 36);
    background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(139, 138, 155, 1) 0%, rgba(190, 189, 199, 1) 0%, rgba(255, 255, 255, 1) 0%, rgba(221, 249, 255, 1) 99%, rgba(233, 251, 255, 1) 100%, rgba(236, 252, 255, 1) 100%, rgba(241, 253, 255, 1) 100%, rgba(240, 252, 255, 1) 100%, rgba(241, 252, 255, 1) 100%, rgba(184, 243, 255, 1) 100%, rgba(172, 241, 255, 1) 100%, rgba(0, 212, 255, 1) 100%);
    z-index: 2;
    background-color: #f3f3f3;
    color: black;
}

.popups.is-visible {
    opacity: 1;
    visibility: visible;
}

.popups .item img {
    width: 100%;
    margin: 0;
    object-fit: contain;
    height: 100%;
}

.popups .popup-close {
    position: absolute;
    top: 5px;
    right: 5px;
    width: 30px;
    height: 30px;
    text-indent: -99999px;
    background-color: #333333;
    border-radius: 50%;
    z-index: 1;
}

.popups .popup-close::before,
.popups .popup-close::after {
    content: "";
    position: absolute;
    top: 13px;
    width: 11px;
    height: 2px;
    background-color: #fff;
}

.popups .popup-close::before {
    transform: rotate(45deg);
    left: 8px;
}

.popups .popup-close::after {
    transform: rotate(-45deg);
    right: 8px;
}

.is-visible .popups .item {
    transform: translateY(0);
}

.popup-information {
    text-align: center;
    font-size: 1.9rem;
    font-weight: 600;
    padding-bottom: 1.6rem;
    border-bottom: 1.8px solid #d6d7d6;
}

.popup-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    border-radius: 10%;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    overflow: hidden;

}

.popup-image-section {
    position: relative;
    width: 100%;
    height: 100%;
    cursor: pointer;
    transition: all 0.3s;
    margin: 2.5rem auto;
    flex-basis: 50%;
}

.popup-image-section:hover {
    transform: scale(1.05);
}

.popup_member {
    disply: flex !important;
    justify-content: center;
    align-items: center;
    width: 100%;
    font-size: 1.5rem;
    font-weight: 600;
    line-height: 1.7;
    text-align: left;
}

.popup-des {
    font-size: 1.3rem;
    font-weight: 500;
    line-height: 1.7;
    margin: 1.4rem 0;
    text-align: justify;
}

.popup-flex {
    display: flex;
    justify-content: space-between;
    gap: 2rem;
    align-items: center;
    width: 100%;
    font-size: 1.5rem;
    font-weight: 600;
    line-height: 1.7;
    text-align: center;
}

.popup_member-section {
    flex-basis: 50%;
}

@media screen and (max-width: 768px) {
    .popup-flex {
        flex-direction: column;
    }

    .popup-image-section {
        width: 50%;

    }

    .pop-containers {
        margin-top: 12rem;
    }

}

.profile .profile-section {
    width: 100%;
    height: 363px;
}
</style>

<?php
$result = $obj->select("select * from tbl_membertype where status='1'");
while ($data = mysqli_fetch_assoc($result)) {
   $membertypeid = $data['id'];
   if ($data['slug'] == $topic) {
      $result1 = $obj->select("select * from tbl_member where 
      membertypeid='$membertypeid' 
      and del='1' and status='1' order by displayposition");
      while ($data1 = mysqli_fetch_assoc($result1)) {
?>
<div class="popups" id="<?php echo $data1['id']; ?>" role="alert">
    <div class="pop-overlays"></div>
    <div class="pop-containers">
        <button class="popup-close img-replace">close</button>
        <h4 class="popup-information"><?php echo $data1['position']; ?></h4>
        <div class="popup-flex">
            <div class="popup-image-section">
                <?php if ($data1['image'] != "") { ?>
                <img src="images/memberImages/<?php echo $data1['image']; ?>" class="popup-image" />
                <?php } else { ?>
                <img src="them_img/dmem.jpg" class="popup-image" />
                <?php } ?>
            </div>

            <div class="popup_member-section">
                <div class="popup_member">
                    <?php
                    if($data1['memberName']!=""){
                        echo "<b>".$data1['memberName']."</b>"."<br>";
                    }
                    if($data1['position']!=""){
                        echo "<b>".$data1['position']."</b>"."<br>";
                    }
                    if($data1['contact']!=""){
                        echo $data1['contact']."<br>";
                    }
                    if($data1['email']!=""){
                        echo $data1['email']."<br>";
                    }
                ?>
                </div>
                <div class="popup-des">
                    <?php echo $data1['content']; ?>

                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
</div>
<?php
      }
   }
}
?>

<div class="container">
    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <?php
         $result = $obj->select("select * from tbl_membertype where status='1'");
         while ($data = mysqli_fetch_assoc($result)) {
            $membertypeid = $data['id'];
            if ($data['slug'] == $topic) {
      ?>
        <div>
            <p class="profile_title"><?php echo $data['membertype']; ?></p>
        </div>
        <div class="member-container">
            <?php
            $result1 = $obj->select("select * from tbl_member where 
            membertypeid='$membertypeid' 
            and del='1' and status='1' order by displayposition");
            while ($data1 = mysqli_fetch_assoc($result1)) {
         ?>
            <div class="profile" onclick="handleClick(<?php echo $data1['id']; ?>)">
                <div class="profile-section">
                    <?php if ($data1['image'] != "") { ?>
                    <img src="images/memberImages/<?php echo $data1['image']; ?>" />
                    <?php } else { ?>
                    <img src="them_img/dmem.jpg" style="width:80%;" />
                    <?php } ?>
                </div>
                <div class="profile_footer">
                    <?php
                    if($data1['memberName']!=""){
                        echo "<b>".$data1['memberName']."</b>"."<br>";
                    }
                    if($data1['position']!=""){
                        echo "<b>".$data1['position']."</b>"."<br>";
                    }
                    if($data1['contact']!=""){
                        echo $data1['contact']."<br>";
                    }
                    if($data1['email']!=""){
                        echo $data1['email']."<br>";
                    }
                ?>
                </div>
                <div class="clear"></div>
            </div>
            <?php } ?>
        </div>
        <div class="clear"></div>
        <?php
            }
         }
      ?>
    </div>
</div>

<script>
document.querySelectorAll('.profile').forEach(profile => {
    profile.addEventListener('click', function() {
        const id = this.getAttribute('onclick').match(/\d+/)[0];
        const popup = document.getElementById(id);
        if (popup) {
            popup.classList.add('is-visible');
        }
    });
});

document.querySelectorAll('.popup-close').forEach(closeButton => {
    closeButton.addEventListener('click', function() {
        this.closest('.popups').classList.remove('is-visible');
    });
});
</script>