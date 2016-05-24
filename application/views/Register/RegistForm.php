

<div class="container" style="padding-top: 150px;">
    <div class="col-md-9">
    <form class="form-horizontal" name="input_data" action="<?php echo site_url('Regist/registerasi') ?>" method="post" style="color:#7f7f7f;">

        
        <h1>Daftar</h1>


<div class="form-group">
	<label class="control-label col-sm-2" for="nama">Nama:</label>
	<div class="col-sm-10">
		<input type="text" required autocomplete="off" class="form-control req" name="nama" placeholder="Nama">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="tgl">Tanggal Lahir:</label>
	<div class="form-inline">
            
		<select class="form-control" style="margin-left: 15px;" name="tanggal">
		<option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option selected value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option> 
		</select>
            
		<select class="form-control" name="bulan">
		<option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option selected value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option> 
		</select>
            
            
		<select class="form-control" name="tahun">
		<option value="1945">1945</option>
                <option value="1946">1946</option>
                <option value="1947">1947</option>
                <option value="1948">1948</option>
                <option value="1949">1949</option>
                <option value="1950">1950</option>
                <option value="1951">1951</option>
                <option value="1952">1952</option>
                <option value="1953">1953</option>
                <option value="1954">1954</option>
                <option value="1955">1955</option>
                <option value="1956">1956</option>
                <option value="1957">1957</option>
                <option value="1958">1958</option>
                <option value="1959">1959</option>
                <option value="1960">1960</option>
                <option value="1961">1961</option>
                <option value="1962">1962</option>
                <option value="1963">1963</option>
                <option value="1964">1964</option>
                <option value="1965">1965</option>
                <option value="1966">1966</option>
                <option value="1967">1967</option>
                <option value="1968">1968</option>
                <option value="1969">1969</option>
                <option value="1970">1970</option>
                <option value="1971">1971</option>
                <option value="1972">1972</option>
                <option value="1973">1973</option>
                <option value="1974">1974</option>
                <option value="1975">1975</option>
                <option value="1976">1976</option>
                <option value="1977">1977</option>
                <option value="1978">1978</option>
                <option value="1979">1979</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                </select>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jenis Kelamin :</label>
	<div class="col-sm-2">
		<div class="radio">
			<label>
			<input type="radio" name="jenisKelamin" value="laki-laki" data-fv-notempty="true" data-fv-notempty-message="The gender is required" /> Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
			<input type="radio" name="jenisKelamin" value="perempuan" /> Perempuan
			</label>
		</div>
	</div>
</div>


<div class="form-group">
	<label class="control-label col-sm-2" for="alamat">Alamat:</label>
	<div class="col-sm-10 ">
		<input type="text" required autocomplete="off" class="form-control req" name="alamat" placeholder="Alamat rumah/Tempat tinggal">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="Kecamatan">Kecamatan:</label>
	<div class="col-sm-10 ">
		<input type="text" required autocomplete="off" class="form-control req" name="kecamatan" placeholder="kecamatan">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="kabupaten">Kabupaten:</label>
	<div class="col-sm-10 ">
		<input type="text" required autocomplete="off" class="form-control req" name="kabupaten" placeholder="Kabupaten">
	</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="tgl">Provinsi</label>
	<div class="form-inline">
    <select class="form-control" name="Provinsi" id="Provinsi" style="margin-left:15px;">
        <option value="DI Aceh">DI Aceh</option>
        <option value="Sumatra Utara">Sumatra Utara</option>
        <option value="Sumatra Selatan">Sumatra Selatan</option>
        <option value="Sumatra Barat">Sumatra Barat</option>
        <option value="Bengkulu">Bengkulu</option>
        <option value="Riau">Riau</option>
        <option value="kepulauan Riau">kepulauan Riau</option>
        <option value="Jambi">Jambi</option>
        <option value="Lampung">Lampung</option>
        <option value="Bangka Belitung">Bangka Belitung</option>
        <option value="Kalimantan Barat">Kalimantan Barat</option>
        <option value="Kalimantan Timur">Kalimantan Timur</option>
        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
        <option value="Kalimantan Utara">Kalimantan Utara</option>
        <option value="Banten">Banten</option>
        <option value="DKI Jakarta">DKI Jakarta</option>
        <option value="Jawa Barat">Jawa Barat</option>
        <option value="Jawa Tengah">Jawa Tengah</option>
        <option value="DI Yogyakarta">DI Yogyakarta</option>
        <option value="Jawa Timur">Jawa Timur</option>
        <option value="Bali">Bali</option>
        <option value="NTB">NTB</option>
        <option value="NTT">NTT</option>
        <option value="Gorontalo">Gorontalo</option>
        <option value="Sulawesi Barat">Sulawesi Barat</option>
        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
        <option value="Sulawesi Utara">Sulawesi Utara</option>
        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
        <option value="Maluku Utara">Maluku Utara</option>
        <option value="Maluku">Maluku</option>
        <option value="Papua">Papua</option>
        <option value="Papua Barat">Papua Barat</option>
</select>

        </div>
</div>


<div class="form-group">
	<label class="control-label col-sm-2" for="noTelp">No Telp/HP: </label>
	<div class="col-sm-10 "> 
		<input type="text" required autocomplete="off" class="form-control req" name="noTelp" placeholder="No Telp/HP">
	</div>
</div>

<?php echo validation_errors(); ?>
        
<div class=" form-group">
    <label class="control-label col-sm-2">E-mail</label>
    <div class="col-sm-10">
    <input id="email" class="form-control req" name="email" type="text" value=""  />
    <label id="message"></label>
    <span id="loading"><img src="<?php echo base_url(); ?>assets/icon/loading/cube.gif" alt="Ajax Indicator" /></span> </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
   <script type="text/javascript">
   $(document).ready(function() {
        /// make loader hidden in start
    $('#loading').hide();

     $('#email').blur(function(){
        var email_val = $("#email").val();
        var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
        if(filter.test(email_val)){
            // show loader
            $('#loading').show();
            $.post("<?php echo site_url()?>/Regist/email_check", {
                email: email_val
            }, function(response){
                $('#loading').hide();
                $('#message').html('').html(response.message).show().delay(5000).fadeOut();
            });
            return false;
        }
    });
    
    });  
</script>
</div>

<div class="form-group">
	<label class="control-label  col-sm-2" for="psw">Kata Sandi:</label>
	<div class="col-sm-10"> 
		<input type="password" required autocomplete="on" class="form-control req" name="pwd" placeholder="Kata Sandi" id="pswrd">
	</div>
</div>
<div class="form-group">
	<label for="confpsw" class="control-label col-sm-2" >Konfirmasi Kata Sandi:</label>
	<div class="col-sm-10"> 
		<input type="password" required autocomplete="on"  class="form-control req" name="confpwd"  placeholder="Konfirmasi Kata Sandi" id="verivy">
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#verivy').keyup(function(){
        if($(this).val() == $('#pswrd').val()){
            $('#sukses').removeClass('hidden');
            $('#gagal').addClass('hidden');
        }
        else{
            $('#gagal').removeClass('hidden');
            $('#sukses').addClass('hidden');
        }
    });
});
</script>

<div class="alert alert-danger hidden" role="alert" id="gagal">
  <strong>Password berbeda</strong> password terdeteksi berbeda dari sebelumnya
</div>

<div class="alert alert-success hidden" role="alert" id="sukses">
  <strong>password cocok!</strong>
</div>

<div class="form-group"> 
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-default">Submit</button>
	</div>
</div>
</form>
</div>
</div>
