<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <h1>
                    Cadastre aqui o seu serviço
                </h1>
                <h4>
                    Preencha o formulário com as informações da sua empresa e do serviço prestado:
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-5">
                <form id="formCadastraServiço" method="post" action="cadastro-servico.php">
                    <input type="hidden" class="form-control" id="idPrestador" name="id_prestador" value="<?php echo $_COOKIE["idPrestador"] ?>">
                    <div class="form-group">
                        <label for="tipoServico">Tipo do serviço:</label>
                        <input type="text" class="form-control" id="tipoServico" name="tipo" placeholder="Tipo do serviço prestado">
                    </div>
                    <div class="form-group">
                        <label for="descServico">Descrição do serviço:</label>
                        <textarea class="form-control" id="descServico" name="descricao" placeholder="Nome do serviço prestado" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="precoServico">Preço do serviço:</label>
                        <input type="text" class="form-control" id="precoServico" name="preco" aria-describedby="precoHelp" placeholder="Valor">
                        <small id="precoHelp" class="form-text text-muted">Lembre-se de especificar se é cobrado por hora, por quantidade, etc...</small>
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</section>