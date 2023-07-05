const menuItems = document.querySelectorAll(".menu-item");
const dashboardChildren = document.querySelectorAll(".dashboard-children");

[...menuItems].forEach((item) =>
    item.addEventListener("click", (event) => {
        // Xóa hết tất cả các class active ở các tab-item
        [...menuItems].forEach((item) => item.classList.remove("active"));
        // sau đó add class active vào tab hiện tại
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
