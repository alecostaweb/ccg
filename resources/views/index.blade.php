@extends ('adminlte::page')

@section('title', 'CCG')

@section('content_header')
    <h1>CCG</h1>
@stop

@section('content')

    @include('flash')

    @auth
        Acesse as opções no menu ao lado
    @else
        Você ainda não fez seu login com a senha única USP</a>
    @endauth
    
    <h3>Objetivo</h3>
    <p style="text-align: justify">
    Ferramenta para auxiliar na verificação das disciplinas cursadas pelos alunos e no levantamento
    das	pendências para a conclusão do seu curso. A ferramenta deve ser acessada pelo navegador com
    acesso restrito aos servidores do Serviço de Graduação, consultar o resumo escolar dos alunos
    pela replicação do Júpiter e fazer a comparação com um currículo previamente cadastrado.
    </p>

    <h3>Justificativa</h3>
    <p style="text-align: justify">
    O sistema Júpiter não foi concebido para verificar as alterações que ocorrem dentro do mesmo
    currículo para anos diferentes de ingresso.
    </p>

@stop
