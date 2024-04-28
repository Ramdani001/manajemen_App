
    <!-- jquery -->
    <script src="<?= BASEURL ?>assets/jquery.js"> </script>

    <!-- Popper -->
    <script src="<?= BASEURL ?>assets/bootstrap/js/bootstrap.js"> </script>

    <!-- Bootstrap -->
    <script src="<?= BASEURL ?>assets/script.js"> </script>

    <!-- Templates -->
    <!--   Core JS Files   -->
        <script src="<? BASEURL ?>assets/js/core/popper.min.js" ></script>
        <script src="<? BASEURL ?>assets/js/core/bootstrap.min.js" ></script>
        <script src="<? BASEURL ?>assets/js/plugins/perfect-scrollbar.min.js" ></script>
        <script src="<? BASEURL ?>assets/js/plugins/smooth-scrollbar.min.js" ></script>

        <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
    <!-- Templates -->

        <!-- MyScript -->
    <script src="<?= BASEURL ?>assets/script.js"> </script>
</body>
</html>