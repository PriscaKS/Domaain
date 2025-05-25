document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const html = document.getElementById('html-root');

    const savedTheme = localStorage.getItem('theme');

    if (savedTheme === 'dark') {
        html.classList.add('dark');
        console.log('Theme loaded: dark');
    } else {
        html.classList.remove('dark');
        console.log('Theme loaded: light');
    }

    themeToggle?.addEventListener('click', () => {
        const isDark = html.classList.toggle('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        console.log(`Theme toggled to: ${isDark ? 'dark' : 'light'}`);
    });
});
