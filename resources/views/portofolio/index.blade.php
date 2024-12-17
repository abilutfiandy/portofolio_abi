<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Portofolio Abi-Lutfiandy-Hendri</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- bootsrtap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- end --}}

    <link rel="stylesheet" href="css/style.css">

</head>

<body id="home">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Abi Lutfiandy Hendri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End navbar --}}

    {{-- Jumbotron --}}
    <section class="header mb-70">
        <div class="container">
            <div class="jumbotron">

                <div class="row justify-content-between align-items-center mb-5">
                    <div class="col-md-6">
                        <img src="img/foto.png" alt="Gambar" width="300" class=" img-thumbnail"
                            style="object-fit: cover; box-shadow: 0 4px 6px rgb(0,0,0,0.2);border-radius: 50%/10%">
                    </div>

                    <div class="col-md-6">
                        <span style="text-decoration: underline;text-underline-offset: 8px; font-size: 22px;">Abi
                            Lutfiandy Hendri, A.Md.Kom</span>
                        <p class="lead">Frontend Developer|Backendveloper</p>
                        <p style="text-align: justify">
                            I am a Junior Web Developer with deep interest in web development, from Frontend to Backend.
                            Armed with skills in HTML, CSS, JavaScript, PHP, Laravel, and strong problem-solving
                            abilities, I am ready to help build responsive, functional, and user-friendly websites.
                            Let's work together to turn your ideas into real digital solutions
                        </p>
                        <a href="" class="btn btn-warning" style="border-radius: 2em">
                            <font style="color: white">Contact Me</font>
                        </a>
                        <a href="{{ asset('cv/cv-abi.pdf') }}" target="_blank" class="btn btn-custom-button">Download
                            CV</a>

                        <div class="col mt-5">
                            <a href="https://github.com/abilutfiandy" target="_blank" class="btn btn-dark me-5"
                                style="border-radius: 2em"><i class="bi bi-github" style="color: white"></i></a>
                            <a href="https://www.instagram.com/ltfndyabi_/?next=%2F" target="_blank"
                                class="btn btn-light me-5" style="border-radius: 2em"><i class="bi bi-instagram"
                                    style="color: rgb(243, 14, 14)"></i></a>
                            <a href="https://www.linkedin.com/in/abi-lutfiandy-hendri-b57886327/" target="_blank"
                                class="btn btn-primary me-5" style="border-radius: 2em"><i
                                    class="bi bi-linkedin"></i></a>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    {{-- End Jumbotron --}}

    {{-- About Me --}}
    <section class="about-section" id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3>About me</h3>
                </div>
            </div>

            <div class="row justify-content-between fs-5" style="text-align: center">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <h4 style="text-align: center;color: #A0522D">Self Introduction</h4>
                        <div class="card-body">
                            <p class="card-text">As a graduate of the Padang State Polytechnic. Informatics Management
                                Study Program, I have
                                great interest in the IT field, especially in information systems development and
                                programming.
                                I have a strong understanding of basic programming and am experienced in
                                web development. I am skilled in using programming languages ​​such as HTML, CSS, PHP,
                                SQL, and familiar with the Laravel framework.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card text-center">
                        <h4 style="color: #A0522D">My Skills</h4>
                        <div class="card-body">
                            <p class="card-text">HTML</p>
                            <p class="card-text">CSS</p>
                            <p class="card-text">JAVASCRIPT</p>
                            <p class="card-text">PHP</p>
                            <p class="card-text">LARAVEL</p>
                            {{-- <p class="card-text">LARAVEL</p> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- End About me --}}

    {{-- project --}}
    <section id="project">
        <div class="container">
            <div class="row text-center mb-4 p-3">
                <div class="col">
                    <h2>My Project</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/c1.jpg" class="card-img-top" alt="kamera">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/c2.jpg" class="card-img-top" alt="kamera">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/c3.jpg" class="card-img-top" alt="kamera">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,256L288,192L576,256L864,256L1152,288L1440,96L1440,320L1152,320L864,320L576,320L288,320L0,320Z">
            </path>
        </svg> --}}
    </section>
    {{-- End Projects --}}

    {{-- Contact --}}
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">

                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label">
                                message</label>
                            <textarea id="pesan" rows="5" class="form-control"></textarea>

                        </div>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- End Contact --}}

    {{-- footer --}}
    <footer class=" text-black text-center mt-5">
        <p>Created With <i class="bi bi-heart-fill text-danger"></i> by <a href=""
                class="text-black fw-bold">Abi
                Lutfiandy Hendri</a></p>
    </footer>
    {{-- End Footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
