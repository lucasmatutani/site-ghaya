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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" type="text/javascript"></script>
    <title>Cadastro</title>
</head>

<body>
    <form action="cadastro_sql.php" method="POST" id="form_cadastro" enctype="multipart/form-data">
        <div class="residencial">
            <h1 style="margin-bottom: 50px;">Cadastros de imóvel</h1>
            <div class="row mb-2" style="margin-bottom: 30px !important;">
                <div class="col-3">
                    <p>O Imóvel é</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo_negocio" id="residential" value="residential" onclick="residencial()" required checked>
                        <label class="form-check-label" for="residential">Residencial</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo_negocio" id="commercial" value="Commercial" onclick="comercial()" required>
                        <label class="form-check-label" for="commercial">Comercial</label>
                    </div>
                </div>
                <div class="col-2">
                    <p>Anunciar no Zap ?</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="zap" id="sim" value="1" required checked>
                        <label class="form-check-label" for="sim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="zap" id="nao" value="0" required>
                        <label class="form-check-label" for="nao">Não</label>
                    </div>
                </div>
                <div class="col-4">
                    <p>Tipo de negociação</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="negocio" id="venda" value="For Sale" onclick="venda()" required checked>
                        <label class="form-check-label" for="venda">Venda</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="negocio" id="aluguel" value="For Rent" onclick="aluguel()" required>
                        <label class="form-check-label" for="aluguel">Aluguel</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="negocio" id="venda_aluguel" value="Sale/Rent" onclick="vendaAluguel()" required>
                        <label class="form-check-label" for="venda_aluguel">Venda e Aluguel</label>
                    </div>
                </div>
            </div>
            <div class="row mb-2" style="margin-bottom: 30px !important;">
                <div class="col-2">
                    <p style="margin: 0 0 8px 0;">Tipo Anúncio</p>
                    <select class="form-control form-select" aria-label="Default select example" name="tipo_anuncio" required>
                        <option value="STANDARD">padrão</option>
                        <option value="PREMIUM">Destaque</option>
                        <option value="SUPER_PREMIUM">Super Destaque</option>
                    </select>
                </div>
                <div class="col-2">
                    <p style="margin: 0 0 8px 0;">Tipo de Imóvel</p>
                    <select class="form-control form-select" aria-label="Default select example" id="tp_imovel_residencial" name="tipo_imovel" required>
                        <option value="Residential / Apartment">Apartamento</option>
                        <option value="Residential / Home">Casa</option>
                        <option value="Residential / Condo">Casa de Condomínio</option>
                        <option value="Residential / Village House">Casa de Vila</option>
                        <option value="Residential / Penthouse">Cobertura</option>
                        <option value="Residential / Farm Ranch">Fazenda/Sítio/Casa</option>
                        <option value="Residential / Flat">Flat</option>
                        <option value="Residential / Kitnet">KitNet/Conjugado</option>
                        <option value="Residential / Land Lot">Lote/Terreno</option>
                        <option value="Commercial / Edificio Residencial">Prédio/Edifício inteiro</option>
                        <option value="Residential / Studio">Studio</option>
                    </select>
                    <select class="form-control form-select disable" aria-label="Default select example" id="tp_imovel_comercial" name="tipo_imovel" required disabled>
                        <option value="Commercial / Building">Casa</option>
                        <option value="Commercial / Office">Conjunto</option>
                        <option value="Commercial / Industrial">Galpão/Depósito/Armazém</option>
                        <option value="Commercial / Land Lot">Lote/Terreno</option>
                        <option value="Commercial / Business">Ponto Comercial/Loja/Box</option>
                        <option value="Commercial / Edificio Comercial">Prédio/Edíficio inteiro</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2" id="container_preco">
                    <p>Preço</p>
                    <input type="text" id="preco" class="form-control" placeholder="" name="preco" required>
                </div>
                <div class="col-2 disable" id="container_aluguel">
                    <p>Valor Alguel mensal</p>
                    <input type="text" id="valor_aluguel" class="form-control" placeholder="" name="valor_aluguel" disabled>
                </div>
                <div class="col-1">
                    <p>Iptu</p>
                    <input type="text" id="iptu" class="form-control" placeholder="" name="iptu" required>
                </div>
                <div class="col-2">
                    <p>Condomínio</p>
                    <input type="text" id="condominio" class="form-control" placeholder="" name="condominio" required>
                </div>
                <div class="col-2">
                    <p>Zona</p>
                    <select class="form-control form-select" aria-label="Default select example" name="zona">
                        <option value="Zona Leste">Zona Leste</option>
                        <option value="Zona Norte">Zona Norte</option>
                        <option value="Zona Oeste">Zona Oeste</option>
                        <option value="Zona sul">Zona sul</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col disable" id="container_garantias">
                    <p>Garantias</p>
                    <div style="display: flex; flex-direction: row;" class="check_garantias">
                        <div class="form-check select_garantia">
                            <input class="form-check-input garantias" type="checkbox" value="SECURITY_DEPOSIT" id="deposito" name="deposito">
                            <label class="form-check-label" for="deposito">
                                Depósito de Segurança
                            </label>
                        </div>
                        <div class="form-check select_garantia">
                            <input class="form-check-input garantias" type="checkbox" value="GUARANTOR" id="fiador" name="fiador">
                            <label class="form-check-label" for="fiador">
                                Fiador
                            </label>
                        </div>
                        <div class="form-check select_garantia">
                            <input class="form-check-input garantias" type="checkbox" value="INSURANCE_GUARANTEE" id="seguro" name="seguro">
                            <label class="form-check-label" for="seguro">
                                Garantia de Seguro
                            </label>
                        </div>
                        <div class="form-check select_garantia">
                            <input class="form-check-input garantias" type="checkbox" value="GUARANTEE_LETTER" id="carta" name="carta">
                            <label class="form-check-label" for="carta">
                                Carta de Garantia
                            </label>
                        </div>
                        <div class="form-check select_garantia">
                            <input class="form-check-input garantias" type="checkbox" value="CAPITALIZATION_BONDS" id="titulo" name="titulo">
                            <label class="form-check-label" for="titulo">
                                Títulos de Capitalização
                            </label>
                        </div>
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
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col">
                    <p>Suítes</p>
                    <select class="form-control form-select" aria-label="Default select example" name="suites" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col">
                    <p>Banheiro(s)</p>
                    <select class="form-control form-select" aria-label="Default select example" name="banheiros" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col">
                    <p>Vagas</p>
                    <select class="form-control form-select" aria-label="Default select example" name="vagas" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
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
                    <input type="text" id="TextInput" class="form-control" name="andar" placeholder="">
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
                <div class="col-2">
                    <p>Complemento</p>
                    <input type="text" id="TextInput" class="form-control" name="complemento" placeholder="" required>
                </div>
                <div class="col">
                    <p>Bairro Comercial</p>
                    <input type="text" id="TextInput" class="form-control" name="bairro_comercial" placeholder="" required>
                </div>
            </div>
            <div class="row md-4">
                <h3 style="margin: 40px 0;">Dados do proprietário</h3>
                <div class="col-3">
                    <p>Nome</p>
                    <input type="text" id="TextInput" class="form-control" name="nome" placeholder="" required>
                </div>
                <div class="col-3">
                    <p>Email</p>
                    <input type="text" id="TextInput" class="form-control" name="email" placeholder="" required>
                </div>
                <div class="col-3">
                    <p>Telefone</p>
                    <input type="text" id="telefone" class="form-control" name="telefone" placeholder="" required>
                </div>
            </div>

            <div class="row md-4">
                <h3 style="margin: 40px 0;">Características do condomínio (opcional)</h3>
                <div class="col-2">
                    <p>Número de Andares</p>
                    <input type="number" class="form-control" name="nmr_andares" id="">
                </div>
                <div class="col">
                    <p>Número de Unidades por Andar</p>
                    <select class="form-control form-select" aria-label="Default select example" name="nmr_unidades">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col">
                    <p>Número de torres</p>
                    <select class="form-control form-select" aria-label="Default select example" name="nmr_torres">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col">
                    <p>Ano de Construção</p>
                    <input type="text" id="TextInput" class="form-control" placeholder="" name="construcao">
                </div>
            </div>
            <h3 style="margin: 40px 0;">Código, Título e descrição do anúncio</h3>
            <div class="row md-4">
                <div class="col-3">
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
            <div class="row md-4">
                <div class="col">
                    <h3 style="margin-top: 40px;">Características do imóvel (Opcional)</h3>
                    <p><b>Diferenciais</b></p>
                    <div class="form-check">
                        <input class="form-check-input feature" type="checkbox" value="Pets Allowed" id="animais" name="ac_animais">
                        <label class="form-check-label" for="animais">
                            Aceita Animais
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input feature" type="checkbox" value="Cooling" id="ar_condicionado" name="ar_condicionado">
                        <label class="form-check-label" for="ar_condicionado">
                            Ar-condicionado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input feature" type="checkbox" value="Closet" id="closet" name="closet">
                        <label class="form-check-label" for="closet">
                            Closet
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input feature" type="checkbox" value="Fireplace" id="lareira" name="lareira">
                        <label class="form-check-label" for="lareira">
                            Lareira
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input feature" type="checkbox" value="Furnished" id="mobiliado" name="mobiliado">
                        <label class="form-check-label" for="mobiliado">
                            Mobiliado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input feature" type="checkbox" value="Gourmet Balcony" id="varanda_gourmet" name="varanda_gourmet">
                        <label class="form-check-label" for="varanda_gourmet">
                            Varanda Gourmet
                        </label>
                    </div>
                </div>
                <div class="col">
                    <h3 style="margin-top: 40px;">Sobre o Condomínio (opcional)</h3>
                    <div class="row md-4">
                        <div class="col">
                            <p><b>Lazer e Esporte</b></p>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Gym" id="academia" name="academia">
                                <label class="form-check-label" for="academia">
                                    Academia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="BBQ" id="churrasqueira" name="churrasqueira">
                                <label class="form-check-label" for="churrasqueira">
                                    Churrasqueira
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Media Room" id="cinema" name="cinema">
                                <label class="form-check-label" for="cinema">
                                    Cinema
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Gourmet Area" id="espaco_gourmet" name="espaco_gourmet">
                                <label class="form-check-label" for="espaco_gourmet">
                                    Espaço Gourmet
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Garden Area" id="jardim" name="jardim">
                                <label class="form-check-label" for="jardim">
                                    Jardim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Pool" id="piscina" name="piscina">
                                <label class="form-check-label" for="piscina">
                                    Piscina
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Playground" id="playground" name="playground">
                                <label class="form-check-label" for="playground">
                                    PlayGround
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Squash" id="squash" name="squash">
                                <label class="form-check-label" for="squash">
                                    Quadra de Squash
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Tennis court" id="tenis" name="tenis">
                                <label class="form-check-label" for="tenis">
                                    Quadra de Tênis
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Sports Court" id="poliesportiva" name="poliesportiva">
                                <label class="form-check-label" for="poliesportiva">
                                    Quadra Poliesportiva
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Party Room" id="festas" name="festas">
                                <label class="form-check-label" for="festas">
                                    Salão de Festas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Game room" id="jogos" name="jogos">
                                <label class="form-check-label" for="jogos">
                                    Salão de Jogos
                                </label>
                            </div>
                        </div>

                        <div class="col">
                            <p><b>Comodidades e Serviços</b></p>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Bicycles Place" id="bicicletario" name="bicicletario">
                                <label class="form-check-label" for="bicicletario">
                                    Bicicletários
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Meeting Room" id="coworking" name="coworking">
                                <label class="form-check-label" for="coworking">
                                    Coworking
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Elevator" id="elevador" name="elevador">
                                <label class="form-check-label" for="elevador">
                                    Elevador
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Laundry" id="lavanderia" name="lavanderia">
                                <label class="form-check-label" for="lavanderia">
                                    Lavanderia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Sauna" id="sauna" name="sauna">
                                <label class="form-check-label" for="sauna">
                                    Sauna
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input feature" type="checkbox" value="Spa" id="spa" name="spa">
                                <label class="form-check-label" for="spa">
                                    Spa
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row md-4">
                <h3>Fotos</h3>
                <input type="file" name="imagens[]" id="file_input" multiple>
                <div class="row" id="preview" style="margin-top: 10px; padding: 30px;"></div>
            </div>
        </div>
    </form>
    <div class="btn-submit">
        <input type="submit" value="Cadastrar imóvel" onclick="submitForm(event)">
    </div>
</body>

<script>
    function comercial() {
        typeResidencial = document.querySelector("#tp_imovel_residencial");
        typeResidencial.setAttribute('disabled', '');
        typeResidencial.classList.add("disable");

        typeComercial = document.querySelector("#tp_imovel_comercial");
        typeComercial.removeAttribute('disabled');
        typeComercial.classList.remove("disable")
    }

    function residencial() {
        typeResidencial = document.querySelector("#tp_imovel_residencial");
        typeResidencial.removeAttribute('disabled');
        typeResidencial.classList.remove("disable")

        typeComercial = document.querySelector("#tp_imovel_comercial");
        typeComercial.setAttribute('disabled', '');
        typeComercial.classList.add("disable");
    }

    function venda() {
        valorAluguel = document.querySelector("#valor_aluguel");
        containerAluguel = document.querySelector("#container_aluguel");

        valorAluguel.setAttribute('disabled', '');
        containerAluguel.classList.add("disable");
        document.querySelector("#container_garantias").classList.add("disable");
        document.querySelector("#container_preco").classList.remove("disable");
    }

    function aluguel() {
        valorAluguel = document.querySelector("#valor_aluguel");
        containerAluguel = document.querySelector("#container_aluguel");

        valorAluguel.removeAttribute('disabled', '');
        containerAluguel.classList.remove("disable");
        document.querySelector("#container_garantias").classList.remove("disable");
        document.querySelector("#container_preco").classList.add("disable");

    }

    function vendaAluguel() {
        valorAluguel = document.querySelector("#valor_aluguel");
        containerAluguel = document.querySelector("#container_aluguel");

        valorAluguel.removeAttribute('disabled', '');
        containerAluguel.classList.remove("disable");
        document.querySelector("#container_garantias").classList.remove("disable");
        document.querySelector("#container_preco").classList.remove("disable");

    }

    const uploadForm = document.querySelector('#form_cadastro');
    const fileInput = document.querySelector('#file_input');
    const previewDiv = document.querySelector('#preview');
    let previews = [];

    fileInput.addEventListener('change', () => {
        iptu = Math.round(document.getElementById("iptu").value.replace("R$", "").replace(".", "").replace(",", "."));
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
        $("#telefone").mask("(99) 99999-9999");
        $('#preco').maskMoney({
            prefix: 'R$ ',
            allowNegative: true,
            thousands: '.',
            decimal: ',',
            affixesStay: true
        });
        $('#iptu').maskMoney({
            prefix: 'R$ ',
            allowNegative: true,
            thousands: '.',
            decimal: ',',
            affixesStay: true
        });
        $('#valor_aluguel').maskMoney({
            prefix: 'R$ ',
            allowNegative: true,
            thousands: '.',
            decimal: ',',
            affixesStay: true
        });
        $('#condominio').maskMoney({
            prefix: 'R$ ',
            allowNegative: true,
            thousands: '.',
            decimal: ',',
            affixesStay: true
        });
    })
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



    function submitForm(event) {
        event.preventDefault();


        const formulario = document.getElementById('form_cadastro');
        const checkboxesGarantia = formulario.querySelectorAll('input[class="form-check-input garantias"]');
        const arrayGarantias = [];
        const checkboxesFeatures = formulario.querySelectorAll('input[class="form-check-input feature"]');
        const arrayFeatures = [];

        checkboxesGarantia.forEach(checkbox => {
            if (checkbox.checked) {
                arrayGarantias.push(checkbox.value);
            }
        });

        checkboxesFeatures.forEach(checkbox => {
            if (checkbox.checked) {
                arrayFeatures.push(checkbox.value);
            }
        });
        const formData = new FormData(uploadForm);

        var telefoneFormat = formData.get('telefone').replace("(", "").replace(")", "").replace("-", "").replace(" ", "");
        console.log(telefoneFormat);

        var precoFormat = formData.get('preco').replace("R$", "").replace(".", "").replace(",", ".");
        var preco = Math.round(precoFormat);

        var iptuFormat = formData.get('iptu').replace("R$", "").replace(".", "").replace(",", ".");
        var iptu = Math.round(iptuFormat);

        if (formData.get('valor_aluguel')) {
            var valorAluguelFormat = formData.get('valor_aluguel').replace("R$", "").replace(".", "").replace(",", ".");
            var valorAluguel = Math.round(valorAluguelFormat);
        }

        var condominioFormat = formData.get('condominio').replace("R$", "").replace(".", "").replace(",", ".");
        var condominio = Math.round(condominioFormat);



        // var areaUtilFormat = formData.get('area_util').replace(",", ".");
        // var areaUtil = Math.roud(areaUtilFormat);

        // var areaTerrenoFormat = formData.get('area_total').replace(",", ".");
        // var areaTerreno = Math.roud(areaTerrenoFormat);

        // Crie um objeto XML
        var xml = `<xml version="1.0" encoding="UTF-8">
        <ListingDataFeed xmlns="http://www.vivareal.com/schemas/1.0/VRSync" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.vivareal.com/schemas/1.0/VRSync">`;

        xml += `<Header>
                    <Provider>Desenvolvedor do Feed</Provider>
                    <Email>lucasmatutani@gmail.com</Email>
                    <ContactName>Lucas Matutani</ContactName>
                    <PublishDate></PublishDate>
                    <Telephone>11-948610869</Telephone>
                     </Header>`

        xml += `<Listings>
        <Listing>
        <ListingID>${formData.get('zap')}</ListingID>
                        <Title><![CDATA[${formData.get('titulo')}]]></Title>
                        <TransactionType>${formData.get('negocio')}</TransactionType>
                        <PublicationType>${formData.get('tipo_anuncio')}</PublicationType>`;

        xml += `<Location displayAddress="Street">
                            <Country abbreviation="BR">Brasil</Country>
                            <State abbreviation="SP">${formData.get('estado')}</State>
                            <City><![CDATA[${formData.get('cidade')}]]></City>
                            <Zone>${formData.get('zona')}</Zone>
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
                        <Details>`;

        if (formData.get('negocio') == "Sale/Rent" || formData.get('negocio') == "For Sale") {
            xml += `<ListPrice currency="BRL">${preco}</ListPrice>`;
        }

        if (formData.get('negocio') == "Sale/Rent" || formData.get('negocio') == "For Rent") {
            xml += `<RentalPrice currency="BRL" period="Monthly">${valorAluguel}</RentalPrice>`;
        }

        xml += `<YearlyTax currency="BRL">${iptu}</YearlyTax>
                            <Description><![CDATA[${formData.get('descricao')}]]></Description>
                            <LivingArea unit="square metres">${formData.get('area_util')}</LivingArea>
                            <LotArea unit="square metres">${formData.get('area_total')}</LotArea>
                            <PropertyAdministrationFee currency="BRL">${condominio}</PropertyAdministrationFee>
                            <Bathrooms>${formData.get('banheiros')}</Bathrooms>
                            <Bedrooms>${formData.get('quartos')}</Bedrooms>
                            <Garage>${formData.get('vagas')}</Garage>
                            <Floors>${formData.get('nmr_andares')}</Floors>
                            <UnitFloor>${formData.get('andar')}</UnitFloor>
                            <Buildings>${formData.get('nmr_torres')}</Buildings>
                            <Suites>${formData.get('suites')}</Suites>
                            <YearBuilt>${formData.get('construcao')}</YearBuilt>
                            <UsageType>${formData.get('tipo_negocio')}</UsageType>`;

        xml += `<Features>`;
        for (let i = 0; i < arrayFeatures.length; i++) {
            xml += `<Feature>${arrayFeatures[i]}</Feature>`;
        }
        xml += `</Features>`;

        if (formData.get('negocio') == "Sale/Rent" || formData.get('negocio') == "For Rent") {
            xml += `<Warranties>`;
            for (let i = 0; i < arrayGarantias.length; i++) {
                xml += `<Warranty>${arrayGarantias[i]}</Warranty>`;
            }
            xml += `</Warranties>`;
        }

        xml += `</Details>
        </Listing>
        </Listings>
        </ListingDataFeed>`;
        // xml += `<root>
        //         <nome>${formData.get('nome')}</nome>
        //         <email>${formData.get('email')}</email>
        //         <mensagem>${formData.get('mensagem')}</mensagem>
        //     </root>`;

        var parser = new DOMParser();
        var xmlDoc = parser.parseFromString(xml, "text/xml");

        console.log(xmlDoc);
        const parserError = xmlDoc.getElementsByTagName('parsererror')[0];
        if (parserError) {
            const errorLineNumber = parserError.lineNumber;
            console.error(`Erro ao analisar o XML na linha ${errorLineNumber}:`, parserError.textContent);
        } else {
            console.log('XML analisado com sucesso:', xmlDoc);
        }

        const serializer = new XMLSerializer();
        const updatedXml = serializer.serializeToString(xmlDoc);

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../includes/save_xml.php', false);
        xhr.setRequestHeader('Content-Type', 'application/xml');
        xhr.onload = function() {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                alert(response.message);
            } else {
                alert('Erro ao enviar o arquivo XML.');
            }
        };
        xhr.send(updatedXml);
    };
</script>

</html>