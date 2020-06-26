<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <h1 class="text-center">
                    Seja bem-vindo ao portal de serviços terceirizado PSWeb
                </h1>
                <p>
                    Aqui você encontrará o prestador de serviço necessário para resolver o seu problema, ou se você é prestador de serviço, você poderá divulgar para várias pessoas, cadastrando o seu serviço <a href="cadastro-servico.php">aqui.</a>
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <h1>
                    Serviços cadastrados
                </h1>
                <h6 class="mt-3">
                    Procure o que você está precisando e entre em contato direto com o prestador do serviço.
                </h6>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <input class="form-control mb-4" id="filtroServico" type="text" placeholder="Procurando por o que?">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Tipo de serviço</th>
                        <th>Descrição do serviço</th>
                        <th>Valor</th>
                        <th>Prestador do serviço</th>
                        <th>Contato Prestador</th>
                    </tr>
                </thead>
                <tbody id="tabelaServico">
                <?php foreach($servicos as $key=>$value): ?>
                    <tr>
                        <td><?php echo $value['tipo'] ?></td>
                        <td><?php echo $value['descricao'] ?></td>
                        <td><?php echo $value['preco'] ?></td>
                        <td><?php echo $value['nome_empresa'] ?></td>
                        <td>E-mail: <?php echo $value['email_empresa'] ?><br />Telefone: <?php echo $value['telefone_comercial'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>         
    </div>

</section>