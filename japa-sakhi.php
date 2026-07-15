<?php
$pageTitle = "Japa Sakhi – Empowering Women, Nurturing New Beginnings | Sankalp Hospital";
$pageDesc  = "Japa Sakhi is a women empowerment initiative that trains underprivileged women as skilled postnatal care assistants, creating sustainable livelihoods while improving maternal and newborn care.";
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<style>
/* =============================================
   JAPA SAKHI – LANDING PAGE
   Soft Healthcare Palette · Modern UI
   ============================================= */

/* CSS Variables */
:root {
    --js-teal: #0d9488;
    --js-teal-light: #ccfbf1;
    --js-teal-dark: #0f766e;
    --js-blue: #2563eb;
    --js-blue-light: #dbeafe;
    --js-green: #16a34a;
    --js-green-light: #dcfce7;
    --js-gold: #d97706;
    --js-gold-light: #fef3c7;
    --js-text: #1e293b;
    --js-text-light: #64748b;
    --js-bg: #f8fafc;
    --js-white: #ffffff;
}

/* HERO */
.js-hero {
    position: relative;
    background: linear-gradient(135deg, #082f5c 0%, #0f5cad 40%, #0d9488 100%);
    padding: 140px 0 100px;
    overflow: hidden;
    color: #fff;
}
.js-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 20%, rgba(13, 148, 136, 0.3) 0%, transparent 50%),
               radial-gradient(circle at 20% 80%, rgba(37, 99, 235, 0.2) 0%, transparent 50%);
}
.js-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.2);
    backdrop-filter: blur(10px);
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    margin-bottom: 24px;
    animation: fadeInDown 0.8s ease;
}
.js-hero-badge .pulse-dot {
    width: 8px; height: 8px;
    background: #22c55e;
    border-radius: 50%;
    animation: pulseDot 2s infinite;
}
.js-hero h1 {
    font-size: clamp(2.2rem, 5vw, 3.6rem);
    font-weight: 800;
    letter-spacing: -0.04em;
    line-height: 1.15;
    margin-bottom: 20px;
    animation: fadeInUp 0.8s ease 0.2s both;
}
.js-hero h1 span {
    background: linear-gradient(90deg, #5eead4, #22d3ee);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.js-hero-sub {
    font-size: 1.1rem;
    color: rgba(255,255,255,0.75);
    line-height: 1.8;
    max-width: 620px;
    margin-bottom: 36px;
    animation: fadeInUp 0.8s ease 0.4s both;
}
.js-hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    animation: fadeInUp 0.8s ease 0.6s both;
}
.js-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #fff;
    color: var(--js-teal-dark);
    font-weight: 700;
    font-size: 0.9rem;
    padding: 14px 30px;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 8px 30px rgba(0,0,0,0.18);
    transition: all 0.35s cubic-bezier(0.16,1,0.3,1);
}
.js-btn-primary:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 16px 40px rgba(0,0,0,0.25);
    color: var(--js-teal-dark);
}
.js-btn-outline {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255,255,255,0.1);
    border: 1.5px solid rgba(255,255,255,0.25);
    color: #fff;
    font-weight: 600;
    font-size: 0.9rem;
    padding: 14px 28px;
    border-radius: 50px;
    text-decoration: none;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}
.js-btn-outline:hover {
    background: rgba(255,255,255,0.18);
    color: #fff;
    transform: translateY(-2px);
}

/* Hero decorative circles */
.js-hero-circle {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(255,255,255,0.06);
}
.js-hero-circle:nth-child(1) {
    width: 400px; height: 400px;
    top: -100px; right: -80px;
    animation: float 8s ease-in-out infinite;
}
.js-hero-circle:nth-child(2) {
    width: 250px; height: 250px;
    bottom: -50px; left: -60px;
    animation: float 6s ease-in-out infinite 2s;
}

/* SECTION COMMONS */
.js-section { padding: 80px 0; }
.js-section-alt { background: var(--js-bg); }
.js-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--js-teal);
    margin-bottom: 12px;
}
.js-eyebrow .bar {
    width: 22px; height: 2px;
    background: var(--js-teal);
    border-radius: 2px;
}
.js-h2 {
    font-size: clamp(1.6rem, 4vw, 2.4rem);
    font-weight: 800;
    color: var(--js-text);
    letter-spacing: -0.03em;
    margin-bottom: 14px;
}
.js-h3 {
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--js-text);
    margin-bottom: 8px;
}
.js-p {
    font-size: 0.95rem;
    color: var(--js-text-light);
    line-height: 1.8;
}

/* Reveal animation */
.js-reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s ease, transform 0.7s cubic-bezier(0.16,1,0.3,1);
}
.js-reveal.in { opacity: 1; transform: none; }

/* ABOUT */
.js-about-img {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(13, 148, 136, 0.15);
}
.js-about-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* STATS BAR */
.js-stats-bar {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
.js-stat-card {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 28px 24px;
    text-align: center;
    transition: all 0.35s ease;
}
.js-stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 40px rgba(13, 148, 136, 0.1);
    border-color: var(--js-teal);
}
.js-stat-icon {
    width: 50px; height: 50px;
    border-radius: 14px;
    background: var(--js-teal-light);
    color: var(--js-teal);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    margin: 0 auto 14px;
}
.js-stat-num {
    font-size: 2rem;
    font-weight: 800;
    color: var(--js-text);
    font-family: var(--font-heading);
    letter-spacing: -0.03em;
    line-height: 1;
}
.js-stat-num span {
    font-size: 1rem;
    color: var(--js-teal);
}
.js-stat-label {
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--js-text-light);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-top: 6px;
}

/* TIMELINE */
.js-timeline {
    position: relative;
    max-width: 700px;
    margin: 50px auto 0;
}
.js-timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 3px;
    height: 100%;
    background: linear-gradient(to bottom, var(--js-teal), var(--js-blue));
    border-radius: 3px;
}
.js-timeline-item {
    display: flex;
    align-items: center;
    margin-bottom: 40px;
    position: relative;
}
.js-timeline-item:nth-child(odd) { flex-direction: row; }
.js-timeline-item:nth-child(even) { flex-direction: row-reverse; }
.js-timeline-content {
    width: 45%;
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.04);
    transition: all 0.3s ease;
}
.js-timeline-content:hover {
    box-shadow: 0 12px 32px rgba(13, 148, 136, 0.1);
    border-color: var(--js-teal);
}
.js-timeline-dot {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 44px; height: 44px;
    background: #fff;
    border: 3px solid var(--js-teal);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    color: var(--js-teal);
    z-index: 2;
    box-shadow: 0 4px 12px rgba(13, 148, 136, 0.2);
}
.js-timeline-num {
    font-size: 0.65rem;
    font-weight: 800;
    color: var(--js-teal);
    text-transform: uppercase;
    letter-spacing: 0.12em;
    margin-bottom: 6px;
}
.js-timeline-title {
    font-size: 1rem;
    font-weight: 700;
    color: var(--js-text);
    margin-bottom: 4px;
}
.js-timeline-desc {
    font-size: 0.82rem;
    color: var(--js-text-light);
    line-height: 1.65;
}

/* SKILLS GRID */
.js-skills-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
}
.js-skill-card {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px 20px;
    text-align: center;
    transition: all 0.35s ease;
}
.js-skill-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 36px rgba(13, 148, 136, 0.1);
    border-color: var(--js-teal);
}
.js-skill-icon {
    width: 52px; height: 52px;
    border-radius: 14px;
    background: var(--js-teal-light);
    color: var(--js-teal);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    margin: 0 auto 14px;
    transition: all 0.3s ease;
}
.js-skill-card:hover .js-skill-icon {
    background: var(--js-teal);
    color: #fff;
    transform: scale(1.08);
}
.js-skill-title {
    font-size: 0.9rem;
    font-weight: 700;
    color: var(--js-text);
}

/* IMPACT COUNTERS */
.js-impact {
    background: linear-gradient(135deg, #082f5c 0%, #0f5cad 50%, #0d9488 100%);
    color: #fff;
    position: relative;
    overflow: hidden;
}
.js-impact::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 30% 50%, rgba(94, 234, 212, 0.15) 0%, transparent 50%);
}
.js-counters-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
}
.js-counter {
    text-align: center;
    position: relative;
}
.js-counter-num {
    font-size: 2.4rem;
    font-weight: 800;
    font-family: var(--font-heading);
    letter-spacing: -0.03em;
    line-height: 1;
    margin-bottom: 6px;
}
.js-counter-label {
    font-size: 0.72rem;
    font-weight: 600;
    color: rgba(255,255,255,0.7);
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

/* SUCCESS STORIES */
.js-story-card {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    overflow: hidden;
    transition: all 0.4s ease;
    height: 100%;
}
.js-story-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 24px 48px rgba(13, 148, 136, 0.12);
    border-color: var(--js-teal);
}
.js-story-header {
    background: linear-gradient(135deg, var(--js-teal-light), #f0fdfa);
    padding: 24px;
    border-bottom: 1px solid #e2e8f0;
}
.js-story-avatar {
    width: 56px; height: 56px;
    border-radius: 50%;
    background: var(--js-teal);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 12px;
}
.js-story-name {
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--js-text);
    margin-bottom: 2px;
}
.js-story-role {
    font-size: 0.78rem;
    color: var(--js-teal);
    font-weight: 600;
}
.js-story-body {
    padding: 24px;
}
.js-story-quote {
    font-size: 0.88rem;
    color: var(--js-text-light);
    line-height: 1.75;
    font-style: italic;
    border-left: 3px solid var(--js-teal);
    padding-left: 14px;
    margin-bottom: 16px;
}
.js-story-stats {
    display: flex;
    gap: 16px;
}
.js-story-stat {
    flex: 1;
    background: var(--js-bg);
    border-radius: 10px;
    padding: 10px 12px;
    text-align: center;
}
.js-story-stat .val {
    font-size: 1.05rem;
    font-weight: 800;
    color: var(--js-teal);
}
.js-story-stat .lbl {
    font-size: 0.65rem;
    color: var(--js-text-light);
    text-transform: uppercase;
    letter-spacing: 0.06em;
}

/* BENEFITS */
.js-benefits-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}
.js-benefit-card {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 32px 28px;
    transition: all 0.35s ease;
    height: 100%;
}
.js-benefit-card:hover {
    box-shadow: 0 16px 40px rgba(0,0,0,0.06);
    border-color: var(--js-teal);
}
.js-benefit-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}
.js-benefit-icon {
    width: 44px; height: 44px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    flex-shrink: 0;
}
.js-benefit-card:nth-child(1) .js-benefit-icon { background: var(--js-teal-light); color: var(--js-teal); }
.js-benefit-card:nth-child(2) .js-benefit-icon { background: var(--js-blue-light); color: var(--js-blue); }
.js-benefit-card:nth-child(3) .js-benefit-icon { background: var(--js-green-light); color: var(--js-green); }
.js-benefit-title {
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--js-text);
}
.js-benefit-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.js-benefit-list li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 9px 0;
    font-size: 0.88rem;
    color: var(--js-text-light);
    border-bottom: 1px solid #f1f5f9;
}
.js-benefit-list li:last-child { border-bottom: none; }
.js-benefit-list li i {
    color: var(--js-teal);
    margin-top: 3px;
    flex-shrink: 0;
}

/* FAQ */
.js-faq-item {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    overflow: hidden;
    margin-bottom: 10px;
    transition: all 0.3s ease;
}
.js-faq-item.open {
    border-color: var(--js-teal);
    box-shadow: 0 8px 24px rgba(13, 148, 136, 0.08);
}
.js-faq-btn {
    width: 100%;
    background: none;
    border: none;
    padding: 18px 22px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-family: var(--font-body);
    font-size: 0.92rem;
    font-weight: 600;
    color: var(--js-text);
    cursor: pointer;
    text-align: left;
    transition: var(--transition);
}
.js-faq-icon {
    width: 30px; height: 30px;
    border-radius: 50%;
    background: var(--js-teal-light);
    color: var(--js-teal);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    flex-shrink: 0;
    transition: all 0.3s ease;
}
.js-faq-item.open .js-faq-icon {
    background: var(--js-teal);
    color: #fff;
    transform: rotate(45deg);
}
.js-faq-chevron {
    margin-left: auto;
    width: 26px; height: 26px;
    border-radius: 50%;
    background: var(--js-bg);
    border: 1px solid #e2e8f0;
    color: var(--js-text-light);
    font-size: 0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
}
.js-faq-item.open .js-faq-chevron {
    transform: rotate(180deg);
    background: var(--js-teal-light);
    color: var(--js-teal);
    border-color: var(--js-teal);
}
.js-faq-body {
    display: none;
    padding: 0 22px 20px 64px;
    font-size: 0.88rem;
    color: var(--js-text-light);
    line-height: 1.8;
    border-top: 1px solid #f1f5f9;
    padding-top: 16px;
}
.js-faq-item.open .js-faq-body { display: block; }

/* CTA SECTION */
.js-cta {
    background: linear-gradient(135deg, #0f5cad 0%, #0d9488 100%);
    position: relative;
    overflow: hidden;
}
.js-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 50% 0%, rgba(94, 234, 212, 0.12) 0%, transparent 60%);
}
.js-cta .container { position: relative; z-index: 1; }
.js-cta h2 {
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    font-weight: 800;
    color: #fff;
    letter-spacing: -0.03em;
    margin-bottom: 14px;
}
.js-cta p {
    font-size: 1rem;
    color: rgba(255,255,255,0.7);
    max-width: 550px;
    margin: 0 auto 32px;
    line-height: 1.75;
}
.js-btn-white {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #fff;
    color: var(--js-teal-dark);
    font-weight: 700;
    font-size: 0.9rem;
    padding: 14px 30px;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 8px 30px rgba(0,0,0,0.18);
    transition: all 0.35s ease;
}
.js-btn-white:hover {
    transform: translateY(-3px);
    box-shadow: 0 16px 40px rgba(0,0,0,0.25);
    color: var(--js-teal-dark);
}
.js-btn-ghost-white {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255,255,255,0.12);
    border: 1.5px solid rgba(255,255,255,0.25);
    color: #fff;
    font-weight: 600;
    font-size: 0.9rem;
    padding: 14px 28px;
    border-radius: 50px;
    text-decoration: none;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}
.js-btn-ghost-white:hover {
    background: rgba(255,255,255,0.2);
    color: #fff;
}

/* BREADCRUMB */
.js-breadcrumb {
    background: var(--js-bg);
    padding: 14px 0;
    border-bottom: 1px solid #e2e8f0;
}
.js-breadcrumb-inner {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.78rem;
    color: var(--js-text-light);
}
.js-breadcrumb a {
    color: var(--js-teal);
    text-decoration: none;
    transition: color 0.2s;
}
.js-breadcrumb a:hover { color: var(--js-teal-dark); }

/* RESPONSIVE */
@media (max-width: 991px) {
    .js-hero { padding: 110px 0 70px; }
    .js-skills-grid { grid-template-columns: repeat(3, 1fr); }
    .js-counters-grid { grid-template-columns: repeat(3, 1fr); }
    .js-benefits-grid { grid-template-columns: 1fr; }
    .js-stats-bar { grid-template-columns: repeat(2, 1fr); }
    .js-timeline::before { left: 24px; }
    .js-timeline-dot { left: 24px; }
    .js-timeline-item,
    .js-timeline-item:nth-child(even) { flex-direction: row; }
    .js-timeline-content { width: calc(100% - 60px); margin-left: auto; }
}
@media (max-width: 767px) {
    .js-hero { padding: 90px 0 60px; }
    .js-skills-grid { grid-template-columns: repeat(2, 1fr); }
    .js-counters-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
    .js-section { padding: 56px 0; }
    .js-counter-num { font-size: 1.8rem; }
}

/* Animations */
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(24px); }
    to { opacity: 1; transform: none; }
}
@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-16px); }
    to { opacity: 1; transform: none; }
}
@keyframes pulseDot {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(0.6); opacity: 0.4; }
}
@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}
</style>

<!-- BREADCRUMB -->
<div class="js-breadcrumb">
    <div class="container">
        <div class="js-breadcrumb-inner">
            <a href="/">Home</a>
            <i class="fas fa-chevron-right" style="font-size:0.6rem;"></i>
            <a href="/blog/">Blog</a>
            <i class="fas fa-chevron-right" style="font-size:0.6rem;"></i>
            <span style="color:var(--js-text);">Japa Sakhi</span>
        </div>
    </div>
</div>

<!-- HERO -->
<section class="js-hero" id="top">
    <div class="js-hero-circle"></div>
    <div class="js-hero-circle"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <div class="js-hero-badge">
                    <span class="pulse-dot"></span>
                    Women Empowerment Initiative
                </div>
                <h1>Japa Sakhi – <span>Empowering Women, Nurturing New Beginnings</span></h1>
                <p class="js-hero-sub">Transforming the lives of economically disadvantaged women through professional healthcare training while ensuring compassionate care for mothers and newborns.</p>
                <div class="js-hero-actions">
                    <a href="#partner" class="js-btn-primary">
                        <i class="fas fa-handshake"></i> Become a Partner
                    </a>
                    <a href="#about" class="js-btn-outline">
                        <i class="fas fa-arrow-down"></i> Learn More
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div style="background:rgba(255,255,255,0.08);backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,0.15);border-radius:24px;padding:32px;box-shadow:0 20px 50px rgba(0,0,0,0.15);">
                    <div style="display:flex;align-items:center;gap:16px;margin-bottom:20px;">
                        <div style="width:52px;height:52px;border-radius:14px;background:rgba(94,234,212,0.2);display:flex;align-items:center;justify-content:center;font-size:1.4rem;">🤱</div>
                        <div>
                            <div style="font-size:1.1rem;font-weight:700;">Japa Sakhi Program</div>
                            <div style="font-size:0.78rem;color:rgba(255,255,255,0.55);">Sankalp Hospital · Ambikapur</div>
                        </div>
                    </div>
                    <div style="background:rgba(255,255,255,0.06);border-radius:12px;padding:16px;margin-bottom:14px;">
                        <div style="font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:rgba(255,255,255,0.45);margin-bottom:8px;">Quick Stats</div>
                        <div style="display:flex;justify-content:space-between;">
                            <div><div style="font-size:1.3rem;font-weight:800;">500+</div><div style="font-size:0.68rem;color:rgba(255,255,255,0.5);">Women Trained</div></div>
                            <div><div style="font-size:1.3rem;font-weight:800;">50+</div><div style="font-size:0.68rem;color:rgba(255,255,255,0.5);">Hospital Partners</div></div>
                        </div>
                    </div>
                    <a href="#cta" style="display:flex;align-items:center;justify-content:center;gap:8px;background:#fff;color:var(--js-teal-dark);font-weight:700;font-size:0.85rem;padding:12px 24px;border-radius:50px;text-decoration:none;width:100%;">
                        <i class="fas fa-user-plus"></i> Enroll Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="js-section" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 js-reveal">
                <div class="js-eyebrow"><div class="bar"></div> About The Initiative</div>
                <h2 class="js-h2">What is Japa Sakhi?</h2>
                <p class="js-p" style="margin-bottom:16px;"><strong>Japa Sakhi</strong> is a women empowerment and healthcare employment initiative launched by Sankalp Hospital. The term "Japa Sakhi" means a trusted companion during the postnatal period — a trained caregiver who supports mothers and newborns with professional skill and genuine compassion.</p>
                <p class="js-p" style="margin-bottom:16px;">We identify motivated women from economically weaker backgrounds and provide them with comprehensive, hospital-grade training in maternal and newborn care. After successful completion, we connect them with employment opportunities in hospitals, maternity centers, and healthcare institutions.</p>
                <p class="js-p">This initiative bridges two critical needs: creating sustainable livelihood opportunities for underprivileged women while addressing the shortage of skilled postnatal care professionals in our healthcare system.</p>
            </div>
            <div class="col-lg-6 js-reveal dd-d1">
                <div class="js-about-img" style="height:420px;">
                    <img src="assets/img/infrastructure/OPD-CHAMBER-2.jpg" alt="Japa Sakhi - Trained caregiver with mother and newborn" style="width:100%;height:100%;object-fit:cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY IT MATTERS -->
<section class="js-section js-section-alt" id="why">
    <div class="container">
        <div class="text-center mb-5 js-reveal">
            <div class="js-eyebrow" style="justify-content:center;"><div class="bar"></div> The Need</div>
            <h2 class="js-h2">Why This Program Matters</h2>
            <p class="js-p" style="max-width:600px;margin:0 auto;">India faces a critical gap in skilled postnatal care. Japa Sakhi addresses this while empowering women with meaningful careers.</p>
        </div>
        <div class="js-stats-bar js-reveal dd-d1">
            <div class="js-stat-card">
                <div class="js-stat-icon"><i class="fas fa-heartbeat"></i></div>
                <div class="js-stat-num">44,000<span>+</span></div>
                <div class="js-stat-label">Annual Maternal Deaths in India</div>
            </div>
            <div class="js-stat-card">
                <div class="js-stat-icon"><i class="fas fa-user-friends"></i></div>
                <div class="js-stat-num">23%</div>
                <div class="js-stat-label">Women in Formal Workforce</div>
            </div>
            <div class="js-stat-card">
                <div class="js-stat-icon"><i class="fas fa-baby"></i></div>
                <div class="js-stat-num">70%</div>
                <div class="js-stat-label">Newborns Need Postnatal Care</div>
            </div>
            <div class="js-stat-card">
                <div class="js-stat-icon"><i class="fas fa-procedures"></i></div>
                <div class="js-stat-num">2M+</div>
                <div class="js-stat-label">Healthcare Workers Needed by 2030</div>
            </div>
        </div>
    </div>
</section>

<!-- TRAINING PROCESS -->
<section class="js-section" id="process">
    <div class="container">
        <div class="text-center mb-5 js-reveal">
            <div class="js-eyebrow" style="justify-content:center;"><div class="bar"></div> Our Process</div>
            <h2 class="js-h2">How We Train Japa Sakhis</h2>
            <p class="js-p" style="max-width:600px;margin:0 auto;">A structured 5-step journey from selection to guaranteed placement — designed to create confident, capable caregivers.</p>
        </div>
        <div class="js-timeline js-reveal dd-d1">
            <div class="js-timeline-item">
                <div class="js-timeline-content">
                    <div class="js-timeline-num">Step 01</div>
                    <div class="js-timeline-title">Selection & Identification</div>
                    <div class="js-timeline-desc">We identify motivated women from economically weaker communities through local NGOs, self-help groups, and community referrals. Candidates are screened for aptitude, commitment, and empathy.</div>
                </div>
                <div class="js-timeline-dot"><i class="fas fa-user-check"></i></div>
                <div style="width:45%;"></div>
            </div>
            <div class="js-timeline-item">
                <div style="width:45%;"></div>
                <div class="js-timeline-dot"><i class="fas fa-chalkboard-teacher"></i></div>
                <div class="js-timeline-content">
                    <div class="js-timeline-num">Step 02</div>
                    <div class="js-timeline-title">Classroom Training</div>
                    <div class="js-timeline-desc">Intensive classroom sessions covering theoretical knowledge of maternal health, newborn care, hygiene protocols, and communication skills. Taught by experienced nursing professionals.</div>
                </div>
            </div>
            <div class="js-timeline-item">
                <div class="js-timeline-content">
                    <div class="js-timeline-num">Step 03</div>
                    <div class="js-timeline-title">Practical Hospital Training</div>
                    <div class="js-timeline-desc">Hands-on training in our hospital's maternity ward and neonatal unit. Trainees work alongside experienced nurses and doctors, learning real-world patient care under supervision.</div>
                </div>
                <div class="js-timeline-dot"><i class="fas fa-hospital"></i></div>
                <div style="width:45%;"></div>
            </div>
            <div class="js-timeline-item">
                <div style="width:45%;"></div>
                <div class="js-timeline-dot"><i class="fas fa-certificate"></i></div>
                <div class="js-timeline-content">
                    <div class="js-timeline-num">Step 04</div>
                    <div class="js-timeline-title">Certification</div>
                    <div class="js-timeline-desc">Upon successful completion, candidates receive a recognized certification in Postnatal and Newborn Care, validating their skills and readiness for professional employment.</div>
                </div>
            </div>
            <div class="js-timeline-item">
                <div class="js-timeline-content">
                    <div class="js-timeline-num">Step 05</div>
                    <div class="js-timeline-title">Guaranteed Placement</div>
                    <div class="js-timeline-desc">We connect certified Japa Sakhis with hospitals, maternity centers, nursing homes, and home healthcare services — ensuring sustainable employment and a brighter future.</div>
                </div>
                <div class="js-timeline-dot"><i class="fas fa-briefcase"></i></div>
                <div style="width:45%;"></div>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS -->
<section class="js-section js-section-alt" id="skills">
    <div class="container">
        <div class="text-center mb-5 js-reveal">
            <div class="js-eyebrow" style="justify-content:center;"><div class="bar"></div> Skills We Teach</div>
            <h2 class="js-h2">Professional Healthcare Skills</h2>
            <p class="js-p" style="max-width:600px;margin:0 auto;">Our comprehensive curriculum equips Japa Sakhis with the skills needed to provide world-class postnatal and newborn care.</p>
        </div>
        <div class="js-skills-grid js-reveal dd-d1">
            <div class="js-skill-card">
                <div class="js-skill-icon"><i class="fas fa-baby"></i></div>
                <div class="js-skill-title">Newborn Care</div>
            </div>
            <div class="js-skill-card">
                <div class="js-skill-icon"><i class="fas fa-heart"></i></div>
                <div class="js-skill-title">Mother Care</div>
            </div>
            <div class="js-skill-card">
                <div class="js-skill-icon"><i class="fas fa-hands-wash"></i></div>
                <div class="js-skill-title">Hygiene & Infection Control</div>
            </div>
            <div class="js-skill-card">
                <div class="js-skill-icon"><i class="fas fa-breastfeeding"></i></div>
                <div class="js-skill-title">Breastfeeding Support</div>
            </div>
            <div class="js-skill-card">
                <div class="js-skill-icon"><i class="fas fa-comments"></i></div>
                <div class="js-skill-title">Communication Skills</div>
            </div>
            <div class="js-skill-card">
                <div class="js-skill-icon"><i class="fas fa-first-aid"></i></div>
                <div class="js-skill-title">Emergency Response Basics</div>
            </div>
            <div class="js-skill-card">
                <div class="js-skill-icon"><i class="fas fa-hands-helping"></i></div>
                <div class="js-skill-title">Patient Handling</div>
            </div>
            <div class="js-skill-card">
                <div class="js-skill-icon"><i class="fas fa-balance-scale"></i></div>
                <div class="js-skill-title">Professional Ethics</div>
            </div>
        </div>
    </div>
</section>

<!-- EMPLOYMENT -->
<section class="js-section" id="employment">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 js-reveal">
                <div class="js-eyebrow"><div class="bar"></div> Career Opportunities</div>
                <h2 class="js-h2">Where Our Japa Sakhis Work</h2>
                <p class="js-p" style="margin-bottom:20px;">After certification, Japa Sakhis are connected with reputable healthcare institutions seeking skilled postnatal care professionals. Our placement network spans across:</p>
                <div style="display:flex;flex-direction:column;gap:12px;">
                    <div style="display:flex;align-items:center;gap:14px;padding:16px 20px;background:#fff;border:1px solid #e2e8f0;border-radius:14px;transition:all 0.3s ease;">
                        <div style="width:44px;height:44px;border-radius:12px;background:var(--js-teal-light);color:var(--js-teal);display:flex;align-items:center;justify-content:center;font-size:1.1rem;flex-shrink:0;"><i class="fas fa-hospital"></i></div>
                        <div><div style="font-weight:700;color:var(--js-text);font-size:0.92rem;">Hospitals</div><div style="font-size:0.78rem;color:var(--js-text-light);">Maternity and general hospitals</div></div>
                    </div>
                    <div style="display:flex;align-items:center;gap:14px;padding:16px 20px;background:#fff;border:1px solid #e2e8f0;border-radius:14px;transition:all 0.3s ease;">
                        <div style="width:44px;height:44px;border-radius:12px;background:var(--js-blue-light);color:var(--js-blue);display:flex;align-items:center;justify-content:center;font-size:1.1rem;flex-shrink:0;"><i class="fas fa-clinic-medical"></i></div>
                        <div><div style="font-weight:700;color:var(--js-text);font-size:0.92rem;">Maternity Centers</div><div style="font-size:0.78rem;color:var(--js-text-light);">Specialized birth centers</div></div>
                    </div>
                    <div style="display:flex;align-items:center;gap:14px;padding:16px 20px;background:#fff;border:1px solid #e2e8f0;border-radius:14px;transition:all 0.3s ease;">
                        <div style="width:44px;height:44px;border-radius:12px;background:var(--js-green-light);color:var(--js-green);display:flex;align-items:center;justify-content:center;font-size:1.1rem;flex-shrink:0;"><i class="fas fa-home"></i></div>
                        <div><div style="font-weight:700;color:var(--js-text);font-size:0.92rem;">Home Healthcare Services</div><div style="font-size:0.78rem;color:var(--js-text-light);">At-home postnatal care</div></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 js-reveal dd-d1">
                <div style="background:#fff;border:1px solid #e2e8f0;border-radius:20px;overflow:hidden;box-shadow:0 16px 40px rgba(13,148,136,0.08);">
                    <div style="background:linear-gradient(135deg,var(--js-teal),var(--js-teal-dark));padding:20px 24px;color:#fff;">
                        <div style="font-weight:700;font-size:1.05rem;"><i class="fas fa-building me-2"></i>Our Hospital Partners</div>
                        <div style="font-size:0.78rem;color:rgba(255,255,255,0.7);">Trusted institutions across Chhattisgarh</div>
                    </div>
                    <div style="padding:24px;display:grid;grid-template-columns:1fr 1fr;gap:12px;">
                        <div style="display:flex;align-items:center;gap:10px;padding:12px 14px;background:var(--js-bg);border-radius:10px;">
                            <i class="fas fa-check-circle" style="color:var(--js-teal);"></i>
                            <span style="font-size:0.82rem;font-weight:600;color:var(--js-text);">District Hospitals</span>
                        </div>
                        <div style="display:flex;align-items:center;gap:10px;padding:12px 14px;background:var(--js-bg);border-radius:10px;">
                            <i class="fas fa-check-circle" style="color:var(--js-teal);"></i>
                            <span style="font-size:0.82rem;font-weight:600;color:var(--js-text);">Private Maternity Homes</span>
                        </div>
                        <div style="display:flex;align-items:center;gap:10px;padding:12px 14px;background:var(--js-bg);border-radius:10px;">
                            <i class="fas fa-check-circle" style="color:var(--js-teal);"></i>
                            <span style="font-size:0.82rem;font-weight:600;color:var(--js-text);">Nursing Homes</span>
                        </div>
                        <div style="display:flex;align-items:center;gap:10px;padding:12px 14px;background:var(--js-bg);border-radius:10px;">
                            <i class="fas fa-check-circle" style="color:var(--js-teal);"></i>
                            <span style="font-size:0.82rem;font-weight:600;color:var(--js-text);">Home Care Agencies</span>
                        </div>
                        <div style="display:flex;align-items:center;gap:10px;padding:12px 14px;background:var(--js-bg);border-radius:10px;">
                            <i class="fas fa-check-circle" style="color:var(--js-teal);"></i>
                            <span style="font-size:0.82rem;font-weight:600;color:var(--js-text);">Primary Health Centers</span>
                        </div>
                        <div style="display:flex;align-items:center;gap:10px;padding:12px 14px;background:var(--js-bg);border-radius:10px;">
                            <i class="fas fa-check-circle" style="color:var(--js-teal);"></i>
                            <span style="font-size:0.82rem;font-weight:600;color:var(--js-text);">Corporate Wellness Programs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IMPACT -->
<section class="js-section js-impact" id="impact">
    <div class="container position-relative" style="z-index:1;">
        <div class="text-center mb-5 js-reveal">
            <div class="js-eyebrow" style="justify-content:center;color:rgba(255,255,255,0.6);"><div class="bar" style="background:rgba(255,255,255,0.3);"></div> Our Impact</div>
            <h2 style="font-size:clamp(1.6rem,4vw,2.4rem);font-weight:800;color:#fff;letter-spacing:-0.03em;margin-bottom:10px;">Numbers That Tell Our Story</h2>
            <p style="color:rgba(255,255,255,0.65);max-width:550px;margin:0 auto;">Every number represents a life transformed through dignity, opportunity, and purpose.</p>
        </div>
        <div class="js-counters-grid js-reveal dd-d1">
            <div class="js-counter">
                <div class="js-counter-num" data-count="500">0<span>+</span></div>
                <div class="js-counter-label">Women Trained</div>
            </div>
            <div class="js-counter">
                <div class="js-counter-num" data-count="50">0<span>+</span></div>
                <div class="js-counter-label">Hospital Partners</div>
            </div>
            <div class="js-counter">
                <div class="js-counter-num" data-count="350">0<span>+</span></div>
                <div class="js-counter-label">Successful Placements</div>
            </div>
            <div class="js-counter">
                <div class="js-counter-num" data-count="10000">0<span>+</span></div>
                <div class="js-counter-label">Mothers Supported</div>
            </div>
            <div class="js-counter">
                <div class="js-counter-num" data-count="10000">0<span>+</span></div>
                <div class="js-counter-label">Newborns Cared For</div>
            </div>
        </div>
    </div>
</section>

<!-- SUCCESS STORIES -->
<section class="js-section js-section-alt" id="stories">
    <div class="container">
        <div class="text-center mb-5 js-reveal">
            <div class="js-eyebrow" style="justify-content:center;"><div class="bar"></div> Success Stories</div>
            <h2 class="js-h2">Real Women, Real Transformations</h2>
            <p class="js-p" style="max-width:600px;margin:0 auto;">Meet the Japa Sakhis whose lives have been transformed through training, certification, and meaningful employment.</p>
        </div>
        <div class="row g-4">
            <!-- Story 1 -->
            <div class="col-lg-4 js-reveal dd-d1">
                <div class="js-story-card">
                    <div class="js-story-header">
                        <div class="js-story-avatar">PR</div>
                        <div class="js-story-name">Priya Rajwansh</div>
                        <div class="js-story-role">Certified Japa Sakhi · 2023 Batch</div>
                    </div>
                    <div class="js-story-body">
                        <div class="js-story-quote">"Before Japa Sakhi, I had no skills and no income. Today, I earn ₹18,000 per month at a maternity hospital and my family's life has completely changed."</div>
                        <div class="js-story-stats">
                            <div class="js-story-stat">
                                <div class="val">₹18K</div>
                                <div class="lbl">Monthly Income</div>
                            </div>
                            <div class="js-story-stat">
                                <div class="val">2 yrs</div>
                                <div class="lbl">Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Story 2 -->
            <div class="col-lg-4 js-reveal dd-d2">
                <div class="js-story-card">
                    <div class="js-story-header">
                        <div class="js-story-avatar">SM</div>
                        <div class="js-story-name">Sunita Markam</div>
                        <div class="js-story-role">Certified Japa Sakhi · 2024 Batch</div>
                    </div>
                    <div class="js-story-body">
                        <div class="js-story-quote">"I was a homemaker with no formal education. The Japa Sakhi training gave me confidence and skills. Now I work at a nursing home and support my children's education."</div>
                        <div class="js-story-stats">
                            <div class="js-story-stat">
                                <div class="val">₹15K</div>
                                <div class="lbl">Monthly Income</div>
                            </div>
                            <div class="js-story-stat">
                                <div class="val">1 yr</div>
                                <div class="lbl">Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Story 3 -->
            <div class="col-lg-4 js-reveal dd-d3">
                <div class="js-story-card">
                    <div class="js-story-header">
                        <div class="js-story-avatar">RK</div>
                        <div class="js-story-name">Rekha Kujur</div>
                        <div class="js-story-role">Certified Japa Sakhi · 2024 Batch</div>
                    </div>
                    <div class="js-story-body">
                        <div class="js-story-quote">"The training was life-changing. I never imagined I could work in a hospital. Today, I take pride in caring for mothers and newborns. My husband also supports my career now."</div>
                        <div class="js-story-stats">
                            <div class="js-story-stat">
                                <div class="val">₹16K</div>
                                <div class="lbl">Monthly Income</div>
                            </div>
                            <div class="js-story-stat">
                                <div class="val">1 yr</div>
                                <div class="lbl">Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BENEFITS -->
<section class="js-section" id="benefits">
    <div class="container">
        <div class="text-center mb-5 js-reveal">
            <div class="js-eyebrow" style="justify-content:center;"><div class="bar"></div> Benefits</div>
            <h2 class="js-h2">Who Benefits from Japa Sakhi</h2>
            <p class="js-p" style="max-width:600px;margin:0 auto;">A win-win initiative creating value for women, hospitals, and society.</p>
        </div>
        <div class="js-benefits-grid">
            <!-- For Women -->
            <div class="js-benefit-card js-reveal">
                <div class="js-benefit-header">
                    <div class="js-benefit-icon"><i class="fas fa-female"></i></div>
                    <div class="js-benefit-title">For Women</div>
                </div>
                <ul class="js-benefit-list">
                    <li><i class="fas fa-check-circle"></i> Professional skill development in healthcare</li>
                    <li><i class="fas fa-check-circle"></i> Stable and growing income source</li>
                    <li><i class="fas fa-check-circle"></i> Clear career growth pathway</li>
                    <li><i class="fas fa-check-circle"></i> Financial independence and confidence</li>
                    <li><i class="fas fa-check-circle"></i> Respect and recognition in society</li>
                </ul>
            </div>
            <!-- For Hospitals -->
            <div class="js-benefit-card js-reveal dd-d1">
                <div class="js-benefit-header">
                    <div class="js-benefit-icon"><i class="fas fa-hospital"></i></div>
                    <div class="js-benefit-title">For Hospitals</div>
                </div>
                <ul class="js-benefit-list">
                    <li><i class="fas fa-check-circle"></i> Access to skilled and certified workforce</li>
                    <li><i class="fas fa-check-circle"></i> Improved maternal and newborn care quality</li>
                    <li><i class="fas fa-check-circle"></i> Reliable and trained support staff</li>
                    <li><i class="fas fa-check-circle"></i> Reduced recruitment challenges</li>
                    <li><i class="fas fa-check-circle"></i> Enhanced hospital reputation</li>
                </ul>
            </div>
            <!-- For Society -->
            <div class="js-benefit-card js-reveal dd-d2">
                <div class="js-benefit-header">
                    <div class="js-benefit-icon"><i class="fas fa-globe-asia"></i></div>
                    <div class="js-benefit-title">For Society</div>
                </div>
                <ul class="js-benefit-list">
                    <li><i class="fas fa-check-circle"></i> Women empowerment at grassroots level</li>
                    <li><i class="fas fa-check-circle"></i> Better maternal and child health outcomes</li>
                    <li><i class="fas fa-check-circle"></i> Employment generation in rural communities</li>
                    <li><i class="fas fa-check-circle"></i> Reduced economic inequality</li>
                    <li><i class="fas fa-check-circle"></i> Community development and social upliftment</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="js-section js-section-alt" id="faq">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 js-reveal">
                <div class="js-eyebrow"><div class="bar"></div> FAQs</div>
                <h2 class="js-h2">Frequently Asked Questions</h2>
                <p class="js-p">Common questions about the Japa Sakhi program, training, and career opportunities.</p>
                <div class="mt-4 p-4" style="background:linear-gradient(135deg,var(--js-teal-light),#f0fdfa);border:1px solid var(--js-teal);border-radius:16px;">
                    <div class="js-eyebrow" style="margin-bottom:8px;"><div class="bar"></div> Need More Help?</div>
                    <p style="font-size:0.85rem;color:var(--js-text-light);margin-bottom:14px;line-height:1.65;">Our team is happy to answer any questions not covered here.</p>
                    <a href="#cta" style="display:inline-flex;align-items:center;gap:7px;font-size:0.82rem;font-weight:700;color:var(--js-teal);text-decoration:none;">
                        <i class="fas fa-arrow-right"></i> Contact Us
                    </a>
                </div>
            </div>
            <div class="col-lg-8 js-reveal dd-d1">
                <div class="js-faq-item">
                    <button class="js-faq-btn" onclick="jsFaq(this.parentElement)">
                        <div class="js-faq-icon"><i class="fas fa-plus"></i></div>
                        <span>Who can apply for the Japa Sakhi program?</span>
                        <div class="js-faq-chevron"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="js-faq-body">Any woman above 18 years of age from economically weaker backgrounds can apply. We prioritize candidates from rural and semi-urban communities who are motivated to build a career in healthcare. No prior healthcare experience is required.</div>
                </div>
                <div class="js-faq-item">
                    <button class="js-faq-btn" onclick="jsFaq(this.parentElement)">
                        <div class="js-faq-icon"><i class="fas fa-plus"></i></div>
                        <span>Is prior healthcare experience required?</span>
                        <div class="js-faq-chevron"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="js-faq-body">No prior healthcare experience is required. Our training program is designed to take candidates from zero to fully certified professionals. We look for empathy, dedication, and willingness to learn.</div>
                </div>
                <div class="js-faq-item">
                    <button class="js-faq-btn" onclick="jsFaq(this.parentElement)">
                        <div class="js-faq-icon"><i class="fas fa-plus"></i></div>
                        <span>How long is the training program?</span>
                        <div class="js-faq-chevron"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="js-faq-body">The complete training program spans approximately 3 months, including classroom sessions, practical hospital training, and assessment. The exact duration may vary slightly based on the batch schedule.</div>
                </div>
                <div class="js-faq-item">
                    <button class="js-faq-btn" onclick="jsFaq(this.parentElement)">
                        <div class="js-faq-icon"><i class="fas fa-plus"></i></div>
                        <span>Is certification provided after training?</span>
                        <div class="js-faq-chevron"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="js-faq-body">Yes. Upon successful completion, candidates receive a recognized certification in Postnatal and Newborn Care. This certification validates their skills and is recognized by partner hospitals and healthcare institutions.</div>
                </div>
                <div class="js-faq-item">
                    <button class="js-faq-btn" onclick="jsFaq(this.parentElement)">
                        <div class="js-faq-icon"><i class="fas fa-plus"></i></div>
                        <span>Do you provide job placement after training?</span>
                        <div class="js-faq-chevron"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="js-faq-body">Yes, guaranteed placement assistance is a core part of our program. We have partnerships with 50+ hospitals, maternity centers, and healthcare organizations across Chhattisgarh that actively recruit our certified Japa Sakhis.</div>
                </div>
                <div class="js-faq-item">
                    <button class="js-faq-btn" onclick="jsFaq(this.parentElement)">
                        <div class="js-faq-icon"><i class="fas fa-plus"></i></div>
                        <span>Which hospitals hire Japa Sakhis?</span>
                        <div class="js-faq-chevron"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="js-faq-body">Our Japa Sakhis are placed in district hospitals, private maternity homes, nursing homes, primary health centers, and home healthcare service providers across Chhattisgarh and neighboring states.</div>
                </div>
                <div class="js-faq-item">
                    <button class="js-faq-btn" onclick="jsFaq(this.parentElement)">
                        <div class="js-faq-icon"><i class="fas fa-plus"></i></div>
                        <span>Is there a training fee?</span>
                        <div class="js-faq-chevron"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="js-faq-body">The training is provided free of cost to candidates from economically weaker backgrounds. The program is supported by CSR partners, healthcare institutions, and government initiatives to ensure accessibility for all deserving women.</div>
                </div>
                <div class="js-faq-item">
                    <button class="js-faq-btn" onclick="jsFaq(this.parentElement)">
                        <div class="js-faq-icon"><i class="fas fa-plus"></i></div>
                        <span>What are the career growth opportunities?</span>
                        <div class="js-faq-chevron"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="js-faq-body">Japa Sakhis can advance to senior caregiver roles, team leaders, or trainers. Many go on to become nursing assistants, health workers, or even start their own home healthcare services with experience and additional training.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="js-section js-cta" id="cta">
    <div class="container text-center">
        <h2 class="js-reveal">Join the Movement to Empower Women<br>and Improve Maternal Care</h2>
        <p class="js-reveal dd-d1">Whether you're a CSR partner, healthcare institution, or a woman ready to transform your life — Japa Sakhi has a place for you.</p>
        <div class="js-hero-actions justify-content-center js-reveal dd-d2">
            <a href="mailto:info.sankalpslms@gmail.com" class="js-btn-white">
                <i class="fas fa-handshake"></i> Partner With Us
            </a>
            <a href="tel:+917774223344" class="js-btn-ghost-white">
                <i class="fas fa-user-plus"></i> Enroll Now
            </a>
        </div>
    </div>
</section>

<!-- SCHEMA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Japa Sakhi – Empowering Women, Nurturing New Beginnings",
  "description": "Japa Sakhi is a women empowerment initiative that trains underprivileged women as skilled postnatal care assistants, creating sustainable livelihoods while improving maternal and newborn care.",
  "url": "https://sankalphospital.com/japa-sakhi",
  "publisher": {
    "@type": "Organization",
    "name": "Sankalp Hospital",
    "url": "https://sankalphospital.com"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sankalphospital.com" },
      { "@type": "ListItem", "position": 2, "name": "Blog", "item": "https://sankalphospital.com/blog/" },
      { "@type": "ListItem", "position": 3, "name": "Japa Sakhi", "item": "https://sankalphospital.com/japa-sakhi" }
    ]
  },
  "mainEntity": {
    "@type": "FAQPage",
    "name": "Japa Sakhi – Frequently Asked Questions",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Who can apply for the Japa Sakhi program?",
        "acceptedAnswer": { "@type": "Answer", "text": "Any woman above 18 years of age from economically weaker backgrounds can apply. We prioritize candidates from rural and semi-urban communities who are motivated to build a career in healthcare." }
      },
      {
        "@type": "Question",
        "name": "Is prior healthcare experience required?",
        "acceptedAnswer": { "@type": "Answer", "text": "No prior healthcare experience is required. Our training program is designed to take candidates from zero to fully certified professionals." }
      },
      {
        "@type": "Question",
        "name": "How long is the training program?",
        "acceptedAnswer": { "@type": "Answer", "text": "The complete training program spans approximately 3 months, including classroom sessions, practical hospital training, and assessment." }
      },
      {
        "@type": "Question",
        "name": "Is certification provided after training?",
        "acceptedAnswer": { "@type": "Answer", "text": "Yes. Upon successful completion, candidates receive a recognized certification in Postnatal and Newborn Care recognized by partner hospitals." }
      },
      {
        "@type": "Question",
        "name": "Do you provide job placement after training?",
        "acceptedAnswer": { "@type": "Answer", "text": "Yes, guaranteed placement assistance is provided. We have partnerships with 50+ hospitals and healthcare organizations across Chhattisgarh." }
      },
      {
        "@type": "Question",
        "name": "Which hospitals hire Japa Sakhis?",
        "acceptedAnswer": { "@type": "Answer", "text": "Japa Sakhis are placed in district hospitals, private maternity homes, nursing homes, primary health centers, and home healthcare service providers." }
      },
      {
        "@type": "Question",
        "name": "Is there a training fee?",
        "acceptedAnswer": { "@type": "Answer", "text": "The training is provided free of cost to candidates from economically weaker backgrounds, supported by CSR partners and government initiatives." }
      },
      {
        "@type": "Question",
        "name": "What are the career growth opportunities?",
        "acceptedAnswer": { "@type": "Answer", "text": "Japa Sakhis can advance to senior caregiver roles, team leaders, trainers, nursing assistants, health workers, or start their own home healthcare services." }
      }
    ]
  }
}
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script>
// Scroll reveal
const revEls = document.querySelectorAll('.js-reveal');
const revObs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.08 });
revEls.forEach(el => revObs.observe(el));

// FAQ toggle
function jsFaq(item) {
    const open = item.classList.contains('open');
    document.querySelectorAll('.js-faq-item.open').forEach(i => i.classList.remove('open'));
    if (!open) item.classList.add('open');
}

// Counter animation
const counterEls = document.querySelectorAll('.js-counter-num');
const counterObs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const el = entry.target;
            const target = parseInt(el.dataset.count);
            const suffix = el.querySelector('span') ? el.querySelector('span').outerHTML : '';
            let current = 0;
            const step = Math.ceil(target / 60);
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                el.innerHTML = current.toLocaleString('en-IN') + suffix;
            }, 25);
            counterObs.unobserve(el);
        }
    });
}, { threshold: 0.5 });
counterEls.forEach(el => counterObs.observe(el));
</script>
