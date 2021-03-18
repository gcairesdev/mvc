<div class="alert alert-success alert-dismissible fade show text-center">
    <strong>Viva!</strong> Sua mensagem foi enviada com sucesso.

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="container mt-5">

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Bem vindo!</h4>

        <p>Esta é a tela de contato com sucesso!<p>

        <hr>

        <p>Você pode alterar seu conteúdo em <?= __FILE__ ?></p>
    </div>

    <form method="post">
        <div class="form-group">
            <input
                type="text"
                name="nome"
                placeholder="Nome"
                class="form-control"
            >
        </div>

        <div class="form-group">
            <textarea
                name="mensagem"
                placeholder="Mensagem"
                class="form-control"
            ></textarea>
        </div>

        <div class="form-group">
            <input
                type="submit"
                name="acao"
                value="Enviar!"
                class="form-control"
            >
        </div>
    </form>

</div>