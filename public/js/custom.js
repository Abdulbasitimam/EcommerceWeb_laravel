// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// owl carousel 

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 6
        }
    }
})

// Fetch Contact Info
fetch('/api/contact')
    .then(response => response.json())
    .then(data => {
        document.querySelector('.info_link-box').innerHTML = `
            <a href="#">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>${data.address}</span>
            </a>
            <a href="#">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>${data.phone}</span>
            </a>
            <a href="#">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>${data.email}</span>
            </a>
        `;
    })
    .catch(error => console.error('Error fetching contact info:', error));

// Handle Form Submission
const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = {
        name: contactForm.querySelector('input[name="name"]').value,
        email: contactForm.querySelector('input[name="email"]').value,
        message: contactForm.querySelector('textarea[name="message"]').value,
    };

    fetch('/api/contact', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(formData),
    })
        .then(response => response.json())
        .then(data => alert(data.message))
        .catch(error => console.error('Error submitting contact form:', error));
});
