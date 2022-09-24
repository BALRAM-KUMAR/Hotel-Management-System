
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="img/user.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
          
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>CUSTOMER</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
    <?php 
    
        if (isset($_GET['reservation'])){ ?>
            <li class="active">
            <a href="index1.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index1.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php }
       ?>

        
    </ul>
</div>