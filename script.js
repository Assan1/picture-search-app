const form = document.getElementById("search-form");
const input = document.getElementById("search-input");
const searchResults = document.querySelector(".search-results");
const showMore = document.getElementById("show-more-button");

const accessKey = "-KD4d81hPzmencEB7rwNrK6wl2YyAL_pFcCQwFHyktY"; // Замените на ваш ключ доступа

form.addEventListener("submit", (event) => {
    event.preventDefault();
    page = 1;
    searchImages();
});

showMore.addEventListener("click", () => {
    searchImages();
});

let inputData = '';
let page = 1;

async function searchImages() {
    inputData = input.value;

    const url = `https://api.unsplash.com/search/photos?page=${page}&query=${inputData}&client_id=${accessKey}`;

    try {
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error(`Ошибка сети: ${response.status}`);
        }

        const data = await response.json();

        if (page === 1) {
            searchResults.innerHTML = "";
        }

        const results = data.results;

        results.forEach((result) => {
            const imageWrapper = document.createElement("div");
            imageWrapper.classList.add("search-result");

            const image = document.createElement('img');
            image.src = result.urls.small;
            image.alt = result.alt_description || 'No description available';

            const imageLink = document.createElement("a");
            imageLink.href = result.links.html;
            imageLink.target = "_blank";
            imageLink.textContent = result.alt_description || "Смотреть изображение";

            imageWrapper.appendChild(image);
            imageWrapper.appendChild(imageLink);
            searchResults.appendChild(imageWrapper);
        });

        page++;
        if (results.length > 0) {
            showMore.style.display = "block";
        } else {
            showMore.style.display = "none";
        }
    } catch (error) {
        console.error("Ошибка запроса:", error);
    }
}
