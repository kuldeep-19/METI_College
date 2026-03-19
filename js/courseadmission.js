AOS.init({
    duration: 800,
    once: true
});

// SIDEBAR NAVIGATION LOGIC
const sidebarItems = document.querySelectorAll('.sidebar-item');
const sections = document.querySelectorAll('.section-content');

sidebarItems.forEach(item => {
    item.addEventListener('click', () => {
        const target = item.getAttribute('data-section');

        // Active Sidebar
        sidebarItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');

        // Active Section
        sections.forEach(s => s.classList.remove('active'));
        document.getElementById(target).classList.add('active');
    });
});

// COURSE SUB-TABS LOGIC
const subTabBtns = document.querySelectorAll('.sub-tab-btn');
const subContents = document.querySelectorAll('.course-sub-content');

subTabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const target = btn.getAttribute('data-sub');

        subTabBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        subContents.forEach(c => c.classList.remove('active'));
        document.getElementById(target).classList.add('active');
    });
});

// COURSE DETAILS TOGGLE
function toggleDetails(btn) {
    const card = btn.closest('.course-card-modern');
    const desc = card.querySelector('.course-brief-desc');

    // Toggle active class on button
    btn.classList.toggle('active');

    // Toggle visibility class
    desc.classList.toggle('show-desc');

    // Change button text
    if (desc.classList.contains('show-desc')) {
        btn.textContent = 'Close Info';
    } else {
        btn.textContent = 'Course Info';
    }
}