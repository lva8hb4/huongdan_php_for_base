	</div>
								<!-- end #content -->
								<div id="sidebar">
						<div id="search">
							<h2>Search</h2>
							<form method="get" action="">
								<fieldset>
									<input type="text" name="s" id="search-text" size="15" value="gõ từ khóa tìm kiếm..." />
									<input type="submit" id="search-submit" name="GO" value="GO" />
								</fieldset>
							</form>
						</div>
									<ul>
										<li>
											<h2>Từ khóa tìm nhiều</h2>
											<p>Biệt động, vua bánh mỳ, thiếu lâm tự, những đứa con sài gòn, phim chiếu rạp</p>
										</li>
										<li>
											<h2>THỂ LOẠI</h2>
											<ul>
												<?php
							
							include("connect.php");

                            $lstChuDe = mysqli_query($conn, "Select * from chude");
                            while($r= mysqli_fetch_array($lstChuDe))
                            {

								echo "<li><a href='#'>" . $r['TenChuDe'] .  "</a></li>";
								
							}
							
							mysqli_close($conn);
							
							?>
											</ul>
										</li>
										<li>
											<h2>QUỐC GIA</h2>
											<ul>
												<li><a href="#">Việt Nam</a></li>
												<li><a href="#">Anh</a></li>
												<li><a href="#">Mỹ</a></li>
												<li><a href="#">Ấn Độ</a></li>
												<li><a href="#">Hàn Quốc</a></li>
												<li><a href="#">Trung Quốc</a></li>
											</ul>
										</li>
										<li>
											<h2>DIỄN VIÊN</h2>
											<ul>
												<li><a href="#">Tom Hanks</a></li>
												<li><a href="#">Leonardo DiCaprio</a></li>
												<li><a href="#">Tom Cruise</a></li>
												<li><a href="#">Angelina Jolie</a></li>
												<li><a href="#">Ngô Thanh Vân</a></li>
												<li><a href="#">Dustin Nguyễn</a></li>
												<li><a href="#">Dustin Nguyễn</a></li>
												<li><a href="#">Chương Tử Di</a></li>
												<li><a href="#">Kim Hyun Jin</a></li>
												
											</ul>
										</li>
									</ul>
								</div>
								<!-- end #sidebar -->
								<div style="clear: both;">&nbsp;</div>
							</div>
						</div>
					</div>
					<!-- end #page -->
				</div>
			</div>
		</div>
		<div id="footer">
			<p>Copyright (c) 2012 ephimchieurap.vn All rights reserved. Design by <a href="http://www.stanford.com.vn">Stanford</a>.</p>
		</div>
		<!-- end #footer -->
	</div>
</div>
</body>
</html>
