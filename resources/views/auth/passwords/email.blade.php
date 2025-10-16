@extends('layouts.app')

@section('content')
    <style>
        /* ====== RESET SOLO PARA ESTA VISTA ====== */
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
        }

        .navbar {
            display: none !important;
        }

        /* ocultar navbar en esta pantalla */
        #app>main {
            padding: 0 !important;
        }

        /* sin padding del layout */

        /* ====== TOKENS ====== */
        :root {
            --dark-blue-start: #1A237E;
            --dark-blue-end: #0D47A1;
            --text-light: #E0E0E0;
            --main-blue: #007AFF;
            --glass-border: rgba(255, 255, 255, .25);
            --input-border: rgba(255, 255, 255, .22);
        }

        /* ====== BG 100vh ====== */
        .auth-shell {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
            background:
                radial-gradient(1400px 800px at 20% -10%, rgba(255, 255, 255, .08), transparent 50%),
                linear-gradient(135deg, var(--dark-blue-start) 0%, var(--dark-blue-end) 100%);
            position: relative;
            overflow: hidden;
        }

        .auth-shell::after {
            content: "";
            position: absolute;
            inset: -50%;
            background:
                radial-gradient(12px 12px at 10% 20%, rgba(255, 255, 255, .05) 0 60%, transparent 61%) repeat,
                radial-gradient(10px 10px at 80% 70%, rgba(255, 255, 255, .05) 0 60%, transparent 61%) repeat;
            transform: rotate(10deg);
            pointer-events: none;
        }

        /* ====== CARD ====== */
        .auth-card {
            width: 100%;
            max-width: 980px;
            /* tamaño cómodo para una sola entrada */
            border-radius: 24px;
            background: linear-gradient(180deg, rgba(255, 255, 255, .10), rgba(255, 255, 255, .08));
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            box-shadow: 0 30px 60px rgba(0, 0, 0, .35);
            overflow: hidden;
        }

        .auth-grid {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            min-height: 460px;
        }

        /* ====== BRAND (izq) ====== */
        .auth-brand {
            padding: 48px 40px;
            color: #fff;
            background: linear-gradient(145deg, rgba(255, 255, 255, .07), rgba(255, 255, 255, .02));
        }

        /* Tu badge tal cual (con ajuste de svg) */
        .brand-badge {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            border-radius: 9px;
            border: 1px solid rgba(255, 255, 255, .25);
            background: rgba(255, 255, 255, .08);
            font-weight: 700;
            font-size: .95rem;
            margin-bottom: 18px;
        }

        .brand-badge svg {
            display: block;
            width: 44px;
            height: 50px;
        }

        .brand-title {
            font-size: 2rem;
            font-weight: 800;
            margin: 10px 0 12px;
            letter-spacing: .3px;
        }

        .brand-sub {
            color: rgba(255, 255, 255, .9);
            margin-bottom: 18px;
            line-height: 1.55;
        }

        .brand-list {
            display: grid;
            gap: 10px;
            color: rgba(255, 255, 255, .92);
        }

        .brand-item {
            display: flex;
            gap: 10px;
            align-items: flex-start;
        }

        .brand-item i {
            width: 10px;
            height: 10px;
            margin-top: 8px;
            border-radius: 2px;
            background: linear-gradient(180deg, var(--main-blue), #2EA6FF);
            box-shadow: 0 0 0 3px rgba(0, 122, 255, .25);
            flex-shrink: 0;
        }

        /* ====== FORM (der) ====== */
        .auth-form {
            padding: 40px 40px 48px;
            background: rgba(255, 255, 255, .04);
            border-left: 1px solid var(--glass-border);
            color: var(--text-light);
            display: flex;
            flex-direction: column;
        }

        .form-title {
            color: #fff;
            font-weight: 800;
            font-size: 1.7rem;
            margin-bottom: 8px;
        }

        .form-subtitle {
            color: rgba(255, 255, 255, .82);
            margin-bottom: 22px;
        }

        /* Alert “status” en estilo glass */
        .alert-glass {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 14px;
            margin-bottom: 16px;
            border-radius: 12px;
            border: 1px solid rgba(0, 255, 170, .25);
            background: linear-gradient(180deg, rgba(0, 255, 170, .10), rgba(0, 255, 170, .06));
            color: #d8ffec;
            font-weight: 600;
            box-shadow: 0 10px 24px rgba(0, 255, 170, .18);
        }

        .form-group-custom {
            margin-bottom: 18px;
        }

        .form-group-custom label {
            display: block;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, .92);
            font-weight: 600;
            font-size: .95rem;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .form-control-custom {
            width: 100%;
            padding: 14px 18px;
            border-radius: 12px;
            border: 1px solid var(--input-border);
            background: rgba(255, 255, 255, .10);
            color: #fff;
            transition: border-color .25s, box-shadow .25s, background-color .25s;
        }

        .form-control-custom::placeholder {
            color: rgba(255, 255, 255, .6);
        }

        .form-control-custom:focus {
            outline: none;
            border-color: var(--main-blue);
            background: rgba(255, 255, 255, .14);
            box-shadow: 0 0 0 4px rgba(0, 122, 255, .35);
        }

        .form-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 6px;
            flex-wrap: wrap;
        }

        .btn-reset {
            padding: 12px 20px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(180deg, var(--main-blue), #0063CC);
            color: #fff;
            font-weight: 800;
            letter-spacing: .6px;
            text-transform: uppercase;
            box-shadow: 0 14px 28px rgba(0, 122, 255, .35);
            transition: transform .08s ease, box-shadow .25s ease, filter .25s ease;
        }

        .btn-reset:hover {
            filter: brightness(1.05);
            box-shadow: 0 18px 36px rgba(0, 122, 255, .45);
            transform: translateY(-1px);
        }

        .btn-reset:active {
            transform: translateY(0);
        }

        /* ====== RESPONSIVE ====== */
        @media (max-width: 992px) {
            .auth-grid {
                grid-template-columns: 1fr;
                min-height: auto;
            }

            .auth-form {
                border-left: 0;
                border-top: 1px solid var(--glass-border);
            }
        }
    </style>

    <div class="auth-shell">
        <div class="auth-card">
            <div class="auth-grid">
                <!-- Branding -->
                <div class="auth-brand">
                    <span class="brand-badge">
                        <svg width="44" height="50" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.5692 27H10.725V17.8542L19.5692 18.3674V27ZM3.46155 27H2.76924C2.40543 27.001 2.04505 26.9298 1.70895 26.7906C1.37284 26.6513 1.06768 26.4468 0.811167 26.1888C0.553205 25.9323 0.348689 25.6272 0.209454 25.291C0.0702194 24.9549 -0.000972094 24.5946 1.00246e-05 24.2308V2.76924C-0.000972094 2.40544 0.0702194 2.04505 0.209454 1.70895C0.348689 1.37284 0.553205 1.06769 0.811167 0.811163C1.06771 0.553212 1.37284 0.348702 1.70895 0.209468C2.04505 0.0702341 2.40544 -0.000959608 2.76924 9.76757e-06H21.2308C21.5946 -0.000959608 21.955 0.0702341 22.2911 0.209468C22.6272 0.348702 22.9323 0.553212 23.1888 0.811163C23.4468 1.06769 23.6513 1.37284 23.7905 1.70895C23.9298 2.04505 24.001 2.40544 24 2.76924V24.2308C24.001 24.5945 23.9299 24.9549 23.7907 25.291C23.6515 25.6271 23.447 25.9323 23.1891 26.1888C22.9325 26.4468 22.6273 26.6514 22.2912 26.7906C21.955 26.9299 21.5946 27.001 21.2308 27H20.4923V17.4962L18.4041 17.3751V10.7172L20.2502 10.9348V10.9334L20.2608 10.9408L20.7801 10.1774L11.9721 4.18639L3.249 10.1049L3.7673 10.8688L3.7844 10.8572L5.55878 10.5612V17.313L3.46155 17.4842V27ZM9.80214 27H4.38462V18.3348L9.80214 17.8927V27ZM17.4808 17.3215L10.7255 16.9292V16.8907L10.6768 16.8946V9.83077L17.4812 10.6366V17.3213L17.4808 17.3215ZM14.0769 11.0769C12.9316 11.0769 12 12.2155 12 13.6154C12 15.0152 12.9316 16.1538 14.0769 16.1538C15.2222 16.1538 16.1538 15.0152 16.1538 13.6154C16.1538 12.2155 15.2222 11.0769 14.0769 11.0769ZM6.48185 17.2385V10.4589L9.75324 9.88869V16.9715L6.48185 17.2385ZM8.19209 11.3077C7.49216 11.3077 6.92286 12.3946 6.92286 13.7308C6.92286 15.0669 7.49216 16.1538 8.19209 16.1538C8.89201 16.1538 9.46132 15.0669 9.46132 13.7308C9.46132 12.3946 8.89178 11.3077 8.19209 11.3077ZM15.1352 15.078L12.9932 15.0058V12.2665L15.1355 12.3796V15.0778L15.1352 15.078ZM8.76025 15.0263H7.45454V12.4973L8.76025 12.4209V15.0263ZM18.5995 9.81093L10.9237 8.90654L12.2019 5.45839L18.5998 9.81046L18.5995 9.81093ZM5.61509 9.6157L11.0414 5.93424L9.94454 8.89339L5.61532 9.61593L5.61509 9.6157Z"
                                fill="white" />
                        </svg>
                        ecommerse
                    </span>

                    <h1 class="brand-title">Restablecer contraseña</h1>
                    <p class="brand-sub">Ingresa tu correo y te enviaremos un enlace para restablecer tu contraseña.</p>

                    <div class="brand-list">
                        <div class="brand-item"><i></i>Proceso rápido y seguro</div>
                        <div class="brand-item"><i></i>Protección de cuenta</div>
                        <div class="brand-item"><i></i>Soporte si lo necesitas</div>
                    </div>
                </div>

                <!-- Formulario -->
                <div class="auth-form">
                    <div class="form-title">{{ __('Restablecer contraseña') }}</div>
                    <div class="form-subtitle">{{ __('Te enviaremos un enlace al correo registrado.') }}</div>

                    @if (session('status'))
                        <div class="alert-glass" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group-custom">
                            <label for="email">{{ __('Correo electrónico') }}</label>
                            <input id="email" type="email"
                                class="form-control-custom @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="tu@email.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-reset">{{ __('Enviar enlace de restablecimiento') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
