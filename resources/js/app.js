import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const toggleGroup = (elements, activeClass = 'is-active') => {
        elements.forEach((el) => {
            el.addEventListener('click', () => {
                elements.forEach((btn) => btn.classList.remove(activeClass));
                el.classList.add(activeClass);
            });
        });
    };

    toggleGroup(document.querySelectorAll('.tab'));
    toggleGroup(document.querySelectorAll('.pill'));

    const sessions = document.querySelectorAll('.session');
    sessions.forEach((btn) => {
        btn.addEventListener('click', () => {
            btn.classList.add('session--pulse');
            setTimeout(() => btn.classList.remove('session--pulse'), 180);
        });
    });
});
