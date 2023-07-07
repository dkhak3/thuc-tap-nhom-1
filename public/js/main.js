window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
    loader.classList.add("loader--hidden");
    // loader.addEventListener("transitionend", () => {
    //     document.body.removeChild(loader);
    // });

    const menuItems = document.querySelectorAll(".menu-item");
    const dashboardChildren = document.querySelectorAll(".dashboard-children");
    const btnSubmit = document.querySelector(".btn-submit");
    const form = document.querySelector(".form-main");

    const spinner = document.querySelector(".spinner");
    [...menuItems].forEach((item) =>
        item.addEventListener("click", (event) => {
            [...menuItems].forEach((item) => item.classList.remove("active"));
            event.target.classList.add("active");

            const tabNumber = event.target.dataset.tab;
            [...dashboardChildren].forEach((item) => {
                item.classList.remove("active");
                if (item.getAttribute("data-tab") === tabNumber) {
                    item.classList.add("active");
                }
            });
        })
    );
    form.addEventListener("submit", (e) => {
        const lecturerName = form.elements["lecturer_name"].value;
        const lecturerAddress = form.elements["lecturer_address"].value;
        const lecturerPhone = form.elements["lecturer_phone"].value;
        const lecturerBirthday = form.elements["lecturer_birthday"].value;

        if (
            lecturerName !== "" &&
            lecturerAddress !== "" &&
            lecturerPhone !== "" &&
            lecturerBirthday !== ""
        ) {
            spinner.className = "spinner-border mx-auto";
            btnSubmit.disabled = true;
            btnSubmit.classList.add("opacity-25");
            btnSubmit.style.cursor = "wait";
        }
    });
});
