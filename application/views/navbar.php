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
        <a class="navbar-brand" href="<?php echo site_url('welcome/index'); ?>"><img src="<?php echo base_url(); ?>assets/icon/PO/PO 85px.png" style="height:64px;" alt=""/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          
          
        <li align="center"><a href="index.php"><img src="<?php echo base_url(); ?>assets/icon/Tentang PO/tentang PO 85px.png" alt="" style="height:64px;"/></a></li>
        
        
        
        <!-- dropdown -->
        <li class="dropdown" align="center">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" padding-bottom: 5px;">
                    <img src="<?php echo base_url(); ?>assets/icon/Kategori/Kategori 85px.png" style="height:64px;" alt=""/></a>
            
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
            
            
         <!-- Search box -->
        <li  >
                <form class="navbar-form" id="search" role="search">
                        <div class="form-group" style="padding-top:20px;">
                            <input style="width:420px;" type="text" class="form-control" placeholder="Search">
                        </div></form>
            </li>
            <!-- Search box -->
            
        <li align="center"><a href="#"></a></li> 
      
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
		<a href="<?php echo site_url('Login/index') ?>"><img src="<?php echo base_url(); ?>assets/icon/Icon Login/Login 64px.png" alt=""/></a>
	</li>
        
            <li align="center">
                <a href="<?php echo site_url('Regist/registform') ?>"><img src="<?php echo base_url(); ?>assets/icon/Icon Daftar/Daftar 85px.png" style="height:64px;" alt=""/></a>
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
        
