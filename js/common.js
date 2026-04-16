/**
 * Common JavaScript for all METI pages
 */

document.addEventListener("DOMContentLoaded", function () {
    const tabs = Array.from(document.querySelectorAll(".top-tab[data-tab]"));
    const contents = Array.from(document.querySelectorAll(".tab-content-custom"));

    if (!tabs.length || !contents.length) {
        return;
    }

    window.showTabSection = function (tabId) {
        const targetContent = document.getElementById(tabId);
        const targetButton = document.querySelector(`.top-tab[data-tab="${tabId}"]`);

        if (!targetContent || !targetButton) {
            return;
        }

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

        if (!hash) {
            return;
        }

        const tabId = hash.replace("#tab-", "").replace("#", "");
        const scrollTarget = document.getElementById("top-tabs-section");

        setTimeout(() => {
            window.showTabSection(tabId);

            if (!scrollTarget) {
                return;
            }

            const offset = 120;
            const bodyRect = document.body.getBoundingClientRect().top;
            const elementRect = scrollTarget.getBoundingClientRect().top;
            const elementPosition = elementRect - bodyRect;
            const offsetPosition = elementPosition - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
        }, 500);
    }

    handleHash();
    window.addEventListener("hashchange", handleHash);
});
