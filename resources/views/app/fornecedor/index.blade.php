<h2>Fornecedor</h2>

{{ 'Texto de teste' }}


{{-- Aqui fica o comentário que será descartado pelo interpretador do blade --}}

@php

@endphp

{{-- @dd($fornecedores) --}}

@if(count($fornecedores) > 0 && count ($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados aqui.</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados aqui.</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados aqui.</h3>
@endif
