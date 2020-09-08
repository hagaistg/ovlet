<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
											
                                            <h3 ><center>Masuk Dengan Akun Anda</center></h3>
                                            <div class="imgcontainer">
                                                <img src="img/user.png" alt="Avatar" class="avatar">
                                              </div>

                                            <label><b>Username</b></label>
                                            <input type="text" placeholder="Enter Username" name="username">
                                            
                                            <label><b>Password</b></label>
                                            <input type="password" placeholder="Enter Password" name="password" required>
                                            <button type="submit" value="SIGNIN" name="masuk">Masuk</button>
                                            <input type="checkbox" checked="checked"><span>Ingat Saya</span><br>
                                            <a href="admin/index.php">Masuk sebagai admin rental</a><br>
                                            <a href="driver/login_driver.php">Masuk sebagai driver</a><br>
                                            

                                        </form>
									</div>
									<div class="clearfix"></div>								
								</div>
								</div>
						</div>
					</div>
				</div>
			</div>