  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
    <div class="container"> <a class="navbar-brand font-weight-bold" href="/Inicio">HOME</a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation" style=""> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
      <?php if(isset($usuario)){?>
        <ul class="navbar-nav">
          <a href="/Usuario" class="nav-link"><li class="text-white font-weight-bold mx-auto">Minhas informações</li></a>
          </ul> 
        <a class="btn navbar-btn text-white mx-2 btn-primary font-weight-bold" href="/Logout">Logout <i class="fas fa-sign-out-alt"></i></a>
      <?php }else{?>
        <a class="btn navbar-btn text-white mx-2 btn-primary font-weight-bold" href="/Login">Login</a>
      <?php }?>
      </div>
    </div>
  </nav><?php /**PATH C:\xampp\htdocs\sistema-comentarios\resources\views/Header_View.blade.php ENDPATH**/ ?>