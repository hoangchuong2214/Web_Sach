		<!-- Phần nội dung xem sách -->
		<?php
		include_once 'function.php';		
		?>
		<div class="row justify-content-center">
			<!-- Cột bên trái => Liệt kê các chủ đề -->
			<div class="col-md-3">
				<div class="card">
					<div class="card-header text-center">CHỦ ĐỀ</div>
					<ul class="list-group list-group-flush">
						<?php
						$kqChude = Get_All_Chu_De();
						while ($row = mysqli_fetch_assoc($kqChude)) {
								/* còn xử lý */
						?>
							<li class="list-group-item text-success">
								<div class="chude" MaCD="<?php echo $row["MaCD"]  ?>"><?php echo $row["Tenchude"]  ?></div>
							</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
			<!-- Cột bên phải => Liệt kê sách theo chủ đề -->
			<div class="col-md-9">
				<div id="ketqua" class="row">					

				</div>
			</div>
		</div>