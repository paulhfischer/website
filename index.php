<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    >

    <link
        rel="stylesheet"
        type="text/css"
        href="styles/style.min.css"
    >

    <title>Paul Fischer</title>
</head>

<body>
    <main>
        <div class="photo shadow">
            <img
                src="images/photo.jpg"
                alt="Paul Fischer"
            >
        </div>
        <div class="text">
            <h1>Paul Fischer</h1>

            <p>
                Medical Student at <a
                    target="_blank"
                    rel="noopener noreferrer"
                    href="https://www.uni-wuerzburg.de/startseite/"
                >Julius-Maximilians-Universität of Würzburg</a> | Located in <a
                    target="_blank"
                    rel="noopener noreferrer"
                    href="https://www.google.com/maps/place/97082+Würzburg/"
                >Würzburg</a> | <?= new DateTimeImmutable('2000-01-03')->diff(
                    new DateTimeImmutable('today', new DateTimeZone('Europe/Berlin')),
                )->y ?> years old
            </p>

            <div class="links">
                <div>
                    <a
                        class="twitter"
                        href="https://twitter.com/paulhfischer/"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img src="images/icons/twitter.svg" alt="" aria-hidden="true">Twitter
                    </a>
                </div>
                <div>
                    <a
                        class="instagram"
                        href="https://www.instagram.com/paulhfischer/"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img src="images/icons/instagram.svg" alt="" aria-hidden="true">Instagram
                    </a>
                </div>
                <div>
                    <a
                        class="linkedin"
                        href="https://www.linkedin.com/in/paulhfischer/"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img src="images/icons/linkedin.svg" alt="" aria-hidden="true">LinkedIn
                    </a>
                </div>
                <div>
                    <a
                        class="github"
                        href="https://github.com/paulhfischer/"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <img src="images/icons/github.svg" alt="" aria-hidden="true">GitHub
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
