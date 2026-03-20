
const slider = document.querySelector(".testimonial-wrapper");

let scrollAmount = 0;

function autoSlide() {
    scrollAmount += 1;

    if (scrollAmount >= slider.scrollWidth - slider.clientWidth) {
        scrollAmount = 0;
    }

    slider.scrollTo({
        left: scrollAmount,
        behavior: "smooth"
    });
}

setInterval(autoSlide, 30);




  document.getElementById("inquiryForm").addEventListener("submit", function(e){

    e.preventDefault(); // stop page reload

    let formData = new FormData(this);

    // Loader popup
    Swal.fire({
        title: 'Submitting...',
        text: 'Please wait',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    fetch("save_inquiry.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(response => {

        if(response.trim() === "success"){

            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Inquiry submitted successfully',
                timer: 2000,
                showConfirmButton: false
            });

            document.getElementById("inquiryForm").reset();

        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Something went wrong'
            });
        }
    });
});

