
// Initialize Swiper for testimonials
if (document.querySelector('.init-swiper')) {
  const swiperConfigElement = document.querySelector('.init-swiper .swiper-config');
  if (swiperConfigElement) {
    const swiperConfig = JSON.parse(swiperConfigElement.textContent);
    new Swiper('.init-swiper', swiperConfig);
  }
}

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

