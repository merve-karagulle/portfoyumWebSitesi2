<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Merve Karagülle | Kişisel Portföy</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    /* Reset */
    *, *::before, *::after {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background: #fefdf9;
      color: #333;
      scroll-behavior: smooth;
      overflow-x: hidden;
    }

    /* Container */
    .container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 50px 20px;
    }

    /* HEADER */
    header {
      background: #ffb87c;
      padding: 20px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 20px rgba(255, 135, 44, 0.3);
      user-select: none;
    }
    .header-container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    /* Yeni logo düzeni */
    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
      cursor: default;
      user-select: none;
    }

    .logo-icon {
      background: #f59e0b; /* canlı pastel turuncu */
      color: white;
      font-weight: 900;
      font-size: 1.5rem;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 4px 14px rgba(245, 158, 11, 0.6);
      font-family: 'Poppins', sans-serif;
      letter-spacing: 0.04em;
    }

    .logo-text {
      font-weight: 700;
      font-size: 1.2rem;
      color: #663300;
      letter-spacing: 1.3px;
    }

    /* NAV BUTTONS */
    nav {
      display: flex;
      gap: 20px;
    }
    nav button {
      background: rgba(255, 183, 124, 0.7);
      border: none;
      padding: 12px 28px;
      border-radius: 35px;
      font-weight: 600;
      font-size: 1.15rem;
      color: #663300;
      cursor: pointer;
      box-shadow: 0 0 0 transparent;
      transition: all 0.3s ease;
      user-select: none;
      font-family: 'Poppins', sans-serif;
      letter-spacing: 0.7px;
    }
    nav button:hover,
    nav button:focus {
      background: #ff9a3d;
      color: white;
      box-shadow: 0 6px 18px rgba(255,154,61,0.7);
      transform: scale(1.1);
      outline: none;
    }
    nav button:active {
      transform: scale(1);
    }

    /* SECTIONS */
    section {
      background: white;
      border-radius: 20px;
      margin: 40px 0;
      padding: 50px 40px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.07);
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s ease, transform 0.8s ease;
      will-change: opacity, transform;
      display: none; /* Başlangıçta görünmez */
    }
    section.active {
      opacity: 1;
      transform: translateY(0);
      display: block; /* Aktif bölüm görünür */
    }

    /* HERO */
    #hero {
      background: #fff5e6;
      color: #b37f00;
      text-align: center;
      box-shadow: 0 12px 30px rgba(179,127,0,0.18);
      user-select: text;
    }
    #hero h1 {
      font-size: 4rem;
      font-weight: 900;
      margin-bottom: 12px;
      letter-spacing: 2px;
      text-shadow: 2px 2px 6px #fff1a8;
    }
    #hero .subtitle {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 30px;
      color: #a67c00;
      text-shadow: 1px 1px 4px #fff6a5;
    }
    #hero p {
      font-size: 1.25rem;
      max-width: 720px;
      margin: 0 auto 40px auto;
      color: #705c00;
      line-height: 1.65;
      font-weight: 500;
      letter-spacing: 0.3px;
    }
    #hero .btn-primary {
      background: #f5a623;
      color: white;
      padding: 18px 56px;
      border-radius: 40px;
      font-size: 1.3rem;
      font-weight: 700;
      box-shadow: 0 6px 22px rgba(245,166,35,0.42);
      transition: all 0.3s ease;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
      letter-spacing: 1.2px;
      user-select: none;
    }
    #hero .btn-primary:hover {
      background: #d4820b;
      box-shadow: 0 8px 28px rgba(212,130,11,0.65);
      transform: scale(1.1);
    }

    /* HAKKIMDA */
    #hakkimda {
      background: #c9e4ca;
      color: #264d26;
      user-select: text;
      font-weight: 600;
      letter-spacing: 0.2px;
      line-height: 1.7;
      font-size: 1.15rem;
      max-width: 850px;
      margin-left: auto;
      margin-right: auto;
    }

    /* PROJELERIM */
    #projelerim {
      background: #ffe8d6;
      color: #7a4f01;
      user-select: none;
    }
    .projects-list {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(300px,1fr));
      gap: 28px;
      max-width: 1000px;
      margin: 0 auto;
    }
    .project-item {
      background: #fff8f0;
      border-radius: 18px;
      padding: 28px 24px;
      box-shadow: 0 6px 18px rgba(255, 190, 120, 0.4);
      transition: box-shadow 0.35s ease, transform 0.35s ease;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .project-item:hover {
      box-shadow: 0 14px 38px rgba(255, 168, 50, 0.6);
      transform: translateY(-7px);
    }

    /* Dikkat çekici proje başlıkları */
    .project-title {
      font-size: 1.5rem;
      font-weight: 800;
      margin-bottom: 14px;
      color: #d97706; /* Pastel turuncu */
      cursor: pointer;
      user-select: text;
      text-decoration: none;
      transition: color 0.3s ease, text-decoration-color 0.3s ease;
      text-underline-offset: 6px;
      text-decoration-thickness: 2.5px;
      text-decoration-color: transparent;
      text-shadow: 1px 1px 2px rgba(217, 119, 6, 0.3);
    }
    .project-title:hover {
      color: #f59e0b; /* Daha parlak turuncu */
      text-decoration-color: #f59e0b;
    }

    .project-desc {
      flex-grow: 1;
      font-size: 1.05rem;
      color: #5a3e00;
      margin-bottom: 22px;
      user-select: text;
    }
    .project-link {
      font-weight: 700;
      color: #e07b00;
      text-decoration: none;
      border: 2px solid #e07b00;
      padding: 10px 18px;
      border-radius: 28px;
      text-align: center;
      transition: background-color 0.3s ease, color 0.3s ease;
      user-select: none;
      box-shadow: 0 2px 8px rgba(224, 123, 0, 0.3);
    }
    .project-link:hover {
      background-color: #e07b00;
      color: #fff;
      box-shadow: 0 10px 25px rgba(224, 123, 0, 0.75);
    }
/* BLOG */
#blog {
  background: #c9e4ca;
      color: #7a4f01;
      user-select: none;
}

.blog-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 28px;
  padding: 0 20px;
}

.blog-post {
  background: #f0fbf4; /* Beyaza yakın, açık yeşil ton */
  border-radius: 18px; /* Projelerdeki gibi hafif yuvarlatılmış */
  padding: 28px 24px;
  box-shadow: 0 6px 18px rgba(42, 93, 60, 0.15);
  transition: box-shadow 0.35s ease, transform 0.35s ease;
  cursor: default;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.blog-post:hover {
  box-shadow: 0 14px 38px rgba(42, 93, 60, 0.35);
  transform: translateY(-7px);
}

.blog-post-title {
  font-weight: 800;
  font-size: 1.5rem;
  margin-bottom: 14px;
  color: #246b30; /* Daha koyu yeşil */
  user-select: text;
  cursor: pointer;
  text-decoration: none;
  transition: color 0.3s ease, text-decoration-color 0.3s ease;
  text-underline-offset: 6px;
  text-decoration-thickness: 2.5px;
  text-decoration-color: transparent;
  text-shadow: 1px 1px 2px rgba(36, 107, 48, 0.3);
}

.blog-post-title:hover {
  color: #34a853; /* Daha parlak yeşil */
  text-decoration-color: #34a853;
}

.blog-post-excerpt {
  flex-grow: 1;
  font-size: 1.1rem;
  color: #3a6f3b;
  margin-bottom: 22px;
  user-select: text;
}

.blog-post-date {
  font-size: 0.9rem;
  color: #4f7e62;
  font-style: italic;
  text-align: right;
  user-select: none;
}


.blog-read-more {
  font-weight: 700;
  color: #2a5d3c;
  text-decoration: none;
  border: 2px solid #2a5d3c;
  padding: 10px 18px;
  border-radius: 28px;
  text-align: center;
  transition: background-color 0.3s ease, color 0.3s ease;
  user-select: none;
  box-shadow: 0 2px 8px rgba(42, 93, 60, 0.3);
  display: inline-block;
  cursor: pointer;
}

.blog-read-more:hover {
  background-color: #2a5d3c;
  color: #fff;
  box-shadow: 0 10px 25px rgba(42, 93, 60, 0.75);
}



    /* İLETİŞİM */
    #iletisim {
      background:#ffe8d6;
      color: #7a5d00;
      user-select: text;
    }
    form.contact-form {
      max-width: 620px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 24px;
    }
    form.contact-form label {
      font-weight: 700;
      color: #a67c00;
      font-size: 1.15rem;
      user-select: none;
    }
    form.contact-form input,
    form.contact-form textarea {
      padding: 15px 20px;
      font-size: 1.05rem;
      border-radius: 12px;
      border: 2px solid #f5d87e;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      font-family: 'Poppins', sans-serif;
      resize: vertical;
      color: #5a4b0d;
    }
    form.contact-form input:focus,
    form.contact-form textarea:focus {
      border-color: #f5a623;
      box-shadow: 0 0 14px rgba(245,166,35,0.5);
      outline: none;
    }
form.contact-form button {
  background: #f9a825; /* Açık turuncu */
  color: #3e2e00;      /* Buton üzerindeki yazı rengi */
  font-weight: 700;
  font-size: 1.2rem;
  border: none;
  border-radius: 36px;
  padding: 16px 0;
  cursor: pointer;
  box-shadow: 0 8px 22px rgba(249,168,37,0.55); /* Turuncu tonunda gölge */
  transition: background-color 0.3s ease, transform 0.3s ease;
  user-select: none;
}
form.contact-form button:hover {
  background: #c17900; /* Koyu turuncu */
  color: #fff;
  transform: scale(1.08);
  box-shadow: 0 14px 32px rgba(193,121,0,0.8);
}


    /* FOOTER */
    footer {
      background: #a7d29c;
      color: #3e5c30;
      text-align: center;
      padding: 20px 10px;
      font-weight: 600;
      user-select: none;
      letter-spacing: 0.6px;
      box-shadow: 0 -4px 18px rgba(167, 210, 156, 0.7);
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
      #hero h1 {
        font-size: 3rem;
      }
      #hero .subtitle {
        font-size: 1.4rem;
      }
      section {
        padding: 40px 25px;
        margin: 35px 0;
      }
      nav button {
        padding: 10px 22px;
        font-size: 1.05rem;
      }
      form.contact-form {
        width: 100%;
      }
      .projects-list {
        grid-template-columns: 1fr;
      }
      .blog-list {
        grid-template-columns: 1fr;
        padding: 0 10px;
      }
    }

    /* Mobil Menü için ekleme */
    @media (max-width: 600px) {
      .header-container {
        flex-direction: column;
        gap: 12px;
      }
      nav {
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
      }
      nav button {
        padding: 10px 16px;
        font-size: 1rem;
        border-radius: 28px;
      }
      .container {
        padding: 30px 15px;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="header-container">
    <div class="logo" aria-label="Site logosu">
      <div class="logo-icon" aria-hidden="true">MK</div>
      <div class="logo-text">Merve Karagülle</div>
    </div>
    <nav role="navigation" aria-label="Ana menü">
      <button data-target="hero" class="nav-btn active" aria-current="page">Anasayfa</button>
      <button data-target="hakkimda" class="nav-btn">Hakkımda</button>
      <button data-target="projelerim" class="nav-btn">Projelerim</button>
      <button data-target="blog" class="nav-btn">Blog</button>
      <button data-target="iletisim" class="nav-btn">İletişim</button>
    </nav>
  </div>
</header>

<section id="hero" class="active">
  <div class="container">
    <h1>Merve Karagülle</h1>
    <p class="subtitle">Embedded Systems & Web Developer</p>
    <p>
      Gömülü sistemler, web geliştirme ve yapay zeka alanlarında projeler geliştiriyorum.<br />
      TÜBİTAK 2209-A projesi kapsamında toprak nemine göre çalışan akıllı sulama sistemi tasarlıyorum.
    </p>
    <a href="#projelerim" class="btn-primary">Projelerimi Gör</a>
  </div>
</section>

<section id="hakkimda">
  <div class="container">
    <h2 class="section-title">👩‍💻 Hakkımda</h2>
    <p>
      Merhaba! Ben <strong>Merve Karagülle</strong>. 🎓 Fırat Üniversitesi Yazılım Mühendisliği 2. sınıf öğrencisiyim. Yazılım geliştirme, gömülü sistemler ve yapay zeka alanlarında sürekli kendimi geliştiriyorum.
    </p>
    <p>
      💻 Java, C++, Arduino ve web teknolojileri (HTML, CSS, JavaScript, PHP) ile projeler geliştiriyorum.<br />
      📚 Öğrenmeye ve yeni teknolojilerle deneyim kazanmaya büyük önem veriyorum.
    </p>
    <p>
      🚀 TÜBİTAK 2209-A destekli <em>mobil uygulama kontrollü, yapay zeka destekli toprak sulama sistemi</em> gibi önemli projelerim bulunuyor.<br />
      📂 Kişisel portföyüm ve GitHub projelerimle teknik yeteneklerimi aktif olarak paylaşıyorum.
    </p>
    <p>
      🤝 Yeni projeler üzerinde çalışmayı ve ekip içinde iş birliği yapmayı seviyorum.<br />
      🌱 Yazılım dünyasında yenilikçi ve sürdürülebilir çözümler üretmek için çalışıyorum.
    </p>
  </div>
</section>

<section id="projelerim">
  <div class="container">
    <h2 class="section-title">🚀 Projelerim</h2>
    <div class="projects-list" role="list">
      <div class="project-item" role="listitem" tabindex="0" aria-label="Akıllı Toprak Sulama Sistemi projesi">
        <div class="project-title">Akıllı Toprak Sulama Sistemi</div>
        <div class="project-desc">
          Mobil uygulama ile kontrol edilen, nem oranına göre çalışan, yapay zeka destekli akıllı sulama sistemi.
        </div>
        <a href="https://github.com/merve-karagulle/smart-irrigation" target="_blank" class="project-link" rel="noopener noreferrer" aria-label="Akıllı Toprak Sulama Sistemi GitHub Linki">GitHub Linki</a>
      </div>

      <div class="project-item" role="listitem" tabindex="0" aria-label="Arduino Engelden Kaçan Robot projesi">
        <div class="project-title">Arduino Engelden Kaçan Robot</div>
        <div class="project-desc">
          Arduino kiti kullanarak engellerden kaçabilen basit robot uygulaması.
        </div>
        <a href="https://github.com/merve-karagulle/obstacle-avoiding-robot" target="_blank" class="project-link" rel="noopener noreferrer" aria-label="Arduino Engelden Kaçan Robot GitHub Linki">GitHub Linki</a>
      </div>

      <div class="project-item" role="listitem" tabindex="0" aria-label="C++ Kütüphane Otomasyon Sistemi projesi">
        <div class="project-title">C++ Kütüphane Otomasyon Sistemi</div>
        <div class="project-desc">
          Farklı veri setleri ekleyerek geliştirdiğim C++ tabanlı kütüphane otomasyon sistemi.
        </div>
        <a href="https://github.com/merve-karagulle/library-automation" target="_blank" class="project-link" rel="noopener noreferrer" aria-label="C++ Kütüphane Otomasyon Sistemi GitHub Linki">GitHub Linki</a>
      </div>

      <div class="project-item" role="listitem" tabindex="0" aria-label="Joystick Kontrollü Yılan Oyunu projesi">
        <div class="project-title">Joystick Kontrollü Yılan Oyunu</div>
        <div class="project-desc">
          Joystick ile kontrol edilen, basit ve eğlenceli yılan oyunu projem.
        </div>
        <a href="https://github.com/merve-karagulle/joystick-snake-game" target="_blank" class="project-link" rel="noopener noreferrer" aria-label="Joystick Kontrollü Yılan Oyunu GitHub Linki">GitHub Linki</a>
      </div>

      <div class="project-item" role="listitem" tabindex="0" aria-label="3 Doğrusal Yönde İlerleyen Robot projesi">
        <div class="project-title">3 Doğrusal Yönde İlerleyen Robot</div>
        <div class="project-desc">
          3 farklı doğrusal eksende hareket kabiliyetine sahip, tasarım ve kodlama aşamalarını gerçekleştirdiğim robot projesi.
        </div>
        <a href="https://github.com/merve-karagulle/3-axis-robot" target="_blank" class="project-link" rel="noopener noreferrer" aria-label="3 Doğrusal Yönde İlerleyen Robot GitHub Linki">GitHub Linki</a>
      </div>

      <div class="project-item" role="listitem" tabindex="0" aria-label="Kişisel Portföy Web Sitesi projesi">
        <div class="project-title">Kişisel Portföy Web Sitesi</div>
        <div class="project-desc">
          HTML, CSS, JavaScript ve PHP kullanarak oluşturduğum kişisel portföy sitem.
        </div>
        <a href="https://mervekaragulle.com" target="_blank" class="project-link" rel="noopener noreferrer" aria-label="Kişisel Portföy Web Sitesi bağlantısı">Siteyi Ziyaret Et</a>
      </div>
    </div>
  </div>
</section>

<section id="blog">
  <div class="container">
    <h2 class="section-title">📚 Blog</h2>
    <div class="blog-list">
      <div class="blog-post" data-id="1" tabindex="0" role="button" aria-label="Gömülü Sistemlere Giriş blog yazısı">
        <h3 class="blog-post-title">Gömülü Sistemlere Giriş</h3>
        <p class="blog-post-excerpt">Gömülü sistemlerin temel kavramları ve bileşenleri hakkında...</p>
        <time class="blog-post-date" datetime="2025-08-01">1 Ağustos 2025</time>
      </div>
      <div class="blog-post" data-id="2" tabindex="0" role="button" aria-label="Arduino Programlama Temelleri blog yazısı">
        <h3 class="blog-post-title">Arduino Programlama Temelleri</h3>
        <p class="blog-post-excerpt">Arduino IDE kurulumu, temel komutlar ve örnek projeler...</p>
        <time class="blog-post-date" datetime="2025-07-15">15 Temmuz 2025</time>
      </div>
      <div class="blog-post" data-id="3" tabindex="0" role="button" aria-label="Yapay Zeka ve Gömülü Sistemler blog yazısı">
        <h3 class="blog-post-title">Yapay Zeka ve Gömülü Sistemler</h3>
        <p class="blog-post-excerpt">Gömülü sistemlerde yapay zekanın kullanım alanları...</p>
        <time class="blog-post-date" datetime="2025-06-20">20 Haziran 2025</time>
      </div>
    </div>
  </div>
</section>

<!-- Blog Detay Modal -->
<div id="blogModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle" aria-describedby="modalDesc" tabindex="-1">
  <div class="modal-content">
    <button class="modal-close" aria-label="Blog detay modalını kapat">×</button>
    <h3 id="modalTitle" class="modal-title"></h3>
    <time id="modalDate" class="modal-date" datetime=""></time>
    <div id="modalDesc" class="modal-body"></div>
  </div>
</div>

<style>
  #blogModal {
    display: none;
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background-color: rgba(0,0,0,0.6);
    z-index: 9999;
    justify-content: center;
    align-items: center;
  }
  #blogModal.active {
    display: flex;
  }
  .modal-content {
    background: white;
    border-radius: 16px;
    max-width: 600px;
    width: 90%;
    max-height: 80vh;
    overflow-y: auto;
    padding: 30px 40px 40px 40px;
    box-shadow: 0 6px 30px rgba(0,0,0,0.2);
    position: relative;
  }
  .modal-close {
    position: absolute;
    top: 15px;
    right: 20px;
    background: transparent;
    border: none;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
    color: #333;
    transition: color 0.3s ease;
  }
  .modal-close:hover,
  .modal-close:focus {
    color: #f59e0b;
    outline: none;
  }
  .modal-title {
    margin-top: 0;
    margin-bottom: 12px;
    font-size: 1.8rem;
    font-weight: 700;
    color: #333;
  }
  .modal-date {
    font-size: 0.9rem;
    font-style: italic;
    color: #666;
    margin-bottom: 20px;
  }
  .modal-body {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #444;
    white-space: pre-wrap; /* Satır sonlarını korur */
  }
</style>

<script>
  // Blog içerikleri
  const blogContents = {
    1: {
      title: "Gömülü Sistemlere Giriş",
      date: "2025-08-01",
      content: `Gömülü sistemler, belirli görevleri yerine getirmek üzere tasarlanmış bilgisayar tabanlı sistemlerdir. Genellikle mikrodenetleyiciler veya mikroişlemciler kullanılarak geliştirilirler. Bu sistemler, akıllı ev cihazlarından otomotiv elektroniklerine, medikal cihazlardan robotik sistemlere kadar pek çok alanda kullanılır.

Bu yazıda gömülü sistemlerin temel kavramları, bileşenleri ve yazılım geliştirme süreçlerine değinilecektir.

Başlangıç olarak, gömülü sistemlerin donanım yapısını ve yaygın kullanılan mikrodenetleyicileri tanıyacağız...`
    },
    2: {
      title: "Arduino Programlama Temelleri",
      date: "2025-07-15",
      content: `Arduino, elektronik projeler geliştirmek için kullanılan açık kaynaklı bir platformdur. Basit bir programlama diline sahip olan Arduino, yeni başlayanlar için idealdir.

Bu yazıda, Arduino IDE kurulumu, temel komutlar, dijital ve analog giriş/çıkışların kullanımı anlatılacaktır.

Örnek olarak LED yakıp söndürme, buton okuma ve seri haberleşme örnekleri paylaşılacaktır...`
    },
    3: {
      title: "Yapay Zeka ve Gömülü Sistemler",
      date: "2025-06-20",
      content: `Yapay zeka (YZ) teknolojileri, gömülü sistemlere entegre edilerek akıllı cihazların gelişimini hızlandırmaktadır. Bu entegrasyon sayesinde cihazlar çevresel verileri analiz ederek kendi kendine karar verebilmektedir.

Bu makalede, gömülü sistemlerde kullanılan temel yapay zeka algoritmaları ve uygulama alanları incelenecektir.

Özellikle makine öğrenmesi ve derin öğrenme tekniklerinin küçük boyutlu cihazlara nasıl uyarlanabileceği örneklerle açıklanacaktır...`
    }
  };

  // Modal elemanlar
  const blogModal = document.getElementById('blogModal');
  const modalTitle = document.getElementById('modalTitle');
  const modalDate = document.getElementById('modalDate');
  const modalDesc = document.getElementById('modalDesc');
  const modalCloseBtn = document.querySelector('.modal-close');

  // ESC tuşu ile modal kapatma fonksiyonu
  function escHandler(e) {
    if (e.key === 'Escape' && blogModal.classList.contains('active')) {
      closeBlogModal();
    }
  }

  // Modal açma fonksiyonu
  function openBlogModal(id) {
    const blog = blogContents[id];
    if (!blog) return;

    modalTitle.textContent = blog.title;
    modalDate.textContent = new Date(blog.date).toLocaleDateString('tr-TR', { day: 'numeric', month: 'long', year: 'numeric' });
    modalDate.setAttribute('datetime', blog.date);
    modalDesc.textContent = blog.content;

    blogModal.classList.add('active');
    blogModal.focus();
    document.body.style.overflow = 'hidden';

    window.addEventListener('keydown', escHandler);
  }

  // Modal kapatma fonksiyonu
  function closeBlogModal() {
    blogModal.classList.remove('active');
    document.body.style.overflow = '';
    window.removeEventListener('keydown', escHandler);
  }

  // Kapatma butonu tıklama
  modalCloseBtn.addEventListener('click', closeBlogModal);

  // Modal dışına tıklayınca kapatma
  blogModal.addEventListener('click', e => {
    if (e.target === blogModal) {
      closeBlogModal();
    }
  });

  // Blog post ve butonlara tıklama
  document.querySelectorAll('.blog-post, .read-more-btn').forEach(el => {
    el.addEventListener('click', e => {
      const post = e.target.closest('.blog-post');
      if (!post) return;
      const id = post.getAttribute('data-id');
      openBlogModal(id);
    });
  });
</script>

<section id="iletisim">
  <div class="container">
    <h2 class="section-title">✉️ İletişim</h2>
    <form class="contact-form" onsubmit="return handleSubmit(event)">
      <label for="name">Adınız</label>
      <input type="text" id="name" name="name" placeholder="Adınızı yazınız" required autocomplete="name" />

      <label for="email">E-posta adresiniz</label>
      <input type="email" id="email" name="email" placeholder="E-posta adresiniz" required autocomplete="email" />

      <label for="message">Mesajınız</label>
      <textarea id="message" name="message" rows="5" placeholder="Mesajınızı yazınız" required></textarea>

      <button type="submit" aria-label="Mesaj gönder">Gönder</button>
    </form>
  </div>
</section>

<footer>
  © 2025 Merve Karagülle | Tüm hakları saklıdır.
</footer>

<script>
  // NAV BUTTONS
  const buttons = document.querySelectorAll('nav button');
  const sections = document.querySelectorAll('section');

  function setActiveSection(id) {
    sections.forEach(sec => {
      if (sec.id === id) {
        sec.classList.add('active');
        sec.setAttribute('aria-hidden', 'false');
      } else {
        sec.classList.remove('active');
        sec.setAttribute('aria-hidden', 'true');
      }
    });
  }

  // Sayfa açılır açılmaz anasayfa aktif olsun
  setActiveSection('hero');
  buttons.forEach(btn => btn.classList.remove('active'));
  document.querySelector('nav button[data-target="hero"]').classList.add('active');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const targetId = btn.getAttribute('data-target');
      setActiveSection(targetId);

      // Smooth scroll için
      document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
    });
  });

  // İLETİŞİM FORMU
  function handleSubmit(e) {
    e.preventDefault();
    alert('Mesajınız alındı! En kısa sürede dönüş yapılacaktır.');
    e.target.reset();
    return false;
  }
</script>

</body>
</html>
