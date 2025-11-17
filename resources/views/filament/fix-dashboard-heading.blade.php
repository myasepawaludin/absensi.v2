
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fix dashboard heading
        const heading = document.querySelector('.fi-header-heading');
        if (heading && (heading.textContent.trim() === 'Dasbor' || heading.textContent.trim() === 'Dashboard')) {
            heading.textContent = 'Beranda';
        }
    });
</script>
