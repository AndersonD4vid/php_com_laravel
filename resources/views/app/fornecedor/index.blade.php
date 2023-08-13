<h2>Fornecedor</h2>


{{-- @dd($fornecedores) --}}

Fornecedor: {{$fornecedores[0]['nome']}} <br/>
Status: {{$fornecedores[0]['status']}}

<br/>

@if( !($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif

<br/>

{{-- O @unless --}}
@unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
  Fornecedor inativo
@endunless

<br/>

{{-- @if(count($fornecedores) > 0 && count ($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados aqui.</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados aqui.</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados aqui.</h3>
@endif --}}



