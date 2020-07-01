<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    >

    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="images/favicon.ico"
    >
    <link
        rel="stylesheet"
        type="text/css"
        href="styles/style.min.css"
    >

    <script
        data-search-pseudo-elements
        type="text/javascript"
        src="scripts/fontawesome.min.js"
    ></script>

    <title>Paul Fischer</title>
</head>

<body>
    <main>
        <div class="photo shadow">
            <img
                src="images/photo.jpg"
                alt="photo"
            >
        </div>
        <div class="text">
            <h1>Paul Fischer</h1>

            <p>
                Student (BSc Mathematics at
                <a
                    target="_blank"
                    href="https://www.tum.de/"
                >
                    TU Munich
                </a>
                ) | Located in
                <a
                    target="_blank"
                    href="https://www.google.com/maps/place/85748+Garching/"
                >
                    Garching
                </a>
                | <?php echo date_diff(date_create('2000-01-03'), date_create('today'))->y; ?> years
                old
            </p>

            <div class="links">
                <div>
                    <a
                        class="twitter"
                        href="https://twitter.com/paulhfischer/"
                        target="_blank"
                    >
                        <i class="fab fa-twitter"></i>Twitter
                    </a>
                </div>
                <div>
                    <a
                        class="instagram"
                        href="https://www.instagram.com/paulhfischer/"
                        target="_blank"
                    >
                        <i class="fab fa-instagram"></i>Instagram
                    </a>
                </div>
                <div>
                    <a
                        class="linkedin"
                        href="https://www.linkedin.com/in/paulhfischer/"
                        target="_blank"
                    >
                        <i class="fab fa-linkedin"></i>LinkedIn
                    </a>
                </div>
                <div>
                    <a
                        class="github"
                        href="https://github.com/paulhfischer/"
                        target="_blank"
                    >
                        <i class="fab fa-github"></i>GitHub
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
