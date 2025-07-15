document.addEventListener("DOMContentLoaded", () => {
	const themeToggle = document.getElementById("themeToggle");
	const body = document.body;
  
	// Set initial theme from localStorage
	if (localStorage.getItem("theme") === "dark") {
	  body.classList.add("dark-mode");
	  themeToggle.querySelector("i").classList.replace("fa-moon", "fa-sun");
	}
  
	themeToggle.addEventListener("click", () => {
	  body.classList.toggle("dark-mode");
  
	  // Toggle icon
	  const icon = themeToggle.querySelector("i");
	  icon.classList.toggle("fa-moon");
	  icon.classList.toggle("fa-sun");
  
	  // Save theme preference
	  if (body.classList.contains("dark-mode")) {
		localStorage.setItem("theme", "dark");
	  } else {
		localStorage.setItem("theme", "light");
	  }
	});
  });
  