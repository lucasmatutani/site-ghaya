<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <title>Cadastro</title>
</head>

<body>
    <form action="cadastro_sql.php" method="POST" id="form-cadastro" enctype="multipart/form-data">
        <div class="residencial">
            <h1 style="margin-bottom: 50px;">Cadastros de imóvel</h1>
            <div class="row mb-4">
                <div class="col-3">
                    <p>O Imóvel é</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo_negocio" id="inlineRadio1" value="0" required checked>
                        <label class="form-check-label" for="inlineRadio1">Residencial</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo_negocio" id="inlineRadio2" value="1" required>
                        <label class="form-check-label" for="inlineRadio2">Comercial</label>
                    </div>
                </div>
                <div class="col-2">
                    <p>Anunciar no Zap ?</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="zap" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="zap" id="inlineRadio2" value="0" required>
                        <label class="form-check-label" for="inlineRadio2">Não</label>
                    </div>
                </div>
                <div class="col-4">
                    <p style="margin: 0;">Anúncio</p>
                    <select class="form-control form-select-sm" aria-label="Default select example" name="tipo_anuncio" required>
                        <option value="1">STANDARD</option>
                        <option value="2">PREMIUM</option>
                        <option value="3">SUPER_PREMIUM</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <p>Tipo de Imóvel</p>
                    <select class="form-control form-select" aria-label="Default select example" name="tipo_imovel" required>
                        <option value="1">Apartamento</option>
                        <option value="2">Casa</option>
                        <option value="3">Duplex</option>
                        <option value="4">Exemplo</option>
                    </select>
                </div>
                <div class="col">
                    <p>Categoria</p>
                    <select class="form-control form-select" aria-label="Default select example" name="categoria">
                        <option value="1">Padrão</option>
                        <option value="2">Exemplo</option>
                        <option value="3">Exemplo</option>
                    </select>
                </div>
                <div class="col">
                    <p>Tipo de negociação</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="negocio" id="inlineRadio1" value="For Sale" required>
                        <label class="form-check-label" for="inlineRadio1">Venda</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="negocio" id="inlineRadio2" value="For Rent" required>
                        <label class="form-check-label" for="inlineRadio2">Aluguel</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="negocio" id="inlineRadio2" value="Sale/Rent" required>
                        <label class="form-check-label" for="inlineRadio2">Venda e Aluguel</label>
                    </div>
                </div>
            </div>

            <div class="row md-4">
                <div class="col">
                    <p>Quartos</p>
                    <select class="form-control form-select" aria-label="Default select example" name="quartos" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                    </select>
                </div>
                <div class="col">
                    <p>Suítes</p>
                    <select class="form-control form-select" aria-label="Default select example" name="suites" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                    </select>
                </div>
                <div class="col">
                    <p>Banheiros</p>
                    <select class="form-control form-select" aria-label="Default select example" name="banheiros" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                    </select>
                </div>
                <div class="col">
                    <p>Vagas</p>
                    <select class="form-control form-select" aria-label="Default select example" name="vagas" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                    </select>
                </div>
                <div class="col">
                    <p>Área Útil</p>
                    <input type="text" id="TextInput" class="form-control" placeholder="" name="area_util" required>
                </div>
                <div class="col">
                    <p>Área Total (opcional)</p>
                    <input type="text" id="TextInput" class="form-control" name="area_total" placeholder="">
                </div>
                <div class="col">
                    <p>Andar</p>
                    <select class="form-control form-select" aria-label="Default select example" name="andar" required>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="row md-4 input-group" style="margin-top: 20px;">
                <div class="col">
                    <p>CEP</p>
                    <input type="text" id="cep" class="form-control" name="cep" placeholder="" required maxlength="9">
                </div>

                <div class="col">
                    <p>Cidade</p>
                    <input type="text" id="cidade" class="form-control" name="cidade" placeholder="" required>
                </div>
                <div class="col-4">
                    <p>Bairro</p>
                    <input type="text" id="bairro" class="form-control" name="bairro" placeholder="" required>
                </div>
                <div class="col-1">
                    <p>UF</p>
                    <input type="text" id="estado" class="form-control" name="estado" placeholder="" required>
                </div>
            </div>

            <div class="row md-4 input-group" style="margin-top: 20px;">
                <div class="col">
                    <p>Endereço</p>
                    <input type="text" id="logradouro" class="form-control" name="endereco" placeholder="" required>
                </div>
                <div class="col-1">
                    <p>Número</p>
                    <input type="text" id="TextInput" class="form-control" name="numero" placeholder="" required>
                </div>
                <div class="col-1">
                    <p>Complemento</p>
                    <input type="text" id="TextInput" class="form-control" name="complemento" placeholder="" required>
                </div>
                <div class="col">
                    <p>Bairro Comercial</p>
                    <input type="text" id="TextInput" class="form-control" name="bairro_comercial" placeholder="" required>
                </div>
            </div>


            <div class="row md-4">
                <h3 style="margin: 40px 0;">Sobre o condomínio (opcional)</h3>
                <div class="col-2">
                    <p>Número de Andares</p>
                    <input type="number" class="form-control" name="nmr_andares" id=" ">
                </div>
                <div class="col">
                    <p>Número de Unidades por Andar</p>
                    <select class="form-control form-select" aria-label="Default select example" name="nmr_unidades">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                    </select>
                </div>
                <div class="col">
                    <p>Número de torres</p>
                    <select class="form-control form-select" aria-label="Default select example" name="nmr_torres">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                    </select>
                </div>
                <div class="col">
                    <p>Ano de Construção</p>
                    <input type="text" id="TextInput" class="form-control" placeholder="" name="construcao">
                </div>
            </div>
            <h3 style="margin: 40px 0;">Código, Título e descrição do anúncio</h3>
            <div class="row md-4">
                <div class="col-2">
                    <p>Código do Anúncio (interno)</p>
                    <input type="text" id="TextInput" class="form-control" name="codigo_interno" placeholder="" required>
                </div>
                <div class="col">
                    <p>Título da Descrição</p>
                    <input type="text" id="TextInput" class="form-control" name="titulo" placeholder="" required>
                </div>
            </div>
            <div class="row md-4" style="margin-top: 30px; text-align: center;" required>
                <div class="col">
                    <p>Descrição do Anúncio</p>
                    <textarea style="width: 100%;" name="descricao" id="" cols="100" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3 style="margin-top: 40px;">Características do imóvel (Opcional)</h3>
                    <p><b>Diferenciais</b></p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="ac_animais">
                        <label class="form-check-label" for="flexCheckDefault">
                            Aceita Animais
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="ar_condicionado">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ar-condicionado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="closet">
                        <label class="form-check-label" for="flexCheckDefault">
                            Closet
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="cozinha_ame">
                        <label class="form-check-label" for="flexCheckDefault">
                            Cozinha Americana
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="lareira">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lareira
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="mobiliado">
                        <label class="form-check-label" for="flexCheckDefault">
                            Mobiliado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="varanda_gourmet">
                        <label class="form-check-label" for="flexCheckDefault">
                            Varanda Gourmet
                        </label>
                    </div>
                </div>
                <div class="col">
                    <h3 style="margin-top: 40px;">Sobre o Condomínio (opcional)</h3>
                    <div class="row">
                        <div class="col">
                            <p><b>Lazer e Esporte</b></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="academia">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Academia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="churrasqueira">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Churrasqueira
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="cinema">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Cinema
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="espaco_gourmet">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Espaço Gourmet
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="jardim">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Jardim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="piscina">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Piscina
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="playground">
                                <label class="form-check-label" for="flexCheckDefault">
                                    PlayGround
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="squash">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Quadra de Squash
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="tenis">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Quadra de Tênis
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="poliesportiva">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Quadra Poliesportiva
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="festas">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Salão de Festas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="jogos">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Salão de Jogos
                                </label>
                            </div>
                        </div>

                        <div class="col">
                            <p><b>Comodidades e Serviços</b></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="deficientes">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Acesso para deficientes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="bicicletario">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Bicicletários
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="coworking">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Coworking
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="elevador">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Elevador
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="lavanderia">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Lavanderia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="sauna">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Sauna
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="spa">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Spa
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="file" name="imagens[]" id="file-input" multiple>
                <div class="row" id="preview" style="border: 1px solid #000; padding: 50px; margin-top: 10px;">
                </div>
            </div>
        </div>
        <div class="btn-submit">
            <input type="submit" value="Cadastrar imóvel">
        </div>
    </form>
</body>

<script>
    const uploadForm = document.querySelector('#form_cadastro');
    const fileInput = document.querySelector('#file-input');
    const previewDiv = document.querySelector('#preview');
    let previews = [];

    fileInput.addEventListener('change', () => {
        // Percorra todos os arquivos selecionados pelo usuário
        for (const file of fileInput.files) {
            // Verifique se o arquivo já foi carregado antes
            if (!previews.some(preview => preview.name === file.name)) {
                // Crie um objeto FileReader para ler o conteúdo do arquivo
                const reader = new FileReader();
                reader.onload = () => {
                    // Crie um elemento de imagem para exibir a prévia do arquivo
                    const img = document.createElement('img');
                    img.src = reader.result;
                    img.style.width = '300px';
                    img.style.height = '200px';
                    img.style.margin = '0 0 40px 0';
                    const div = document.createElement('div');
                    div.classList.add("col")
                    div.appendChild(img);
                    previewDiv.appendChild(div);

                    // Adicione a prévia do arquivo à matriz de prévias
                    previews.push({
                        name: file.name,
                        url: reader.result
                    });
                };
                reader.readAsDataURL(file);
            }
        }
    });

    $(document).ready(function() {
        $("#cep").mask("99999-999");

        $("#cep").blur(function() {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep != "") {
                var url = "https://viacep.com.br/ws/" + cep + "/json/";
                $.getJSON(url, function(data) {
                    if (data.logradouro == undefined) {
                        alert("CEP inválido.");
                    } else {
                        $("#logradouro").val(data.logradouro);
                        $("#bairro").val(data.bairro);
                        $("#cidade").val(data.localidade);
                        $("#estado").val(data.uf);
                    }
                });
            }
        });
    });
    uploadForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const formData = new FormData(uploadForm);

        // Crie um objeto XML
        const xml = `
            <xml version="1.0" encoding="UTF-8">
            <ListingDataFeed xmlns="http://www.vivareal.com/schemas/1.0/VRSync" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vivareal.com/schemas/1.0/VRSync">
                <Header>
                    <Provider>Desenvolvedor do Feed</Provider>
                    <Email>lucasmatutani@gmail.com</Email>
                    <ContactName>Lucas Matutani</ContactName>
                    <PublishDate></PublishDate>
                    <Telephone>11-948610869</Telephone>
                </Header>
                <Listings>
                    <Listing>
                        <ListingID>${formData.get('zap')}</ListingID>
                        <Title><![CDATA[${formData.get('titulo')}]]></Title>
                        <TransactionType>${formData.get('negocio')}</TransactionType>
                        <Location displayAddress="Street">
                            <Country abbreviation="BR">Brasil</Country>
                            <State abbreviation="SP">${formData.get('estado')}</State>
                            <City><![CDATA[${formData.get('cidade')}]]></City>
                            <Zone>Zona Sul</Zone>
                            <Neighborhood><![CDATA[${formData.get('bairro')}]]></Neighborhood>
                            <Address><![CDATA[${formData.get('endereco')}]]></Address>
                            <StreetNumber>${formData.get('numero')}</StreetNumber>
                            <Complement>${formData.get('complemento')}</Complement>
                            <PostalCode>${formData.get('cep')}</PostalCode>
                            <Media></Media>
                            <ContactInfo>
                                <Name>Ghaya Imóveis</Name>
                                <Email>contato@ghayaimoveis.com.br</Email>
                                <Website>http://www.ghayaimoveis.com.br</Website>
                                <Logo>http://www.ghayaimoveis.com.br/assets/images/logo/logo-ghaya.png</Logo>
                                <Telephone>(11) 5055-5598</Telephone>
                                <Location>
                                    <Country abbreviation="BR">Brasil</Country>
                                    <State abbreviation="SP">Sao Paulo</State>
                                    <City>São Paulo</City>
                                    <Neighborhood>Vila Buarque</Neighborhood>
                                    <Address>Rua Doutor Cesário Mota Júnior, 369 - Conjunto 23</Address>
                                    <PostalCode>01221-020</PostalCode>
                                </Location>
                            </ContactInfo>
                        </Location>
                    <PublicationType>STANDARD</PublicationType>
                    </Listing>
                </Listings>
            </ListingDataFeed>

            <root>
                <nome>${formData.get('nome')}</nome>
                <email>${formData.get('email')}</email>
                <mensagem>${formData.get('mensagem')}</mensagem>
            </root>
        `;

        const url = 'https://example.com/submit-xml'; // URL de envio
        const response = fetch(url, {
            method: 'POST',
            headers: {
                'User-Agent': 'VivaRealBot/1.0 (+http://www.vivareal.com/bot.html)'
            },
            body: xml
        });

        const result = response.text();
        console.log(result); // Exibe a resposta do servidor
    });
</script>

</html>