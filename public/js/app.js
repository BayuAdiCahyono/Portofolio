// Portfolio Main JavaScript File
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initNavigation();
    initAnimations();
    initFormHandling();
    initProjectFilters();
    initSkillBars();
    initCounters();
    initFAQ();
    initScrollEffects();
});

// ===== NAVIGATION =====
function initNavigation() {
    const navbar = document.getElementById('navbar');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    // Mobile menu toggle
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            // Update button icon
            const icon = mobileMenuBtn.querySelector('svg');
            if (mobileMenu.classList.contains('hidden')) {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
            } else {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
            }
        });
    }
    
    // Close mobile menu when clicking on a link
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (mobileMenu) {
                mobileMenu.classList.add('hidden');
                const icon = mobileMenuBtn.querySelector('svg');
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
            }
        });
    });
    
    // Navbar scroll effect
    if (navbar) {
        let lastScrollY = window.scrollY;
        
        window.addEventListener('scroll', function() {
            const currentScrollY = window.scrollY;
            
            if (currentScrollY > 50) {
                navbar.classList.add('shadow-lg');
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            } else {
                navbar.classList.remove('shadow-lg');
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
            }
            
            // Hide/show navbar on scroll
            if (currentScrollY > lastScrollY && currentScrollY > 100) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
            
            lastScrollY = currentScrollY;
        });
    }
}

// ===== ANIMATIONS =====
function initAnimations() {
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                
                // Special handling for skill bars
                if (entry.target.classList.contains('skill-bar')) {
                    const width = entry.target.getAttribute('data-width');
                    if (width) {
                        setTimeout(() => {
                            entry.target.style.width = width;
                        }, 300);
                    }
                }
            }
        });
    }, observerOptions);
    
    // Observe elements with fade-in animation
    const animatedElements = document.querySelectorAll('.animate-fade-in-up');
    animatedElements.forEach(el => observer.observe(el));
    
    // Observe skill bars
    const skillBars = document.querySelectorAll('.skill-bar');
    skillBars.forEach(bar => observer.observe(bar));
}

// ===== FORM HANDLING =====
function initFormHandling() {
    const contactForm = document.getElementById('contact-form');
    const messageTextarea = document.getElementById('message');
    const charCount = document.getElementById('char-count');
    const formMessage = document.getElementById('form-message');
    
    // Character counter for message textarea
    if (messageTextarea && charCount) {
        messageTextarea.addEventListener('input', function() {
            const count = this.value.length;
            charCount.textContent = count;
            
            if (count > 500) {
                charCount.style.color = '#ef4444';
                this.value = this.value.substring(0, 500);
                charCount.textContent = '500';
            } else {
                charCount.style.color = '#6b7280';
            }
        });
    }
    
    // Form submission
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const submitText = document.getElementById('submit-text');
            const submitIcon = document.getElementById('submit-icon');
            
            // Show loading state
            submitBtn.disabled = true;
            submitText.textContent = 'Sending...';
            submitIcon.innerHTML = '<div class="spinner"></div>';
            
            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                showFormMessage('success', 'Message sent successfully! I\'ll get back to you soon.');
                contactForm.reset();
                if (charCount) charCount.textContent = '0';
                
                // Reset button state
                submitBtn.disabled = false;
                submitText.textContent = 'Send Message';
                submitIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>';
            }, 2000);
        });
    }
    
    function showFormMessage(type, message) {
        if (!formMessage) return;
        
        formMessage.className = `mt-6 p-4 rounded-lg ${type === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'}`;
        formMessage.textContent = message;
        formMessage.classList.remove('hidden');
        
        // Auto-hide after 5 seconds
        setTimeout(() => {
            formMessage.classList.add('hidden');
        }, 5000);
    }
}

// ===== PROJECT FILTERS =====
function initProjectFilters() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-indigo-600', 'text-white');
                b.classList.add('border-gray-300', 'text-gray-700');
            });
            
            this.classList.add('active', 'bg-indigo-600', 'text-white');
            this.classList.remove('border-gray-300', 'text-gray-700');
            
            // Filter projects
            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    card.style.display = 'block';
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
}

// ===== SKILL BARS =====
function initSkillBars() {
    const skillBars = document.querySelectorAll('.skill-bar');
    
    const skillObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const width = bar.getAttribute('data-width');
                
                setTimeout(() => {
                    bar.style.width = width;
                }, 500);
                
                skillObserver.unobserve(bar);
            }
        });
    }, { threshold: 0.5 });
    
    skillBars.forEach(bar => skillObserver.observe(bar));
}

// ===== COUNTERS =====
function initCounters() {
    const counters = document.querySelectorAll('[data-counter]');
    
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-counter'));
                let current = 0;
                const increment = target / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    counter.textContent = Math.floor(current);
                }, 30);
                
                counterObserver.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => counterObserver.observe(counter));
}

// ===== FAQ ACCORDION =====
function initFAQ() {
    const faqToggles = document.querySelectorAll('.faq-toggle');
    
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');
            
            // Close other open FAQs
            faqToggles.forEach(otherToggle => {
                if (otherToggle !== this) {
                    const otherContent = otherToggle.nextElementSibling;
                    const otherIcon = otherToggle.querySelector('.faq-icon');
                    
                    otherContent.classList.add('hidden');
                    otherIcon.style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle current FAQ
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        });
    });
}

// ===== SCROLL EFFECTS =====
function initScrollEffects() {
    // Smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            
            if (target) {
                const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Parallax effect for hero sections
    const heroSections = document.querySelectorAll('.hero-section');
    
    if (heroSections.length > 0) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            
            heroSections.forEach(section => {
                const rate = scrolled * -0.5;
                section.style.transform = `translateY(${rate}px)`;
            });
        });
    }
}

// ===== UTILITY FUNCTIONS =====

// Debounce function for performance optimization
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function for scroll events
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    }
}

// Check if element is in viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// ===== PERFORMANCE OPTIMIZATIONS =====

// Optimize scroll events with throttling
const optimizedScrollHandler = throttle(function() {
    // Handle scroll-based animations here
}, 16); // ~60fps

window.addEventListener('scroll', optimizedScrollHandler);

// Optimize resize events with debouncing
const optimizedResizeHandler = debounce(function() {
    // Handle responsive adjustments here
}, 250);

window.addEventListener('resize', optimizedResizeHandler);

// ===== ERROR HANDLING =====
window.addEventListener('error', function(e) {
    console.error('JavaScript Error:', e.error);
    // You can add error tracking here (e.g., send to analytics)
});

// ===== ACCESSIBILITY ENHANCEMENTS =====

// Keyboard navigation support
document.addEventListener('keydown', function(e) {
    // ESC key closes mobile menu
    if (e.key === 'Escape') {
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
        }
    }
    
    // Enter key activates buttons
    if (e.key === 'Enter' && e.target.classList.contains('filter-btn')) {
        e.target.click();
    }
});

// Focus management
document.addEventListener('focusin', function(e) {
    if (e.target.matches('.focus-visible')) {
        e.target.classList.add('focus-visible');
    }
});

document.addEventListener('focusout', function(e) {
    if (e.target.matches('.focus-visible')) {
        e.target.classList.remove('focus-visible');
    }
});

// ===== EXPORT FUNCTIONS (if needed for modules) =====
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        initNavigation,
        initAnimations,
        initFormHandling,
        initProjectFilters,
        initSkillBars,
        initCounters,
        initFAQ,
        initScrollEffects
    };
}