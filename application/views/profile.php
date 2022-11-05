<!-- Main Wrapper -->
<div class="main-container">
	<?php echo $sidebar; ?>
	<div class="content-section shadow-box mb-5">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Account</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Personal Info</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Password</button>
			</li>
		</ul>
		<div class="tab-content p-3" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<form>
					<div class="mb-3 mt-4">
						<input class="form-control" type="email" placeholder="Email" aria-label="Email">
					</div>
					<div class="mb-3 mt-4">
						<input class="form-control" type="text" placeholder="First Name" aria-label="First Name">
					</div>
					<div class="mb-3 mt-4">
						<input class="form-control" type="text" placeholder="Middle Name" aria-label="Middle Name">
					</div>
					<div class="mb-3 mt-4">
						<input class="form-control" type="text" placeholder="Last Name" aria-label="Last Name">
					</div>
					<div class="mb-3 mt-4">
						<input class="form-control" type="text" placeholder="Mobile" aria-label="Mobile">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<p>
					Personal information
				</p>
			</div>
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				<form>
					<div class="mb-3 mt-4">
						<input class="form-control" type="password" placeholder="Password" aria-label="Password">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>