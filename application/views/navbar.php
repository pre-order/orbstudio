<? $this->load->view('head');?>

<body>
    
<nav class="navbar navbar-default navbar-fixed-top" style="height:85px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          
        <!----search dropdown--->  
        <li class="dropdown" align="center">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" padding-bottom: 5px;">
           <span class="icon-search" style="font-size:48px; color:#00C9D8;">
           </span></a>
            <ul class="dropdown-menu mega-dropdown-menu" style="top:85px;">
                <li>
                
                <form class="navbar-form" id="search" role="search">
                        <div class="form-group" style="padding-top:20px;">
                            <input style="width:420px;" type="text" class="form-control" placeholder="Search">
                        </div>
                </form>
                </li>
            </ul>
        </li>
        <!------search dropdown----->
        
        
        <!-- dropdown -->
        <li class="dropdown" align="center">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" padding-bottom: 5px;">
           <span class="icon-category" style="font-size:48px; color:#006dbc;">
           </span></a>
            
                <ul class="dropdown-menu multi-column columns-3" style="width:70%; top:90px;">
                    <div class="row">
                        
                        <div class="col-sm-3">
                            <ul class="multi-column-dropdown">
                                <li align="center"><a href="#"><img src="<?php echo base_url(); ?>assets/icon/Kategori/Elektronik 128px.png" alt=""/></a></li>
                            </ul>
                        </div>
                        
                         <div class="col-sm-3">
                            <ul class="multi-column-dropdown">
                                 <li align="center"><a href="#"><img src="<?php echo base_url(); ?>assets/icon/Kategori/Fashion 128px.png" alt=""/></a></li>
                            </ul>
                        </div>
                         <div class="col-sm-3">
                            <ul class="multi-column-dropdown">
                                
                                 <li align="center"><a href="#"><img src="<?php echo base_url(); ?>assets/icon/Kategori/Hobi 128px.png" alt=""/></a></li> 
                            </ul>
                        </div>
                         <div class="col-sm-3">
                            <ul class="multi-column-dropdown">
                                <li align="center"><a href="#"><img src="<?php echo base_url(); ?>assets/icon/Kategori/Kuliner 128px.png" alt=""/></a></li>     
                            </ul>
                        </div>
                    </div>
                </ul>
            </li>
        <!-- dropdown -->
            
            
         <li>
            <a href="<?php echo site_url('Welcome/index') ?>"><span class="icon-logo" style="color:#00C39A; font-size:64px;"></span></a>
	</li>
      
        <?php
			if(!empty($_SESSION['username'])){ ?>
			<span style="padding:15px 0;display:inline-block">Selamat datang, <?php echo $_SESSION['username']; 
        ?> 
                        <a href="logout.php">[LOGOUT]</a>
                        </span>
			<?php } else { 
                            
                        }
                        ?>
                        
                        
        <li>
            <a href="<?php echo site_url('Login/index') ?>"><span class="icon-login" style="color:#F9B031; font-size:48px;"></span></a>
	</li>
        
            <li align="center">
                <a href="<?php echo site_url('Regist/registform') ?>"><span class="icon-daftar" style="color:#2F546C; font-size:48px;"></span></a>
            </li>
        
      </ul>
    </div>
  </div>
</nav>
    
    <?php if(!empty($_SESSION['salah'])){ 
        ?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Login Gagal!</strong> Nama user atau kata sandi salah.
</div>
    <?php } 
?>
        
