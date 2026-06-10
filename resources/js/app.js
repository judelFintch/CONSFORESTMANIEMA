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

/* ── Count-up animation ──────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
    const DURATION = 1800;

    function easeOutCubic(t) { return 1 - Math.pow(1 - t, 3); }

    function runCount(el) {
        const target = parseInt(el.dataset.count, 10);
        const start  = performance.now();
        function tick(now) {
            const progress = Math.min((now - start) / DURATION, 1);
            const value    = Math.round(easeOutCubic(progress) * target);
            el.textContent = value.toLocaleString('fr-FR');
            if (progress < 1) requestAnimationFrame(tick);
            else el.textContent = target.toLocaleString('fr-FR');
        }
        requestAnimationFrame(tick);
    }

    const countEls = document.querySelectorAll('.count-num[data-count]');
    if (!countEls.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.counted) {
                entry.target.dataset.counted = '1';
                runCount(entry.target);
            }
        });
    }, { threshold: 0.6 });

    countEls.forEach(el => observer.observe(el));
});

/* ── Son de forêt (bouton hero) ──────────────────────── */
Alpine.data('forestSound', () => ({
    playing: false,
    audio:   null,

    init() {
        this.audio = new Audio('/sounds/foret.mp3');
        this.audio.loop   = true;
        this.audio.volume = 0.35;

        /* Nettoyage quand le composant est détruit */
        this.$watch('playing', () => {});
    },

    toggle() {
        if (!this.audio) return;
        if (this.playing) {
            this.audio.pause();
            this.playing = false;
        } else {
            this.audio.play().then(() => {
                this.playing = true;
            }).catch(() => {
                /* Fichier absent ou blocage navigateur — silencieux */
            });
        }
    },

    destroy() {
        if (this.audio) { this.audio.pause(); this.audio.src = ''; }
    },
}));

Alpine.start();
