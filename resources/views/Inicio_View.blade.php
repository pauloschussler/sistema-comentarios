@include('Import_View')
@include('Header_View')
<div class="py-5">
  <div class="container">
    <div class="row py-5" style="">
      <div class="col-md-5 order-2 order-md-1"> <img class="img-fluid d-block my-3 mx-auto animate-in-left" src="{{ asset('assets/imagens/iphone.jpg') }}" width="200"> </div>
      <div class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center">
        <h2>iPhone 8</h2>
        <p class="my-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p> <a class="btn btn-outline-primary" href="#features">Learn more</a>
      </div>
    </div>
    <div class="row border-bottom">
      <?php if(isset($usuario)){?>
      <div class="col-8 mx-auto">
        <div class="row py-2">
        <div class="col-9">
            <form method="POST" action="{{ route('comentario') }}">
                @csrf
            <textarea class="form-control" rows="2" name="comentario" placeholder="Insira um novo comentário." required></textarea>
            <input type="text" id="usuario" name="usuario" value="<?=$usuario?>" hidden>
          </div>
        <div class="col-3">
          <button class="btn btn-dark font-weight-bold align-bottom" type="submit">Comentar</button>
        </div>
        </div>
        </form>
      </div>
    <?php }else{?>
      <div class="col-8 mx-auto">
          <div class="row py-2">
          <div class="col-9">
            <form>
              <textarea class="form-control" readonly rows="2" name="comentario" placeholder="Somente usuários cadastrados podem realizar comentários." required></textarea>
          </div>
          <div class="col-3">
            <button class="btn btn-dark font-weight-bold mx-auto align-middle" type="submit">Comentar</button>
          </div>
          </div>
          </form>
        </div>
    <?php } ?>
    </div>
    <div class="row py-5 border-top">
        <div class="col-10 mx-auto">
          <h3 class="text-center font-weight-bold">Comentários</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-10 mx-auto">
          <?php foreach($comentarios as $comentario){?>
            <div class="row py-3">
                <div class="col-md-2"><img class="img-fluid d-block rounded-circle" src="{{URL::asset('assets/imagens/usuarios/padrao.jpg')}}"></div>
                <div class="col-md-10">
                  <div class="card">
                    <div class="card-header"><b><?= $comentario->nomepessoa ?></b>, <?= $comentario->data ?> - <?= $comentario->hora ?></div>
                    <div class="card-body">
                      <p><?= $comentario->comentario ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
        </div>
      </div>
  </div>
</div>



