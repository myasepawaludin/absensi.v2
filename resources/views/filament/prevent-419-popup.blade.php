<script>

(function() {
    'use strict';

    const originalConfirm = window.confirm;

    window.confirm = function(message) {
        if (message && typeof message === 'string') {
            const lowerMessage = message.toLowerCase();
            if (lowerMessage.includes('expired') ||
                lowerMessage.includes('refresh') ||
                lowerMessage.includes('csrf') ||
                lowerMessage.includes('token')) {
                console.log('419 Error detected, reloading page...');
                window.location.reload();
                return false;
            }
        }

        return originalConfirm.apply(this, arguments);
    };

    console.log('419 Popup Prevention: ACTIVE');
})();
</script>