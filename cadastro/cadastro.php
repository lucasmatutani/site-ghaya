<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <form action="cadastro_sql.php" method="POST">
        <div class="residencial">
            <h1 style="margin-bottom: 50px;">Cadastros de imóvel</h1>
            <div class="row mb-4">
                <div class="col">
                    <p>Tipo de Imóvel</p>
                    <select class="form-control form-select" aria-label="Default select example" name="tipo_imovel" required>
                        <option selected>Selecione um opção</option>
                        <option value="apartamento">Apartamento</option>
                        <option value="casa">Casa</option>
                        <option value="duplex">Duplex</option>
                        <option value="exemplo">Exemplo</option>
                    </select>
                </div>
                <div class="col">
                    <p>Categoria</p>
                    <select class="form-control form-select" aria-label="Default select example" name="categoria" required>
                        <option selected>Selecione um opção</option>
                        <option value="padrao">Padrão</option>
                        <option value="exemplo">Exemplo</option>
                        <option value="3">Exemplo</option>
                    </select>
                </div>
                <div class="col">
                    <p>Tipo de negociação</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                        <label class="form-check-label" for="inlineRadio1">Venda</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                        <label class="form-check-label" for="inlineRadio2">Aluguel</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                        <label class="form-check-label" for="inlineRadio2">Venda e Aluguel</label>
                    </div>
                </div>
            </div>

            <div class="row md-4">
                <div class="col">
                    <p>Quartos</p>
                    <select class="form-control form-select" aria-label="Default select example" name="quartos" required>
                        <option selected>Selecione um opção</option>
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
                        <option selected>Selecione um opção</option>
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
                        <option selected>Selecione um opção</option>
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
                        <option selected>Selecione um opção</option>
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
                        <option selected>Selecione um opção</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="row md-4 input-group" style="margin-top: 20px;">
                <div class="col">
                    <p>CEP</p>
                    <input type="text" id="TextInput" class="form-control" name="cep" placeholder="" required>
                </div>

                <div class="col">
                    <p>Cidade</p>
                    <input type="text" id="TextInput" class="form-control" name="cidade" placeholder="" required>
                </div>
                <div class="col-4">
                    <p>Bairro</p>
                    <input type="text" id="TextInput" class="form-control" name="bairro" placeholder="" required>
                </div>
                <div class="col-1">
                    <p>UF</p>
                    <input type="text" id="TextInput" class="form-control" name="uf" placeholder="" required>
                </div>
            </div>

            <div class="row md-4 input-group" style="margin-top: 20px;">
                <div class="col">
                    <p>Endereço</p>
                    <input type="text" id="TextInput" class="form-control" name="endereco" placeholder="" required>
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
                        <option selected>Selecione um opção</option>
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
                        <option selected>Selecione um opção</option>
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
                    <p>Código do Anúncio</p>
                    <input type="text" id="TextInput" class="form-control" name="codigo" placeholder="" required>
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
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Aceita Animais
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ar-condicionado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Closet
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Cozinha Americana
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Lareira
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Mobiliado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="academia">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Academia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="churrasqueira">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Churrasqueira
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="cinema">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Cinema
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="espaco_gourmet">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Espaço Gourmet
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="jardim">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Jardim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="piscina">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Piscina
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="playground">
                                <label class="form-check-label" for="flexCheckDefault">
                                    PlayGround
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="squash">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Quadra de Squash
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="tenis">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Quadra de Tênis
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="poliesportiva">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Quadra Poliesportiva
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="festas">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Salão de Festas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="jogos">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Salão de Jogos
                                </label>
                            </div>
                        </div>

                        <div class="col">
                            <p><b>Comodidades e Serviços</b></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="deficientes">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Acesso para deficientes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="bicicletario">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Bicicletários
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="coworking">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Coworking
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="elevador">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Elevador
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="lavanderia">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Lavanderia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="sauna">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Sauna
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="spa">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Spa
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-submit">
            <input type="submit" value="Cadastrar imóvel">
        </div>
    </form>
</body>

</html>