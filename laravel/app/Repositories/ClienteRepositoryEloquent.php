<?php

namespace CodeProject\Repositories;

use CodeProject\Entities\Cliente;
use Prettus\Repository\Eloquent\BaseRepository;
/**
 * Description of ClienteRepositoryEloquent
 *
 * @author EU
 */
class ClienteRepositoryEloquent extends BaseRepository implements ClienteRepository{
    
    public function model()
    {
        return Cliente::class;
    }
}
