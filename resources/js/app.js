import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import collapse from '@alpinejs/collapse';

Alpine.plugin(intersect);
Alpine.plugin(collapse);
window.Alpine = Alpine;

/* ── Header ──────────────────────────────────────────── */
Alpine.data('header', () => ({
    scrolled: false,
    mobileOpen: false,
    init() {
        const update = () => { this.scrolled = window.scrollY > 70; };
        window.addEventListener('scroll', update, { passive: true });
        update();
    },
}));

/* ── Gallery Lightbox ────────────────────────────────── */
Alpine.data('gallery', () => ({
    open: false,
    src: '',
    caption: '',
    show(src, caption) {
        this.src = src;
        this.caption = caption || '';
        this.open = true;
        document.body.style.overflow = 'hidden';
    },
    close() {
        this.open = false;
        document.body.style.overflow = '';
    },
}));

/* ── Contact Form ────────────────────────────────────── */
Alpine.data('contactForm', () => ({
    sending: false,
    done: false,
    fail: false,
    msg: '',
    async submit(e) {
        this.sending = true; this.done = false; this.fail = false;
        try {
            const r = await fetch(e.target.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
                body: new FormData(e.target),
            });
            const j = await r.json();
            if (r.ok) { this.done = true; this.msg = j.message || 'Message envoyé !'; e.target.reset(); }
            else       { this.fail = true; this.msg = j.message || 'Erreur lors de l\'envoi.'; }
        } catch {
            this.fail = true; this.msg = 'Erreur réseau. Veuillez réessayer.';
        } finally {
            this.sending = false;
        }
    },
}));

/* ── Scroll Reveal ───────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                io.unobserve(e.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right')
        .forEach(el => io.observe(el));
});

/* ── Hero parallax (subtle) ──────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
    const heroImg = document.querySelector('.hero-bg-img');
    if (!heroImg || window.innerWidth < 768) return;
    window.addEventListener('scroll', () => {
        const y = window.scrollY;
        heroImg.style.transform = `scale(1.08) translateY(${y * 0.25}px)`;
    }, { passive: true });
});

Alpine.start();
