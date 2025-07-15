<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tajer Kemer Adam | Full-Stack Developer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<script>new WOW().init();</script>

  <link rel="stylesheet" href="style.css" />
</head>
<body>


	
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold fs-4 text-warning" href="#">Taj<span class="text-light">Dev</span></a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-2">
        <li class="nav-item">
          <a class="nav-link nav-custom-link" href="#profile">Profile</a>
        </li>
		<li class="nav-item">
  <a class="nav-link nav-custom-link" href="#about">About</a>
</li>

        <li class="nav-item">
          <a class="nav-link nav-custom-link" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-custom-link" href="#projects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-custom-link" href="#contact">Contact</a>
        </li>
		<!-- Dark Mode Toggle Button -->
<button id="themeToggle" class="btn btn-sm btn-outline-warning ms-3" title="Toggle theme">
	<i class="fas fa-moon"></i>
  </button>
  
      </ul>
    </div>
  </div>
</nav>


<!-- Hero Section with Profile on Left -->
<!-- Hero Section -->
<section class="hero-section d-flex align-items-center" id="profile">
	<div class="container">
	  <div class="row align-items-center">
		<!-- Left Column: Profile Image -->
		<div class="col-md-5 text-center text-md-start mb-4 mb-md-0">
		  <img src="./assets/IMG_20250622_143651_840-1.jpg" alt="Profile Photo" class="profile-img shadow-lg" />
		</div>
		<!-- Right Column: Name, Title, Button -->
		<div class="col-md-7 text-center text-md-start">
		  <h1 class="display-4 fw-bold text-light animate-fade-in">Tajer Kemer Adam</h1>
		  <p class="lead text-light animate-fade-in delay-1">Full-Stack Developer | React | Node.js | Php | MySQL</p>
		  <a href="./assets/taj-rsem.pdf" class="btn btn-warning btn-lg mt-3 animate-fade-in delay-2" download>Download CV</a>
		</div>
	  </div>
	</div>
  </section>


<!-- About Me Section -->
<section class="py-5 bg-dark text-light" id="about">
  <div class="container text-center">
    <h2 class="text-warning mb-4">About Me</h2>
    <p class="lead px-md-5">
      I'm Tajer, a passionate Full-Stack Developer specializing in React, Node.js, PHP, and MySQL. 
      I love building modern, scalable web applications and recently completed an internship at Hawassa University's ICT Center. 
      I'm currently looking for exciting opportunities to grow and contribute as a developer.
    </p>
  </div>
</section>


  <!-- Combined Skills & Projects Section -->
<section class="skills-projects-section py-5">
	<div class="container">
	  <div class="row g-5">
		
		<!-- Skills Column (Left) -->
		<div class="col-lg-6">
		  <h2 class="text-center mb-4" id="skills">My Skills</h2>
		  <!-- <p class="text-center text-light mb-4">
			Tools and technologies I use to build modern, scalable, and maintainable web applications.
		  </p> -->
		  <div class="row row-cols-2 g-3">
			<div class="col">
			  <div class="skill-card bg-html text-center p-3 rounded shadow-sm text-white">
				<i class="fab fa-html5 fa-2x mb-1"></i>
				<h6 class="fw-bold">HTML</h6>
			  </div>
			</div>
			<div class="col">
			  <div class="skill-card bg-css text-center p-3 rounded shadow-sm text-white">
				<i class="fab fa-css3-alt fa-2x mb-1"></i>
				<h6 class="fw-bold">CSS / Bootstrap / Tailwind</h6>
			  </div>
			</div>
			<div class="col">
			  <div class="skill-card bg-js text-center p-3 rounded shadow-sm text-white">
				<i class="fab fa-js-square fa-2x mb-1"></i>
				<h6 class="fw-bold">JavaScript</h6>
			  </div>
			</div>
			<div class="col">
			  <div class="skill-card bg-php text-center p-3 rounded shadow-sm text-white">
				<i class="fab fa-php fa-2x mb-1"></i>
				<h6 class="fw-bold">PHP</h6>
			  </div>
			</div>
			<div class="col">
			  <div class="skill-card bg-react text-center p-3 rounded shadow-sm text-white">
				<i class="fab fa-react fa-2x mb-1"></i>
				<h6 class="fw-bold">React</h6>
			  </div>
			</div>
			<div class="col">
			  <div class="skill-card bg-node text-center p-3 rounded shadow-sm text-white">
				<i class="fab fa-node-js fa-2x mb-1"></i>
				<h6 class="fw-bold">Node.js</h6>
			  </div>
			</div>
			<div class="col">
			  <div class="skill-card bg-next text-center p-3 rounded shadow-sm text-white">
				<i class="fab fa-js fa-2x mb-1"></i>
				<h6 class="fw-bold">Next.js</h6>
			  </div>
			</div>
			<div class="col">
			  <div class="skill-card bg-django text-center p-3 rounded shadow-sm text-white">
				<i class="fab fa-python fa-2x mb-1"></i>
				<h6 class="fw-bold">Django</h6>
			  </div>
			</div>
			<div class="col">
			  <div class="skill-card bg-db text-center p-3 rounded shadow-sm text-white">
				<i class="fas fa-database fa-2x mb-1"></i>
				<h6 class="fw-bold">MySQL</h6>
			  </div>
			</div>
			<div class="col">
			  <div class="skill-card bg-git text-center p-3 rounded shadow-sm text-white">
				<i class="fab fa-git-alt fa-2x mb-1"></i>
				<h6 class="fw-bold">Git</h6>
			  </div>
			</div>
		  </div>
		</div>
  
		<!-- Projects Column (Right) -->
		<div class="col-lg-6">
		  <h2 class="text-center mb-4" id="projects">My Projects</h2>
  
		 <!-- Project Card Example -->
<div class="card project-card mb-4">
  <div class="card-body">
    <h5 class="card-title">Digital Cafe System</h5>
    <p class="card-text">Intern at ICT Center Hawassa University.</p>
    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#project1Modal">
      Preview
    </button>
    <a href="https://github.com/taceke" class="btn btn-outline-secondary btn-sm">Source Code</a>
  </div>
</div>

  
<div class="card project-card mb-4">
  <div class="card-body">
    <h5 class="card-title">Meal Attendance Project</h5>
    <p class="card-text">Meal management for Hawassa Campus</p>
    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#project2Modal">
      Preview
    </button>
    <a href="https://github.com/taceke" class="btn btn-outline-secondary btn-sm">Source Code</a>
  </div>
</div>

  
<div class="card project-card">
  <div class="card-body">
    <h5 class="card-title">Web Client</h5>
    <p class="card-text">Website client project.</p>
    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#project3Modal">
      Preview
    </button>
    <a href="https://github.com/taceke" class="btn btn-outline-secondary btn-sm">Source Code</a>
  </div>
</div>

  
		  
		</div>
	  </div>
	</div>
  </section>
  
  <!-- <form action="contact.php" method="POST" class="p-4 rounded shadow contact-form"> -->
<!-- Contact Section -->
<section id="contact" class="contact-section py-5">
	<div class="container">
	  <h2 class="text-center text-warning mb-4">Get In Touch</h2>
	  <p class="text-center text-light mb-5">
		Feel free to drop a message for work, collaboration or just say hi.
	  </p>
	  <div class="row justify-content-center">
		<div class="col-md-8">
		  <form action="contact.php" method="POST" class="p-4 rounded shadow contact-form">
			<div class="mb-3">
			  <label for="name" class="form-label text-light">Name</label>
			  <input
				type="text"
				class="form-control"
				id="name"
				name="name"
				placeholder="Your Name"
				required
			  />
			</div>
			<div class="mb-3">
			  <label for="email" class="form-label text-light">Email</label>
			  <input
				type="email"
				class="form-control"
				id="email"
				name="email"
				placeholder="you@example.com"
				required
			  />
			</div>
			<div class="mb-3">
			  <label for="message" class="form-label text-light">Message</label>
			  <textarea
				class="form-control"
				id="message"
				name="message"
				rows="5"
				placeholder="Write your message here..."
				required
			  ></textarea>
			</div>
			<button type="submit" class="btn btn-warning w-100">Send Message</button>
		  </form>
		</div>
	  </div>
	</div>
  </section>
  

  <!-- Footer -->
  <footer class="custom-footer text-center py-4">
	<div class="mb-3">
	  <a href="https://github.com/taceke" class="icon-link me-3" target="_blank"><i class="fab fa-github fa-lg"></i></a>
	  <a href="https://linkedin.com/in/taj-kemer" class="icon-link me-3" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a>
	  <a href="mailto:your@email.com" class="icon-link"><i class="fas fa-envelope fa-lg"></i></a>
	</div>
	<p class="mb-0">&copy; 2025 <span class="text-warning">Tajer Kemer Adam</span>. All rights reserved.</p>
  </footer>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="main.js"></script>


<!-- Modal for Project 1 -->
<div class="modal fade" id="project1Modal" tabindex="-1" aria-labelledby="project1ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header border-0">
        <h5 class="modal-title text-warning" id="project1ModalLabel">Digital Cafe System</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        <img src="./assets/pos.png" class="img-fluid rounded mb-3" alt="POS Screenshot">
        <p>
          A Point-of-Sale system with inventory management, admin panel, and stock tracking. Built with PHP, MySQL, and Bootstrap.
        </p>
      </div>
    </div>
  </div>
</div>


<!-- Modal for Project 2 -->
<div class="modal fade" id="project2Modal" tabindex="-1" aria-labelledby="project2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header border-0">
        <h5 class="modal-title text-warning" id="project2ModalLabel">Meal Attendance Project</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        <img src="./assets/caf.png" class="img-fluid rounded mb-3" alt="Meal Attendance Screenshot">
        <p>
          Web application designed to manage student meal attendance and data at Hawassa University. 
          Features include attendance logs, café/non-café roles, and secure admin access.
        </p>
      </div>
    </div>
  </div>
</div>


<!-- Modal for Project 3 -->
<div class="modal fade" id="project3Modal" tabindex="-1" aria-labelledby="project3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header border-0">
        <h5 class="modal-title text-warning" id="project3ModalLabel">ado for Client</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        <img src="./assets/addo (1).png" class="img-fluid rounded mb-3" alt="Client Website Screenshot">
        <p>
           website for a local business client with responsive layout, clean UI, and modern tech stack including Tailwind and custom JS usin Next js.
        </p>
      </div>
    </div>
  </div>
</div>


</body>
</html>
