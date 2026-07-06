<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #060B23 !important;
        font-family: 'Segoe UI', sans-serif;
        color: #fff;
    }

    .login-container {
        display: flex;
        min-height: 100vh;
        background-color: #060B23;
    }

    /* LEFT + RIGHT EQUAL PANELS */
    .left-panel,
    .right-panel {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px;
        background-color: #060B23;
        /* Matching unified background */
    }

    /* LEFT SIDE CONFIG */
    .left-panel {
        flex-direction: column;
        align-items: flex-start;
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 25px;
    }

    .brand img {
        width: 45px;
    }

    .brand h2 {
        margin: 0;
        font-size: 20px;
    }

    .badge {
        padding: 5px 12px;
        border: 1px solid #209DD8;
        border-radius: 20px;
        font-size: 12px;
        color: #209DD8;
        margin-bottom: 25px;
    }

    .title {
        font-size: 44px;
        font-weight: 700;
        line-height: 1.2;
    }

    .title span {
        color: #ebf0f3;
    }

    .desc {
        margin-top: 15px;
        font-size: 14px;
        color: #9aa4b2;
        max-width: 420px;
        line-height: 1.6;
    }

    .links {
        margin-top: 40px;
        width: 100%;
        max-width: 420px;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .link-box {
        padding: 14px;
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        justify-content: space-between;
        color: #cbd5e1;
        cursor: pointer;
        transition: 0.3s;
        background: rgba(255, 255, 255, 0.02);
    }

    .link-box:hover {
        border-color: #209DD8;
        color: #fff;
        transform: translateX(5px);
        background: rgba(255, 255, 255, 0.05);
    }

    /* RIGHT SIDE CONFIG */
    .login-card {
        width: 100%;
        max-width: 420px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 40px;
        backdrop-filter: blur(20px);
    }

    .login-card h3 {
        font-size: 22px;
        margin-bottom: 8px;
    }

    .login-card p {
        font-size: 13px;
        color: #9aa4b2;
        margin-bottom: 25px;
    }

    .input-box {
        margin-bottom: 15px;
    }

    .input-box input {
        width: 100%;
        padding: 12px 14px;
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        background: rgba(255, 255, 255, 0.05);
        color: #fff;
        outline: none;
        transition: 0.3s;
    }

    .input-box input:focus {
        border-color: #209DD8;
        background: rgba(255, 255, 255, 0.08);
    }

    .input-icon {
        position: relative;
    }

    .input-icon i.fa-envelope,
    .input-icon i.fa-lock {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #9aa4b2;
        font-size: 14px;
    }

    /* input padding for icon space */
    .input-icon input {
        padding-left: 38px;
    }

    /* eye icon */
    .toggle-password {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #9aa4b2;
        font-size: 14px;
        transition: 0.3s;
    }

    .toggle-password:hover {
        color: #209DD8;
    }

    .options {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        margin: 10px 0 20px;
        color: #9aa4b2;
    }

    .options a {
        color: #9aa4b2;
        text-decoration: none;
        transition: 0.3s;
    }

    .options a:hover {
        color: #209DD8;
    }

    .btn {
        width: 100%;
        padding: 12px;
        background: #209DD8;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        color: #060B23;
        transition: 0.3s;
    }

    .btn:hover {
        background: #2c3e50;
        color: white;
        transform: translateY(-1px);
    }

    @media(max-width: 900px) {
        .login-container {
            flex-direction: column;
        }

        .left-panel {
            display: none;
        }

        .right-panel {
            padding: 30px 20px;
        }
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<div class="login-container">

    <div class="left-panel">
        <div class="brand">
            <img src="{{ asset('frontend/logo/sg-logo.png') }}" alt="Logo">
            <div>
                <h2>SOftware Giant Ltd</h2>
                <small style="color: #9aa4b2;">General Accounting Reporting System</small>
            </div>
        </div>

        <div class="badge">SECURE GATEWAY</div>

        <div class="title">
            <span> Hello, Welcome !</span>
        </div>

        <div class="desc">
            Access your secure dashboard, reports, and internal systems with enterprise-grade authentication.
        </div>

        <div class="links">
            <div class="link-box">Operational Bulletins <span>›</span></div>
            <div class="link-box">System User Manual <span>↗</span></div>
            <div class="link-box">Common FAQ Matrix <span>↗</span></div>
            <div class="link-box">Support Center <span>+8801629627303</span></div>
        </div>
    </div>

    <div class="right-panel">
        <div class="login-card">
            <h3>Sign In</h3>
            <p>Enter your credentials to access the system.</p>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-box input-icon">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Username or Email" required>
                    @error('email')
                        <span class="text-danger"
                            style="font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-box input-icon">
                    <i class="fa fa-lock"></i>

                    <input type="password" name="password" id="password" placeholder="Password" required>

                    <i class="fa fa-eye toggle-password" onclick="togglePassword()"></i>

                    @error('password')
                        <span class="text-danger"
                            style="font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="options">
                    <label style="display: flex; align-items: center; gap: 6px; cursor: pointer;">
                        <input type="checkbox" name="remember"> Keep me signed in
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>

                <button class="btn" type="submit">
                    Login
                </button>
            </form>
        </div>
    </div>

</div>

<script>
    function togglePassword() {
        const passInput = document.getElementById("password");

        if (passInput.type === "password") {
            passInput.type = "text";
        } else {
            passInput.type = "password";
        }
    }
</script>
