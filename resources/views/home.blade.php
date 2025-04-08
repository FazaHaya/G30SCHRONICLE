@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>G30S Chronicles</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">G30S <br><span>Chronicles.®</span></div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#history">History</a></li>
            <li><a href="#quiz">Quiz</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="#" class="btn-ai">Ask Ai</a>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-text">
            <h1>G30S PKI<br>The Event That<br>Shaped Indonesia's <br>History.</h1>
            <p>Spanty is an international estate company that offers <br> services like property appraisal as well as the sale, <br> purchase, and investment of real estate.</p><br>
            <a href="#" class="btn">Know More</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero-g30s.jpg') }}" alt="Monumen Pahlawan Revolusi">
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="info-row">
            <div class="info-column">
                <div class="info-box">
                    <h2>6</h2>
                    <p>High General Killed</p>
                </div>
                <div class="info-box">
                    <h2>20 years</h2>
                    <p>covering Indonesia for a long time</p>
                </div>
            </div>

            <div class="info-column">
                <div class="info-box">
                    <h2>30 Sep 1965</h2>
                    <p>Total Net Profit Every Month</p>
                </div>
                <div class="info-box">
                    <h2>30K-100K</h2>
                    <p>Victim in this incident</p>
                </div>
            </div>

            <div class="info-description">
                <h2>What happened on<br>that dark night?</h2>
                <p>We provide equity and debt capital globally to back projects that make an impact.</p>
                <a href="#" class="btn-dark">Know More</a>
            </div>
        </div>
    </section>

    <!-- Video -->
    <div class="video-section">
        <div class="video-wrapper">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Gw8lKXJKomo?si=GGuSZ2Kv4thkJnMP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

    <!-- History Section -->
    @php
        $tokoh = [
            ['nama' => 'Pierre Tendean', 'slug' => 'pierre-tendean', 'gambar' => 'pierre1.jpg' ],
            ['nama' => 'Ahmad Yani', 'slug' => 'ahmad-yani', 'gambar' => 'ahmad_yani.jpg'],
            ['nama' => 'Di Panjaitan', 'slug' => 'di-panjaitan', 'gambar' => 'di-panjaitan.jpg'],
            ['nama' => 'Mt Haryono', 'slug' => 'mt-haryono', 'gambar' => 'mt-haryono.jpg'],
            ['nama' => 'Jenderal S Parman', 'slug' => 's-parman', 'gambar' => 's-parman.jpg'],
        ];
    @endphp

    <div id="history" class="history-container">
        <div class="history-intro">
            <h2>The History</h2>
            <a href="#" class="more-link">More →</a>
        </div>

        <div class="history-section">
            <div class="history-grid">
                @foreach($tokoh as $item)
                    <a href="{{ route('kisah.show', $item['slug']) }}" class="history-card">
                        <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['nama'] }}">
                        <h3>{{ 'Kisah ' . $item['nama'] }}</h3>
                        <p>20 September 1965</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Quiz Section -->
    <section id="quiz" class="quiz-section">
        <div class="quiz-wrapper">
            <div class="quiz-left">
                <h2>Quiz Time!</h2>
                <p>Uji pengetahuanmu tentang G30S/PKI, dan lihat seberapa dalam kamu mengenal sejarah bangsa kita!</p>
                <a href="{{ route('quiz') }}" class="btn-start">Start</a>
            </div>
            <div class="quiz-right">
                <img src="{{ asset('images/kuis.jpg') }}" alt="Quiz G30S" class="quiz-img">
            </div>
        </div>
    </section>

    <!-- Qoute Section -->
    <section id="contact" class="quote-section">
        <div class="quote-wrapper">
          <div class="quote-image">
            <img src="{{ asset('images/soekarno.jpg') }}" alt="Ir. Soekarno">
          </div>
          <div class="quote-text">
            <div class="quote-symbol">“</div>
            <h3 class="quote-content">
              Sejarah adalah cermin bagi bangsa.<br>
              Tidak ada bangsa yang bisa maju<br>
              tanpa mengenal sejarahnya.
            </h3>
            <p class="quote-author">Ir. Soekarno</p>
          </div>
        </div>
      </section>
      
      <!-- Contact Section -->
      <section class="contact-section">
        <div class="contact-wrapper">
            <div class="contact-left">
                <h2>We’d love to <br>hear from you</h2>
                <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</p>
                <div class="contact-info">
                    <h4>GET IN TOUCH</h4>
                    <p>2118 Thornridge Cir.<br> Syracuse,<br> Connecticut 35624</p>
                    <p>(208) 555-0112</p>
                </div>
                <div class="social-links">
                    <a href="#">INSTAGRAM</a>
                    <a href="#">FACEBOOK</a>
                    <a href="#">TWITTER</a>
                </div>
            </div>
            <div class="contact-right">
                <h2>Contact us</h2>
                <form>
                    <div class="form-row">
                        <input type="text" placeholder="First name">
                        <input type="text" placeholder="Last name">
                    </div>
                    <div class="form-row">
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="Phone Number">
                    </div>
                    <textarea placeholder="Message"></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    
    
</body>
</html>
@endsection

