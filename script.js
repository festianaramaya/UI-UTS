document.addEventListener("DOMContentLoaded", () => {
    // Testimonial Slider
    const testimonialDots = document.querySelectorAll(".testimonial-dots .dot")
  
    testimonialDots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        // Remove active class from all dots
        testimonialDots.forEach((d) => d.classList.remove("active"))
        // Add active class to clicked dot
        dot.classList.add("active")
  
        // Here you would normally change the testimonial content
        // For demonstration purposes, we'll just log the index
        console.log(`Showing testimonial ${index + 1}`)
      })
    })
  
    // Newsletter Form Validation
    const newsletterForm = document.getElementById("newsletter-form")
  
    if (newsletterForm) {
      newsletterForm.addEventListener("submit", function (e) {
        e.preventDefault()
  
        const emailInput = this.querySelector('input[name="email"]')
        const passwordInput = this.querySelector('input[name="password"]')
  
        if (!emailInput.value) {
          alert("Please enter your email address")
          return
        }
  
        if (!isValidEmail(emailInput.value)) {
          alert("Please enter a valid email address")
          return
        }
  
        if (!passwordInput.value) {
          alert("Please enter a password")
          return
        }
  
        if (passwordInput.value.length < 6) {
          alert("Password must be at least 6 characters long")
          return
        }
  
        // If validation passes, you would normally submit the form
        alert("Thank you for subscribing to our newsletter!")
        this.reset()
      })
    }
  
    // Image hover effects
    const images = document.querySelectorAll(".featured-image, .post-img")
  
    images.forEach((img) => {
      img.addEventListener("mouseenter", () => {
        img.style.transform = "scale(1.05)"
      })
  
      img.addEventListener("mouseleave", () => {
        img.style.transform = "scale(1)"
      })
    })
  
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault()
  
        const targetId = this.getAttribute("href")
        if (targetId === "#") return
  
        const targetElement = document.querySelector(targetId)
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 100,
            behavior: "smooth",
          })
        }
      })
    })
  
    // Helper function to validate email
    function isValidEmail(email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
      return emailRegex.test(email)
    }
  
    // Add animation on scroll
    const animatedElements = document.querySelectorAll("[data-aos]")
  
    function checkIfInView() {
      animatedElements.forEach((element) => {
        const elementPosition = element.getBoundingClientRect()
        const windowHeight = window.innerHeight
  
        if (elementPosition.top < windowHeight * 0.8) {
          element.classList.add("aos-animate")
        }
      })
    }
  
    // Initial check
    checkIfInView()
  
    // Check on scroll
    window.addEventListener("scroll", checkIfInView)
  
    // Add AOS animation classes
    document.head.insertAdjacentHTML(
      "beforeend",
      `
          <style>
              [data-aos] {
                  opacity: 0;
                  transform: translateY(20px);
                  transition: opacity 0.6s ease, transform 0.6s ease;
              }
              
              [data-aos].aos-animate {
                  opacity: 1;
                  transform: translateY(0);
              }
              
              [data-aos-delay="300"] {
                  transition-delay: 0.3s;
              }
              
              [data-aos-delay="600"] {
                  transition-delay: 0.6s;
              }
          </style>
      `,
    )
  })
  
  