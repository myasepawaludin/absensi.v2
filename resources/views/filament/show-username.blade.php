<script>
    (function() {
        'use strict';

        /**
         * PERBAIKAN UTAMA:
         * Menggunakan tanda tanya (?->) agar jika auth()->user() kosong (belum login),
         * dia tidak error, melainkan mengembalikan null.
         */
        const USERNAME = @js(auth()->user()?->name ?? null);

        // Jika USERNAME null (artinya sedang di halaman login/logout), 
        // hentikan script di sini agar tidak membebani browser.
        if (!USERNAME) {
            return;
        }

        function injectUsername() {
            const selectors = [
                'button[x-data][x-on\\:click*="userMenu"]',
                'button[aria-label*="menu"]',
                'nav button img[alt]',
                'header button img[alt]',
                '.fi-topbar button img',
                '[data-slot="topbar.end"] button',
                'button > img[alt][class*="avatar"]',
                'button > img[alt][class*="rounded"]'
            ];

            let userMenuButton = null;

            for (const selector of selectors) {
                const elements = document.querySelectorAll(selector);
                for (const el of elements) {
                    const button = el.tagName === 'BUTTON' ? el : el.closest('button');
                    if (button && button.querySelector('img')) {
                        userMenuButton = button;
                        break;
                    }
                }
                if (userMenuButton) break;
            }

            if (!userMenuButton) {
                return false;
            }

            if (userMenuButton.dataset.usernameInjected) {
                return true;
            }

            userMenuButton.dataset.usernameInjected = 'true';

            const wrapper = document.createElement('div');
            wrapper.className = 'fi-username-wrapper';
            wrapper.style.cssText = 'display: flex; align-items: center; gap: 0.75rem;';

            const usernameSpan = document.createElement('span');
            usernameSpan.className = 'fi-username-display';
            usernameSpan.textContent = USERNAME;

            Object.assign(usernameSpan.style, {
                fontSize: '0.875rem',
                fontWeight: '500',
                whiteSpace: 'nowrap',
                display: 'inline-block',
                cursor: 'default',
                pointerEvents: 'auto'
            });

            // Mencegah klik pada nama mentrigger dropdown menu
            usernameSpan.addEventListener('click', (e) => {
                e.stopPropagation();
                e.stopImmediatePropagation();
                e.preventDefault();
                return false;
            }, true);

            ['mousedown', 'mouseup', 'dblclick'].forEach(eventType => {
                usernameSpan.addEventListener(eventType, (e) => {
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    e.preventDefault();
                    return false;
                }, true);
            });

            const updateColor = () => {
                if (document.documentElement.classList.contains('dark')) {
                    usernameSpan.style.color = '#e5e7eb';
                } else {
                    usernameSpan.style.color = '#374151';
                }
            };
            updateColor();

            const parent = userMenuButton.parentNode;
            parent.insertBefore(wrapper, userMenuButton);

            wrapper.appendChild(usernameSpan);
            wrapper.appendChild(userMenuButton);

            wrapper.addEventListener('click', (e) => {
                if (e.target === usernameSpan || e.target.classList.contains('fi-username-display')) {
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    e.preventDefault();
                    return false;
                }
            }, true);

            const observer = new MutationObserver(updateColor);
            observer.observe(document.documentElement, {
                attributes: true,
                attributeFilter: ['class']
            });

            return true;
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', attemptInject);
        } else {
            attemptInject();
        }

        function attemptInject() {
            if (injectUsername()) {
                return;
            }

            let attempts = 0;
            const maxAttempts = 20;
            const retryInterval = setInterval(() => {
                attempts++;

                if (injectUsername() || attempts >= maxAttempts) {
                    clearInterval(retryInterval);
                }
            }, 500);

            document.addEventListener('livewire:init', () => {
                setTimeout(injectUsername, 100);
            });
            
            document.addEventListener('livewire:navigated', () => {
                setTimeout(injectUsername, 100);
            });
        }
    })();
</script>

<style>
    @media (max-width: 640px) {
        .fi-username-display {
            display: none !important;
        }
    }

    nav button[data-username-injected="true"],
    header button[data-username-injected="true"] {
        display: flex !important;
        align-items: center !important;
    }
</style>
