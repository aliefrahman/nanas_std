<?php
$companyName = $companyName ?? 'Nanas.std';
$tagline = $tagline ?? '17,000 Islands · Endless Discovery';
$description = $description ?? 'Discover the Magic of Indonesia';

// Master data for Indonesian Tours
$tours = [
    [
        'id' => 1,
        'title' => 'Bali Sunset Temples & Tanah Lot',
        'type' => 'day_tour',
        'type_label' => 'Day Tour',
        'location' => 'Bali',
        'price' => 45,
        'rating' => 4.8,
        'reviews' => 124,
        'duration' => '10 Hours',
        'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=800&q=80',
        'tag' => 'Best Seller',
        'description' => 'Explore the majestic cultural heritage of Bali. This tour takes you to the historic Taman Ayun Royal Temple, the lake temple of Ulun Danu Bratan, and finishes with a breathtaking sunset at the famous Tanah Lot Sea Temple.',
        'highlights' => [
            'Stroll through the gardens of Taman Ayun Royal Temple',
            'See the iconic floating temple of Lake Bratan in Bedugul',
            'Watch the sunset behind the waves at Tanah Lot Temple',
            'Private transport with professional local driver'
        ],
        'itinerary' => [
            ['step' => '08:30 AM', 'title' => 'Hotel Pickup', 'desc' => 'Convenient pickup from your accommodation (Kuta, Seminyak, Ubud, Sanur).'],
            ['step' => '10:00 AM', 'title' => 'Taman Ayun Temple visit', 'desc' => 'Walk around the magnificent moat-encircled royal temple complex.'],
            ['step' => '12:30 PM', 'title' => 'Ulun Danu Bratan & Lunch', 'desc' => 'Visit the iconic temple on Lake Bratan and enjoy a buffet lunch overlooking the water.'],
            ['step' => '03:30 PM', 'title' => 'Luwak Coffee Plantation', 'desc' => 'Learn how local coffee is made and enjoy a free tasting session.'],
            ['step' => '05:30 PM', 'title' => 'Tanah Lot Sunset', 'desc' => 'Witness the waves crashing against the rocky sea temple during sunset.']
        ],
        'inclusions' => ['Air-conditioned transport', 'All entrance tickets & fees', 'English-speaking driver/guide', 'Cold bottled water'],
        'exclusions' => ['Lunch & personal expenses', 'Tips/gratuities']
    ],
    [
        'id' => 2,
        'title' => 'Mount Bromo Volcano Sunrise Adventure',
        'type' => 'day_tour',
        'type_label' => 'Day Tour',
        'location' => 'East Java',
        'price' => 65,
        'rating' => 4.9,
        'reviews' => 98,
        'duration' => '12 Hours',
        'image' => 'https://images.unsplash.com/photo-1584810359583-96fc3448beaa?w=800&q=80',
        'tag' => 'Highly Rated',
        'description' => 'Experience one of the most stunning sunrises in the world. Traverse the Sand of Sea in a 4x4 Jeep, climb up the crater ridge of the active Mt. Bromo, and gaze at the otherworldly volcanic landscape of East Java.',
        'highlights' => [
            'Ride a 4x4 classic Jeep across the mysterious Sea of Sand',
            'Climb the steps to the active volcanic rim of Mt. Bromo',
            'Witness the sunrise over the caldera from King Kong Hill view point',
            'Enjoy a hot local Javanese breakfast'
        ],
        'itinerary' => [
            ['step' => '01:30 AM', 'title' => 'Midnight Departure', 'desc' => 'Pickup from Malang or Probolinggo and drive to the Bromo base.'],
            ['step' => '03:30 AM', 'title' => '4x4 Jeep Ride', 'desc' => 'Swap to an open-air Jeep to climb up to Penanjakan Viewpoint.'],
            ['step' => '05:00 AM', 'title' => 'Caldera Sunrise', 'desc' => 'Marvel at the magical sunrise illuminating the volcanic peaks.'],
            ['step' => '07:30 AM', 'title' => 'Bromo Crater Hike', 'desc' => 'Cross the Sea of Sand and hike the 250 steps to the crater rim.'],
            ['step' => '09:30 AM', 'title' => 'Breakfast & Return', 'desc' => 'Eat a delicious hot breakfast before returning back to town.']
        ],
        'inclusions' => ['4x4 Jeep rental & driver', 'National Park entry permits', 'Pickup and drop-off', 'Local breakfast'],
        'exclusions' => ['Horse riding across the sand', 'Warm jackets/clothing rentals']
    ],
    [
        'id' => 3,
        'title' => 'Komodo National Park 3-Day Liveaboard Cruise',
        'type' => 'multiday',
        'type_label' => 'Multi-Day',
        'location' => 'Komodo',
        'price' => 299,
        'rating' => 5.0,
        'reviews' => 76,
        'duration' => '3 Days',
        'image' => 'https://images.unsplash.com/photo-1516690561799-46d8f74f90f6?w=800&q=80',
        'tag' => 'Most Popular',
        'description' => 'Sail through the beautiful islands of Komodo National Park on a traditional Indonesian Phinisi boat. Hike up Padar Island, walk alongside Komodo Dragons, and swim with Giant Manta Rays at Manta Point.',
        'highlights' => [
            'Sleep in cozy cabins on a handcrafted wooden Phinisi yacht',
            'Face the prehistoric Komodo Dragons in their natural habitat',
            'Snorkel in the crystal-clear waters of Pink Beach and Manta Point',
            'Panoramic mountain hike at Padar Island for the iconic three-bay shot'
        ],
        'itinerary' => [
            ['step' => 'Day 1', 'title' => 'Kelor Island & Kalong Bats', 'desc' => 'Board the Phinisi at Labuan Bajo. Hike Kelor Island and watch millions of bats fly over Kalong Island at dusk.'],
            ['step' => 'Day 2', 'title' => 'Padar Sunrise, Pink Beach & Dragons', 'desc' => 'Watch the sunrise from Padar Island. Snorkel on Pink Beach, then track Komodo dragons on Rinca Island.'],
            ['step' => 'Day 3', 'title' => 'Manta Point & Kanawa Snorkeling', 'desc' => 'Swim with manta rays at Manta Point and enjoy coral reef snorkeling at Kanawa Island before returning.']
        ],
        'inclusions' => ['Cabin on Phinisi Boat', '3 daily meals & snacks', 'Komodo Park guide fees', 'Snorkeling equipment'],
        'exclusions' => ['Flight tickets to Labuan Bajo', 'Alcoholic beverages']
    ],
    [
        'id' => 4,
        'title' => 'Yogyakarta Heritage: Borobudur & Prambanan',
        'type' => 'day_tour',
        'type_label' => 'Day Tour',
        'location' => 'Yogyakarta',
        'price' => 35,
        'rating' => 4.7,
        'reviews' => 54,
        'duration' => '8 Hours',
        'image' => 'https://images.unsplash.com/photo-1604999333679-b86d54738315?w=800&q=80',
        'tag' => 'Culture',
        'description' => 'Unveil Java\'s ancient history. This full-day cultural tour guides you through the world\'s largest Buddhist temple at Borobudur, followed by a visit to the magnificent 9th-century Hindu spires of Prambanan.',
        'highlights' => [
            'Admire the complex stone carvings and stupas of Borobudur Temple',
            'Explore the towering spires of the Prambanan Temple complex',
            'Learn about the historical coexistence of Buddhism and Hinduism in Java',
            'Private transport and hotel transfers included'
        ],
        'itinerary' => [
            ['step' => '07:30 AM', 'title' => 'Hotel Pickup', 'desc' => 'Morning pickup from your hotel in Yogyakarta city area.'],
            ['step' => '09:00 AM', 'title' => 'Borobudur Temple Exploration', 'desc' => 'Explore the majestic temple grounds and learn about its Buddhist cosmic design.'],
            ['step' => '12:00 PM', 'title' => 'Javanese Buffet Lunch', 'desc' => 'Savor traditional dishes at a local restaurant near the temple.'],
            ['step' => '02:00 PM', 'title' => 'Prambanan Temple Complex', 'desc' => 'Witness the architectural mastery of the Hindu temples built for Shiva, Vishnu, and Brahma.']
        ],
        'inclusions' => ['Private air-conditioned car', 'English-speaking guide', 'Mineral water', 'Local Javanese buffet lunch'],
        'exclusions' => ['Entrance temple tickets ($25/temple)', 'Personal shopping']
    ],
    [
        'id' => 5,
        'title' => 'Nusa Penida Instagram Highlights Tour',
        'type' => 'day_tour',
        'type_label' => 'Day Tour',
        'location' => 'Bali',
        'price' => 50,
        'rating' => 4.8,
        'reviews' => 210,
        'duration' => '9 Hours',
        'image' => 'https://images.unsplash.com/photo-1501179691627-eeaa65ea017c?w=800&q=80',
        'tag' => 'Instagrammable',
        'description' => 'Cross the sea from Bali mainland to Nusa Penida island. Visit the famous T-Rex-shaped cliff at Kelingking Beach, walk across the natural stone archway at Broken Beach, and swim in the natural infinity pool at Angel\'s Billabong.',
        'highlights' => [
            'Roundtrip fast boat transfer from Sanur beach to Nusa Penida',
            'Stand on the edge of the world-famous Kelingking T-Rex Beach',
            'Peer down the natural stone circular cliff of Broken Beach',
            'Swim in the crystal pools of Crystal Bay'
        ],
        'itinerary' => [
            ['step' => '06:30 AM', 'title' => 'Sanur Harbour Departure', 'desc' => 'Board the modern speed boat for a 45-minute crossing to Penida.'],
            ['step' => '09:00 AM', 'title' => 'Kelingking T-Rex Cliff', 'desc' => 'Capture the famous dinosaur-shaped cliff layout and climb the cliff walk.'],
            ['step' => '11:30 AM', 'title' => 'Angel\'s Billabong & Broken Beach', 'desc' => 'Visit the natural limestone sinkholes and take scenic bridge shots.'],
            ['step' => '01:30 PM', 'title' => 'Local Indonesian Lunch', 'desc' => 'Stop at a local restaurant for a fresh coconut and lunch.'],
            ['step' => '03:00 PM', 'title' => 'Crystal Bay Relaxing', 'desc' => 'Snorkel and relax on the white sands of Crystal Bay before returning.']
        ],
        'inclusions' => ['Roundtrip fast boat tickets', 'Private air-conditioned car on the island', 'All island entry tickets', 'Lunch'],
        'exclusions' => ['Snorkelling boat rental fees', 'Gratuities for driver']
    ],
    [
        'id' => 6,
        'title' => 'Raja Ampat Tropical Paradise Explorer',
        'type' => 'multiday',
        'type_label' => 'Multi-Day',
        'location' => 'West Papua',
        'price' => 899,
        'rating' => 5.0,
        'reviews' => 42,
        'duration' => '5 Days',
        'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=800&q=80',
        'tag' => 'Premium',
        'description' => 'Discover Raja Ampat, the global epicenter of marine biodiversity. Climb Piaynemo for views of limestone karst islets, kayak through the giant water passages of Kabui Bay, and dive into vibrant coral reefs.',
        'highlights' => [
            'Snorkel in pristine, untouched coral reefs with sea turtles',
            'Climb the wooden stairs of Piaynemo to view circular karst bays',
            'Stay in an eco-resort built over a turquoise lagoon',
            'Private speedboat for flexible customized routes'
        ],
        'itinerary' => [
            ['step' => 'Day 1', 'title' => 'Sorong to Waisai', 'desc' => 'Take the VIP ferry to Waisai, settle into the overwater bungalow resort, and watch the reef sharks feed under the deck.'],
            ['step' => 'Day 2', 'title' => 'Piaynemo Karst & Star Lagoon', 'desc' => 'Hike up to the world-famous Piaynemo lookout, swim in the star lagoon, and enjoy a fresh catch BBQ.'],
            ['step' => 'Day 3', 'title' => 'Kabui Passage & Friwen Beach', 'desc' => 'Speedboat tour through the towering karst walls of Kabui Passage and lounge on the powdery white sand of Friwen Beach.'],
            ['step' => 'Day 4', 'title' => 'Marine Diversity Snorkel & Village Tour', 'desc' => 'Dive/Snorkel the deep marine walls of Sawandarek and visit Arborek Tourism Village to experience local culture.'],
            ['step' => 'Day 5', 'title' => 'Departure to Sorong', 'desc' => 'Pack up and catch the return ferry to Sorong to catch your flight home.']
        ],
        'inclusions' => ['Overwater resort stay (4 nights)', 'All meals & refreshments', 'Private speedboat charters', 'Professional marine guides'],
        'exclusions' => ['Raja Ampat conservation fee ($70)', 'Scuba diving tank rentals']
    ]
];

$destinations = [
    ['id' => 'bali', 'name' => 'Bali', 'region' => 'Lesser Sunda', 'tours_count' => 142, 'popular' => true, 'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=600&q=80'],
    ['id' => 'yogyakarta', 'name' => 'Yogyakarta', 'region' => 'Central Java', 'tours_count' => 38, 'popular' => false, 'image' => 'https://images.unsplash.com/photo-1604999333679-b86d54738315?w=600&q=80'],
    ['id' => 'komodo', 'name' => 'Komodo', 'region' => 'East Nusa Tenggara', 'tours_count' => 24, 'popular' => true, 'image' => 'https://images.unsplash.com/photo-1516690561799-46d8f74f90f6?w=600&q=80'],
    ['id' => 'raja-ampat', 'name' => 'Raja Ampat', 'region' => 'West Papua', 'tours_count' => 18, 'popular' => true, 'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600&q=80'],
    ['id' => 'lombok', 'name' => 'Lombok', 'region' => 'West Nusa Tenggara', 'tours_count' => 29, 'popular' => false, 'image' => 'https://images.unsplash.com/photo-1528127269322-539801943592?w=600&q=80'],
    ['id' => 'jakarta', 'name' => 'Jakarta', 'region' => 'Capital District', 'tours_count' => 45, 'popular' => false, 'image' => 'https://images.unsplash.com/photo-1501179691627-eeaa65ea017c?w=600&q=80']
];

// Include Header Layout
include __DIR__ . '/layouts/header.php';
?>

<!-- Scroll Progress Bar -->
<div id="scroll-progress" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-gold-light to-primary-light z-100 transition-all duration-100"
    style="width: 0%"></div>

<!-- Header Navigation -->
<nav id="navbar" class="fixed top-0 inset-x-0 z-50 transition-all duration-300 py-6 text-white bg-transparent">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="flex items-center gap-2.5 text-2xl font-serif font-black tracking-tight transition-transform duration-300 hover:scale-102">
            <span class="text-gold-light text-3xl">✦</span>
            <span id="nav-brand" class="transition-colors duration-300 font-extrabold uppercase tracking-widest text-white">
                <?= htmlspecialchars($companyName) ?>
            </span>
        </a>

        <!-- Desktop Links -->
        <div class="hidden md:flex items-center gap-8 font-medium">
            <a href="#" class="nav-link-underline hover:text-gold-light transition-colors py-1 text-xs tracking-wider uppercase font-bold">Home</a>
            <a href="#tours-section" class="nav-link-underline hover:text-gold-light transition-colors py-1 text-xs tracking-wider uppercase font-bold">Tours</a>
            <a href="#destinations-section" class="nav-link-underline hover:text-gold-light transition-colors py-1 text-xs tracking-wider uppercase font-bold">Destinations</a>
            <a href="#why-section" class="nav-link-underline hover:text-gold-light transition-colors py-1 text-xs tracking-wider uppercase font-bold">Why Us</a>
            <a href="javascript:void(0)" onclick="openB2BModal()"
                class="px-6 py-3 bg-gradient-to-r from-gold-light to-amber-500 hover:from-gold hover:to-gold-dark text-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 font-extrabold text-xs tracking-widest uppercase">
                B2B Partner
            </a>
        </div>

        <!-- Mobile Hamburg Trigger -->
        <button id="menu-btn" class="md:hidden text-current focus:outline-none" aria-label="Toggle Menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>

    <!-- Mobile Drawer -->
    <div id="mobile-menu"
        class="hidden absolute top-full inset-x-0 glass-premium-dark text-white flex-col p-6 space-y-4 border-t border-white/10 shadow-2xl">
        <a href="#" class="block text-sm font-bold uppercase tracking-wider hover:text-gold-light transition-colors">Home</a>
        <a href="#tours-section" class="block text-sm font-bold uppercase tracking-wider hover:text-gold-light transition-colors">Tours</a>
        <a href="#destinations-section" class="block text-sm font-bold uppercase tracking-wider hover:text-gold-light transition-colors">Destinations</a>
        <a href="#why-section" class="block text-sm font-bold uppercase tracking-wider hover:text-gold-light transition-colors">Why Us</a>
        <a href="javascript:void(0)" onclick="openB2BModal()"
            class="block text-center py-3.5 bg-gradient-to-r from-gold-light to-amber-500 hover:from-gold hover:to-gold-dark rounded-xl font-bold text-xs uppercase tracking-wider transition-all duration-300">
            B2B Partner
        </a>
    </div>
</nav>

<!-- Main Container -->
<main class="min-h-screen">

    <!-- Hero Section -->
    <section id="hero" class="relative min-h-[98vh] flex items-center justify-center overflow-hidden py-24">
        <!-- Parallax Background Image -->
        <div id="hero-bg" class="absolute inset-0 scale-105"
            style="background-image: url('https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=1920&q=90'); background-size: cover; background-position: center; transition: transform 0.1s ease-out;">
        </div>
        <!-- Luxury Gradient Overlay (smooth blend to sand page background) -->
        <div class="absolute inset-0 bg-gradient-to-b from-primary-dark/85 via-primary-dark/45 to-sand/90 mix-blend-multiply"></div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-6 max-w-4xl mx-auto mt-8">
            <p class="text-gold-light font-extrabold tracking-widest text-xs uppercase mb-4 animate-[fadeInUp_0.8s_ease-out]">
                <?= htmlspecialchars($tagline) ?>
            </p>
            <h1 class="text-4xl md:text-7xl font-serif font-bold mb-6 leading-[1.15] tracking-tight text-white animate-[fadeInUp_1s_ease-out_0.2s_both]">
                Discover the Magic of<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-light via-amber-200 to-teal-200">Indonesia</span>
            </h1>
            <p class="text-sm md:text-base text-white/80 mb-10 max-w-2xl mx-auto leading-relaxed font-light animate-[fadeInUp_1.2s_ease-out_0.4s_both]">
                <?= htmlspecialchars($description) ?>. Find and book premium tours, activities, and local experiences across the spectacular Indonesian archipelago. Powered by MVC technology.
            </p>

            <!-- Interactive Search Bar -->
            <div class="relative max-w-2xl mx-auto mb-12 animate-[fadeInUp_1.4s_ease-out_0.6s_both]">
                <div class="glass-premium-dark p-2 md:p-3 rounded-2xl md:rounded-3xl shadow-2xl border border-white/10 glow-emerald">
                    <form id="hero-search-form" class="flex flex-col sm:flex-row gap-2.5">
                        <div class="flex-1 relative">
                            <!-- Search Icon -->
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.602 10.602Z" />
                                </svg>
                            </span>
                            <input id="search-input" type="text" autocomplete="off"
                                placeholder="Search destinations, tours, or activities..."
                                class="w-full pl-12 pr-4 py-4 rounded-xl text-slate-800 bg-white/95 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-gold-light shadow-inner text-sm transition-all duration-300">
                        </div>
                        <button type="submit"
                            class="px-8 py-4 bg-gradient-to-r from-gold-light to-amber-500 hover:from-gold hover:to-gold-dark text-white font-extrabold rounded-xl transition-all duration-300 shadow-lg whitespace-nowrap text-xs tracking-wider uppercase">
                            Search Tours
                        </button>
                    </form>
                </div>

                <!-- Search Suggestions Dropdown -->
                <div id="suggestions-dropdown"
                    class="hidden absolute top-full left-0 right-0 mt-3 bg-white/95 backdrop-blur-md rounded-2xl shadow-2xl border border-sand-dark overflow-hidden text-left z-50 transition-all duration-300">
                    <div class="p-3.5 border-b border-sand-dark text-xxs font-black text-slate-400 uppercase tracking-widest">
                        Suggested Destinations
                    </div>
                    <ul id="suggestions-list" class="divide-y divide-sand-dark">
                        <!-- Suggestions will be injected here -->
                    </ul>
                </div>
            </div>

            <!-- Suggestion Quick Chips -->
            <div class="flex flex-wrap justify-center gap-2.5 animate-[fadeInUp_1.6s_ease-out_0.8s_both]">
                <button onclick="setSearchFilter('Bali')"
                    class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-full text-xs font-semibold backdrop-blur-sm transition-all duration-300 border border-white/15 hover:border-gold-light/45 hover:-translate-y-0.5">
                    # Bali
                </button>
                <button onclick="setSearchFilter('Bromo')"
                    class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-full text-xs font-semibold backdrop-blur-sm transition-all duration-300 border border-white/15 hover:border-gold-light/45 hover:-translate-y-0.5">
                    # Mount Bromo
                </button>
                <button onclick="setSearchFilter('Komodo')"
                    class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-full text-xs font-semibold backdrop-blur-sm transition-all duration-300 border border-white/15 hover:border-gold-light/45 hover:-translate-y-0.5">
                    # Komodo
                </button>
                <button onclick="setSearchFilter('Raja Ampat')"
                    class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-full text-xs font-semibold backdrop-blur-sm transition-all duration-300 border border-white/15 hover:border-gold-light/45 hover:-translate-y-0.5">
                    # Raja Ampat
                </button>
            </div>
        </div>

        <!-- Stats Counter Section (Absolute Bottom of Hero) -->
        <div class="absolute bottom-0 inset-x-0 py-8 bg-gradient-to-t from-sand/10 to-transparent">
            <div id="stats-container" class="max-w-4xl mx-auto px-6 grid grid-cols-3 gap-4 md:gap-6 text-white text-center">
                <div class="glass-premium-dark rounded-2xl py-5 px-3 border border-white/8 shadow-2xl hover:scale-102 transition-transform duration-300">
                    <div id="stat-tours" class="text-2xl md:text-3xl font-serif font-black text-gold-light" data-target="500">0+</div>
                    <div class="text-[9px] md:text-xxs text-white/70 mt-1 uppercase tracking-widest font-black">Tours & Activities</div>
                </div>
                <div class="glass-premium-dark rounded-2xl py-5 px-3 border border-white/8 shadow-2xl hover:scale-102 transition-transform duration-300">
                    <div id="stat-dests" class="text-2xl md:text-3xl font-serif font-black text-gold-light" data-target="100">0+</div>
                    <div class="text-[9px] md:text-xxs text-white/70 mt-1 uppercase tracking-widest font-black">Destinations</div>
                </div>
                <div class="glass-premium-dark rounded-2xl py-5 px-3 border border-white/8 shadow-2xl hover:scale-102 transition-transform duration-300">
                    <div id="stat-rating" class="text-2xl md:text-3xl font-serif font-black text-gold-light" data-target="4.8">0.0</div>
                    <div class="text-[9px] md:text-xxs text-white/70 mt-1 uppercase tracking-widest font-black">Happy Reviews</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Tours Section -->
    <section id="tours-section" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between mb-16 gap-6">
            <div class="reveal">
                <p class="text-gold-light font-bold text-xs uppercase tracking-widest mb-2">Handpicked Journeys</p>
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-primary-dark tracking-tight">Featured Tours & Activities</h2>
                <div class="w-16 h-0.5 bg-gradient-to-r from-gold-light to-primary-light mt-3.5 rounded-full"></div>
                <p class="text-slate-500 mt-4 text-base max-w-xl font-light leading-relaxed">
                    Explore our most popular and curated local experiences across the Indonesian archipelago.
                </p>
            </div>

            <!-- Filters & Search Toolbar -->
            <div class="flex flex-wrap items-center gap-2.5 reveal">
                <button onclick="filterTours('all')"
                    class="tour-filter-btn px-6 py-3 border border-transparent bg-primary text-white rounded-full text-xs font-extrabold transition-all duration-300 shadow-md shadow-primary/20"
                    data-filter="all">All Tours</button>
                <button onclick="filterTours('day_tour')"
                    class="tour-filter-btn px-6 py-3 bg-white text-slate-500 border border-sand-dark hover:border-primary-light/50 hover:text-primary-dark rounded-full text-xs font-extrabold transition-all duration-300 shadow-xs"
                    data-filter="day_tour">Day Tours</button>
                <button onclick="filterTours('multiday')"
                    class="tour-filter-btn px-6 py-3 bg-white text-slate-500 border border-sand-dark hover:border-primary-light/50 hover:text-primary-dark rounded-full text-xs font-extrabold transition-all duration-300 shadow-xs"
                    data-filter="multiday">Multi-day Cruises</button>
            </div>
        </div>

        <!-- Tours Grid -->
        <div id="tours-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($tours as $tour): ?>
                <div class="tour-card bg-white rounded-3xl overflow-hidden border border-sand-dark shadow-[0_8px_30px_rgb(0,0,0,0.012)] glow-hover flex flex-col reveal"
                    data-type="<?= $tour['type'] ?>" data-location="<?= $tour['location'] ?>"
                    data-title="<?= strtolower($tour['title']) ?>">
                    <!-- Card Image -->
                    <div class="relative overflow-hidden aspect-video">
                        <img src="<?= $tour['image'] ?>" alt="<?= htmlspecialchars($tour['title']) ?>"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-700 ease-out">
                        <span class="absolute top-4 left-4 px-3.5 py-1.5 bg-gradient-to-r from-gold-light to-amber-500 text-white text-[9px] font-black rounded-full uppercase tracking-widest shadow-lg">
                            <?= htmlspecialchars($tour['tag']) ?>
                        </span>
                        <span class="absolute bottom-4 right-4 px-3 py-1.5 bg-slate-900/85 backdrop-blur-sm text-white text-[9px] font-black rounded-lg uppercase tracking-widest">
                            <?= htmlspecialchars($tour['type_label']) ?>
                        </span>
                    </div>

                    <!-- Content -->
                    <div class="p-6 md:p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <!-- Rating & Location -->
                            <div class="flex items-center justify-between text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-3">
                                <span class="flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                        stroke="currentColor" class="w-4 h-4 text-primary-light">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <?= htmlspecialchars($tour['location']) ?>
                                </span>
                                <span class="flex items-center gap-1 text-gold-light bg-amber-50 px-2 py-0.5 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-3.5 h-3.5">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <?= number_format($tour['rating'], 1) ?>
                                </span>
                            </div>
                            <!-- Title -->
                            <h3 class="text-xl font-serif font-bold text-primary-dark mb-2 leading-snug">
                                <?= htmlspecialchars($tour['title']) ?>
                            </h3>
                            <!-- Description -->
                            <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-2 font-light">
                                <?= htmlspecialchars($tour['description']) ?>
                            </p>
                        </div>

                        <!-- Footer details -->
                        <div class="flex items-center justify-between pt-5 border-t border-sand-dark mt-4">
                            <div>
                                <span class="text-[10px] text-slate-400 block uppercase font-bold tracking-wider">Price starts from</span>
                                <span class="text-2xl font-serif font-black text-primary-dark">$<?= $tour['price'] ?></span>
                            </div>
                            <button onclick="openTourModal(<?= $tour['id'] ?>)"
                                class="px-5 py-3 bg-primary-dark hover:bg-gold text-white font-extrabold text-[10px] rounded-xl shadow-md hover:shadow-lg transition-all duration-300 uppercase tracking-widest flex items-center gap-1.5">
                                <span>Details</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3.5 h-3.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Empty Results Message -->
        <div id="no-tours-found" class="hidden text-center py-16 text-slate-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-16 h-16 mx-auto mb-4 text-slate-300">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.602 10.602Z" />
            </svg>
            <p class="text-xl font-serif font-bold text-slate-700">No matches found for your search criteria</p>
            <p class="text-slate-400 text-sm mt-1 max-w-xs mx-auto">Try checking your spelling or adjusting your active filters.</p>
            <button onclick="resetFilters()" class="mt-4 px-5 py-2.5 bg-primary-dark text-white rounded-xl font-bold text-xs uppercase tracking-wider hover:bg-gold transition-colors">
                Reset Filters
            </button>
        </div>
    </section>

    <!-- Destinations Section -->
    <section id="destinations-section" class="py-24 bg-sand-dark/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <p class="text-gold-light font-bold text-xs uppercase tracking-widest mb-2">Across the Archipelago</p>
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-primary-dark tracking-tight">Popular Destinations</h2>
                <div class="w-16 h-0.5 bg-gradient-to-r from-gold-light to-primary-light mt-3.5 mx-auto rounded-full"></div>
                <p class="text-slate-500 mt-4 text-base max-w-xl mx-auto font-light leading-relaxed">
                    Discover the most breathtaking and historically rich regions across the Indonesian islands.
                </p>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($destinations as $dest): ?>
                    <div onclick="setSearchFilter('<?= $dest['name'] ?>')"
                        class="group relative overflow-hidden rounded-[24px] aspect-[4/3] cursor-pointer shadow-md hover:shadow-2xl transition-all duration-500 reveal">
                        <!-- Image -->
                        <img src="<?= $dest['image'] ?>" alt="<?= htmlspecialchars($dest['name']) ?>"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                        <!-- Luxury Dark Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-dark/95 via-primary-dark/25 to-transparent"></div>

                        <!-- Content -->
                        <div class="absolute bottom-6 left-6 right-6 text-white flex justify-between items-end">
                            <div>
                                <h3 class="font-serif font-bold text-2xl leading-tight tracking-wide">
                                    <?= htmlspecialchars($dest['name']) ?>
                                </h3>
                                <p class="text-xs text-white/70 flex items-center gap-1.5 mt-1 font-medium tracking-wide">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                        stroke="currentColor" class="w-3.5 h-3.5 text-gold-light">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <?= htmlspecialchars($dest['region']) ?>
                                </p>
                            </div>
                            <span class="px-3 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white text-[9px] font-black tracking-widest uppercase rounded-xl">
                                <?= $dest['tours_count'] ?> Tours
                            </span>
                        </div>

                        <!-- Popular Stamp -->
                        <?php if ($dest['popular']): ?>
                            <span class="absolute top-4 right-4 px-3 py-1 bg-gradient-to-r from-gold-light to-amber-500 text-white text-[8px] font-black uppercase rounded-full shadow-lg tracking-widest">
                                Popular
                            </span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-16 reveal">
                <button onclick="resetFilters()"
                    class="inline-flex items-center gap-2.5 px-8 py-4 border-2 border-primary text-primary-dark hover:border-gold hover:text-gold font-extrabold rounded-xl transition-all duration-300 shadow-md hover:shadow-lg bg-white text-xs uppercase tracking-wider">
                    <span>View All Archipelago Destinations</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-section" class="py-24 px-6 max-w-7xl mx-auto bg-gradient-to-b from-white to-sand/40">
        <div class="text-center mb-16 reveal">
            <p class="text-gold-light font-bold text-xs uppercase tracking-widest mb-2">Our Promise</p>
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-primary-dark tracking-tight">Why Choose Global Travel Hub</h2>
            <div class="w-16 h-0.5 bg-gradient-to-r from-gold-light to-primary-light mt-3.5 mx-auto rounded-full"></div>
            <p class="text-slate-500 mt-4 text-base max-w-xl mx-auto font-light leading-relaxed">
                We provide premium-tier service to ensure your Indonesian journeys are unforgettable.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-3xl p-8 border border-sand-dark shadow-[0_8px_30px_rgb(0,0,0,0.01)] hover:shadow-[0_20px_40px_rgba(6,78,59,0.04)] hover:-translate-y-1 transition-all duration-300 text-center reveal">
                <div class="w-16 h-16 rounded-2xl bg-emerald-50 border border-emerald-100 flex items-center justify-center mx-auto mb-6 transition-transform duration-300 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2"
                        stroke="currentColor" class="w-7 h-7 text-emerald-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>
                </div>
                <h3 class="font-serif font-bold text-primary-dark text-lg mb-3">Trusted & Verified</h3>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    All tour guides, transport operators, and captains hold official Indonesian tourism licenses.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-3xl p-8 border border-sand-dark shadow-[0_8px_30px_rgb(0,0,0,0.01)] hover:shadow-[0_20px_40px_rgba(6,78,59,0.04)] hover:-translate-y-1 transition-all duration-300 text-center reveal">
                <div class="w-16 h-16 rounded-2xl bg-amber-50 border border-amber-100 flex items-center justify-center mx-auto mb-6 transition-transform duration-300 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2"
                        stroke="currentColor" class="w-7 h-7 text-gold">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499c.173-.44.83-.44 1.01 0l2.082 5.007 5.404.434c.48.038.67.63.32.97l-4.117 3.527 1.257 5.273c.11.47-.38.82-.8.58L12 18.354 7.373 21.18c-.42.24-.91-.11-.8-.58l1.257-5.273-4.117-3.527c-.35-.34-.16-.932.32-.97l5.403-.434 2.082-5.007Z" />
                    </svg>
                </div>
                <h3 class="font-serif font-bold text-primary-dark text-lg mb-3">Curated Experiences</h3>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    Every tour package is handpicked and constantly quality-checked by our veteran travel specialists.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-3xl p-8 border border-sand-dark shadow-[0_8px_30px_rgb(0,0,0,0.01)] hover:shadow-[0_20px_40px_rgba(6,78,59,0.04)] hover:-translate-y-1 transition-all duration-300 text-center reveal">
                <div class="w-16 h-16 rounded-2xl bg-sky-50 border border-sky-100 flex items-center justify-center mx-auto mb-6 transition-transform duration-300 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2"
                        stroke="currentColor" class="w-7 h-7 text-sky-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                    </svg>
                </div>
                <h3 class="font-serif font-bold text-primary-dark text-lg mb-3">24/7 Premium Support</h3>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    Assistance in Indonesian, English, and Mandarin is always available on-trip for seamless coordination.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-3xl p-8 border border-sand-dark shadow-[0_8px_30px_rgb(0,0,0,0.01)] hover:shadow-[0_20px_40px_rgba(6,78,59,0.04)] hover:-translate-y-1 transition-all duration-300 text-center reveal">
                <div class="w-16 h-16 rounded-2xl bg-indigo-50 border border-indigo-100 flex items-center justify-center mx-auto mb-6 transition-transform duration-300 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2"
                        stroke="currentColor" class="w-7 h-7 text-indigo-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <h3 class="font-serif font-bold text-primary-dark text-lg mb-3">Best Rate Guarantee</h3>
                <p class="text-slate-400 text-xs leading-relaxed font-light">
                    We match any identical tour operator rates, alongside customized B2B discounts for travel agents.
                </p>
            </div>
        </div>
    </section>

    <!-- B2B Partner Section -->
    <section class="batik-bg py-24 px-6 text-center text-white relative overflow-hidden">
        <div class="relative z-10 max-w-3xl mx-auto reveal">
            <div class="w-16 h-0.5 bg-gradient-to-r from-gold-light to-amber-300 mx-auto mb-8 rounded-full"></div>
            <h2 class="text-4xl md:text-5xl font-serif font-bold mb-6 tracking-wide">Grow Your Travel Agency Business</h2>
            <p class="text-white/80 text-base md:text-lg mb-10 leading-relaxed font-light max-w-2xl mx-auto">
                Join as an authorized travel agent partner. Access direct APIs, exclusive wholesale rates, custom charters, and dedicated helpdesks across all Indonesian destinations.
            </p>
            <button onclick="openB2BModal()"
                class="inline-flex items-center gap-2.5 px-8 py-4 bg-gradient-to-r from-gold-light to-amber-500 hover:from-gold hover:to-gold-dark text-white font-extrabold rounded-xl transition-all duration-300 shadow-2xl text-xs uppercase tracking-widest">
                <span>Access B2B Agent Portal</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </button>
        </div>
    </section>

</main>

<!-- Back to Top Button -->
<button id="back-to-top"
    class="fixed bottom-8 right-8 w-12 h-12 rounded-xl bg-slate-900/80 hover:bg-primary-light text-white flex items-center justify-center shadow-lg pointer-events-none opacity-0 transition-all duration-300 z-40 border border-white/10"
    aria-label="Back to top">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
        class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
    </svg>
</button>

<!-- Tour Details Modal (Hidden by Default) -->
<div id="tour-modal"
    class="fixed inset-0 bg-primary-dark/80 backdrop-blur-md flex items-center justify-center p-4 md:p-6 z-100 opacity-0 pointer-events-none transition-all duration-300">
    <div
        class="bg-white rounded-3xl w-full max-w-4xl max-h-[92vh] overflow-hidden flex flex-col shadow-2xl relative border border-sand-dark scale-95 transition-all duration-300">
        <!-- Close Button -->
        <button onclick="closeTourModal()"
            class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-slate-900/40 hover:bg-slate-900/70 text-white flex items-center justify-center backdrop-blur-sm transition-all duration-200"
            aria-label="Close modal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Modal Body Content -->
        <div class="overflow-y-auto custom-scrollbar flex-1">
            <!-- Modal Banner Image -->
            <div class="relative h-[250px] md:h-[350px]">
                <img id="modal-image" src="" alt="Tour Banner" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-primary-dark/90 via-primary-dark/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6 text-white">
                    <span id="modal-tag"
                        class="px-2.5 py-1 bg-gradient-to-r from-gold-light to-amber-500 text-white text-[9px] font-black rounded-lg uppercase tracking-widest mb-2.5 inline-block">
                        Best Seller
                    </span>
                    <h2 id="modal-title" class="text-2xl md:text-4xl font-serif font-bold text-white leading-tight">
                        Tour Title
                    </h2>
                </div>
            </div>

            <!-- Sticky Info bar -->
            <div class="bg-sand border-b border-sand-dark px-6 py-4.5 flex flex-wrap justify-between items-center gap-4 text-slate-700 text-xs font-bold uppercase tracking-wider">
                <div class="flex items-center gap-6">
                    <span class="flex items-center gap-1.5">
                        <span class="text-primary-light">📍</span>
                        <span id="modal-location" class="text-primary-dark font-extrabold">Bali</span>
                    </span>
                    <span class="flex items-center gap-1.5">
                        <span class="text-primary-light">⏱️</span>
                        <span id="modal-duration" class="text-primary-dark font-extrabold">10 Hours</span>
                    </span>
                    <span class="flex items-center gap-1.5">
                        <span class="text-primary-light">⭐</span>
                        <span id="modal-rating-text" class="text-primary-dark font-extrabold">4.8 (124 reviews)</span>
                    </span>
                </div>
                <div class="normal-case">
                    <span class="text-slate-400 font-semibold text-xs">Starts from: </span>
                    <span id="modal-price" class="text-2xl font-serif font-black text-primary-dark">$45</span>
                </div>
            </div>

            <!-- Tab Buttons -->
            <div class="border-b border-sand-dark flex overflow-x-auto bg-sand/35">
                <button onclick="switchTab('overview')"
                    class="modal-tab-btn flex-1 min-w-[100px] text-center py-4.5 border-b-2 border-primary text-primary-dark font-bold text-xs uppercase tracking-widest"
                    data-tab="overview">Overview</button>
                <button onclick="switchTab('itinerary')"
                    class="modal-tab-btn flex-1 min-w-[100px] text-center py-4.5 border-b-2 border-transparent text-slate-400 hover:text-primary-dark font-bold text-xs uppercase tracking-widest"
                    data-tab="itinerary">Itinerary</button>
                <button onclick="switchTab('inclusions')"
                    class="modal-tab-btn flex-1 min-w-[100px] text-center py-4.5 border-b-2 border-transparent text-slate-400 hover:text-primary-dark font-bold text-xs uppercase tracking-widest"
                    data-tab="inclusions">Inclusions</button>
                <button onclick="switchTab('inquire')"
                    class="modal-tab-btn flex-1 min-w-[100px] text-center py-4.5 border-b-2 border-transparent text-slate-400 hover:text-primary-dark font-bold text-xs uppercase tracking-widest"
                    data-tab="inquire">Inquire Now</button>
            </div>

            <!-- Tab Contents -->
            <div class="p-6 md:p-8">
                <!-- Overview Tab -->
                <div id="tab-overview" class="modal-tab-content space-y-6">
                    <div>
                        <h3 class="text-base font-serif font-extrabold text-primary-dark mb-2.5 uppercase tracking-wide">Description</h3>
                        <p id="modal-desc" class="text-slate-500 text-sm leading-relaxed font-light">Tour details will go here...</p>
                    </div>
                    <div>
                        <h3 class="text-base font-serif font-extrabold text-primary-dark mb-3.5 uppercase tracking-wide">Key Highlights</h3>
                        <ul id="modal-highlights" class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <!-- Injected dynamically -->
                        </ul>
                    </div>
                </div>

                <!-- Itinerary Tab -->
                <div id="tab-itinerary" class="modal-tab-content hidden space-y-4">
                    <h3 class="text-base font-serif font-extrabold text-primary-dark mb-3.5 uppercase tracking-wide">Scheduled Itinerary</h3>
                    <div id="modal-itinerary-container" class="space-y-3">
                        <!-- Accordion steps injected here -->
                    </div>
                </div>

                <!-- Inclusions Tab -->
                <div id="tab-inclusions" class="modal-tab-content hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-sm font-bold text-emerald-700 mb-4 flex items-center gap-2 uppercase tracking-wider">
                                <span class="bg-emerald-50 p-1.5 rounded-lg">✓</span> Included
                            </h3>
                            <ul id="modal-inclusions-list" class="space-y-3 text-slate-500 text-sm font-light">
                                <!-- Injected dynamically -->
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-rose-700 mb-4 flex items-center gap-2 uppercase tracking-wider">
                                <span class="bg-rose-50 p-1.5 rounded-lg">✕</span> Excluded
                            </h3>
                            <ul id="modal-exclusions-list" class="space-y-3 text-slate-500 text-sm font-light">
                                <!-- Injected dynamically -->
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Inquire Tab -->
                <div id="tab-inquire" class="modal-tab-content hidden">
                    <form id="inquiry-form" class="space-y-4" onsubmit="handleInquirySubmit(event)">
                        <!-- Hidden Tour Identification -->
                        <input type="hidden" id="inquire-tour-id" name="tour_id">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Full Name</label>
                                <input type="text" required
                                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold-light focus:border-transparent text-sm text-slate-800 bg-sand/35">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Email Address</label>
                                <input type="email" required
                                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold-light focus:border-transparent text-sm text-slate-800 bg-sand/35">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Preferred Date</label>
                                <input type="date" required
                                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold-light focus:border-transparent text-sm text-slate-800 bg-sand/35">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Number of Guests</label>
                                <input type="number" min="1" max="100" value="2" required
                                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold-light focus:border-transparent text-sm text-slate-800 bg-sand/35">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Additional Requirements</label>
                            <textarea rows="3" placeholder="Dietary requests, private charter setups, hotel details..."
                                class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold-light focus:border-transparent text-sm text-slate-800 bg-sand/35"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full py-4.5 bg-gradient-to-r from-gold-light to-amber-500 hover:from-gold hover:to-gold-dark text-white font-extrabold rounded-xl transition-all duration-300 shadow-lg flex items-center justify-center gap-2.5 text-xs uppercase tracking-widest">
                            <span>Submit Booking Inquiry</span>
                        </button>
                    </form>

                    <!-- Success Screen -->
                    <div id="inquiry-success" class="hidden text-center py-8 space-y-4">
                        <div
                            class="w-20 h-20 bg-emerald-50 text-emerald-500 rounded-full flex items-center justify-center mx-auto border border-emerald-100 shadow-inner">
                            <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path class="animate-checkmark" stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-serif font-bold text-primary-dark">Inquiry Submitted!</h3>
                        <p class="text-slate-400 text-xs max-w-sm mx-auto leading-relaxed font-light">
                            Our local travel coordinator will check availability and email you within 2-4 hours. Thank you for choosing us!
                        </p>
                        <button onclick="closeTourModal()"
                            class="px-6 py-3.5 bg-primary-dark text-white font-bold text-[10px] rounded-xl uppercase tracking-widest hover:bg-gold transition-colors shadow-md">
                            Close Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- B2B Partner Modal -->
<div id="b2b-modal"
    class="fixed inset-0 bg-primary-dark/80 backdrop-blur-md flex items-center justify-center p-4 z-100 opacity-0 pointer-events-none transition-all duration-300">
    <div
        class="bg-white rounded-3xl w-full max-w-md p-6 md:p-8 shadow-2xl relative border border-sand-dark scale-95 transition-all duration-300">
        <button onclick="closeB2BModal()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div id="b2b-form-container">
            <h3 class="text-2xl font-serif font-bold text-primary-dark mb-2">B2B Partner Registration</h3>
            <p class="text-slate-400 text-xs mb-6 font-light">Gain access to wholesale tour rates, private groups, and booking dashboards.</p>

            <form onsubmit="handleB2BSubmit(event)" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Company / Agency Name</label>
                    <input type="text" required
                        class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold-light focus:border-transparent text-sm text-slate-800 bg-sand/35">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Contact Person</label>
                    <input type="text" required
                        class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold-light focus:border-transparent text-sm text-slate-800 bg-sand/35">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Business Email</label>
                    <input type="email" required
                        class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold-light focus:border-transparent text-sm text-slate-800 bg-sand/35">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Website (Optional)</label>
                    <input type="url" placeholder="https://example.com"
                        class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold-light focus:border-transparent text-sm text-slate-800 bg-sand/35">
                </div>
                <button type="submit"
                    class="w-full py-4.5 bg-gradient-to-r from-gold-light to-amber-500 hover:from-gold hover:to-gold-dark text-white font-extrabold rounded-xl transition-all duration-300 shadow-md text-xs uppercase tracking-widest">
                    Apply for Agent Access
                </button>
            </form>
        </div>

        <div id="b2b-success" class="hidden text-center py-6 space-y-4">
            <div class="w-16 h-16 bg-emerald-50 text-emerald-500 rounded-full flex items-center justify-center mx-auto border border-emerald-100 shadow-inner animate-pulse">
                <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path class="animate-checkmark" stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h3 class="text-xl font-serif font-bold text-primary-dark">Application Received</h3>
            <p class="text-slate-400 text-xs max-w-xs mx-auto leading-relaxed font-light">
                Our partner team will verify your agency details and email login credentials within 24 hours.
            </p>
            <button onclick="closeB2BModal()"
                class="px-6 py-3 bg-primary-dark text-white font-bold text-[10px] rounded-xl uppercase tracking-widest hover:bg-gold transition-colors">Done</button>
        </div>
    </div>
</div>

<!-- Output raw tour data for client-side JavaScript -->
<script>
    const masterToursData = <?= json_encode($tours) ?>;
</script>

<!-- Vanilla JavaScript Page Controller -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // ----------------------------------------
        // 1. STICKY NAVBAR & PROGRESS BAR
        // ----------------------------------------
        const navbar = document.getElementById('navbar');
        const navBrand = document.getElementById('nav-brand');
        const scrollProgress = document.getElementById('scroll-progress');
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        window.addEventListener('scroll', () => {
            // Scroll progress computation
            const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
            scrollProgress.style.width = scrolled + '%';

            // Navbar styling on scroll
            if (window.scrollY > 50) {
                navbar.classList.add('glass-premium', 'shadow-lg', 'shadow-primary-dark/5', 'py-4', 'text-primary-dark');
                navbar.classList.remove('bg-transparent', 'py-6', 'text-white');
                navBrand.classList.add('text-primary-dark');
                navBrand.classList.remove('text-white');
            } else {
                navbar.classList.remove('glass-premium', 'shadow-lg', 'shadow-primary-dark/5', 'py-4', 'text-primary-dark');
                navbar.classList.add('bg-transparent', 'py-6', 'text-white');
                navBrand.classList.add('text-white');
                navBrand.classList.remove('text-primary-dark');
            }
        });

        // Mobile Hamburger Toggle
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
        });

        // Close menu when clicking links
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
            });
        });

        // ----------------------------------------
        // 2. HERO PARALLAX EFFECT
        // ----------------------------------------
        const heroBg = document.getElementById('hero-bg');
        window.addEventListener('scroll', () => {
            if (window.innerWidth > 768) {
                const scrollPos = window.scrollY;
                heroBg.style.transform = `translateY(${scrollPos * 0.4}px) scale(1.05)`;
            }
        });

        // ----------------------------------------
        // 3. STATS COUNT-UP ANIMATIONS
        // ----------------------------------------
        const statsContainer = document.getElementById('stats-container');
        const countStats = () => {
            const stats = [
                { id: 'stat-tours', suffix: '+' },
                { id: 'stat-dests', suffix: '+' },
                { id: 'stat-rating', suffix: '' }
            ];

            stats.forEach(stat => {
                const el = document.getElementById(stat.id);
                if (!el) return;
                const targetVal = parseFloat(el.getAttribute('data-target'));
                let current = 0;
                const duration = 1500; // ms
                const stepTime = 16; // ms (~60fps)
                const steps = Math.ceil(duration / stepTime);
                const increment = targetVal / steps;

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= targetVal) {
                        current = targetVal;
                        clearInterval(timer);
                    }

                    if (stat.id === 'stat-rating') {
                        el.textContent = current.toFixed(1) + stat.suffix;
                    } else {
                        el.textContent = Math.floor(current) + stat.suffix;
                    }
                }, stepTime);
            });
        };

        // Trigger countup on enter viewport
        const statsObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    countStats();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        if (statsContainer) statsObserver.observe(statsContainer);

        // ----------------------------------------
        // 4. INTERACTIVE SEARCH SUGGESTIONS
        // ----------------------------------------
        const searchInput = document.getElementById('search-input');
        const suggestionsDropdown = document.getElementById('suggestions-dropdown');
        const suggestionsList = document.getElementById('suggestions-list');

        const popularDestNames = ['Bali', 'Yogyakarta', 'Mount Bromo', 'Komodo Cruise', 'Raja Ampat', 'Lombok', 'Jakarta'];

        const renderSuggestions = (filterText = '') => {
            suggestionsList.innerHTML = '';
            const list = popularDestNames.filter(d => d.toLowerCase().includes(filterText.toLowerCase()));

            if (list.length === 0) {
                suggestionsList.innerHTML = `<li class="px-4 py-3.5 text-slate-400 text-sm">No matches found</li>`;
                return;
            }

            list.forEach(dest => {
                const li = document.createElement('li');
                li.className = 'px-4 py-3.5 hover:bg-sand cursor-pointer text-slate-700 text-sm flex items-center justify-between font-semibold transition-colors duration-200';
                li.innerHTML = `
                <span class="flex items-center gap-2">📍 ${dest}</span>
                <span class="text-[9px] uppercase bg-amber-50 text-gold-light px-2.5 py-1 rounded font-black tracking-widest">Explore</span>
            `;
                li.addEventListener('mousedown', () => {
                    setSearchFilter(dest);
                });
                suggestionsList.appendChild(li);
            });
        };

        searchInput.addEventListener('focus', () => {
            renderSuggestions(searchInput.value);
            suggestionsDropdown.classList.remove('hidden');
        });

        searchInput.addEventListener('input', () => {
            renderSuggestions(searchInput.value);
        });

        searchInput.addEventListener('blur', () => {
            // Small delay to let mousedown fire on list items
            setTimeout(() => {
                suggestionsDropdown.classList.add('hidden');
            }, 150);
        });

        // Form submission triggers active search
        document.getElementById('hero-search-form').addEventListener('submit', (e) => {
            e.preventDefault();
            setSearchFilter(searchInput.value);
            document.getElementById('tours-section').scrollIntoView({ behavior: 'smooth' });
        });

        // ----------------------------------------
        // 5. SCROLL REVEAL ANIMATIONS
        // ----------------------------------------
        const reveals = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        reveals.forEach(el => revealObserver.observe(el));

        // ----------------------------------------
        // 6. BACK TO TOP
        // ----------------------------------------
        const backToTop = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTop.classList.remove('opacity-0', 'pointer-events-none');
                backToTop.classList.add('opacity-100', 'pointer-events-auto');
            } else {
                backToTop.classList.add('opacity-0', 'pointer-events-none');
                backToTop.classList.remove('opacity-100', 'pointer-events-auto');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });

    // ----------------------------------------
    // 7. REAL-TIME FILTERING & SEARCH CONTROLLER
    // ----------------------------------------
    let activeTypeFilter = 'all';
    let activeSearchTerm = '';

    window.filterTours = (type) => {
        activeTypeFilter = type;

        // Update filter button styles
        const buttons = document.querySelectorAll('.tour-filter-btn');
        buttons.forEach(btn => {
            if (btn.getAttribute('data-filter') === type) {
                btn.classList.add('bg-primary', 'text-white', 'shadow-md', 'shadow-primary/20', 'border-transparent');
                btn.classList.remove('bg-white', 'text-slate-500', 'border-sand-dark');
            } else {
                btn.classList.remove('bg-primary', 'text-white', 'shadow-md', 'shadow-primary/20', 'border-transparent');
                btn.classList.add('bg-white', 'text-slate-500', 'border-sand-dark');
            }
        });

        applyFilters();
    };

    window.setSearchFilter = (term) => {
        activeSearchTerm = term.trim().toLowerCase();
        document.getElementById('search-input').value = term;
        applyFilters();
    };

    window.resetFilters = () => {
        activeTypeFilter = 'all';
        activeSearchTerm = '';
        document.getElementById('search-input').value = '';
        filterTours('all');
    };

    const applyFilters = () => {
        const cards = document.querySelectorAll('.tour-card');
        const noResults = document.getElementById('no-tours-found');
        let visibleCount = 0;

        cards.forEach(card => {
            const type = card.getAttribute('data-type');
            const location = card.getAttribute('data-location').toLowerCase();
            const title = card.getAttribute('data-title').toLowerCase();

            const matchesType = (activeTypeFilter === 'all' || type === activeTypeFilter);
            const matchesSearch = (activeSearchTerm === '' || title.includes(activeSearchTerm) || location.includes(activeSearchTerm));

            if (matchesType && matchesSearch) {
                card.classList.remove('hidden');
                visibleCount++;
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                }, 50);
            } else {
                card.style.opacity = '0';
                card.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    card.classList.add('hidden');
                }, 200);
            }
        });

        if (visibleCount === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
        }
    };

    // ----------------------------------------
    // 8. TOUR DETAIL MODAL TAB & ACTION LOGIC
    // ----------------------------------------
    window.openTourModal = (tourId) => {
        const tour = masterToursData.find(t => t.id === tourId);
        if (!tour) return;

        // Fill elements
        document.getElementById('modal-image').src = tour.image;
        document.getElementById('modal-tag').textContent = tour.tag;
        document.getElementById('modal-title').textContent = tour.title;
        document.getElementById('modal-location').textContent = tour.location;
        document.getElementById('modal-duration').textContent = tour.duration;
        document.getElementById('modal-rating-text').textContent = tour.rating.toFixed(1) + ' (' + tour.reviews + ' reviews)';
        document.getElementById('modal-price').textContent = '$' + tour.price;
        document.getElementById('modal-desc').textContent = tour.description;
        document.getElementById('inquire-tour-id').value = tour.id;

        // Load Highlights
        const highlightsUl = document.getElementById('modal-highlights');
        highlightsUl.innerHTML = '';
        tour.highlights.forEach(high => {
            const li = document.createElement('li');
            li.className = 'flex items-start gap-2.5 text-slate-500 text-sm leading-relaxed font-light';
            li.innerHTML = `<span class="text-gold-light font-bold text-xs bg-amber-50 px-1.5 py-0.5 rounded">✓</span> <span>${high}</span>`;
            highlightsUl.appendChild(li);
        });

        // Load Itinerary Accordion
        const itineraryDiv = document.getElementById('modal-itinerary-container');
        itineraryDiv.innerHTML = '';
        tour.itinerary.forEach((step, index) => {
            const item = document.createElement('div');
            item.className = 'border border-sand-dark rounded-2xl overflow-hidden bg-sand/10';
            item.innerHTML = `
            <button onclick="toggleItineraryStep(${index})" class="w-full flex items-center justify-between p-4.5 hover:bg-sand/35 font-bold text-primary-dark text-sm text-left transition-colors duration-200">
                <span class="flex items-center gap-3">
                    <span class="px-2.5 py-1 bg-primary text-white rounded-lg text-xxs font-black tracking-wider uppercase">${step.step}</span>
                    <span class="font-serif">${step.title}</span>
                </span>
                <svg id="itin-arrow-${index}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 transition-transform duration-200 ${index === 0 ? 'rotate-180' : ''}">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
            <div id="itin-content-${index}" class="p-5 border-t border-sand-dark text-slate-500 text-sm leading-relaxed font-light transition-all duration-200 ${index === 0 ? '' : 'hidden'}">
                ${step.desc}
            </div>
        `;
            itineraryDiv.appendChild(item);
        });

        // Load Inclusions/Exclusions
        const inclusionsUl = document.getElementById('modal-inclusions-list');
        inclusionsUl.innerHTML = '';
        tour.inclusions.forEach(inc => {
            const li = document.createElement('li');
            li.className = 'flex items-center gap-2.5';
            li.innerHTML = `<span class="text-emerald-600 font-bold text-xs bg-emerald-50 px-1.5 py-0.5 rounded">✓</span> <span>${inc}</span>`;
            inclusionsUl.appendChild(li);
        });

        const exclusionsUl = document.getElementById('modal-exclusions-list');
        exclusionsUl.innerHTML = '';
        tour.exclusions.forEach(exc => {
            const li = document.createElement('li');
            li.className = 'flex items-center gap-2.5';
            li.innerHTML = `<span class="text-rose-600 font-bold text-xs bg-rose-50 px-1.5 py-0.5 rounded">✕</span> <span>${exc}</span>`;
            exclusionsUl.appendChild(li);
        });

        // Show modal
        const modal = document.getElementById('tour-modal');
        modal.classList.remove('opacity-0', 'pointer-events-none');
        modal.firstElementChild.classList.remove('scale-95');
        modal.firstElementChild.classList.add('scale-100');

        // Switch to first tab overview
        switchTab('overview');

        // Reset form states
        document.getElementById('inquiry-form').classList.remove('hidden');
        document.getElementById('inquiry-success').classList.add('hidden');
        document.getElementById('inquiry-form').reset();
    };

    window.closeTourModal = () => {
        const modal = document.getElementById('tour-modal');
        modal.classList.add('opacity-0', 'pointer-events-none');
        modal.firstElementChild.classList.add('scale-95');
        modal.firstElementChild.classList.remove('scale-100');
    };

    window.switchTab = (tabName) => {
        // Buttons state
        const buttons = document.querySelectorAll('.modal-tab-btn');
        buttons.forEach(btn => {
            if (btn.getAttribute('data-tab') === tabName) {
                btn.classList.add('border-primary', 'text-primary-dark');
                btn.classList.remove('border-transparent', 'text-slate-400');
            } else {
                btn.classList.remove('border-primary', 'text-primary-dark');
                btn.classList.add('border-transparent', 'text-slate-400');
            }
        });

        // Contents state
        const contents = document.querySelectorAll('.modal-tab-content');
        contents.forEach(content => {
            if (content.id === 'tab-' + tabName) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        });
    };

    window.toggleItineraryStep = (index) => {
        const content = document.getElementById('itin-content-' + index);
        const arrow = document.getElementById('itin-arrow-' + index);

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            arrow.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            arrow.classList.remove('rotate-180');
        }
    };

    window.handleInquirySubmit = (e) => {
        e.preventDefault();
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const originalHtml = submitBtn.innerHTML;

        // Show loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <span>Processing Inquiry...</span>
    `;

        // Simulate API request delay
        setTimeout(() => {
            document.getElementById('inquiry-form').classList.add('hidden');
            document.getElementById('inquiry-success').classList.remove('hidden');
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalHtml;
        }, 1200);
    };

    // ----------------------------------------
    // 9. B2B PORTAL ACTION
    // ----------------------------------------
    window.openB2BModal = () => {
        const modal = document.getElementById('b2b-modal');
        modal.classList.remove('opacity-0', 'pointer-events-none');
        modal.firstElementChild.classList.remove('scale-95');
        modal.firstElementChild.classList.add('scale-100');

        // Reset B2B form view
        document.getElementById('b2b-form-container').classList.remove('hidden');
        document.getElementById('b2b-success').classList.add('hidden');
    };

    window.closeB2BModal = () => {
        const modal = document.getElementById('b2b-modal');
        modal.classList.add('opacity-0', 'pointer-events-none');
        modal.firstElementChild.classList.add('scale-95');
        modal.firstElementChild.classList.remove('scale-100');
    };

    window.handleB2BSubmit = (e) => {
        e.preventDefault();
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;

        submitBtn.disabled = true;
        submitBtn.textContent = 'Submitting Agency File...';

        setTimeout(() => {
            document.getElementById('b2b-form-container').classList.add('hidden');
            document.getElementById('b2b-success').classList.remove('hidden');
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }, 1200);
    };
</script>

<?php
// Include Footer Layout
include __DIR__ . '/layouts/footer.php';
?>