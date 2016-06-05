  <nav class="navbar navbar-default navbar-fixed-top" style="height: 79px; background-color: #fff; border:1px solid #f8f8f8; " >
        <div class="container-fluid">     
        <ul class="nav navbar-nav navbar-left pull-left">
           
            <li>
                <a href="#">
                    <span class="icon-Home" style="font-size: 48px; color: #0094cf"> </span>
		        </a>
            </li>
					
            <li class="dropdown"> 
		        <a class="dropdown-toggle" data-toggle="dropdown" style="color: #d44f3b; padding-bottom:0px; height:79px"  href="#">
                            <p class="icon-category" style="font-size: 48px; color: #d44f3b"></p>
                </a>
                    <ul class="dropdown-menu" min-width="10px" width="93px" width="93px" style="background-color: #fff; left: -40;"   >                      
                        <li>
                            <a href="#"> <span class="icon-elektronik" style="font-size: 32px; color: #008bc3">
                                <text style="font-size:14; color: #008bc3;">Elektronik</text> </span></a>
                        </li> 
                    </ul>           
            </li> 
            <li>
                <a href="#">
                    <span class="icon-help" style="font-size: 48px; color: #32b6c7"></span>
                </a>
            </li> 
        </ul>
            
            <a class="brand" href="<?php echo site_url('Welcome/index') ?>" style="padding-top: 0px;><span style="padding-top: 0px"><img src="<?php echo base_url(); ?>assets/images/home2.png" width="134px" height="163px" style=" width: 110px; height: 126px; " /></span></a> 
            
        <ul class="nav navbar-nav navbar-right pull-right">
           
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" style="color: #d44f3b; padding-bottom:0px; height:79px" href="#">
                    <span class="icon-search" style="font-size: 48px; color: #32b6c7"> </span>
                </a>
                     <ul class="dropdown-menu" min-width="10px" width="93px" width="93px" style="background-color: #32b6c7"  >
                      
                        <li>
                            <form class="navbar-form" id="search">
                                <div class="form-group" style="pading-top:20px;">
                                    <input style="width:250px;" type="text" class="form-control" placeholder="Search">
                                </div>
                            </form> 
                        </li>     
                     </ul>
            </li>
            
            <?php if ($this->session->userdata('username') == TRUE) {?>

    <li class="nav navbar-nav navbar-right">
        <a href="<?php echo site_url('Login/logout'); ?>" class="btn btn-default btn-outline btn-circle collapsed">logout</a>   
    </li>   

            <?php } else { ?>
            <li>
		        <a href="<?php echo site_url('Login/index') ?>">
                    <span class="icon-login" style="color:#d44f3b; font-size:48px;"></span>
                </a>
            </li>
            <?php } ?>
            <li align="center">
                <a href="<?php echo site_url('Regist/registform') ?>">
                    <span class="icon-daftar" style="color:#0094cf; font-size:48px;"></span>
                </a>
            </li>
       
        </ul>
            
        </div>
        </nav>
           
        </ul>