// Mobile nav
document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.remove('preload');

    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('.mainnav');
    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const open = nav.classList.toggle('open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
    }

    // Scroll reveal
    const els = document.querySelectorAll('[data-reveal]');
    if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('in-view');
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.08 });
        els.forEach(el => io.observe(el));
    } else {
        els.forEach(el => el.classList.add('in-view'));
    }

    // Details animation poly (optional) – we rely on native <details>

    // Contact form AJAX (progressive enhancement)
    const form = document.querySelector('form[data-ajax="true"]');
    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const out = document.querySelector('#form-status');
            if (out) { out.textContent = 'Sending...'; out.className = 'alert'; }

            try {
                const resp = await fetch(form.action, {
                    method: 'POST',
                    headers: { 'Accept': 'application/json' },
                    body: new FormData(form)
                });
                const data = await resp.json();
                if (data && data.success) {
                    if (out) { out.textContent = data.message || 'Message sent!'; out.className = 'alert success'; }
                    form.reset();
                } else {
                    throw new Error((data && data.message) || 'Something went wrong.');
                }
            } catch (err) {
                if (out) { out.textContent = err.message; out.className = 'alert error'; }
            }
        });
    }
});
