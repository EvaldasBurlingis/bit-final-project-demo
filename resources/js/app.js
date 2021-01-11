require('./bootstrap');

require('alpinejs');

// Search countries
const country_filter_input = document.querySelector('#country_filter_input') ? document.querySelector('#country_filter_input') : false;
const countries_cards = document.querySelectorAll('.country--card') ? document.querySelectorAll('.country--card') : false;

if(country_filter_input) {
    country_filter_input.addEventListener('keyup', (e) => {
        countries_cards.forEach(card => {
            let country = card.dataset.country;
    
            if(country.includes(e.target.value.toLowerCase())) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        })
    })
}

// Search customers
const customer_filter_input = document.querySelector('#customer_filter_input') ? document.querySelector('#customer_filter_input') : false;
const customer_tr = document.querySelectorAll('.customer--tr') ? document.querySelectorAll('.customer--tr') : false;

if (customer_filter_input) {
    customer_filter_input.addEventListener('keyup', (e) => {
        customer_tr.forEach(tr => {
            let customer = tr.dataset.customer;
    
            if(customer.includes(e.target.value.toLowerCase())) {
                tr.style.display = '';
            } else {
                tr.style.display = 'none';
            }
        })
    })
}

// Search cities
const city_filter_input = document.querySelector('#city_filter_input') ? document.querySelector('#city_filter_input') : false;
const city_tr = document.querySelectorAll('.city--tr') ? document.querySelectorAll('.city--tr') : false;

if (city_filter_input) {
    city_filter_input.addEventListener('keyup', (e) => {
        city_tr.forEach(tr => {
            let city = tr.dataset.city
    
            if(city.includes(e.target.value.toLowerCase())) {
                tr.style.display = '';
            } else {
                tr.style.display = 'none';
            }
        })
    })
}

