<!-- resources/views/special.blade.php -->

<x-master title="Zineb is the best">
    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            color: #fff;
        }
        .navbar, .footer {
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
        }
        .navbar .nav-link, .navbar .navbar-brand, .footer {
            color: #fff;
        }
        .navbar .nav-link:hover, .navbar .navbar-brand:hover, .footer a:hover {
            color: #ffd1dc;
        }
        .container {
            padding: 2rem;
        }
        .emoji, .flower {
            font-size: 2em;
        }
        .flowers {
            margin-top: 1em;
        }
        .nav-logo img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }
        .big-images, .new-images {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
        .big-images.visible, .new-images.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .big-images img, .new-images img {
            width: 100%;
            max-width: 600px;
            margin: 1em 0;
        }
        .sliding-images {
        display: flex;
        justify-content: space-between;
        overflow: hidden;
        margin-top: 3em;
        }

        .sliding-images img {
            max-width: 30%;
            transition: transform 0.5s ease-in-out;
        }

        .after-scroll-image {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        margin-top: 3em; /* Adjust spacing */
        }

        .after-scroll-image.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .after-scroll-image img {
            max-width: 100%; /* Adjust width as needed */
        }
        
    </style>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-logo mr-5">
                        <a class="nav-link" href="#">
                            <img src="{{ asset('storage/background-image/logo.jpg') }}" alt="Your Logo" class="img-fluid nav-logo">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mr-4" aria-current="page" href="" style="font-size: 25px;">Zineb's website</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </nav>

    <div class="container text-center">
        <h1>Made with ❤️ to the prettiest girl alive</h1>
        <p>Here's a little something to show how much you mean to me.</p>
        <div class="emoji">🌹 🌷 🌼 🌸 🌻</div>
        
        <br><br><br>
        <h1>These hands should be attached to each other forever</h1>
        <br><br><br>
        <div class="big-images">
            <img src="{{ asset('storage/background-image/myHand.png') }}" alt="Big Image 1">
            <img src="{{ asset('storage/background-image/herHand.png') }}" alt="Big Image 2">
        </div>

        <div class="flowers d-flex justify-content-center mt-3">
            <div class="flower mx-2">🌹</div>
            <div class="flower mx-2">🌷</div>
            <div class="flower mx-2">🌼</div>
            <div class="flower mx-2">🌸</div>
            <div class="flower mx-2">🌻</div>
        </div>
        
        <br><br><br>
        <h1>The one on the left craves the woman on the left in every way possible</h1>
        <br><br><br>
        <div class="new-images">
            <img src="{{ asset('storage/background-image/myFace.png') }}" alt="My Face">
            <img src="{{ asset('storage/background-image/herFace.png') }}" alt="Her Face">
        </div>
        <br><br><br>
        <h1>Here is one little small thing that i want to give you...</h1>
        <br><br><br>
        <div class="sliding-images">
            <img src="{{ asset('storage/background-image/rose1.png.webp') }}" alt="Image 1">
            <img src="{{ asset('storage/background-image/rose2.jpg') }}" alt="Image 2">
            <img src="{{ asset('storage/background-image/rose3.jpg') }}" alt="Image 3">
        </div>
        <br><br><br>
        <h1>You deserve this, even more..</h1>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <h1>Just know that you always have this person by your side</h1>
        <br><br><br>
        <div class="after-scroll-image">
            <img src="{{ asset('storage/background-image/me.png') }}" alt="After Scroll Image">
        </div>
        <br><br><br>
        <h1>He will look out for you..</h1>
        <br><br><br>
        <br><br><br>
        <h1>And make you happy everyday you live</h1>
        <br><br><br>
        <br><br><br>
        <h2>And he will get you no matter what🤫</h2>
        <br><br><br>
        
    </div>

    <footer class="footer text-center py-3">
        <p>❤️</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const bigImages = document.querySelector('.big-images');
            const newImages = document.querySelector('.new-images');
            const slidingImages = document.querySelector('.sliding-images');
    
            const observerOptions = {
                threshold: 0.1
            };
    
            const slidingImagesObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const images = entry.target.querySelectorAll('img');
                        images.forEach((image, index) => {
                            setTimeout(() => {
                                image.style.transform = 'translateX(0)';
                            }, index * 200);
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
    
            slidingImagesObserver.observe(slidingImages);
    
            const bigImagesObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
    
            bigImagesObserver.observe(bigImages);
    
            const newImagesObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
    
            newImagesObserver.observe(newImages);
    
            const afterScrollImage = document.querySelector('.after-scroll-image');
    
            const afterScrollImageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
    
            afterScrollImageObserver.observe(afterScrollImage);
        });
    </script>
    
</x-master>
