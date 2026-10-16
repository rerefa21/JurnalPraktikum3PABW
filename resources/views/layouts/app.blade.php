<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | LaporBanjir BPBD Kabupaten Bandung</title>
    <style>
    :root {
        --primary-red: #d32f2f;
        --primary-dark: #8e0000;
        --primary-light: #ff6659;
        --accent-red: #e53935;
        --bg-color: #f8f9fa;
        --card-bg: #ffffff;
        --text-dark: #1a1a1a;
        --text-muted: #6c757d;
        --shadow-sm: 0 2px 8px rgba(211, 47, 47, 0.08);
        --shadow-md: 0 6px 16px rgba(211, 47, 47, 0.15);
        --shadow-lg: 0 12px 24px rgba(211, 47, 47, 0.22);
        --radius: 12px;
        --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    *, *::before, *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body { 
        font-family: 'Segoe UI', system-ui, -apple-system, BlinkMacSystemFont, Roboto, sans-serif; 
        background-color: var(--bg-color); 
        color: var(--text-dark);
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        line-height: 1.6;
    }

    header { 
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-red) 100%); 
        color: #ffffff; 
        padding: clamp(1.2rem, 3vw, 2.5rem) clamp(1rem, 4vw, 2rem); 
        text-align: center; 
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        position: relative;
        overflow: hidden;
    }

    header::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
        pointer-events: none;
    }

    header h1 {
        font-size: clamp(1.4rem, 4vw, 2.2rem);
        font-weight: 700;
        letter-spacing: -0.5px;
        margin-bottom: 0.3rem;
    }

    header p {
        font-size: clamp(0.85rem, 2vw, 1.05rem);
        opacity: 0.9;
    }

    nav { 
        background: #111111; 
        padding: 0.8rem 1rem; 
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.8rem;
        flex-wrap: wrap;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        position: sticky;
        top: 0;
        z-index: 100;
    }

    nav a { 
        color: #f8f9fa; 
        padding: 0.55rem 1.2rem;
        text-decoration: none; 
        font-weight: 600; 
        font-size: clamp(0.85rem, 2vw, 0.95rem);
        border-radius: 30px;
        transition: var(--transition);
        position: relative;
    }

    nav a:hover { 
        background-color: var(--primary-red);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(211, 47, 47, 0.4);
    }

    nav a:active {
        transform: translateY(0);
    }

    /* Kontainer Utama Fleksibel */
    main { 
        padding: clamp(1.2rem, 4vw, 2.5rem) clamp(1rem, 5vw, 2rem); 
        width: 100%;
        max-width: 900px; 
        margin: 0 auto; 
        flex: 1;
    }

    /* Kartu Laporan Interaktif & Fleksibel */
    .card { 
        background: var(--card-bg); 
        border: none;
        border-left: 6px solid var(--primary-red);
        border-radius: var(--radius); 
        padding: clamp(1.2rem, 3vw, 1.8rem); 
        margin-bottom: 1.5rem; 
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        position: relative;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
        border-left-color: var(--primary-dark);
    }

    .card h2, .card h3 {
        color: var(--primary-dark);
        margin-bottom: 0.8rem;
        font-size: clamp(1.1rem, 2.5vw, 1.4rem);
    }

    .badge { 
        padding: 0.35rem 0.9rem; 
        border-radius: 20px; 
        color: #ffffff; 
        font-weight: 700; 
        font-size: 0.8rem;
        display: inline-block;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.12);
        letter-spacing: 0.3px;
        text-transform: uppercase;
    }

    .badge-waspada { background-color: #f59e0b; color: #111827; }
    .badge-siaga { background-color: #f97316; }
    .badge-awas { background-color: var(--primary-red); animation: pulse 2s infinite; }

    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 rgba(211, 47, 47, 0.6); }
        70% { box-shadow: 0 0 0 8px rgba(211, 47, 47, 0); }
        100% { box-shadow: 0 0 0 0 rgba(211, 47, 47, 0); }
    }

    .form-group { 
        margin-bottom: 1.2rem; 
    }

    .form-group label { 
        display: block; 
        margin-bottom: 0.4rem; 
        font-weight: 600; 
        color: #374151;
        font-size: clamp(0.9rem, 2vw, 1rem);
    }

    .form-group input { 
        width: 100%; 
        padding: clamp(0.7rem, 2vw, 0.9rem); 
        border: 2px solid #e5e7eb;
        border-radius: 8px;
        font-size: clamp(0.9rem, 2vw, 1rem);
        outline: none;
        transition: var(--transition);
        background-color: #fafafa;
    }

    .form-group input:focus {
        border-color: var(--primary-red);
        background-color: #ffffff;
        box-shadow: 0 0 0 4px rgba(211, 47, 47, 0.15);
    }

    .btn { 
        background: linear-gradient(135deg, var(--primary-red) 0%, var(--primary-dark) 100%); 
        color: #ffffff; 
        padding: clamp(0.75rem, 2vw, 0.95rem) clamp(1.4rem, 3vw, 2rem); 
        border: none; 
        border-radius: 8px; 
        cursor: pointer; 
        font-size: clamp(0.9rem, 2vw, 1rem);
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        text-decoration: none;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        width: 100%; 
    }

    @media (min-width: 640px) {
        .btn {
            width: auto; 
        }
    }

    .btn:hover { 
        background: linear-gradient(135deg, #e53935 0%, var(--primary-dark) 100%);
        transform: translateY(-3px);
        box-shadow: var(--shadow-lg);
    }

    .btn:active {
        transform: translateY(-1px);
    }

    footer { 
        background: #111111; 
        color: #9ca3af; 
        text-align: center; 
        padding: 1.2rem 1rem; 
        font-size: clamp(0.8rem, 2vw, 0.9rem);
        margin-top: auto;
    }

    @media (max-width: 480px) {
        nav {
            gap: 0.4rem;
        }
        nav a {
            padding: 0.45rem 0.8rem;
            width: 100%;
            text-align: center;
        }
        .card {
            padding: 1rem;
        }
    }
</style>
</head>
<body>

    <header>
        <h1>Sistem Pelaporan Banjir "LaporBanjir"</h1>
        <p>BPBD Kabupaten Bandung</p>
    </header>

    <nav>
        <a href="{{ route('lapor.create') }}">Buat Laporan</a>
        <a href="{{ route('lapor.index') }}">Daftar Laporan</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 BPBD Kabupaten Bandung - LaporBanjir System</p>
    </footer>

</body>
</html>