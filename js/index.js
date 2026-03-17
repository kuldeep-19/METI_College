function updateTime() {

    const now = new Date();

    const date = now.toLocaleDateString('en-IN', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });

    const time = now.toLocaleTimeString('en-IN');

    document.getElementById("currentDate").innerHTML = date;
    document.getElementById("currentTime").innerHTML = time;

}

setInterval(updateTime, 1000);
updateTime();



function closePopup() {

    document.getElementById("imagePopup").style.display = "none";

}

/* CLOSE WHEN CLICK OUTSIDE IMAGE */

window.onclick = function (e) {

    let popup = document.getElementById("imagePopup");

    if (e.target == popup) {

        popup.style.display = "none";

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

