<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Welcome | Portofolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Navbar */
        header {
            background-color: #0083b0;
            color: #fff;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
            overflow: hidden;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Hero Section */
        #home {
            background: linear-gradient(to right, #00b4db, #0083b0);
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        #home h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 20px;
        }

        /* Sections */
        section {
            padding: 80px 0;
        }

        #tentang, #portofolio, #kontak {
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #0083b0;
        }

        /* Portofolio */
        .portofolio-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .portofolio-item {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        /* Kontak */
        form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        form input, form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        form button {
            background-color: #0083b0;
            color: white;
            padding: 15px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #00b4db;
        }

        /* Footer */
        footer {
            background: #0083b0;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <header>
        <div class="container">
            <nav>
                <h1>Portofolio</h1>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#portofolio">Portofolio</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero / Welcome -->
    <section id="home">
        <div class="container">
            <h1>Selamat Datang!</h1>
            <p>Ini adalah halaman portofolio saya. Silakan jelajahi!</p>
        </div>
    </section>

    <!-- Tentang -->
    <section id="tentang">
        <div class="container">
            <h2>Tentang Saya</h2>
            <p style="text-align:center;">Saya adalah seorang web developer yang suka membangun aplikasi modern dan responsive. Saya berpengalaman dalam HTML, CSS, JavaScript, dan framework modern lainnya.</p>
        </div>
    </section>

    <!-- Portofolio -->
    <section id="portofolio">
        <div class="container">
            <h2>Portofolio</h2>
            <div class="portofolio-list">
                <div class="portofolio-item">
                    <h3>instainstagram</h3>
                    <a href="https://instagram.com/m.hanxds" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" width="30" height="30">
</a>

                </div>
                <div class="portofolio-item">
                    <h3>Proyek 2</h3>
                    <p>Deskripsi singkat proyek 2.</p>
                </div>
                <div class="portofolio-item">
                    <h3>Proyek 3</h3>
                    <p>Deskripsi singkat proyek 3.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak">
        <div class="container">
            <h2>Kontak Saya</h2>
            <form>
                <input type="text" placeholder="Nama Anda" required>
                <input type="email" placeholder="Email Anda" required>
                <textarea rows="5" placeholder="Pesan Anda" required></textarea>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Nama Anda. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
