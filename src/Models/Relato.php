<?php
namespace Models;

class Relato extends AbstractModel
{

    public function __construct(array $data = [])
    {
        $fields = [
            'id',
            'data',
            'titulo',
            'descricao',
            'status',
            'classificacao',
            'foto',
            'latitude',
            'longitude',
            'id_usuario',
            'nome_usuario'
        ];
        parent::__construct($fields, $data);
    }
}