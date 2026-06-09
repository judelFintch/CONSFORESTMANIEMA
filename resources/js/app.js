import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import collapse from '@alpinejs/collapse';

Alpine.plugin(intersect);
Alpine.plugin(collapse);

window.Alpine = Alpine;

// ── Header Scroll Behavior ────────────────────────────────
Alpine.data('header', () => ({
    scrolled: false,
    mobileOpen: false,
    init() {
        window.addEventListener('scroll', () => {
            this.scrolled = window.scrollY > 50;
        });
    },
    toggleMobile() {
        this.mobileOpen = !this.mobileOpen;
    }
}));

// ── Counter Animation ─────────────────────────────────────
Alpine.data('counter', (target, duration = 2000) => ({
    current: 0,
    target: parseInt(target),
    started: false,
    start() {
        if (this.started) return;
        this.started = true;
        const step = this.target / (duration / 16);
        const timer = setInterval(() => {
            this.current = Math.min(this.current + step, this.target);
            if (this.current >= this.target) {
                this.current = this.target;
                clearInterval(timer);
            }
        }, 16);
    },
    get display() {
        return Math.floor(this.current).toLocaleString();
    }
}));

// ── Gallery Lightbox ──────────────────────────────────────
Alpine.data('gallery', () => ({
    lightboxOpen: false,
    currentImage: '',
    currentCaption: '',
    openLightbox(src, caption) {
        this.currentImage = src;
        this.currentCaption = caption || '';
        this.lightboxOpen = true;
        document.body.style.overflow = 'hidden';
    },
    closeLightbox() {
        this.lightboxOpen = false;
        document.body.style.overflow = '';
    }
}));

// ── Contact Form ──────────────────────────────────────────
Alpine.data('contactForm', () => ({
    submitting: false,
    success: false,
    error: false,
    message: '',
    async submit(event) {
        this.submitting = true;
        this.success = false;
        this.error = false;
        try {
            const form = event.target;
            const data = new FormData(form);
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
                body: data,
            });
            const json = await response.json();
            if (response.ok) {
                this.success = true;
                this.message = json.message || 'Message envoyé avec succès !';
                form.reset();
            } else {
                this.error = true;
                this.message = json.message || 'Une erreur s\'est produite.';
            }
        } catch (e) {
            this.error = true;
            this.message = 'Une erreur réseau s\'est produite. Veuillez réessayer.';
        } finally {
            this.submitting = false;
        }
    }
}));

// ── Scroll Reveal ─────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.animate-fade-up').forEach(el => observer.observe(el));
});

Alpine.start();
