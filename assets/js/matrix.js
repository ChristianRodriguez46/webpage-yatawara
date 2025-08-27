// Subtle "matrix" effect – disabled if prefers-reduced-motion
(() => {
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const canvas = document.getElementById('matrixCanvas');
    if (!canvas || prefersReduced) return;

    const ctx = canvas.getContext('2d');
    let w, h, cols, ypos;

    function resize() {
        w = canvas.width = canvas.offsetWidth;
        h = canvas.height = canvas.offsetHeight;
        cols = Math.floor(w / 20);
        ypos = Array(cols).fill(0);
    }
    window.addEventListener('resize', resize, { passive: true });
    resize();

    const chars = '01';
    function draw() {
        ctx.fillStyle = 'rgba(0,0,0,0.06)';
        ctx.fillRect(0, 0, w, h);

        ctx.fillStyle = '#A0E6CF';
        ctx.font = '16px monospace';

        ypos.forEach((y, ind) => {
            const text = chars[Math.floor(Math.random() * chars.length)];
            const x = ind * 20;
            ctx.fillText(text, x, y);
            if (y > h + Math.random() * 10000) ypos[ind] = 0;
            else ypos[ind] = y + 18;
        });

        requestAnimationFrame(draw);
    }
    requestAnimationFrame(draw);
})();
