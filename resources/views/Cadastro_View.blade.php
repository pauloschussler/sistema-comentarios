@include('Import_View')
@include('Header_View')


        <div class="section py-5">
            <div class="py-5">
                <div class="container py-5">
                    <div class="row py-3">
                        <h3 class="mx-3"> Cadastrar</h3>
                    </div>
                    <form method="POST" action="{{ route('realizaCadastro') }}">
                            @csrf
                        <div class="row py-3">
                            <div class="col-lg-6 col-md-12 py-2">
                                <p class="font-weight-bold">Informações Pessoais</p>
                                <div class="py-1">
                                    <input type="text" name="nome" class="form-control py-2" placeholder="Nome" required>
                                </div>
                                <div class="row py-1">
                                    <div class="col">
                                        <input type="text" name="cpf" class="form-control" placeholder="CPF" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="telefone" class="form-control" placeholder="Telefone" required>
                                    </div>
                                </div>
                                <div class="py-1">
                                    <input type="email" name="email" class="form-control py-2" placeholder="E-mail" required>
                                </div>
                                <div class="py-1">
                                    <input type="password" name="senha" class="form-control py-2" placeholder="Senha" required
                                        minlength="4">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 py-2">
                                <p class="font-weight-bold">Endereço</p>
                                <div class="row py-1">
                                    <div class="col-4">
                                        <input type="text" name="cep" class="form-control" placeholder="CEP" required>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="rua" class="form-control" placeholder="Logadouro" required>
                                    </div>
                                </div>
                                <div class="row py-1">
                                    <div class="col-4">
                                        <input type="text" name="numero" class="form-control" placeholder="Número" required>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="bairro" class="form-control" placeholder="Bairro" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-5">
                                <div class="row">
                                    <div class="col-3">
                                    </div>
                                    <div class="col-6">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg btn-block font-weight-bold">Cadastrar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-5">
                                <div class="row">
                                    <div class="col-3">
                                    </div>
                                    <div class="col-6 text-center">
                                        <p class="text_esqueceu font-weight-bold text-info"><a href="/Login">Já tem
                                                uma
                                                conta?
                                                Faça login</a></p>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </form>
                </div>
            </div>
        </div>