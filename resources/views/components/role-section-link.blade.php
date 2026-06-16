@php
    $currentRoute = Route::currentRouteName();
@endphp

<div class="stepper-container">

    {{-- USER STEP --}}
    <a href="{{ route('users.index') }}"
        class="step-item
       {{ $currentRoute === 'users.index' ? 'step-active' : '' }}
       {{ in_array($currentRoute, ['roles.index', 'permissions.index']) ? 'step-complete' : '' }}">

        <div class="step-circle">
            <span class="step-number">1</span>
            <i class="fas fa-check step-icon"></i>
        </div>
        <span class="step-label">User</span>
    </a>

    {{-- ROLE STEP --}}
    <a href="{{ route('roles.index') }}"
        class="step-item
       {{ $currentRoute === 'roles.index' ? 'step-active' : '' }}
       {{ $currentRoute === 'permissions.index' ? 'step-complete' : '' }}">

        <div class="step-circle">
            <span class="step-number">2</span>
            <i class="fas fa-check step-icon"></i>
        </div>
        <span class="step-label">Role</span>
    </a>

    {{-- PERMISSION STEP --}}
    <a href="{{ route('permissions.index') }}"
        class="step-item
       {{ $currentRoute === 'permissions.index' ? 'step-active' : '' }}">

        <div class="step-circle">
            <span class="step-number">3</span>
            <i class="fas fa-check step-icon"></i>
        </div>
        <span class="step-label">Permission</span>
    </a>

</div>

<style>
    :root {
        --primary-color: #0f172a;
        /* Modern Vibrant Blue */
        --success-color: #10b981;
        /* Soft Emerald Green for completed steps */
        --text-main: #1f2937;
        --text-muted: #9ca3af;
        --border-color: #e5e7eb;
    }

    .stepper-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        max-width: 680px;
        margin: 2rem auto;
        padding: 0 1rem;
        position: relative;
    }

    .a {
        text-decoration: none;
    }

    .step-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        position: relative;
        text-decoration: none;
        background: none;
        border: none;
        outline: none;
        cursor: pointer;
    }

    /* Connecting Line base style */
    .step-item:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 20px;
        /* Aligns exactly with the center of the 40px circle */
        left: 50%;
        width: 100%;
        height: 3px;
        background-color: var(--border-color);
        z-index: 1;
        transition: background-color 0.4s ease;
    }

    /* Modern Minimalist Circles */
    .step-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #0F172A;
        border: 2px solid var(--border-color);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
    }

    .step-number {
        font-size: 14px;
        font-weight: 600;
        color: var(--text-muted);
    }

    .step-icon {
        display: none;
        font-size: 12px;
        color: #ffffff;
    }

    /* Text Styling */
    .step-label {
        margin-top: 12px;
        font-size: 14px;
        font-weight: 500;
        color: var(--text-muted);
        transition: color 0.3s ease, font-weight 0.3s ease;
    }

    /* --- STATE STYLES --- */

    /* 1. Active State */
    .step-item.step-active .step-circle {
        border-color: var(--primary-color);
        background-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15), 0 4px 6px -1px rgba(59, 130, 246, 0.2);
    }

    .step-item.step-active .step-number {
        color: #ffffff;
    }

    .step-item.step-active .step-label {
        color: var(--primary-color);
        font-weight: 600;
        text-decoration: none;
    }

    /* 2. Completed State (Optional but highly recommended for UX) */
    .step-item.step-complete .step-circle {
        border-color: var(--success-color);
        background-color: var(--success-color);
    }

    .step-item.step-complete .step-number {
        display: none;
    }

    .step-item.step-complete .step-icon {
        display: block;
        /* Shows a checkmark for finished steps */
    }

    .step-item.step-complete .step-label {
        color: var(--text-main);
    }

    /* Color line if the step ahead is complete or active */
    .step-item.step-complete::after {
        background-color: var(--success-color);
    }


    /* --- MOBILE RESPONSIVENESS --- */
    @media (max-width: 480px) {
        .stepper-container {
            flex-direction: column;
            align-items: flex-start;
            gap: 24px;
            padding-left: 2rem;
        }

        .step-item {
            flex-direction: row;
            align-items: center;
            width: 100%;
            gap: 16px;
        }

        /* Shift lines to go vertically on the left side */
        .step-item:not(:last-child)::after {
            top: 40px;
            left: 20px;
            width: 3px;
            height: calc(100% + 24px - 40px);
            /* Extends exactly to the next circle */
        }

        .step-label {
            margin-top: 0;
        }
    }

    :root {
        --primary-color: #209DD8;
        --success-color: #10b981;
        --default-color: #0f172a;
        --text-color: #64748b;
        --border-color: #cbd5e1;
    }

    /* Container */
    .stepper-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 700px;
        margin: 30px auto;
        position: relative;
    }

    /* Center Line */
    .stepper-container::before {
        content: '';
        position: absolute;
        top: 22px;
        left: 15%;
        right: 15%;
        height: 2px;
        background: #e2e8f0;
        z-index: 0;
    }

    /* Step */
    .step-item {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        position: relative;
        z-index: 1;
    }

    /* Circle */
    .step-circle {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #0f172a;
        border: 2px solid #1e293b;

        display: flex;
        align-items: center;
        justify-content: center;

        transition: .3s ease;
    }

    /* Number */
    .step-number {
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
    }

    /* Check Icon */
    .step-icon {
        display: none;
        color: #fff;
        font-size: 13px;
    }

    /* Label */
    .step-label {
        margin-top: 10px;
        font-size: 14px;
        font-weight: 500;
        color: #475569;
        transition: .3s ease;
    }

    /* Hover */
    .step-item:hover {
        text-decoration: none;
        color: var(--primary-color);

    }

    .step-label {
        text-decoration: none;

    }

    .step-label:hover {
        text-decoration: none;
    }

    .step-item:hover .step-circle {
        transform: translateY(-2px);
    }

    /* Active */
    .step-active .step-circle {
        background: var(--primary-color);
        border-color: var(--primary-color);

        box-shadow:
            0 0 0 4px rgba(32, 157, 216, .15),
            0 0 20px rgba(32, 157, 216, .25);
    }

    .step-active .step-number {
        color: #fff;
    }

    .step-active .step-label {
        color: var(--primary-color);
        font-weight: 600;
    }

    /* Completed */
    .step-complete .step-circle {
        background: var(--success-color);
        border-color: var(--success-color);
    }

    .step-complete .step-number {
        display: none;
    }

    .step-complete .step-icon {
        display: block;
    }

    .step-complete .step-label {
        color: #0f172a;
        font-weight: 600;
    }

    /* Responsive */
    @media(max-width:576px) {

        .stepper-container {
            flex-direction: column;
            gap: 25px;
            align-items: flex-start;
        }

        .stepper-container::before {
            display: none;
        }

        .step-item {
            flex-direction: row;
            gap: 15px;
        }

        .step-label {
            margin-top: 0;
        }
    }

    /* =========================
   STEP ENTRANCE ANIMATION
========================= */

.step-item {
    opacity: 0;
    transform: translateY(15px);
    animation: stepFadeUp .5s ease forwards;
}

.step-item:nth-child(1) {
    animation-delay: .1s;
}

.step-item:nth-child(2) {
    animation-delay: .2s;
}

.step-item:nth-child(3) {
    animation-delay: .3s;
}

@keyframes stepFadeUp {
    from {
        opacity: 0;
        transform: translateY(15px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* =========================
   ACTIVE PULSE EFFECT
========================= */

.step-active .step-circle {
    animation: activePulse 2.5s infinite;
}

@keyframes activePulse {

    0%,
    100% {
        box-shadow:
            0 0 0 0 rgba(32, 157, 216, .30),
            0 0 15px rgba(32, 157, 216, .25);
    }

    50% {
        box-shadow:
            0 0 0 10px rgba(32, 157, 216, 0),
            0 0 25px rgba(32, 157, 216, .45);
    }
}

/* =========================
   COMPLETED BOUNCE
========================= */

.step-complete .step-circle {
    animation: completedBounce .6s ease;
}

@keyframes completedBounce {
    0% {
        transform: scale(.7);
    }

    60% {
        transform: scale(1.15);
    }

    100% {
        transform: scale(1);
    }
}

/* =========================
   CHECKMARK APPEAR
========================= */

.step-complete .step-icon {
    display: block;
    animation: checkAppear .4s ease;
}

@keyframes checkAppear {
    from {
        opacity: 0;
        transform: scale(.2) rotate(-45deg);
    }

    to {
        opacity: 1;
        transform: scale(1) rotate(0);
    }
}

/* =========================
   PREMIUM HOVER
========================= */

.step-item {
    transition: all .3s ease;
}

.step-item:hover .step-circle {
    transform: translateY(-4px) scale(1.08);
}

.step-item:hover .step-label {
    color: #209DD8;
}

/* =========================
   ANIMATED UNDERLINE
========================= */

.step-label {
    position: relative;
}

.step-label::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: -4px;
    width: 0;
    height: 2px;
    background: #209DD8;
    transition: all .3s ease;
    transform: translateX(-50%);
}

.step-item:hover .step-label::after {
    width: 100%;
}

/* =========================
   PROGRESS LINE ANIMATION
========================= */

.step-item.step-complete::after {
    background: linear-gradient(
        90deg,
        #10b981,
        #34d399
    );

    animation: progressFill .8s ease;
}

@keyframes progressFill {
    from {
        width: 0;
    }

    to {
        width: 100%;
    }
}
</style>
