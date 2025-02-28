<?php
class Adotante
{
    public $id;
    public $nome;
    public $sexo;
    public $idade;
    public $bairro;
    public $rua;
    public $telefone;
    public $email;
    public $rede_social;
    public $observacao;
    public $foto;
    public $documentos;

    public function query($where, $params)
    {
        $database = new Database(config('database'));
        return $database->query("
            select
                a.id,
                a.nome,
                a.sexo,
                a.idade,
                a.bairro,
                a.rua,
                a.telefone,
                a.email,
                a.rede_social,
                a.observacao,
                a.foto,
                a.documentos
            from
                adotantes a
            where
                $where  
            ", self::class, $params);
    }

    public static function get($id)
    {
        return (new self)->query('a.id = :id', ['id' => $id])->fetch();
    }

    public static function all($filtro = '')
    {
        return (new self)->query('nome like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
    }
}
