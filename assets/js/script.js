document.addEventListener("DOMContentLoaded", function () {
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });

  // Contact form submission
  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();

      // Get form values
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const message = document.getElementById("message").value;

      // Here you would typically send the form data to a server
      // For this example, we'll just show an alert
      alert(
        `Thank you, ${name}! Your message has been received. We will contact you soon at ${email}.`
      );

      // Reset the form
      contactForm.reset();
    });
  }

  // Initialize Bootstrap tooltips
  const tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Add active class to current page in navbar
  const currentPage = location.pathname.split("/").pop();
  document.querySelectorAll(".nav-link").forEach((link) => {
    if (link.getAttribute("href") === currentPage) {
      link.classList.add("active");
    }
  });
});

// Scroll to Top Button
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Show button when user scrolls down 300px
window.addEventListener("scroll", function () {
  if (window.pageYOffset > 300) {
    scrollToTopBtn.classList.add("visible");
  } else {
    scrollToTopBtn.classList.remove("visible");
  }
});

// Scroll to top when clicked
scrollToTopBtn.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Check for existing translation cookie on page load
document.addEventListener("DOMContentLoaded", function () {
  // Check if we have a saved language preference
  const langCookie = document.cookie.match(/googtrans=([^;]+)/);
  if (langCookie) {
    const langCode = langCookie[1].split("/").pop();
    document.getElementById("customLanguageSelect").value = langCode;
    initializeTranslation(langCode);
  }
});

// Initialize translation without showing Google's UI
function initializeTranslation(language) {
  // Only load if not already loaded
  if (!window.google || !google.translate) {
    const script = document.createElement("script");
    script.src = `//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit&hl=${language}`;
    document.head.appendChild(script);
  } else {
    googleTranslateElementInit();
  }
}

// Handle language selection
document
  .getElementById("customLanguageSelect")
  .addEventListener("change", function () {
    const language = this.value;

    // Set cookie for 1 year
    document.cookie = `googtrans=/en/${language}; expires=${new Date(
      Date.now() + 31536000000
    ).toUTCString()}; path=/`;

    // Initialize translation
    initializeTranslation(language);

    // Soft reload to apply translation
    window.location.reload();
  });

// Google Translate initialization
function googleTranslateElementInit() {
  // Only proceed if we have a translation cookie
  if (!document.cookie.includes("googtrans=")) return;

  new google.translate.TranslateElement(
    {
      pageLanguage: "en",
      includedLanguages: "en,fr,es,de,pt,it,ru,ar,zh-CN,ja",
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      autoDisplay: false,
    },
    "google_translate_element"
  );

  // Immediately hide all Google elements
  hideGoogleElements();
}

// Hide all Google Translate UI elements
function hideGoogleElements() {
  const style = document.createElement("style");
  style.innerHTML = `
      .goog-te-banner-frame, 
      .skiptranslate, 
      .goog-te-gadget, 
      .goog-te-menu-frame, 
      .goog-te-ftab-frame,
      .goog-te-combo,
      .goog-te-spinner-pos,
      #goog-gt-tt {
          display: none !important;
          visibility: hidden !important;
          height: 0 !important;
          width: 0 !important;
      }
      body { 
          top: 0 !important; 
          position: static !important;
      }
  `;
  document.head.appendChild(style);
}
