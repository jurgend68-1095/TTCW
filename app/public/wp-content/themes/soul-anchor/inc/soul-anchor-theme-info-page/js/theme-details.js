(function(wp) {
    document.addEventListener("DOMContentLoaded", function() {
        const btnMoreInfo = document.getElementById('btn-more-info');

        if (btnMoreInfo) {
            btnMoreInfo.addEventListener('click', function(e) {
                e.preventDefault();
                window.location.href = SoulAnchorTheme.admin_url;
            });
        }
    });
})(wp);