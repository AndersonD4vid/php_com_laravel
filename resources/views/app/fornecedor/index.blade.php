<h2>Fornecedor</h2>

{{-- @dd($fornecedores) --}}

{{-- @isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome']}} <br/>
    Status: {{$fornecedores[0]['status']}}

    <br/>

    @isset($fornecedores[0]['cnpj'])
    CNPJ: {{$fornecedores[0]['cnpj']}}
    @endisset
@endisset --}}

{{-- @if(count($fornecedores) > 0 && count ($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados aqui.</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados aqui.</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados aqui.</h3>
@endif --}}

{{-- @unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
  Fornecedor inativo
@endunless --}}

{{-- @if( !($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif --}}
