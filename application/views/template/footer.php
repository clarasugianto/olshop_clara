	<footer class="footer-wrapper">
		<div class="container">
			<div class="row">
				<div class="logo-footer">
					<img src="<?php echo base_url('upload/admin/produk/logobwh.png'); ?>" width="40" class="mr-2" alt="LOgo Fit Bsa">
					<div class="teks-footer">
						<small>&copy;2022, BEAUTY SHOP</small>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<script type="text/javascript" src="<?php echo base_url('assets/js/') ?>jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/') ?>jquery.nice-number.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url('assets/slick/slick.min.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function() {

			$('input[type="number"]').niceNumber();
			// auto resize the number input

			$(document).ready(function() {
				$('.responsive').slick({
					autoplay: true,
					autoplaySpeed: 5000
				});
			});
		});
	</script>

	<script>
		$('#myModal').modal('show');
	</script>
	<script>
		AOS.init();
	</script>



	</body>

	</html>