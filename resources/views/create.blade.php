{{--View utilizada tanto para create quanto para edit em alguns locais existem ifs para diferenciar as duas coisas--}}

{{--Busca Layout base--}}
@extends('templates.template')

{{--Insere na section content do layout base--}}
@section('content')
    {{--Titulo--}}
    <br>
    <div id="comofunciona">
        <div id="titlecontent">CALCULAR ENVIO</div>
        <div id="corpoform">
            {{--Div para exibir erros do back--}}
            @if(isset($errors) && count($errors)>=1)
                <div class="text-center mt-4 mb-4 p-2 alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif
            <div class="col-8 m-auto">

                <form name="formCad" id="formCad" method="post" action="{{url('/')}}">
                    @csrf
                    <br>
                    Periculoso
                    <input type="checkbox">&emsp;&emsp;&emsp;
                    Frágil
                    <input type="checkbox">&emsp;&emsp;&emsp;
                    Inflamável
                    <input type="checkbox">&emsp;&emsp;&emsp;
                    Perecível
                    <input type="checkbox">&emsp;&emsp;&emsp;
                    <br><br>
                    Peso e Dimensões<br>
                    <input type="text" class="inputmenor" placeholder="Peso* (Kg)">
                    <input type="text" class="inputmenor" placeholder="Largura* (cm)">
                    <input type="text" class="inputmenor" placeholder="Altura* (cm)">
                    <input type="text" class="inputmenor" placeholder="Comprimento* (cm)">
                    <br><br>
                    Seu endereço<br>
                    <input class="inputmaior" type="text" placeholder="Rua com número da casa">
                    <input class="inputmenor" type="text" placeholder="Bairro">
                    <br><br>
                    Endereço para entrega<br>
                    <input class="inputmaior" type="text" placeholder="Rua com número da casa">
                    <input class="inputmenor" type="text" placeholder="Bairro">
<br><br>
                    <input class="submits" type="submit" value="CALCULAR">


                    {{--Submit comum do Form--}}
                </form>
            </div>
        </div>
    </div>
@endsection
