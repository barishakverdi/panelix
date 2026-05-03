/* --- Focus to input, select --- */
const formGroups = document.querySelectorAll(".form-group");
if (formGroups.length > 0) {
    formGroups.forEach((el) => {
        const input = el.querySelector(".real-form-control");

        if (input) {
            el.addEventListener("click", () => input.focus());
        }
    });
}
/* --- Focus to input, select --- */

/* --- Table Wrapper --- */
const articles = document.querySelectorAll("article");
if (articles.length > 0) {
    articles.forEach(article => {
        const tables = article.querySelectorAll("table");
        if (tables.length > 0) {
            tables.forEach(table => {
                const wrapper = document.createElement("div");
                wrapper.className = "table-wrapper";
                table.insertAdjacentElement("afterend", wrapper);
                wrapper.appendChild(table);
            })
        }
    })
}
/* --- Table Wrapper --- */


/* ------- Smart Menu ------- */
const SCROLL_THRESHOLD = 50;
let lastScrollY = 0;
let ticking = false;

function updateScrollDirection() {
    const currentScrollY = window.scrollY;

    if (currentScrollY <= 0) {
        document.body.classList.remove("scrolling-down", "scrolling-up");
        lastScrollY = 0;
    } else if (currentScrollY > SCROLL_THRESHOLD) {
        if (currentScrollY > lastScrollY) {
            document.body.classList.add("scrolling-down");
            document.body.classList.remove("scrolling-up");
        } else if (currentScrollY < lastScrollY) {
            document.body.classList.add("scrolling-up");
        }
    }

    lastScrollY = currentScrollY;
    ticking = false;
}

function handleScroll() {
    if (!ticking) {
        window.requestAnimationFrame(updateScrollDirection);
        ticking = true;
    }
}

window.addEventListener('scroll', handleScroll);
updateScrollDirection();
/* ------- Smart Menu ------- */
