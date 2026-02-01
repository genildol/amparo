<div class="container my-5">
    <div class="row">

        <!-- Coluna do texto -->
        <div class="col-md-6">
            <h2 class="mb-4">
                <h2>Ajude a Amparo</h2>
            </h2>
            <div class="card shadow p-4">
                <ul class="list-unstyled">
                    <h4 class="mb-3">Doe por transferência bancária</h4>
                    <li><strong>Banco:</strong> Banco do Brasil</li>
                    <li><strong>Agência:</strong> 2371-X</li>
                    <li><strong>C/C:</strong> 29.121-8</li>
                    <li><strong>C/C:</strong> Associação Mantenedora de Proteção aos Animais de Ouricuri</li>
                </ul>
                <p class="mt-3"><em>Confira os dados corretos para não ser enganado</em></p>
                <!-- </div> -->
            </div>
            <hr class="my-4">

            <div class="card shadow p-4">
                <div class="container my-4 text-center">
                    <h4 class="mb-3">Doe via PIX</h4>
                    <p>Faça sua doação via PIX escaneando o QR Code abaixo:</p>
                    <img src="./public/images/qrcode-pix.png" alt="QR Code PIX - Amparo" class="img-fluid shadow rounded">
                    <p class="mt-3"><em>Obrigado por apoiar nossa causa! 💚</em></p>
                    <strong>C/C: Associação Mantenedora de Proteção aos Animais de Ouricuri</strong>

                    <div class="bd-clipboard d-flex align-items-center gap-2 mb-2"> 
                        <p id="cnpj" class="mb-2"> 86.886.496/0001-68 </p>
                        <br>
                        <button
                            type="button"
                            class="btn btn-sm btn-outline-primary"
                            onclick="copiarTexto('cnpj')">
                            Copiar
                        </button>
                    </div>
                    <script>
                        function copiarTexto(id) {
                            const texto = document.getElementById(id).innerText;

                            navigator.clipboard.writeText(texto)
                                .then(() => {
                                    alert('Copiado com sucesso!');
                                })
                                .catch(err => {
                                    alert('Erro ao copiar');
                                });
                        }
                    </script>


                </div>
                <p class="mt-3"><em>Use os dados acima ou escaneie o QR Code ao lado.</em></p>

            </div>

        </div>

        <!-- Coluna da imagem + cards -->
        <div class="col-md-6">

            <!-- Imagem principal -->
            <img src="./public/images/naoabandone.jpg" alt="Amparo cuidando dos animais" class="img-fluid rounded shadow mb-4">

            <!-- Cards de notícias -->
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Mutirão Veterinário</h5>
                    <p class="card-text">Ação no bairro Maria Gorete atendeu centenas de cães e gatos com exames e vacinação.</p>
                    <a href="#" class="btn btn-primary btn-sm">Leia mais</a>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Campanha de Adoção</h5>
                    <p class="card-text">Novos lares foram encontrados para animais resgatados pela Amparo.</p>
                    <a href="#" class="btn btn-primary btn-sm">Leia mais</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vacinação Antirrábica</h5>
                    <p class="card-text">Todos os animais atendidos receberam doses contra a raiva, fortalecendo a prevenção.</p>
                    <a href="#" class="btn btn-primary btn-sm">Leia mais</a>
                </div>
            </div>

        </div>

    </div>
</div>