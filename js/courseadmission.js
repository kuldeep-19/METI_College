
    document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll(".top-tab");
    const contents = document.querySelectorAll(".tab-content-custom");

    window.showTabSection = function (tabId) {
                const targetContent = document.getElementById(tabId);
    const targetButton = document.querySelector(`.top-tab[data-tab="${tabId}"]`);

    if (!targetContent || !targetButton) return;

                tabs.forEach((button) => button.classList.remove("active"));
                contents.forEach((content) => content.classList.remove("active"));

    targetButton.classList.add("active");
    targetContent.classList.add("active");
            };

            tabs.forEach((btn) => {
        btn.addEventListener("click", function () {
            window.showTabSection(btn.dataset.tab);
        });
            });


    function handleHash() {
                const hash = window.location.hash;
    if (!hash) return;

    const tabId = hash.replace("#tab-", "").replace("#", "");

                setTimeout(() => {
                    const scrollTarget = document.getElementById('top-tabs-section');
    window.showTabSection(tabId);

    if (scrollTarget) {
                        const offset = 120;
    const bodyRect = document.body.getBoundingClientRect().top;
    const elementRect = scrollTarget.getBoundingClientRect().top;
    const elementPosition = elementRect - bodyRect;
    const offsetPosition = elementPosition - offset;

    window.scrollTo({
        top: offsetPosition,
    behavior: 'smooth'
                        });
                    }
                }, 500);
            }

    handleHash();
    window.addEventListener("hashchange", handleHash);
        });