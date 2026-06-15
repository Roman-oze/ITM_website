{{-- <div class="stepper-container">
    <a href="{{ route('users.index') }}" class="step-item step-complete">
        <div class="step-circle">
            <span class="step-number">1</span>
            <i class="fas fa-check step-icon"></i>
        </div>
        <span class="step-label">User</span>
    </a>

    <a href="{{ route('roles.index') }}" class="step-item step-active">
        <div class="step-circle">
            <span class="step-number">2</span>
            <i class="fas fa-check step-icon"></i>
        </div>
        <span class="step-label">Role</span>
    </a>

    <a href="{{ route('permissions.index') }}" class="step-item">
        <div class="step-circle">
            <span class="step-number">3</span>
            <i class="fas fa-check step-icon"></i>
        </div>
        <span class="step-label">Permission</span>
    </a>
</div> --}}
@php
    $currentRoute = Route::currentRouteName();
@endphp

<div class="stepper-container">

    {{-- USER STEP --}}
    <a href="{{ route('users.index') }}"
       class="step-item
       {{ $currentRoute === 'users.index' ? 'step-active' : '' }}
       {{ in_array($currentRoute, ['roles.index','permissions.index']) ? 'step-complete' : '' }}">

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
    --primary-color: #0f172a; /* Modern Vibrant Blue */
    --success-color: #10b981; /* Soft Emerald Green for completed steps */
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
.a{
    text-decoration:none;
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
    top: 20px; /* Aligns exactly with the center of the 40px circle */
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
    display: block; /* Shows a checkmark for finished steps */
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
        height: calc(100% + 24px - 40px); /* Extends exactly to the next circle */
    }

    .step-label {
        margin-top: 0;
    }
}

:root {
    --primary-color: #209DD8;
    --success-color: #10b981;
    --text-main: #ffffff;
    --text-muted: #94a3b8;
    --border-color: rgba(255,255,255,0.08);
}

/* CONTAINER */
.stepper-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 700px;
    margin: 30px auto;
    position: relative;
}

/* LINE */
.stepper-container::before {
    content: '';
    position: absolute;
    top: 20px;
    left: 10%;
    right: 10%;
    height: 2px;
    background: rgba(255,255,255,0.08);
    z-index: 0;
}

/* ITEM */
.step-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    position: relative;
    z-index: 1;
    flex: 1;
}

/* CIRCLE */
.step-circle {
    width: 44px;
    height: 44px;
    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);

    transition: 0.3s ease;
    backdrop-filter: blur(10px);
}

/* NUMBER */
.step-number {
    font-size: 14px;
    font-weight: 600;
    color: var(--text-muted);
}

/* ICON */
.step-icon {
    display: none;
    color: #fff;
    font-size: 12px;
}

/* LABEL */
.step-label {
    margin-top: 10px;
    font-size: 13px;
    color: var(--text-muted);
}

/* ===== ACTIVE STEP ===== */
.step-active .step-circle {
    background: rgba(32,157,216,0.15);
    border-color: var(--primary-color);
    box-shadow: 0 0 20px rgba(32,157,216,0.25);
}

.step-active .step-number {
    color: var(--primary-color);
}

.step-active .step-label {
    color: var(--primary-color);
    font-weight: 600;
}

/* ===== COMPLETED STEP ===== */
.step-complete .step-circle {
    background: rgba(16,185,129,0.15);
    border-color: var(--success-color);
}

.step-complete .step-number {
    display: none;
}

.step-complete .step-icon {
    display: block;
}

.step-complete .step-label {
    color: #cbd5e1;
}

/* CONNECTED LINE COLOR (COMPLETED FLOW) */
.step-complete ~ .step-item::before {
    background: var(--success-color);
}

/* HOVER */
.step-item:hover .step-circle {
    transform: translateY(-2px);
    border-color: var(--primary-color);
}

/* MOBILE */
@media(max-width:600px){
    .stepper-container {
        flex-direction: column;
        gap: 20px;
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
    </style>