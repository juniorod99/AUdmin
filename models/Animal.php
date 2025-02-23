<?php
class Animal
{
    public $id;
    public $nome;
    public $faixa_etaria;
    public $especie;
    public $sexo;
    public $foto;
    public $vacinado;
    public $castrado;
    public $local;
    public $lar_temp;
    public $disp_adocao;
    public $docil;
    public $local_origem;
    public $observacao;
    public $data_cadastro;

    public function query($where, $params)
    {
        $database = new Database(config('database'));
        return $database->query("
            select
                a.id,
                a.nome,
                a.faixa_etaria,
                a.especie,
                a.sexo,
                a.foto,
                a.vacinado,
                a.castrado,
                a.local,
                a.lar_temp,
                a.disp_adocao,
                a.docil,
                a.local_origem,
                a.observacao,
                a.data_cadastro
            from
                animais a
            where
                $where  
            ", self::class, $params);
    }

    public static function get($id) {}

    public static function all($filtro = '')
    {
        return (new self)->query('nome like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
    }
}
