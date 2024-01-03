
</div>
<!--End Body Content-->
<!--Footer-->
<footer id="footer" class="footer-4">
    <div class="newsletter-section">
        <div class="container">
            <div class="row">
                  
                                        </span>
                                    </div>
                                  </form>
                                  <script type="text/javascript">
                                  $(document).ready(function(){
                                    $('#swal').on("click",function (e){
                                      e.preventDefault();
                                      const Toast = Swal.mixin({
                                        toast: true,
                                        position: 'top-end',
                                        showConfirmButton: false,
                                        timer: 1200,
                                        timerProgressBar: true,
                                        didOpen: (toast) => {
                                          toast.addEventListener('mouseenter', Swal.stopTimer)
                                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                                        }
                                      })
                                      Toast.fire({
                                        icon: 'success',
                                        title: 'Subscribe !'
                                      }).then(function(){
                                        $('.subcribe-from').submit();
                                            });
                                    });
                                  });
                                </script>
                            </div>
                       
</footer>

</div><!--End layout-boxed-->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
<?php require_once('./Views/product-detail/hide.php'); ?>
<?php require_once('./Views/quickview.php'); ?>
<?php require_once('./Views/newlester.php'); ?>