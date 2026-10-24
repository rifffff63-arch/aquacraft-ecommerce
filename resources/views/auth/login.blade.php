
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Masuk | AquaCraft</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        :root {
            --navy: #073b4c;
            --teal: #087f8c;
            --cyan: #64dfdf;
            --muted: #718096;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'DM Sans', sans-serif;
            color: #183044;
            background: #f1f7f8;
        }

        a {
            text-decoration: none;
        }

        .page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 35px 20px;
            background:
                radial-gradient(circle at 8% 8%, #d8f7ef 0, transparent 30%),
                radial-gradient(circle at 92% 90%, #dceefa 0, transparent 30%),
                #f5f9fc;
        }

        .login-card {
            width: 100%;
            max-width: 1000px;
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            overflow: hidden;
            border: 1px solid #e2eaed;
            border-radius: 25px;
            background: #fff;
            box-shadow: 0 24px 70px rgba(7, 59, 76, .12);
        }

        /* PANEL KIRI */

        .visual {
            position: relative;
            display: flex;
            min-height: 610px;
            flex-direction: column;
            justify-content: space-between;
            padding: 32px;
            overflow: hidden;
            color: #fff;
            background:
                linear-gradient(
                    180deg,
                    rgba(4, 38, 55, .35),
                    rgba(4, 38, 55, .88)
                ),
                url('/images/akuarium-hero.png') center / cover no-repeat,
                linear-gradient(145deg, #073b4c, #118ab2);
        }

        .brand {
            position: relative;
            z-index: 1;
            display: inline-flex;
            align-items: center;
            width: fit-content;
            color: white;
            font-family: 'Manrope', sans-serif;
            font-size: 27px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .brand span {
            color: var(--cyan);
        }

        .visual-content {
            position: relative;
            z-index: 1;
            margin: 40px 0;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            padding: 8px 12px;
            border: 1px solid #ffffff45;
            border-radius: 30px;
            background: #ffffff15;
            color: #b9fff0;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .visual-content h1 {
            margin: 0 0 18px;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(31px, 3.5vw, 43px);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -1.5px;
        }

        .visual-content h1 span {
            color: var(--cyan);
        }

        .visual-content p {
            max-width: 340px;
            margin: 0;
            color: #e2f2f5;
            font-size: 13px;
            line-height: 1.9;
        }

        .visual-footer {
            position: relative;
            z-index: 1;
            padding-top: 20px;
            border-top: 1px solid #ffffff40;
            color: #d8eaf0;
            font-size: 11px;
            line-height: 1.8;
        }

        .visual-footer strong {
            color: #fff;
        }

        /* PANEL LOGIN */

        .form-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 45px clamp(25px, 5vw, 62px);
            background: #fff;
        }

        .form-content {
            width: 100%;
            max-width: 390px;
        }

        .form-heading {
            margin-bottom: 28px;
        }

        .form-label {
            margin-bottom: 10px;
            color: var(--teal);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.8px;
            text-transform: uppercase;
        }

        .form-heading h2 {
            margin: 0;
            color: var(--navy);
            font-family: 'Manrope', sans-serif;
            font-size: 30px;
            font-weight: 800;
            letter-spacing: -.8px;
        }

        .form-heading p {
            margin: 10px 0 0;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.8;
        }

        .status-message {
            margin-bottom: 20px;
            padding: 12px 14px;
            border: 1px solid #bce8d0;
            border-radius: 10px;
            background: #f0fbf4;
            color: #166534;
            font-size: 12px;
            line-height: 1.7;
        }

        .field {
            margin-bottom: 19px;
        }

        .field label {
            display: block;
            margin-bottom: 8px;
            color: #30495a;
            font-size: 12px;
            font-weight: 700;
        }

        .field input[type="email"],
        .field input[type="password"] {
            display: block;
            width: 100%;
            height: 49px;
            padding: 0 14px;
            border: 1px solid #dce6e9;
            border-radius: 10px;
            outline: none;
            background: #fbfdfe;
            color: #183044;
            font-family: inherit;
            font-size: 12px;
            transition: .2s ease;
        }

        .field input::placeholder {
            color: #a0afb8;
        }

        .field input:hover {
            border-color: #b8d8d8;
        }

        .field input:focus {
            border-color: var(--teal);
            background: #fff;
            box-shadow: 0 0 0 3px rgba(8, 127, 140, .10);
        }

        .field input.invalid {
            border-color: #dc6262;
        }

        .error {
            margin: 6px 0 0;
            color: #d64040;
            font-size: 11px;
            line-height: 1.6;
        }

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 20px;
        }

        .remember {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #657786;
            font-size: 12px;
            cursor: pointer;
        }

        .remember input {
            width: 15px;
            height: 15px;
            accent-color: var(--teal);
            cursor: pointer;
        }

        .forgot-link {
            color: var(--teal);
            font-size: 11px;
            font-weight: 700;
        }

        .forgot-link:hover {
            color: var(--navy);
            text-decoration: underline;
        }

        .submit-button {
            display: flex;
            width: 100%;
            min-height: 49px;
            align-items: center;
            justify-content: center;
            gap: 9px;
            margin-top: 27px;
            border: 0;
            border-radius: 10px;
            background: linear-gradient(110deg, #087f8c, #0b9998);
            box-shadow: 0 7px 16px rgba(8, 127, 140, .17);
            color: #fff;
            cursor: pointer;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            transition: .2s ease;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            background: #066975;
            box-shadow: 0 10px 22px rgba(8, 127, 140, .23);
        }

        .register-text {
            margin-top: 25px;
            padding-top: 22px;
            border-top: 1px solid #edf1f3;
            color: #718096;
            font-size: 12px;
            text-align: center;
        }

        .register-text a {
            color: var(--teal);
            font-weight: 800;
        }

        .register-text a:hover {
            color: var(--navy);
            text-decoration: underline;
        }

        .privacy-note {
            display: flex;
            gap: 9px;
            align-items: flex-start;
            margin-top: 22px;
            padding: 12px;
            border: 1px solid #e1f0e8;
            border-radius: 10px;
            background: #f5fbf7;
            color: #687f73;
            font-size: 10px;
            line-height: 1.7;
        }

        .privacy-note span {
            color: #16805d;
            font-size: 14px;
        }

        /* RESPONSIVE */

        @media (max-width: 760px) {
            .page {
                padding: 18px 12px;
            }

            .login-card {
                max-width: 480px;
                grid-template-columns: 1fr;
                border-radius: 20px;
            }

            .visual {
                min-height: 245px;
                padding: 23px;
            }

            .brand {
                font-size: 24px;
            }

            .visual-content {
                margin: 25px 0 12px;
            }

            .visual-content h1 {
                max-width: 360px;
                font-size: 30px;
            }

            .visual-content p {
                font-size: 12px;
            }

            .visual-footer {
                display: none;
            }

            .form-panel {
                padding: 31px 24px;
            }

            .form-heading h2 {
                font-size: 27px;
            }
        }

        @media (max-width: 380px) {
            .form-panel {
                padding: 27px 18px;
            }

            .visual-content h1 {
                font-size: 27px;
            }
        }
    </style>
</head>

<body>
<div class="page">
    <main class="login-card">

        <!-- PANEL GAMBAR -->
        <section class="visual">
            <a href="{{ route('home') }}" class="brand">
                Aqua<span>Craft</span>
            </a>

            <div class="visual-content">
                <span class="eyebrow">
                    ✦ Senang melihatmu kembali
                </span>

                <h1>
                    Selamat Datang
                    <span>Kembali.</span>
                </h1>

                <p>
                    Masuk ke akun AquaCraft untuk menjelajahi
                    produk akuarium, menemukan inspirasi,
                    dan melihat layanan yang tersedia.
                </p>
            </div>

            <div class="visual-footer">

                
            </div>
        </section>

        <!-- PANEL FORM LOGIN -->
        <section class="form-panel">
            <div class="form-content">

                <div class="form-heading">
                    <div class="form-label">Akun AquaCraft</div>
                    <h2>Masuk ke akun</h2>
                    <p>
                        Masukkan email dan password untuk melanjutkan.
                    </p>
                </div>

                <!-- STATUS LOGIN -->
                @if (session('status'))
                    <div class="status-message">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- EMAIL -->
                    <div class="field">
                        <label for="email">Alamat email</label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            autocomplete="username"
                            required
                            autofocus
                            class="{{ $errors->has('email') ? 'invalid' : '' }}"
                        >

                        @error('email')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- PASSWORD -->
                    <div class="field">
                        <label for="password">Password</label>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                            class="{{ $errors->has('password') ? 'invalid' : '' }}"
                        >

                        @error('password')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- INGAT SAYA DAN LUPA PASSWORD -->
                    <div class="form-options">
                        <label for="remember_me" class="remember">
                            <input
                                id="remember_me"
                                type="checkbox"
                                name="remember"
                                value="1"
                                {{ old('remember') ? 'checked' : '' }}
                            >
                            <span>Ingat saya</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a
                                href="{{ route('password.request') }}"
                                class="forgot-link"
                            >
                                Lupa password?
                            </a>
                        @endif
                    </div>

                    <!-- TOMBOL MASUK -->
                    <button type="submit" class="submit-button">
                        Masuk ke AquaCraft
                        <span aria-hidden="true">→</span>
                    </button>
                </form>

                <!-- LINK REGISTER -->
                <div class="register-text">
                    Belum punya akun?
                    <a href="{{ route('register') }}">
                        Daftar sekarang
                    </a>
                </div>
                </div>

            </div>
        </section>

    </main>
</div>
</body>
</html>
