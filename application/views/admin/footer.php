    </div> <!-- End Content Wrapper -->

    <!-- Compact Footer -->
    <footer class="mt-auto py-4">
        <div class="container-fluid text-center">
            <p class="mb-0 text-muted small" style="font-weight: 500;">
                &copy; <?= date('Y'); ?> <strong style="color: #2C3E50;">AKK</strong>. 
                <span class="mx-2 opacity-50">|</span> 
                All Rights Reserved.
            </p>
        </div>
    </footer>

</div> <!-- End Main Content -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Close sidebar on outside click (mobile)
    document.addEventListener('click', function(event) {
        const sidebar = document.getElementById('sidebar');
        const toggle = document.querySelector('.menu-toggle');
        
        if (window.innerWidth < 768 && sidebar.classList.contains('show')) {
            if (!sidebar.contains(event.target) && !toggle.contains(event.target)) {
                sidebar.classList.remove('show');
            }
        }
    });
</script>
</body>
</html>