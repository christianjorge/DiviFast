{{--Layout base da parte visual do projeto--}}
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
    <script src="{{url("assets/js/javascript.js")}}"></script>
    <title>Divifast</title>
</head>
<body>
<style>
    #paginate{
        text-align: center;
    }
    #paginate svg{
        width: 15px!important;
        height: 15px!important;
    }
    #paginate > nav > div.flex.justify-between.flex-1.sm\:hidden{
        display: none;
    }
    #paginate p {
        display: none;
    }
    #logo{
        position: absolute;
        width: 173.19px;
        height: 82px;
        left: 147.08px;
        top: 28.3px;
    }
    #menu{
        position: absolute;
        width: 273.27px;
        height: 20.95px;
        left: 560.73px;
        top: 52.55px;

        font-family: 'Arial';
        font-weight: 800;
        font-size: 14px;
        line-height: 19px;
    }
    a{
        color: black;
        text-transform: none;
    }

    #cadastro{
        position: absolute;
        width: 193px;
        height: 51px;
        left: 1102.73px;
        top: 36.55px;
    }

    #cadastro #cadbutton{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 16px;
        top: -10px;

        position: absolute;
        width: 129px;
        height: 51px;
        color: white;
        background: #000000;
        border-radius: 50px;
    }
    #cadastro #entrarbutton{
        position: absolute;
        width: 40px;
        height: 19px;
        left: -60.73px;
        top: 5px;

        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 19px;

        color: #000000;
    }
    #bodyall{
        position: absolute;
        width: 1321px;
        height: 811px;
        left: 63px;
        top: 130px;

        background: rgba(196, 196, 196, 0.13);
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.03);
    }
    #comofunciona{
        position: absolute;
        width: 1168.27px;
        height: 50px;
        left: 134px;
        top: 50px;

        font-style: inherit;
        font-weight: 800;
        font-size: 38px;
        line-height: 50px;
        /* identical to box height, or 104% */
        color: #000000;
    }
    #comofunciona #corpo{
        position: absolute;
        width: 1055px;
        height: 400px;
        left: calc(50% - 1200px/2 + 14px);
        top: 70px;
        text-align: justify;
        font-style: normal;
        font-weight: 600;
        font-size: 23px;
        line-height: 32px;
        color: #000000;
        opacity: 0.8;
    }
    #comofunciona #corpoform{
        text-align: left!important;
        position: absolute;
        width: 2000px;
        height: 400px;
        left: -350px;
        font-style: normal;
        font-weight: 600;
        font-size: 23px;
        line-height: 32px;
        color: #000000;
        opacity: 0.8;
    }
    ::-webkit-input-placeholder  {
        padding-left: 10px;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 32px;
        color: #000000;
        opacity: 0.3;
    }
    input{
        background: #FFFFFF;
        box-shadow: 20px 10px 100px rgba(0, 0, 0, 0.2);
        border-radius: 50px;
        border: 0 none;
        outline: 0;
    }
    .inputmenor{
        width: 267px;
        height: 40px;
        left: 377px;
        top: 317px;
    }
    .inputmaior{
        width: 574px;
        height: 40px;
        left: 43px;
        top: 625px;
    }
    .submits{
        width: 199px;
        height: 50px;
        left: 578px;
        top: calc(50% - 50px/2 + 364px);
        cursor: pointer;
        color: white;
        background: #F27700;
        border-radius: 50px;
    }
    .submits:hover{
        background: #f29d00;
    }
</style>
<div>
    <img id="logo" src="http://50.17.20.77/assets/img/LOGO.svg">
    <div id="menu">
        <a href="{{url("/")}}">Como funciona</a>&emsp;&emsp;&emsp;
        <a href="{{url("/calculaenvio")}}">Calcular envio</a>
    </div>
    <div id="cadastro">
        <a href="#" id="entrarbutton">Entrar</a>&emsp;&emsp;&emsp;
        <a href="#" id="cadbutton">Cadastrar</a>
    </div>
</div>
<div id="bodyall">
    @yield('content')

</div>


{{--Aqui entrará o conteúdo--}}
    {{--@yield('content')--}}
</body>
</html>
