<div id="footers">
	<div class="container pt-4">
		<div class="row">
			<div class="col-md-3">
				<h6 class="p-2 bg-dark text-white text-center mb-0 rounded">CONTACT INFORMATION</h6>
				<p class="txt-group pt-2">
					<strong>Address:</strong> Naguilian - Bagulin Rd, Bagulin, La Union
					<br>
					<strong>Telephone:</strong> 63 (072) 242-5550
					<br>
					<strong>Email Us:</strong> info@launion.gov.ph
				</p>
				<h5>&nbspEMERGENCY CONTACT:</h5>
				<hr>
				<p class="txt-group">
					<strong>PDRRMO:</strong> (072) 607-8723 / 607-9244
					<br>
					<strong>Emergency Hotline:</strong> 911
				</p>
			</div>
			<div class="col-md-3">
				<h6 class="p-2 bg-dark text-white text-center mb-0 rounded">CONNECT WITH US</h6>
				<div class="container pt-2">

					{{-- <div id="fb-root"></div>
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=456638428390540&autoLogAppEvents=1"></script> --}}
					<a class="text-light" href="https://www.facebook.com/LGUBagulinLaUnion/"><i class="fab fa-facebook"></i></a>
				</div>
			</div>
			<div class="col-md-3">
				<h6 class="p-2 bg-dark text-white text-center mb-0 rounded">TERMS OF USE</h6>
				<ul class="txt-group pl-4 pt-2">
					<li>Disclaimer</li>
					<li>Copyright</li>
					<li>Sitemap</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h6 class="p-2 bg-dark text-white text-center mb-0 rounded">LA UNION LINK</h6>
				<div class="siteorigin-widget-tinymce textwidget">
					<table>
						<tbody>
							<tr>
								<td>
									<a title="Agoo" href="https://www.facebook.com/Agoo-Municipal-Information-and-Tourism-Office-1733464996745730/">
										<img class="p-2 m-0 gov-i img-fluid" src="https://launion.gov.ph/wp-content/uploads/2017/10/agoo.png" alt="" >
									</a>
								</td>

								<td><a title="Aringay" href="http://aringay.gov.ph/" target="blank"><img class="p-2 m-0 gov-ico img-fluid" src="https://launion.gov.ph/wp-content/uploads/2017/10/aringay.png" alt="" ></a></td>
								<td><a title="Bacnotan" href="http://www.bacnotan.gov.ph/" target="blank"><img class="p-2 m-0 gov-ico img-fluid" src="https://launion.gov.ph/wp-content/uploads/2017/10/bacnotan.png" alt="" ></a></td>
								<td><a title="Bagulin" href="https://www.facebook.com/LGU-Bagulin-130845724127861/"><img class="p-2 m-0 gov-ico img-fluid" src="https://launion.gov.ph/wp-content/uploads/2017/10/bagulin.png" alt="" ></a></td>
							</tr>
							<tr>
								<td><a title="Balaoan" href="http://www.balaoanlaunion.gov.ph/" target="blank "><img class="p-2 m-0 gov-ico img-fluid" src="https://launion.gov.ph/wp-content/uploads/2017/10/balaoan.png" alt="" ></a></td>
								<td><a title="Bangar" href="https://www.facebook.com/LGU.Bangar/"><img class="p-2 m-0 gov-ico img-fluid" src="https://launion.gov.ph/wp-content/uploads/2017/10/bangar.png" alt="" ></a></td>
								<td><a title="Bauang" href="http://www.bauangtgis.gov.ph/" target="blank"><img class="p-2 m-0 gov-ico img-fluid" src="https://launion.gov.ph/wp-content/uploads/2017/10/bauang.png" alt="" ></a></td>
								<td><a title="Burgos" href="https://www.facebook.com/Burgosian-LINE-1611252505846878/"><img class="p-2 m-0 gov-ico img-fluid" src="https://launion.gov.ph/wp-content/uploads/2017/10/burgos.png" alt="" ></a></td>
							</tr>
							<tr>

								<td><a title="Luna" href="https://lunalaunion.wordpress.com/" target="blank"><img class="p-2 m-0 gov-ico img-fluid" src="https://launion.gov.ph/wp-content/uploads/2017/10/luna.png" alt="" ></a></td>
								<td><a title="Naguilian" href="http://naguilianlu.gov.ph/" target="blank"><img class="p-2 m-0 gov-ico img-fluid" src="https://launion.gov.ph/wp-content/uploads/2017/10/naguilian.png" alt="" ></a></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{asset('/js/timeline.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

<script type="text/javascript">
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
		if (!$(this).next().hasClass('show')) {
			$(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
		}
		var $subMenu = $(this).next('.dropdown-menu');
		$subMenu.toggleClass('show');
		$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
			$('.dropdown-submenu .show').removeClass('show');
		});
		return false;
	});
	$('#facts').ready(function() {
		setInterval(function() {
			index = $('#facts').find('.show').index();
			if ( $('#facts>div').length-1 == index) {
				index = 0;
			}
			else {
				index+=1;
			}
			$('#facts .show').fadeOut(function() {
				$('#facts div').eq(index).fadeIn().addClass('show');
			}).removeClass('show');

		}, 3000);
	});
	$(function () {
		var lastScrollTop = 0;
		var $navbar = $('.navbar');
		$(window).scroll(function(event){
			var st = $(this).scrollTop();

			if (st > lastScrollTop && st > 52) {
				$navbar.hide();
			}
			else {
				$navbar.show();
			}
			lastScrollTop = st;
		});
	});
</script>