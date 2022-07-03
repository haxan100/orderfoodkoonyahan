	<?php
	$bu = base_url();
	?>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

		:root {
			--font1: 'Heebo', sans-serif;
			--font2: 'Fira Sans Extra Condensed', sans-serif;
			--font3: 'Roboto', sans-serif
		}

		body {
			font-family: var(--font3);
			background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%)
		}

		h2 {
			font-weight: 900
		}

		.container-fluid {
			max-width: 1200px
		}

		.card {
			background: #fff;
			box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
			transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
			border: 0;
			border-radius: 1rem
		}

		.card-img,
		.card-img-top {
			border-top-left-radius: calc(1rem - 1px);
			border-top-right-radius: calc(1rem - 1px)
		}

		.card h5 {
			overflow: hidden;
			height: 56px;
			font-weight: 900;
			font-size: 1rem
		}

		.card-img-top {
			width: 100%;
			max-height: 180px;
			object-fit: contain;
			padding: 30px
		}

		.card h2 {
			font-size: 1rem
		}

		.card:hover {
			transform: scale(1.05);
			box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)
		}

		.label-top {
			position: absolute;
			background-color: #8bc34a;
			color: #fff;
			top: 8px;
			right: 8px;
			padding: 5px 10px 5px 10px;
			font-size: .7rem;
			font-weight: 600;
			border-radius: 3px;
			text-transform: uppercase
		}

		.top-right {
			position: absolute;
			top: 24px;
			left: 24px;
			width: 90px;
			height: 90px;
			border-radius: 50%;
			font-size: 1rem;
			font-weight: 900;
			background: #ff5722;
			line-height: 90px;
			text-align: center;
			color: white
		}

		.top-right span {
			display: inline-block;
			vertical-align: middle
		}

		@media (max-width: 768px) {
			.card-img-top {
				max-height: 250px
			}
		}

		.over-bg {
			background: rgba(53, 53, 53, 0.85);
			box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
			backdrop-filter: blur(0.0px);
			-webkit-backdrop-filter: blur(0.0px);
			border-radius: 10px
		}

		.btn {
			font-size: 1rem;
			font-weight: 500;
			text-transform: uppercase;
			padding: 5px 50px 5px 50px
		}

		.box .btn {
			font-size: 1.5rem
		}

		@media (max-width: 1025px) {
			.btn {
				padding: 5px 40px 5px 40px
			}
		}

		@media (max-width: 250px) {
			.btn {
				padding: 5px 30px 5px 30px
			}
		}

		.btn-warning {
			background: none #f7810a;
			color: #ffffff;
			fill: #ffffff;
			border: none;
			text-decoration: none;
			outline: 0;
			box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);
			border-radius: 100px
		}

		.btn-warning:hover {
			background: none #ff962b;
			color: #ffffff;
			box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)
		}

		.bg-success {
			font-size: 1rem;
			background-color: #f7810a !important
		}

		.bg-danger {
			font-size: 1rem
		}

		.price-hp {
			font-size: 1rem;
			font-weight: 600;
			color: darkgray
		}

		.amz-hp {
			font-size: .7rem;
			font-weight: 600;
			color: darkgray
		}

		.fa-question-circle:before {
			color: darkgray
		}

		.fa-plus:before {
			color: darkgray
		}

		.box {
			border-radius: 1rem;
			background: #fff;
			box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
			transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)
		}

		.box-img {
			max-width: 300px
		}

		.thumb-sec {
			max-width: 300px
		}

		@media (max-width: 576px) {
			.box-img {
				max-width: 200px
			}

			.thumb-sec {
				max-width: 200px
			}
		}

		.inner-gallery {
			width: 60px;
			height: 60px;
			border: 1px solid #ddd;
			border-radius: 3px;
			margin: 1px;
			display: inline-block;
			overflow: hidden;
			-o-object-fit: cover;
			object-fit: cover
		}

		@media (max-width: 370px) {
			.box .btn {
				padding: 5px 40px 5px 40px;
				font-size: 1rem
			}
		}

		.disclaimer {
			font-size: .9rem;
			color: darkgray
		}

		.related h3 {
			font-weight: 900
		}

		footer {
			background: #212529;
			height: 80px;
			color: #fff
		}
	</style>
	<footer id="colophon" class="site-footer footer-v1">
		<div class="col-full">
			<div class="footer-social-icons">
				<span class="social-icon-text">Follow us</span>
				<ul class="social-icons list-unstyled">
					<li><a class="fa fa-facebook" href="https://facebook.com/<?= $konten[3]->isi ?>" target="_blank"></a></li>
					<li><a class="fa fa-instagram" href="https://instagram.com/<?= $konten[4]->isi ?>" target="_blank"></a></li>
					<li><a class="fa fa-twitter" href="https://twitter.com/<?= $konten[5]->isi ?>" target="_blank"></a></li>
					<li><a class="fa fa-youtube" href="https://www.youtube.com/<?= $konten[6]->isi ?>" target="_blank"></a></li>
				</ul>
			</div>
			<div class="footer-logo">
				<a href="<?= $bu; ?>" class="custom-logo-link" rel="home">
					<img src="<?= $bu; ?>assets/kasir/img\logo-front.png">
				</a>
			</div>
			<div class="site-address">
				<ul class="address">
					<li>Hasan</li>
					<li><?= $konten[1]->isi ?></li>
					<li><?= $konten[2]->isi ?></li>
					<li><a href="<?= $bu; ?>assets/kasir//cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="98fcf9f6ebfcf5fdfcf1f9d8fff5f9f1f4b6fbf7f5">[email&#160;protected]</a></li>
				</ul>
			</div>
			<div class="site-info">
				<p class="copyright">Copyright &copy; <?= date("Y"); ?> <?= $konten[0]->isi ?> | Digital Restaurant Menu</p>
			</div>
			<div class="pizzaro-handheld-footer-bar">
				<ul class="columns-2">
					<li class="search">
						<a href="<?= $bu; ?>assets/kasir/">Search</a>
						<div class="site-search">
							<div class="widget woocommerce widget_product_search">
								<form role="search" method="get" class="woocommerce-product-search">
									<label class="screen-reader-text" for="woocommerce-product-search-field">Search for:</label>
									<input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Search Products&hellip;" value="" name="s" title="Search for:">
									<input type="submit" value="Search">
									<input type="hidden" name="post_type" value="product">
								</form>
							</div>
						</div>
					</li>
					<li class="cart">
						<a class="footer-cart-contents" href="<?= $bu; ?>cart" title="Tampilkan Csssart Order Anda">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
	</div>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

	<script type="text/javascript" src="<?= $bu; ?>assets/kasir/frontend\js\tether.min.js"></script>
	<script type="text/javascript" src="<?= $bu; ?>assets/kasir/frontend\js\bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= $bu; ?>assets/kasir/frontend\js\owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?= $bu; ?>assets/kasir/frontend\js\social.share.min.js"></script>
	<script type="text/javascript" src="<?= $bu; ?>assets/kasir/frontend\js\jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="<?= $bu; ?>assets/kasir/frontend\js\scripts.min.js"></script>
	<script type="text/javascript" src="<?= $bu; ?>assets/kasir/frontend\js\rupiah.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<script type="text/javascript">
		$('#pagination-wrapper').show();

		$('.owl-stage').hide()
		$('body').on('click', '.page-link', function() {
			var hal = $(this).attr('data-page');
			$('#_page').val(hal);
			loadProduk(0)
		});



		$('#hiddenKan').click(function(e) {
			$('.owl-stage').hide()
		});
		var url = '<?= $bu ?>/Kasir/login';
		$('#keluar').click(function(e) {
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Logout'
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						type: "post",
						url: "<?= $bu ?>/kasir/logout",
						dataType: "json",
						success: function(r) {
							if (r.error) {
								Swal.fire(
									'gagal!',
									r.pesan,
									'errorr'
								)
							} else {
								Swal.fire(
									'Berhasil!',
									r.pesan,
									'success'
								)
								setTimeout(() => {
									window.location = url;
								}, 2000);

							}

						}
					});


				}
			})
		});

		loadProduk(0)
		$('#all').click(function(e) {
			loadProduk(0)

		});
		$('#desert').click(function(e) {
			loadProduk(2)

		});

		$('#drink').click(function(e) {
			loadProduk(3)

		});

		$('#main').click(function(e) {
			loadProduk(4)

		});

		$('#snack').click(function(e) {
			loadProduk(5)

		});

		function loadProduk(fl) {
			$.ajax({
				type: "POST",
				dataType: 'json',
				url: "<?= $bu; ?>Kasir/getProduk",
				data: {
					id_kategori: fl,
					page: $('#_page').val(),
				},
			}).done(function(e) {
				$('#prodTampil').html('');
				if (e.status) {
					var berapa = e.data.data.length;
					// console.log(e.data)
					$.each(e.data.data, function(key, val) {
						$('#prodTampil').append(generateProduk(val));
					});

					if (berapa >= 1) {
						generatePagination(e.data.page);
						$('#pagination-wrapper').show();
					} else {
						$('#pagination-wrapper').hide();
						var html = '<!-- no produk -->' +
							'	<div class="box-kosong py-2">' +
							'	<div class="text-center">' +
							'		<div class="col biz-bg-w-2 biz-rad-10 p-3 mb-4">' +
							'			<div class="text-center">' +
							'				<span class="biz-text-17 biz-text-w-5 font-weight-bold">Belum Ada Produk Tersedia</span>' +
							'			</div>' +
							'		</div>' +
							'		</div>' +
							'	</div>';
						$('#prodTampil').html(html);
					}
				} else {
					var html = '<!-- no produk -->' +
						'	<div class="box-kosong py-2">' +
						'	<div class="text-center">' +
						'		<div class="col biz-bg-w-2 biz-rad-10 p-3 mb-4">' +
						'			<div class="text-center">' +
						'				<span class="biz-text-17 biz-text-w-5 font-weight-bold">Belum Ada Produk Lelang Tersedia</span>' +
						'			</div>' +
						'		</div>' +
						'		</div>' +
						'	</div>';
					$('#prodTampil').html(html);
					$('#pagination-wrapper').hide();
				}
			}).fail(function(e) {
				console.log(e);
				alert('Terjadi kendala. silahkan coba beberapa saat lagi.');
			});
		}

		function generatePagination(e) {
			console.log(e)
			var pag = '';
			// var pag = '';
			var max_page = 5;

			if (e.halaman <= 1) {
				// pag += '<button disabled data-page="1" class="page-link button btn-outline-secondary px-2 rounded mr-2 pg border-0"><i class="fa fa-step-backward"></i></button> ';
			} else {
				// pag += '<button data-page="' + (e.halaman - 1) + '" class="page-link button btn-primary px-2 rounded mr-2 pg border-0"><i class="fa fa-arrow-left"></i></button> ';
			}
			// console.log(p.total_halaman <= max_page);
			if (e.total_halaman <= max_page) {
				for (var i = 1; i <= e.total_halaman; i++) {
					if (i == e.halaman) {
						pag += '<button disabled data-page="' + i + '" class="page-link button btn-secondary px-2 rounded mr-2 text-center pg border-primary" disabled> ' + i + ' </button> ';
					} else {
						pag += '<button data-page="' + i + '" class="page-link button btn-primary px-2 rounded mr-2 text-center pg border-0"> ' + i + ' </button> ';
					}
				}
			} else {
				if (e.halaman - 2 > 1) {
					pag += '.. ';
				}
				for (var i = e.halaman - 2; i <= e.halaman + 2; i++) {
					// console.log(i);
					if (i == e.halaman) {
						pag += '<button disabled data-page="' + i + '" class="page-link button btn-secondary px-2 rounded mr-2 text-center pg border-primary" disabled> ' + i + ' </button> ';
					} else if (i >= 1 && i <= e.total_halaman) {
						pag += '<button data-page="' + i + '" class="page-link button btn-primary px-2 rounded mr-2 text-center pg border-0"> ' + i + ' </button> ';
					}
				}
				if (e.halaman + 2 < e.total_halaman) {
					pag += '.. ';
				}
			}
			$('#pagination-wrapper').html(pag);
		}

		function generateProduk(produk) {
			var nama_produk = produk.nama_menu
			var panjang = nama_produk.length
			if (panjang > 20) {
				// var nama_produk = nama_produk.replace(/.(?=.{4})/g, '*')
				var nama_produk = nama_produk
			}
			return `
					<div class="container mt-4 col-md-4 col-lg-3"> 
						<div class=""> 
							<div class="col"> 
								<div class="card h-100 product-outer"> 
									<img src="<?= $bu; ?>assets/images/foods/${produk.foto}" class="img-responsive img-prod card-img-top product-outer " alt="">

										<div class="card-body"> 
											<div class="clearfix mb-3 centerig" style=" text-align: center;">
												<span class="text-center price-hp">Rp. ${formatRupiah(produk.harga)}</span> 
											</div> 
												<h5 class="card-title centerig
												" style="text-align: center!important;">${nama_produk}</h5> 
											<div class="text-center my-4"> 
											
												<a data-id="${produk.id_menu}"  data-harga="${convertToRupiah(produk.harga)}" data-qty="1"  title="Order" type="button" class="btn-tawar btn-success btn-block btn-sm rounded text-center border add_to_cart_button">Order</a>
											</div> 
										</div> 
								</div> 
							</div> 
							
						</div> 
					</div> 

			`;

			// return `<div class="col-md-4 col-lg-3 produkAwal"> <br>
			// 							<div class="product-outer">
			// 								<div class="product-inner">
			// 									<div class="product-image-wrapper">
			// 										<img src="<?= $bu; ?>assets/images/foods/${produk.foto}" class="img-responsive img-prod " alt="">
			// 										</a>
			// 									</div>

			// 									<div class="product-content-wrapper">
			// 										<h8>${nama_produk}</h8>
			// 											<div class="yith_wapo_groups_container">
			// 												<div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">

			// 													<div class="ywapo_input_container ywapo_input_container_radio">
			// 													<span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rp. </span>${formatRupiah(produk.harga)}</span></span>
			// 													</div>
			// 												</div>
			// 											</div>
			// 										</a>
			// 										<div class="hover-area">
			// 											<a data-id="${produk.id_menu}"  data-harga="${convertToRupiah(produk.harga)}" data-qty="1"  title="Order" type="button" class="btn-tawar btn-success btn-block btn-sm rounded text-center border add_to_cart_button">Order</a>
			// 										</div></div>
			// 								</div>
			// 							</div>
			// 										</div>
			// 										`;
		}

		function formatRupiah(angka, prefix) {
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
				split = number_string.split(','),
				sisa = split[0].length % 3,
				rupiah = split[0].substr(0, sisa),
				ribuan = split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if (ribuan) {
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
		$('body').on('click', '.add_to_cart_button', function() {

			var id_produk = $(this).data('id');
			var harga = $(this).data('harga');
			// console.log(id_produk,harga)
			// return false
			var qty = 1;
			$('.btn-tawar').html('Tunggu...');
			$('.btn-tawar').prop('disabled', true);
			$.ajax({
				type: "POST",
				dataType: 'json',
				url: "<?= $bu; ?>Pesan/setBid",
				data: {
					id_produk,
					harga,
					qty
				},
			}).done(function(e) {
				if (e.status) {
					Swal.fire(
						':)',
						e.msg,
						'success'
					);
					$('.cart_counts').html(e.total + " Item");
					$('.cart_total_formats').html("Rp " + e.harga);
					// setTimeout(function() {
					// 	location.reload();
					// }, 2000);

				} else {
					// alert(e.msg);

					// console.log("gagal");
					Swal.fire(
						'error',
						e.msg,
						'error'
					);
				}
			}).fail(function(e) {
				Swal.fire(
					'error',
					e.msg,
					'error'
				);

			}).always(function(e) {
				setTimeout(() => {
					$('.btn-tawar').html('Order');
					$('.btn-tawar').prop('disabled', false);
				}, 100);
			});
		})
	</script>
	</body>

	</html>