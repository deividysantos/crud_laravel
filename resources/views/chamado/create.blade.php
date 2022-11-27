<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../global.css">
</head>
<body>
    <header>
        <a class="btn btn-link" href="{{route('chamado.index')}}">Chamados</a>
        <a class="btn btn-link" href="{{route('setor.index')}}">Setores</a>
        <a class="btn btn-link" href="{{route('situacao.index')}}">Situações</a>
    </header>
    <main>
        <h1>Chamado - Novo Cadastro</h1>

        <form class="myForm" action="{{route('chamado.gravar')}}" method="post">
            @csrf
            <div>
                <label for="titulo">Titulo do Chamado</label>
                <input type="text" name="titulo" class="form-control mb-2" id="titulo" placeholder="Informe o Titulo">

                <label for="descricao">Descrição do Chamado</label>
                <input type="text" name="descricao" class="form-control mb-2" id="descricao" placeholder="Informe a Descrição">

                <label for="dataTermino">Prazo de Término</label>
                <input type="date" name="dataTermino" class="form-control mb-2" id="dataTermino" placeholder="Prazo de Término">

                <label for="setor">Informe o Setor:</label>
                <select class="mb-2 form-control" name="setorId" id="setor">
                    <option value="">Escolha um Setor Válido</option>
                    @foreach($setores as $setor)
                    <option value={{$setor->id}}>{{$setor->descricao}}</option>
                    @endforeach
                </select>

                <label for="situacao">Informe a Situação:</label>
                <select class="mb-2 form-control" name="situacaoId" id="situacao">
                    <option value="">Escolha uma Situação Válida</option>
                    @foreach($situacoes as $situacao)                        
                    <option value={{$situacao->id}}>{{$situacao->descricao}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-gravar">Gravar</button>
                <a href="{{route('chamado.index')}}" type="button" class="btn">Voltar</a>
            </div>
            
        </form>
    </main>
</body>
</html>
