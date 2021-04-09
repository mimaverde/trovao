const page = document.getElementById("page");

const changeToLightMode = () => {
    page.classList.remove("theme_dark");
}

const changeToDarkMode = () => {
    page.classList.add("theme_dark");
}

const tlDarkMode = new TimelineMax({ repeat: -1, delay: 10 })
    .to(page, 0.5, { onComplete: changeToDarkMode}).from(page, 10, {})
    .to(page, 0.5, { onComplete: changeToLightMode }).from(page, 10, {});



