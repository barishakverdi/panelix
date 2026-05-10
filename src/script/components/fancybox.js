import { Fancybox } from "@fancyapps/ui";

const commonFancyboxOptions = {
    theme: "dark",
    on: {
        init: () => {
            // togglePasswordFunction(document.querySelectorAll(".password-input-group"));
            if (typeof window.smoother !== "undefined" && window.smoother) window.smoother.paused(true);
        },
        destroy: () => {
            // togglePasswordFunction(document.querySelectorAll(".password-input-group"));
            if (typeof window.smoother !== "undefined" && window.smoother) window.smoother.paused(false);
        },
    },
    dragToClose: window.innerWidth > 1024,
    placeFocusBack: false,
};

window.generalFancybox = Fancybox.bind("[data-fancybox]", {
    ...commonFancyboxOptions,
    closeButton: false,
});

Fancybox.bind("[data-video-fancybox]", {
    ...commonFancyboxOptions,
    closeButton: true,
});

Fancybox.bind("[data-career-fancybox]", {
    ...commonFancyboxOptions,
    groupAttr: "data-career-fancybox",
    zoomEffect: false,
});