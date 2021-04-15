<?php require_once __DIR__ . '/admin_ini/header.php'; ?>

<!-- header end -->
<?php require_once __DIR__ . '/admin_navbar/admin_navbar.php'; ?>
<!-- header end -->
<!-- Left sidebar menu start -->
<div class="ttr-sidebar">
	<div class="ttr-sidebar-wrapper content-scroll">
		<!-- side menu logo start -->
		<div class="ttr-sidebar-logo">
			<a href="main.php"><img alt="" src="assets/images/logo.png" width="122" height="27"></a>
			<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
                        <i class="material-icons ttr-fixed-icon">gps_fixed</i>
                        <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
            </div> -->
			<div class="ttr-sidebar-toggle-button">
				<i class="ti-arrow-left"></i>
			</div>
		</div>
		<!-- side menu logo end -->
		<!-- sidebar menu start -->
		<nav class="ttr-sidebar-navi">
			<ul>
				<li>
					<a href="main.php" class="ttr-material-button">
						<span class="ttr-icon"><i class="ti-home"></i></span>
						<span class="ttr-label">Dashborad</span>
					</a>
				</li>
				<li>
					<a href="courses.php" class="ttr-material-button">
						<span class="ttr-icon"><i class="ti-book"></i></span>
						<span class="ttr-label">Courses</span>
					</a>
				</li>
				<li>
					<a href="Event.php" class="ttr-material-button">
						<span class="ttr-icon"><i class="ti-book"></i></span>
						<span class="ttr-label">Event</span>
					</a>
				</li>
				<li>
					<a href="#" class="ttr-material-button">
						<span class="ttr-icon"><i class="ti-calendar"></i></span>
						<span class="ttr-label">Calendar</span>
						<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
					</a>
					<ul>
						<li>
							<a href="basic-calendar.html" class="ttr-material-button"><span class="ttr-label">Basic Calendar</span></a>
						</li>
						<li>
							<a href="list-view-calendar.html" class="ttr-material-button"><span class="ttr-label">List View</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="bookmark.html" class="ttr-material-button">
						<span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
						<span class="ttr-label">Bookmarks</span>
					</a>
				</li>
				<li>
					<a href="review.html" class="ttr-material-button">
						<span class="ttr-icon"><i class="ti-comments"></i></span>
						<span class="ttr-label">Review</span>
					</a>
				</li>
				<li>
					<a href="add-listing.html" class="ttr-material-button">
						<span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
						<span class="ttr-label">Add listing</span>
					</a>
				</li>
				<li>
					<a href="#" class="ttr-material-button">
						<span class="ttr-icon"><i class="ti-user"></i></span>
						<span class="ttr-label">My Profile</span>
						<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
					</a>
					<ul>
						<li>
							<a href="user-profile.html" class="ttr-material-button"><span class="ttr-label">User Profile</span></a>
						</li>
						<li>
							<a href="teacher-profile.html" class="ttr-material-button"><span class="ttr-label">Teacher Profile</span></a>
						</li>
					</ul>
				</li>
				<li class="ttr-seperate"></li>
			</ul>
		</nav>
	</div>
</div>

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container">
		<div class="db-breadcrumb ">
			<h4 class="breadcrumb-title">Courses</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Courses</li>
			</ul>
		</div>
		<!-- content -->
		<div class="row justify-content-center">
			<div class="col-md-7 col-lg-8  ">
				<h4 class="mb-3">Billing address</h4>
				<form class="needs-validation" novalidate>
					<div class="row g-3">
						<div class="col-sm-6">
							<label for="firstName" class="form-label">First name</label>
							<input type="text" class="form-control" id="firstName" placeholder="" value="" required>
							<div class="invalid-feedback">
								Valid first name is required.
							</div>
						</div>
						<div class="col-sm-6">
							<label for="lastName" class="form-label">Last name</label>
							<input type="text" class="form-control" id="lastName" placeholder="" value="" required>
							<div class="invalid-feedback">
								Valid last name is required.
							</div>
						</div>
						<div class="col-12">
							<label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
							<input type="email" class="form-control" id="email" placeholder="you@example.com">
							<div class="invalid-feedback">
								Please enter a valid email address for shipping updates.
							</div>
						</div>
						<div class="col-12">
							<label for="address" class="form-label">Address</label>
							<input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
							<div class="invalid-feedback">
								Please enter your shipping address.
							</div>
						</div>
						<div class="col-12">
							<label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
							<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
						</div>
					</div>
					<button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
				</form>
			</div>
		</div>
	</div>
	</div>
</main>
<div class="ttr-overlay"></div>
<?php require_once __DIR__ . '/admin_ini/footer.php'; ?>