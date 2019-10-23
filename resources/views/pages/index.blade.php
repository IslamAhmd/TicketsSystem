@extends('layouts.app')

@section('content')	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Planing Trip To Anywhere in The World?</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Book Your Trip</h3>
											<form action="/detail/{id}" class="probootstrap-form">
												@csrf
												<div class="form-group">
												  <div class="row mb-3">
													<div class="col-md">
													  <div class="form-group">
														<label for="id_label_single">From</label>
								  
														<label for="id_label_single" style="width: 100%;">
														  <select class="js-example-basic-single js-states form-control" name="from" id="id_label_single" style="width: 100%;">
															<option value="Australia">Australia</option>
															<option value="Japan">Japan</option>
															<option value="United States">United States</option>
															<option value="Brazil">Brazil</option>
															<option value="China">China</option>
															<option value="Israel">Egypt</option>
															<option value="Philippines">Philippines</option>
															<option value="Malaysia">Malaysia</option>
															<option value="Canada">Canada</option>
															<option value="Chile">Chile</option>
															<option value="Chile">Zimbabwe</option>
														  </select>
														</label>
								  
								  
													  </div>
													</div>
													<div class="col-md">
													  <div class="form-group">
														<label for="id_label_single2">To</label>
														<div class="probootstrap_select-wrap">
														  <label for="id_label_single2" style="width: 100%;">
														  <select class="js-example-basic-single js-states form-control" name="to" id="id_label_single2" style="width: 100%;">
															<option value="Australia">Australia</option>
															<option value="Japan">Japan</option>
															<option value="United States">United States</option>
															<option value="Brazil">Brazil</option>
															<option value="China">China</option>
															<option value="Israel">Egypt</option>
															<option value="Philippines">Philippines</option>
															<option value="Malaysia">Malaysia</option>
															<option value="Canada">Canada</option>
															<option value="Chile">Chile</option>
															<option value="Chile">Zimbabwe</option>
														  </select>
														</label>
														</div>
													  </div>
													</div>
												  </div>
												  <!-- END row -->
												  <div class="row mb-5">
													<div class="col-md">
													  <div class="form-group">
														<label for="probootstrap-date-departure">Departure</label>
														<div class="probootstrap-date-wrap">
														  <span class="icon ion-calendar"></span> 
														  <input type="text" id="probootstrap-date-departure" name="departure_date" class="form-control" placeholder="">
														</div>
													  </div>
													</div>
													<div class="col-md">
													  <div class="form-group">
														<label for="probootstrap-date-arrival">Arrival</label>
														<div class="probootstrap-date-wrap">
														  <span class="icon ion-calendar"></span> 
														  <input type="text" id="probootstrap-date-arrival" name="arrival_date" class="form-control" placeholder="">
														</div>
													  </div>
													</div>
												  </div>
												  <!-- END row -->
												  <div class="row">
													<div class="col-md">
														<div class="form-group">
															<label for="id_label_single">Adults</label>
															<label for="id_label_single" style="width: 100%;">
															<select class="js-example-basic-single js-states form-control" name="adults" id="id_label_single" style="width: 100%;">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
															</select>
														</div>
													</div>
													<div class="col-md">
														<div class="form-group">
															<label for="id_label_single">Children</label>
															<label for="id_label_single" style="width: 100%;">
															<select class="js-example-basic-single js-states form-control" name="children" id="id_label_single" style="width: 100%;">
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
															</select>
														</div>
													</div>
													<div class="col-md">
													  <input type="submit" value="Submit" class="btn btn-primary btn-block">
													</div>
												  </div>
												</div>
											  </form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section" id="trips">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Most Popular Destination</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>New York, USA</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_2.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_2.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Seoul, South Korea</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_3.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_3.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Paris, France</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_4.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_4.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Sydney, Australia</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_5.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_5.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Greece, Europe</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_6.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_6.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Spain, Europe</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>

	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>We have high quality services that you will surely love!</h1>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Our Success</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="196" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Destination</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Hotels</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12402" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Travelers</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12202" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Happy Customer</span>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
