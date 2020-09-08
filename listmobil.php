<?php
					$no = 1;
					foreach ($do->selectMobilKotaHarga() as $value) {
						

		echo "<ul class='first'>
			<li class='trav'>
				<div class='bus-ic'>
					<img src='gambar/".$value['gambar']."' class='imgsopek'/>
				</div>
				</br></br></br></br></br>
			<div class='bus-txt'>	
				<b><p style='color:black;'>$value[nama]</p></b>
				</div>
				<div class='clearfix'></div>
			</li>
			
			<li class='arriv'>
				<div class'bus-txt2'>
					<h4>$value[tahun]</h4>
				</div>
			</li>
			
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			</li>
			<li class='seat'>
				<div class='bus-i'>
					<h4>$value[no_plat]</h4>
				</div>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;	
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li class='kursi'>
				<div class='bus-i'>
					<h4>$value[kursi] kursi</h4>
				</div>
				<div class='bus-txt3'>
					
				</div>
				<div class='clearfix'></div>
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
			<li>&nbsp;
			</li>
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