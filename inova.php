<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<title>Gabriela Trans | Inova </title>
<?php require('tools/header.php')?>
		<body>
			
			<section class="banner-area relative" id="home">	
			  <div class="overlay overlay-bg"></div>
				<div class="container">
				  <div class="row d-flex align-items-center justify-content-center">
<div class="container">
	    <div class="row fullscreen d-flex align-items-center justify-content-center">
						    <div class="banner-content col-lg-7 col-md-6 ">
						      <h6 class="text-white ">SELAMAT DATANG DI</h6>
						      <h1 class="text-white text-uppercase"> &nbsp;GABRIELA TRANS </h1>
						      <p class="pt-20 pb-20 text-white"> Sewa / Rental Mobil Terbaik di Semarang Dengan Pelayanan Prima </p>
						      <a href="https://wa.me/62856600339469?text=Saya%20ingin%20sewa%20mobil" class="primary-btn text-uppercase">klik jika ingin pesan lewat wa</a> </div>
						    <div class="col-lg-5  col-md-6 header-right">
						      <h4 class="text-white pb-30">PILIH MOBIL TERBAIKMU SEKARANG !</h4>
						      <form class="form" action="pesan.php" role="form" autocomplete="off">
						        <div class="form-group">
						          <div class="default-select" id="default-select" >
						            <select name="mobil">
						              <option value="Inova">Inova</option>
                                    <option value="Avanza">Avanza</option>
						            <option value="Pajero">Pajero</option>
						              <option value="Fortuner">Fortuner</option>
						              <option value="Alphard">Alpard</option>
						              <option value="Elf">Isuzu Elf</option>
						              <option value="Hiace">Toyota Hiace</option>
					                </select>
					              </div>
					            </div>
								<div class="form-group row">
										<div class="col-md-12"> <h5 class="text-white"> Tanggal Berangkat </h5></div></div>
										<div class="form-group row">
									<div class="col-md-12 ">
										<div class="input-group dates-wrap">
										<input id="date" class="dates form-control" name="pergi" placeholder="Tanggal Pergi" type="date">
										<div class="input-group-prepend"> <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span> </div>
										</div>
									</div>
								</div>
	<div class="form-group row">
	<div class="col-md-12"> <h5 class="text-white"> Waktu Berangkat </h5></div></div>
	<div class="form-group row">	
	<div class="col-md-12">
	<div class="input-group time-wrap">                                              
	<input id="time" class="time form-control" name="waktu" placeholder="Waktu Keberangkatan" type="time">											
	<div class="input-group-prepend">
	<span  class="input-group-text"><span class="lnr lnr-clock"></span></span>
												</div>											
				</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-12"> <h5 class="text-white"> Tanggal Pulang </h5></div></div>
										<div class="form-group row">
	<div class="col-md-12">
					<div class="input-group dates-wrap">                                              
												<input id="date2" class="dates form-control" name="pulang" placeholder="Tanggal Pulang" type="date">                        
												<div class="input-group-prepend">
													<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
												</div>											
											</div>
										</div>
									</div>							    				    
							    <div class="from-group">
							    	<input class="form-control" type="text" name="name" placeholder="Nama Pemesan">
									<p></p>
							    	<input class="form-control txt-field" type="varchar" name="address" placeholder="Alamat">
							    	<input class="form-control txt-field" type="varchar" name="tujuan" placeholder="Tujuan">
							    	<input class="form-control txt-field" type="char" name="phone" placeholder="Nomer Telp /wa">
							    </div>
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="restart" name="konfirmasi" class="btn btn-default btn-lg btn-block text-center text-uppercase" >KONFIRMASI&nbsp;</button>
							        </div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
							            <a href="https://wa.me/6281228547149?text=Saya%20ingin%20sewa%20inova" class="btn btn-success btn-block text-center text-uppercase">klik jika ingin pesan lewat wa</a>
							        </div>
									</div>
							</form>
					        </div>
					      </div>
				    </div>											
					</div>
				</div>
			</section>
			<?php require('tools/master_mobil.php')?>		
			<?php require('tools/iklan.php')?>	
			<?php require('tools/kelebihan.php')?>
			<?php require('tools/footer.php')?>
		</body>
	</html>