	<?php

	$id = $_GET['kota'];

					$no = 1;
					foreach ($do->selectKategoriPerjalanan($id) as $value) {

		echo "<ul class='first'>
			<li class='trav'>
				<div class='bus-ic'>
					<img src='gambar/".$value['gambar']."' width='100px' height='100px' class='imgsopek'/>
				</div>
				</br></br></br></br></br>
				<div class='bus-txt'>
					
					<p style='color:black;'>$value[nama]</p>
				</div>
				<div class='clearfix'></div>
			</li>
			
			<li class='arriv'>
				<div class'bus-txt2'>
					<h4>$value[tahun]</h4>
				</div>
			</li>
			
			<li class='seat'>
				<div class='bus-i'>
					<h4>$value[no_plat]</h4>
				</div>
				<div class='bus-txt3'>
					
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='kursi'>
				<div class='bus-i'>
					<h4>$value[kursi] kursi</h4>
				</div>
				<div class='bus-txt3'>
					
				</div>
				<div class='clearfix'></div>
			</li>
			<li class='fare'>
				<div class='bus-txt4'>
					<h4>RP. $value[harga]</h4>
					<a href='ceklogin.php?pesan=$value[idMobil]' class='view'>Pesan</a>
					<div class='clearfix'></div>
					</div>
					</li>
					<div class='clearfix'></div>
					</ul>"
					;
						$no++;
					}
					?>