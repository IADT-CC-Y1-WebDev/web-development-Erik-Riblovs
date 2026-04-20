let applyBtn = document.getElementById('apply_filters');
let clearBtn = document.getElementById('clear_filters');
let cards = document.querySelectorAll('.card');

let form = document.getElementById('filters');

applyBtn.addEventListener('click', (event) => {
    event.preventDefault();
    applyFilters();
})

clearBtn.addEventListener('click', (event) => {
    event.preventDefault();
    clearFilters();
})

function applyFilters() {
    let filters = getFilters();

    for (let i = 0; i != cards.length; i++) {
        let card = cards[i];
        let match = cardMatches(card, filters);
        card.classList.toggle('hidden', !match);
    }
    // let cardsArray = Array.from(cards);
    // const sorted = sortCards(cardsArray, filters.sortBy);
}

function sortCards(cards) {
    const list = cards.slice();

    list.sort((a, b) => {
        let titleA = a.dataset.title.toLowerCase();
        let titleB = b.dataset.title.toLowerCase();


        return titleA.localeCompare(titleB);
    });

    return list;
}

function cardMatches(crd, fltrs) {
    let title = crd.dataset.title.toLowerCase();
    let publisher = crd.dataset.publisher;
    let formats = crd.dataset.formats;

    let matchTitle = fltrs.titleFilter === "" || title.includes(fltrs.titleFilter);
    let matchPublisher = fltrs.publisherFilter === "" || publisher === fltrs.publisherFilter;
    let matchFormat = fltrs.formatFilter === "" || formats.includes(fltrs.formatFilter);

    return matchTitle && matchPublisher && matchFormat;
}

function clearFilters() {
    form.reset();
    cards.forEach(card => card.classList.remove('hidden'));
}

function getFilters() {
    const titleEl = form.elements['title_filter'];
    const publisherEl = form.elements['publisher_filter'];
    const formatEl = form.elements['format_filter'];

    let titleFilter = (titleEl.value || '').trim().toLowerCase();
    let publisherFilter = publisherEl.value || '';
    let formatFilter = formatEl.value || '';

    return {
        "titleFilter": titleFilter,
        "publisherFilter": publisherFilter,
        "formatFilter": formatFilter,
    }
}