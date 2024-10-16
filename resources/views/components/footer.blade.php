<div id="loading" class="loading-overlay">
    <img src="/assets/img/loading.gif" alt="LOGO">
    
  </div>


              <!-- Footer -->
              <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; {{ Date('Y') }} Univ Tamenrasset</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="/assets/js/sweetalert2.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <script type="text/javascript">
    window.onload = function(){
        document.getElementById('loading').style.display = "none";
    };
    function supprimer(url){
    Swal.fire({
    title: " هل أنت متأكد من الحذف ؟",
    showDenyButton: true,
    confirmButtonText: "إلغاء",
    denyButtonText: `حذف`
    }).then((result) => {
        if (result.isDenied) {
            document.location.href = url;
        } 
    });
}
    </script>

</body>

</html>