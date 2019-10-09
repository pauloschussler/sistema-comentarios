<?php echo $__env->make('Import_View', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Header_View', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <div class="section py-5">
            <div class="py-5">
                <div class="container py-5">
                    <div class="row py-3">
                        <h3 class="mx-3"> Cadastrar</h3>
                    </div>
                    <form method="POST" action="<?php echo e(route('atualizarCadastro')); ?>">
                            <?php echo csrf_field(); ?>
                        <div class="row py-3">
                            <div class="col-lg-6 col-md-12 py-2">
                                <p class="font-weight-bold">Informações Pessoais</p>
                                <input type="text" name="idpessoa" value="<?=$dados->idpessoa?>" hidden>
                                <div class="py-1">
                                    <input type="text" name="nome" value="<?=$dados->nomepessoa?>" class="form-control py-2" placeholder="Nome" required>
                                </div>
                                <div class="row py-1">
                                    <div class="col">
                                        <input type="text" name="telefone" value="<?=$dados->telefone?>" class="form-control" placeholder="Telefone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 py-2">
                                <p class="font-weight-bold">Endereço</p>
                                <div class="row py-1">
                                    <div class="col-4">
                                            <input type="text" name="idpessoa" value="<?=$dados->idendereco?>" hidden>

                                        <input type="text" name="cep" value="<?=$dados->cep?>" class="form-control" placeholder="CEP" required>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="rua" value="<?=$dados->rua?>" class="form-control" placeholder="Logadouro" required>
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-4">
                                        <input type="text" name="numero" value="<?=$dados->numero?>" class="form-control" placeholder="Número" required>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="bairro" value="<?=$dados->bairro?>" class="form-control" placeholder="Bairro" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-5">
                                <div class="row">
                                    <div class="col-3">
                                    </div>
                                    <div class="col-6">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg btn-block font-weight-bold">Salvar</button>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </form>
                </div>
            </div>
        </div><?php /**PATH C:\xampp\htdocs\sistema-comentarios\resources\views/Usuario_View.blade.php ENDPATH**/ ?>