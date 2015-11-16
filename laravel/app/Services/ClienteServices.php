<?php

namespace CodeProject\Services;

use \CodeProject\Repositories\ClienteRepository;
use \CodeProject\Validators\ClienteValidators;
use \Prettus\Validator\Exceptions\ValidatorException;
/**
 * Classe ClienteServices
 *
 * @author EU
 */
class ClienteServices {

    protected $repository;

    protected $validator;
    
    public function __construct(ClienteRepository $repository, ClienteValidators $validator) {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data) {
        
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        } catch (ValidatorException $e) {
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }
    
    public function update(array $data, $id){
        
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);
        } catch (ValidatorException $e) {
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

}
