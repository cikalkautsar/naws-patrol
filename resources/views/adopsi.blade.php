<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Naw's Patrol</title>
     @vite(['resources/css/adopsi.css', 'resources/js/adopsi.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="container">
            <div class="title">Naw’s Patrol</div>
            <p class="description">
                A system designed to address the issue of stray animals in Indonesia<br />
                especially cats and dogs.
            </p>
        </div>
    </header>

    <section class="adoption-category">
        <div class="container">
            <h2>Adoption Category</h2>
            <p>Search for the Animal Category You Want to Adopt</p>
        </div>
        <div class="category-container">
            <div class="category cats" onclick="goToPage('cats.html')">
                <span>Cats</span>
                <div class="category-icon">
                    <img src="{{ asset('img/cat.png') }}" alt="Cats" />
                </div>
            </div>
            <div class="category dogs" onclick="goToPage('dogs.html')">
                <span>Dogs</span>
                <img src="{{ asset('img/cat.png') }}" alt="Dogs" />
            </div>
            <div class="category birds" onclick="goToPage('birds.html')">
                <span>Birds</span>
                <img src="{{ asset('img/cat.png') }}" alt="Birds" />
            </div>
            <div class="category rabbits" onclick="goToPage('rabbits.html')">
                <span>Rabbits</span>
                <img src="{{ asset('img/cat.png') }}" alt="Rabbits" />
            </div>
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Search..." />
                <button onclick="searchCategory()">
                    <img src="{{ asset('img/search.png') }}" alt="Search" />
                </button>
            </div>
        </div>
    </section>

    <section id="category-results" style="display: none;">
        <div class="container">
            <h3 id="category-title"></h3>
            <p id="category-subtitle"></p>
            <div id="category-pets" class="pet-cards"></div>
            <div id="pagination-controls"></div>
        </div>
    </section>

    <section id="default-pets" class="adoption-section">
        <div class="section-header">
            <h2>Adoption status</h2>
            <a href="#">View All</a>
        </div>
        <p class="section-description">Pet adoption is quickly becoming the preferred way to find a new dog, puppy, cat,
            kitten or etc.</p>

        <div class="section-header">
            <h2>Help Me Find a Home</h2>
            <a href="#">View All</a>
        </div>
        <p class="section-description">Pet adoption is quickly becoming the preferred way to find a new dog, puppy, cat,
            kitten or etc.</p>
        <div id="default-pet-cards" class="pet-cards"></div>
    </section>
</body>
</html>
