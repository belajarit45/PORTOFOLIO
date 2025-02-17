<?php
    $nama = "Nama Anda";
    $profesi = "Profesi Anda";
    $email = "email@example.com";
    $linkedin = "https://linkedin.com/in/username";
    $telepon = "+62 812 3456 7890";

    $keahlian = ["Web Development", "UI/UX Design", "JavaScript", "PHP"];
    $projects = [
        ["judul" => "Proyek 1", "deskripsi" => "Deskripsi singkat proyek 1.", "gambar" => "images/project1.jpg"],
        ["judul" => "Proyek 2", "deskripsi" => "Deskripsi singkat proyek 2.", "gambar" => "images/project2.jpg"],
        ["judul" => "Proyek 3", "deskripsi" => "Deskripsi singkat proyek 3.", "gambar" => "images/project3.jpg"]
    ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio <?php echo $nama; ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; }
        nav { background-color: #333; color: #fff; padding: 1rem; text-align: center; }
        nav ul { list-style: none; padding: 0; }
        nav ul li { display: inline; margin: 0 20px; }
        nav ul li a { color: white; text-decoration: none; font-size: 1.2rem; }
        nav ul li a:hover { text-decoration: underline; }
        header { background-color: #333; color: #fff; text-align: center; padding: 50px 20px; }
        header h1 { font-size: 3rem; margin: 0; }
        header p { font-size: 1.5rem; }
        .section { width: 80%; margin: 2rem auto; background-color: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); }
        .section h2 { font-size: 2rem; color: #333; }
        .projects { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; }
        .project-card { background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); }
        .project-card img { width: 100%; height: auto; border-radius: 8px; }
        .project-card h3 { font-size: 1.5rem; margin-top: 10px; }
        footer { text-align: center; padding: 1rem; background-color: #333; color: #fff; position: fixed; width: 100%; bottom: 0; }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="#home">Beranda</a></li>
            <li><a href="#about">Tentang Saya</a></li>
            <li><a href="#skills">Keahlian</a></li>
            <li><a href="#projects">Portofolio</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </nav>

    <!-- Halaman Utama / Beranda -->
    <section id="home">
        <header>
            <h1>Selamat Datang di Website Portofolio</h1>
            <p>Saya <?php echo $nama; ?>, seorang <?php echo $profesi; ?></p>
        </header>
    </section>

    <!-- Tentang Saya -->
    <section id="about" class="section">
        <h2>Tentang Saya</h2>
        <p>Saya adalah seorang <?php echo $profesi; ?> dengan pengalaman lebih dari X tahun di industri ini. Keahlian saya meliputi pengembangan web, desain UI/UX, dan banyak lagi.</p>
    </section>

    <!-- Keahlian -->
    <section id="skills" class="section">
        <h2>Keahlian</h2>
        <ul>
            <?php foreach ($keahlian as $skill) : ?>
                <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Portofolio -->
    <section id="projects" class="section">
        <h2>Portofolio Saya</h2>
        <div class="projects">
            <?php foreach ($projects as $project) : ?>
                <div class="project-card">
                    <img src="<?php echo $project['gambar']; ?>" alt="<?php echo $project['judul']; ?>">
                    <h3><?php echo $project['judul']; ?></h3>
                    <p><?php echo $project['deskripsi']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Kontak -->
    <section id="contact" class="section">
        <h2>Kontak</h2>
        <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        <p>LinkedIn: <a href="<?php echo $linkedin; ?>" target="_blank"><?php echo $linkedin; ?></a></p>
        <p>Telepon: <?php echo $telepon; ?></p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 <?php echo $nama; ?>. All Rights Reserved.</p>
    </footer>

</body>
</html>
