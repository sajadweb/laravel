<?php


namespace App\Repository;


class Repository implements IRepository
{

    public $model;

    public function query()
    {
        return $this->model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function paginate(int $count = 15, int $page = 1, array $columns = ['*'])
    {
        return $this->model->paginat($count, $page, 'page', $columns);
    }

    public function show($uuid)
    {
        return $this->model->where('uuid', $uuid)->first();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update($where,array $data)
    {
        return $this->model->where($where)->update($data);
    }

    public function destroy($uuid)
    {
        return $this->model->where('uuid',$uuid)->destroy();
    }
}
