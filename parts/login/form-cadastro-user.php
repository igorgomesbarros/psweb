<section class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <h1>
                É prestador de serviço?
            </h1>
            <h6>
                Cadaste-se agora para poder divulgar os seus serviços prestados para várias pessoas
            </h6>
            <form class="mt-5" method="post" action="cadastro-user.php">
                <div class="form-group">
                    <label for="nome">Seu nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required placeholder="Digite o seu nome">
                </div>
                <div class="form-group">
                    <label for="emailCadastro">Seu e-mail:</label>
                    <input type="email" class="form-control" id="emailCadastro" name="email" required placeholder="Digite o seu email pessoal">
                </div>
                <div class="form-group">
                    <label for="celular">Numero de celular:</label>
                    <input type="text" class="form-control" id="celular" name="celular" required placeholder="Digite o numero do seu celular pessoal">
                </div>
                <div class="form-group">
                    <label for="cpf">Seu CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required placeholder="Digite o numero do seu CPF">
                </div>
                <div class="form-group">
                    <label for="nome">Nome da sua empresa:</label>
                    <input type="text" class="form-control" id="nomeEmpresa" required name="nomeEmpresa" placeholder="Digite o nome da sua empresa">
                </div>
                <div class="form-group">
                    <label for="emailCadastro">E-mail da sua empresa:</label>
                    <input type="email" class="form-control" id="emailEmpresa" required name="emailEmpresa" placeholder="Digite o e-mil da sua empresa">
                </div>
                <div class="form-group">
                    <label for="celular">Telefone Comercial:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" required placeholder="Digite o numero do seu telefone da sua empresa">
                </div>
                <div class="form-group">
                    <label for="cpf">CNPJ:</label>
                    <input type="text" class="form-control" id="cnpj" name="cnpj" required placeholder="Digite o numero do CNPJ da sua empresa">
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" id="senha" required name="senha" maxlength="8">
                </div>
                <button type="submit" class="btn btn-success mt-4">Cadastrar</button>
            </form>
        </div>
    </div>
</section>