<?php echo $__env->make('Import_View', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="align-items-center d-flex photo-overlay py-5 cover" style="background-image: url(<?php echo e(asset('assets/imagens/background.png')); ?>);">
    <div class="container container_login py-5">
        <div class="row py-5">
            <div class="col-12 py-5">
                <div class="mx-auto col-lg-8 col-md-10 bg-white rounded border p-5 ">
                    <div class="py-2">
                        <h3 class="mb-4 text-center font-weight-bold">Login</h3>
                        <h5 class="text-center">Digite suas informações de acesso ao sistema<h5>
                    </div>
                    <div class="py-3 col-11 mx-auto">
                    <form method="POST" action="<?php echo e(route('verificaLogin')); ?>">
                        <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input type="email" class="form-control font-weight-bold" placeholder="Endereço de e-mail" id="email" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control font-weight-bold" placeholder="Senha" id="senha" name="senha" required>
                            </div>
                            <div class="form-group mb-3 py-2">
                                <button type="submit" class="btn btn-dark float-right font-weight-bold">Entrar</button>
                            </div>
                    </form>
                    </div>
                    <div class="col-12 py-4 text-center">
                            <p class="text-center font-weight-bold">Não possui uma conta?<p>
                            <a href="/Cadastro" class="btn btn-primary text-center font-weight-bold">Cadastre-se</a>
                    </div>
                    <?php if ((isset($erro)) && ($erro == true)) { ?>
                        <div class="col-12 py-5">
                            <div class="alert alert-danger text-center mx-auto animated pulse delay-1s" role="alert">
                                <b class="font-weight-bold">Erro no login!</b> Usuário ou senha incorretos, tente novamente.
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\sistema-comentarios\resources\views/Login_View.blade.php ENDPATH**/ ?>