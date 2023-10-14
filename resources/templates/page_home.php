
<!-- Template content -->
<h3><small class='text-muted'>Trang chủ</small></h3>
<?php
	$dataOrder = DB::query("SELECT dien_giai, COUNT(dien_giai) as `count_dien_giai` FROM `vw_don_hang` group by trang_thai;");
	//var_dump($data);
	foreach ($dataOrder as $row)
	{
		$Ox[] = $row["dien_giai"];
		$Oy[] = $row["count_dien_giai"];
	}
	$dataOrderByDate = DB::query("SELECT DATE(ngay_nhan) as ngay_nhan, COUNT(id) as `count_don_hang` FROM `vw_don_hang` group by ngay_nhan;");
	//var_dump($data);
	foreach ($dataOrderByDate as $row)
	{
		$ngay_nhan[] = $row["ngay_nhan"];
		$count_don_hang[] = $row["count_don_hang"];
	}
	//var_dump($count_don_hang);
?>
<div class="row">
		
		<div class="col">
			
			<canvas id="myChartOrder"></canvas>
			<p class="fw-bold text-center">Trạng thái đơn hàng</p>
		</div>
		<div class="col">
			<canvas id="myChartOderByDate"></canvas>
			<p class="fw-bold text-center">Số lượng đơn hàng trong tháng</p>
		</div> 

		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<script>
		// Hiển thị biểu đồ đơn hàng

		const ctxOrder = document.getElementById('myChartOrder');
		
		new Chart(ctxOrder, {
			type: 'bar',
			data: {
			labels: <?php echo json_encode($Ox); ?>,
			datasets: [{
				label: 'Trạng thái đơn hàng',
				data: <?php echo json_encode($Oy); ?>,
				backgroundColor: [
				'rgba(255, 99, 132, 0.7)',
				'rgba(255, 159, 64, 0.7)',
				'rgba(255, 205, 86, 0.7)',
				'rgba(75, 192, 192, 0.7)',
				'rgba(54, 162, 235, 0.7)',
				
				],
				borderWidth: 0.5
			}]
			},
			options: {
			scales: {
				y: {
				beginAtZero: true
				}
			}
			}
		});
		// Hiển thị biểu đồ đơn hàng theo ngày

		const ctxOrderByDate = document.getElementById('myChartOderByDate');
		const data = {
			labels: <?php echo json_encode($ngay_nhan);?>,
			datasets: [
				{
					label: 'Đơn hàng',
					data: <?php echo json_encode($count_don_hang);?>,
					borderColor: '#FF6384',
					backgroundColor: '#FF6384',
				},
			]
		};

		new Chart(ctxOrderByDate, {
			type: 'line',
			data: data,
				options: {
				responsive: true,
				plugins: {
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Đơn hàng trong tháng'
					}
				}
			},
		});
		

		</script>
</div>

