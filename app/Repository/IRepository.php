<?php


namespace App\Repository;


interface IRepository
{
    public function paginate(int $count=15,int $page= 1,array $columns= ['*']);
    public function all();
    public function store(array $data);
    public function update(array $where,array $data);
    public function query();
    public function show($uuid);
    public function find($id);
    public function destroy($uuid);
}
