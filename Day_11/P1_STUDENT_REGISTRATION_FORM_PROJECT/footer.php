          <footer class="footer mt-auto py-3">
               <div class="container pb-5">
                    <hr>
                    <span class="text-muted">
                         Copyright &copy; 2021 | <a href="https://www.github.com/keval2000/">Keval</a>
                    </span>
               </div>
          </footer>
          <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
          <script src="assets/js/popper.min.js"></script>
          <script src="assets/js/bootstrap.min.js"></script>
          <script>
              $(".toggle-password").click(function(){
              $(this).toggleClass("fa-eye fa-eye-slash");
              var input = $($(this).attr("toggle"));
                    if (input.attr("type") == "password"){
                         input.attr("type", "text");
                    } else{
                         input.attr("type", "password");
                    }
               });
               $(document).ready(function(){
                    $("#form_button").click(function(){
                         $("#form").toggle();
                         document.getElementById("form_button").style.visibility = "hidden";
                         document.getElementById("form_label").style.visibility = "hidden";
                         document.getElementById("form_heading").style.visibility = "visible";
                    });
               });
          </script>
     </body>
</html>