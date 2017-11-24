<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Client;

class MemberComponent extends Component
{
    private $connection;
    private $http;

    public function __construct(ComponentRegistry $registry, array $config = [])
    {
        parent::__construct($registry, $config);
        $this->connection = ConnectionManager::get('default');
        $this->http = new Client();
    }
    
    public final function search(string $content = '')
    {
        $query = "
            SELECT * FROM membro 
            WHERE matricula = :register 
            OR upper(nome) LIKE upper('%" .$content. "%')";

        return $this->connection->execute($query, [
            'register' => $content,
        ])->fetchAll('assoc');
    }

    public final function getMemberPicture(string $register)
    {
        return  $this->http->get('http://cadm.ddns.net:8080/membro/imagem/'.$register.'.jpg')->body();
    }
}