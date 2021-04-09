const elementClicked = document.getElementById("openSearch");
const elSearchBox = document.getElementById("search");
const closeSearchBox = document.getElementById("closeSearch");
const inputSearch = document.querySelector('.search-field');
const searchBtn = document.querySelector('.search-submit');

elementClicked.addEventListener("click", (e) => {
  e.preventDefault();

  searchBtn.value = 'BUSCAR';
  
  elSearchBox.classList.add("search-open");
  TweenLite.to(elSearchBox, 0.1, { autoAlpha: 1});
  TweenLite.to(elSearchBox, 0.3, { right: 0});

  setTimeout(() => {
    inputSearch.focus();
  },500);
});

closeSearchBox.addEventListener("click", (e) => {
 e.preventDefault();
 elSearchBox.classList.remove("search-open");
 TweenLite.to(elSearchBox, 0.2, { autoAlpha: 0 , right: -100});
});