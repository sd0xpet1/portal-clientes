    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="..assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <script>
        var images = [
          'assets/img/slider/4.jpg',
          'assets/img/slider/5.jpg',
          'assets/img/slider/6.jpg'
        ];
        var currentIndex = 0;
      
        function changeImage() {
          currentIndex = (currentIndex + 1) % images.length;
          document.getElementById('imageSlider').style.backgroundImage = 'url(' + images[currentIndex] + ')';
        }
      
        // Cambiar la imagen cada 3 segundos
        setInterval(changeImage, 5000);
      </script>

</body>

</html>