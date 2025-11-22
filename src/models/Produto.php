<?php
class Produto {
    // Atributos
    private $id;
    private $pdo;
    private $nome;
    private $codigoBarras;
    private $qtdEstoque;
    private $custoReposicao;
    private $descricao;

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPDO() {
        return $this->pdo;
    }

    public function setPDO($pdo) {
        $this->id = $pdo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCodigoBarras() {
        return $this->codigoBarras;
    }

    public function setCodigoBarras($codigoBarras) {
        $this->codigoBarras = $codigoBarras;
    }

    public function getQtdEstoque() {
        return $this->qtdEstoque;
    }

    public function setQtdEstoque($qtdEstoque) {
        $this->qtdEstoque = $qtdEstoque;
    }

    public function getCustoReposicao() {
        return $this->custoReposicao;
    }

    public function setCustoReposicao($custoReposicao) {
        $this->custoReposicao = $custoReposicao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    // Construtor
    public function __construct($id = null, $pdo = null, $nome = null, $qtdEstoque = null, $codigoBarras = null, $custoReposicao = null, $descricao = null) {
        $this->id = $id;
        $this->pdo = $pdo;
        $this->nome = $nome;
        $this->qtdEstoque = $qtdEstoque;
        $this->codigoBarras = $codigoBarras;        
        $this->custoReposicao = $custoReposicao;
        $this->descricao = $descricao;        
    }

    // CRUD
    public function salvar(): int {
        // Se o objeto já tiver um ID, ele é atualizado
        if ($this->id <> null) {
            $sql = "UPDATE produtos SET nome = :nome, codigobarras = :codigobarras, qtdestoque = :qtdestoque, custoreposicao = :custoreposicao, descricao = :descricao WHERE id = :id";
            $params = [
                'nome' => $this->getNome(),
                'codigobarras' => $this->getCodigoBarras(),
                'qtdestoque' => $this->getQtdEstoque(),
                'custoreposicao' => $this->getCustoReposicao(),
                'descricao' => $this->getDescricao(),
                'id' => $this->getId()
            ];
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            
            return $this->id;  
        // Caso contrário, ele é inserido              
        } else {
            $sql = "INSERT INTO produtos (nome, codigobarras, qtdestoque, custoreposicao, descricao) VALUES (:nome, :codigobarras, :qtdestoque, :custoreposicao, :descricao)";
            $params = [
                'nome' => $this->getNome(),
                'codigobarras' => $this->getCodigoBarras(),
                'qtdestoque' => $this->getQtdEstoque(),
                'custoreposicao' => $this->getCustoReposicao(),
                'descricao' => $this->getDescricao()
            ];
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);

            $this->id = $this->pdo->lastInsertId();
            return $this->id;
        }
    }

    public static function buscar(PDO $pdo): array {
        $sql = "SELECT * FROM produtos";
        $stmt = $pdo->query($sql);

        $listaProdutos = [];

        while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $listaProdutos[] = new Produto(
                $dados['id'],
                $pdo, 
                $dados['nome'],
                $dados['qtdestoque'],
                $dados['codigobarras'],                                
                $dados['custoreposicao'],
                $dados['descricao']
            );
        }

        return $listaProdutos;   
    }

    public function excluir() {
        $sql = "DELETE FROM produtos WHERE id = :id";
        $params = [
            'id' => $this->getId()
        ];
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);     
    }

    // Métodos adicionais de banco de dados
    public static function codigoBarrasExiste(PDO $pdo, $codigo) {
        $sql = "SELECT COUNT(*) FROM produtos WHERE codigobarras = :codigo";
        $params = [
            'codigo' => $codigo
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchColumn() > 0;
    }

    public static function getProdutoById(PDO $pdo, $id) {
        $sql = "SELECT * FROM produtos WHERE id = :id LIMIT 1";
        $params = [
            'id' => $id 
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        return new Produto(
            $dados['id'],
            $pdo,
            $dados['nome'],
            $dados['qtdestoque'], 
            $dados['codigobarras'],                       
            $dados['custoreposicao'],
            $dados['descricao']
        );        
    }
}
?>