<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naw's Patrol - Pet Adoption</title>
    @vite(['resources/css/dashboard.css', 'resources/js/dashboard.js'])

    <link rel="stylesheet" href="https://unpkg.com/phosphor-icons@1.4.2/src/css/phosphor.css">
</head>
<body>
    <header class="header">
        <div class="hero">
            <h1>Naw's Patrol</h1>
            <p>A system designed to address the issue of stray animals in Indonesia especially cats and dogs.</p>
        <a href="{{ route('login') }}" class="cta-btn">Join us</a>
        </div>
        <div class="cat-image">
            <img src="{{ asset('image/dashboard/cat-landing.png') }}" alt="Landing Cat" />
        </div>
    </header>

    <div class="teks-adopsi">
        <h2 class="section-title">Adoption Category</h2>
        <p class="section-subtitle">Search for the Animal Category You Want to Adopt</p>
    </div>

    <main class="main-content">
        <section class="adoption-section">
            <div class="category-grid">
                <div class="category-card cats active" onclick="selectCategory('cats')">
                    <div class="category-icon">
                        <img src="{{ asset('image/dashboard/icon-cat-landing.png') }}" alt="Cat Icon" />
                    </div>
                    <h3>Cats</h3>
                </div>
                <div class="category-card dogs" onclick="selectCategory('dogs')">
                    <div class="category-icon">
                        <img src="{{ asset('image/dashboard/icon-dog-landing.png') }}" alt="Dog Icon" />
                    </div>
                    <h3>Dogs</h3>
                </div>
                <div class="category-card birds" onclick="selectCategory('birds')">
                    <div class="category-icon">
                        <img src="{{ asset('image/dashboard/icon-bird-landing.png') }}" alt="Bird Icon" />
                    </div>
                    <h3>Birds</h3>
                </div>
                <div class="category-card rabbits" onclick="selectCategory('rabbits')">
                    <div class="category-icon">
                        <img src="{{ asset('image/dashboard/icon-rabbit-landing.png') }}" alt="Rabbit Icon" />
                    </div>
                    <h3>Rabbits</h3>
                </div>
            </div>
        </section>

        <section class="adoption-grid-section">
            <h2>Help Me Find a <span class="highlight">Home</span></h2>
            <p>Pet adoption is quickly becoming the preferred way to find a new dog, puppy, cat, kitten or pet</p>
            <a href="#view-all" class="view-all">View All</a>

            <div class="pet-grid" id="pet-grid">
            
            </div>
        </section>
    </main>
</body>
<script>console.log('>> dashboard.js loaded');

        const petData = {
            cats: [
                {
                    name: "Luna",
                    breed: "Domestik",
                    age: "2 Tahun",
                    status: "Siap Adopsi",
                    image: "/image/dashboard/landing-cat-image.jpg"
                },
                {
                    name: "Milo", 
                    breed: "Sphynx",
                    age: "1 Tahun",
                    status: "Siap Adopsi",
                    image: "/image/dashboard/landing-cat-image-1.jpg"
                },
                {
                    name: "Whiskers",
                    breed: "Domestik",
                    age: "4 bulan", 
                    status: "Siap Adopsi",
                    image: "/image/dashboard/landing-cat-image-2.jpg"
                }
            ],
            dogs: [
                {
                    name: "Buddy",
                    breed: "Golden Retriever Mix", 
                    age: "2 Tahun",
                    status: "Siap Adopsi",
                    image: "/image/dashboard/landing-dog-image.jpg"
                },
                {
                    name: "Max",
                    breed: "Labrador Mix",
                    age: "1.5 Tahun",
                    status: "Siap Adopsi", 
                    image: "/image/dashboard/landing-dog-image-1.jpg"
                },
                {
                    name: "Bella",
                    breed: "Husky Mix",
                    age: "3 Tahun",
                    status: "Siap Adopsi",
                    image: "/image/dashboard/landing-dog-image-2.jpg"
                }
            ],
            birds: [
                {
                    name: "Sunny",
                    breed: "Canary",
                    age: "6 Bulan", 
                    status: "Siap Adopsi",
                    image: "/image/dashboard/landing-bird-image.jpg"
                },
                {
                    name: "Rainbow",
                    breed: "Lovebird",
                    age: "1 Tahun",
                    status: "Siap Adopsi",
                    image: "/image/dashboard/landing-bird-image-1.jpg"
                },
                {
                    name: "Kiwi",
                    breed: "Cockatiel",
                    age: "8 Bulan",
                    status: "Siap Adopsi", 
                    image: "/image/dashboard/landing-bird-image-2.jpg"
                }
            ],
            rabbits: [
                {
                    name: "Snowball",
                    breed: "Holland Lop",
                    age: "1 Tahun",
                    status: "Siap Adopsi",
                    image: "/image/dashboard/landing-rabbit-image.jpg"
                },
                {
                    name: "Cocoa", 
                    breed: "Mini Rex",
                    age: "6 Bulan",
                    status: "Siap Adopsi",
                    image: "/image/dashboard/landing-rabbit-image-1.jpg"
                },
                {
                    name: "Marshmallow",
                    breed: "Lionhead",
                    age: "2 Tahun",
                    status: "Siap Adopsi",
                    image: "/image/dashboard/landing-rabbit-image-2.jpg"
                }
            ]
        };

        let currentCategory = 'cats';

        function createPetCard(pet) {
            return `
                <div class="pet-card" onclick="showPetDetails('${pet.name}')">
                    <div class="pet-image" style="background-image: url('${pet.image}')"></div>
                    <div class="pet-info">
                        <h3 class="pet-name">${pet.name}</h3>
                        <p class="pet-breed">${pet.breed}</p>
                        <div class="pet-details">
                            <div class="pet-detail">
                                <span class="icon"></span>
                                <span>${pet.age}</span>
                            </div>
                            <div class="pet-detail">
                                <span class="icon"></span>
                                <span>${pet.status}</span>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }

        function updatePetGrid(category) {
            const petGrid = document.getElementById('pet-grid');
            const pets = petData[category] || petData.cats;

            petGrid.style.opacity = '0';
            petGrid.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                petGrid.innerHTML = pets.map(pet => createPetCard(pet)).join('');

                petGrid.style.opacity = '1';
                petGrid.style.transform = 'translateY(0)';

                addPetCardListeners();
            }, 200);
        }
        function selectCategory(category) {
            document.querySelectorAll('.category-card').forEach(card => {
                card.classList.remove('active');
            });

            const selectedCard = document.querySelector('.category-card.' + category);
            if (selectedCard) {
                selectedCard.classList.add('active');
            }

            currentCategory = category;
            updatePetGrid(category);

            showCategoryMessage(category);
        }

        function showCategoryMessage(category) {
            const messages = {
                cats: "You've selected Cats!",
                dogs: "You've selected Dogs!", 
                birds: "You've selected Birds!",
                rabbits: "You've selected Rabbits!"
            };

            const existingMessage = document.querySelector('.category-message');
            if (existingMessage) {
                existingMessage.remove();
            }

            const messageDiv = document.createElement('div');
            messageDiv.className = 'category-message';
            messageDiv.textContent = messages[category];
            
            document.body.appendChild(messageDiv);

            setTimeout(() => {
                if (messageDiv.parentNode) {
                    messageDiv.remove();
                }
            }, 3000);
        }

        function addPetCardListeners() {
            document.querySelectorAll('.pet-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.boxShadow = '0 15px 35px rgba(0,0,0,0.15)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 5px 20px rgba(0,0,0,0.1)';
                });
            });
        }

function showPetDetails(petName) {
    const pets = petData[currentCategory];
    const pet = pets.find(p => p.name === petName);
    
    if (pet) {
        const modal = document.createElement('div');
        modal.className = 'pet-modal';
        modal.innerHTML = `
            <div class="pet-modal-content">
                <button class="close-modal" onclick="closePetModal()">&times;</button>
                <div class="pet-modal-header">
                    <div>
                        <h2>${pet.name}</h2>
                        <p style="color: #7f8c8d;">${pet.breed}</p>
                    </div>
                </div>
                <div class="pet-modal-body">
                    <p><strong>Age:</strong> ${pet.age}</p>
                    <p><strong>Status:</strong> ${pet.status}</p>
                    <hr style="margin: 20px 0; border: none; height: 1px; background: #ecf0f1;">
                    <p><strong>Would include:</strong></p>
                    <ul style="margin-left: 20px; color: #7f8c8d;">
                        <li>Detailed pet information</li>
                        <li>More photos</li>
                        <li>Adoption requirements</li>
                        <li>Contact information</li>
                    </ul>
                </div>
            </div>
        `;
        
        document.body.appendChild(modal);

        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closePetModal();
            }
        });
    }
}

function closePetModal() {
    const modal = document.querySelector('.pet-modal');
    if (modal) {
        modal.style.animation = 'fadeOut 0.3s ease forwards';
        setTimeout(() => modal.remove(), 300);
    }
}

        document.addEventListener('DOMContentLoaded', function() {
            updatePetGrid('cats');

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            const viewAllBtn = document.querySelector('.view-all');
            if (viewAllBtn) {
                viewAllBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert(`View All ${currentCategory.charAt(0).toUpperCase() + currentCategory.slice(1)} feature would show:\n\n- Complete list of all available ${currentCategory}\n- Advanced filtering options\n- Search functionality\n- Pagination for large lists`);
                });
            }

            const loginBtn = document.querySelector('.login-btn');
            if (loginBtn) {
                loginBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Login functionality would include:\n\n- User authentication\n- Registration for new users\n- Social media login options\n- Password recovery');
                });
            }
            initializeAnimations();
        });

        function initializeAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.category-card').forEach(function(el) {
                observer.observe(el);
            });
        }
</script>
</html>
