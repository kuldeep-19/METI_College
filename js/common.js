/**
 * Common JavaScript for all METI pages
 */

function updateTime() {
    const now = new Date();
    const date = now.toLocaleDateString('en-IN', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
    const time = now.toLocaleTimeString('en-IN');

    const dateEl = document.getElementById("currentDate");
    const timeEl = document.getElementById("currentTime");

    if (dateEl) dateEl.innerHTML = date;
    if (timeEl) timeEl.innerHTML = time;
}

// Update every second
setInterval(updateTime, 1000);
// Initial call
updateTime();
