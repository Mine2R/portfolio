<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    if (!$email) {
        echo "Adresse email invalide.<br>";
        exit();
    }

    $to = "m.boussamgane@gmail.com"; // Remplace par ton adresse email
    $subject = "Nouveau message de ton portfolio";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $body = "Nom: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.<br>";
    } else {
        echo "Erreur lors de l'envoi du message.<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Mina Boussamgane</title>
    <link rel="stylesheet" href="portfolio.css">

    </a>
    
</head>
<body>
    <header class="banner">
        <div class="header-content">
            <img src="photo toon me 2.jpg" alt="Photo de Mina Boussamgane" class="profile-photo">
            <div class="header-text">
                <h1>Mina Boussamgane</h1>
                <p>Développeuse Web</p>
                <nav>
                    <ul>
                        <li><a href="#about">À propos</a></li>
                        <li><a href="#projects">Projets</a></li>
                        <li><a href="#skills">Compétences</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section id="about" class="section">
            <div class="container">
                <h2>À propos de moi</h2>
                <p><b>Je suis une développeuse web passionnée, actuellement en formation Bachelor. Mon objectif est de créer des solutions innovantes, modernes et adaptées, en combinant front-end et back-end.</b></p>
            </div>
        </section>

        <section id="projects" class="section">
            <div class="container">
                <h2>Mes Projets</h2>
                <div class="project">
                    <h3>Portfolio Personnel</h3>
                    <p>La création d'un fansite</p>
                    <p><strong>Technologies :</strong> HTML, CSS, GitHub Pages</p>
                    <a href="https://github.com/Ry4s/Destiny-s-Child" target="_blank">Voir le projet</a>
                </div>
                <div class="project">
                    <h3>Validation de Mots de Passe</h3>
                    <p>Script Python pour la vérification d'un mot de passe</p>
                    <p><strong>Technologies :</strong> Python</p>
                    <a href="https://github.com/Mine2R/Password" target="_blank">Voir le projet</a>
                </div>
            </div>
        </section>

        <section id="skills" class="section">
            <div class="container">
                <h2>Mes Compétences</h2>
                <ul>
                    <li>HTML, CSS, JavaScript</li>
                    <li>Python</li>
                    <li><u>Frameworks :</u> React, Flask</li>
                    <li><u>Outils :</u> Git, GitHub, VS Code</li>
                </ul>
                <div class="contact-links">
                    <a href="mailto:m.boussamgane@gmail.com"><img src="mail.jpg" alt="Email" style="width: 40px; height: 40px;"></a><br>
                    <a href="https://www.linkedin.com/in/mina-boussamgane" target="_blank"><img src="linkedin.png" alt="LinkedIn" style="width: 40px; height: 40px;"></a><br>
                    <a href="https://github.com/Mine2R" target="_blank"><img src="github.png" alt="GitHub" style="width: 40px; height: 40px;"><br></a>
                    <a href="CV.pdf.pdf" download>Télécharger mon CV</a>
                    
                </div>
            </div>
        </section>

        <section id="contact" class="contact section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p><b>Intéressé(e) par mon profil ? N'hésitez pas à me contacter !</b></p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="formulaire">
                    <form action="portfolio.php" method="post" class="form" data-aos="fade-up" data-aos-delay="200">
                        <div class="name">
                            <label for="name-field">Votre nom/prénom</label>
                            <input type="text" name="name" id="name-field" class="form-control" required>
                        </div>
                        <div class="mail">
                            <label for="email-field">Votre mail</label>
                            <input type="email" class="form-control" name="email" id="email-field" required>
                        </div>
                        <div class="message">
                            <label for="message-field">Votre message</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field" required></textarea>
                        </div>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Mina Boussamgane. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
