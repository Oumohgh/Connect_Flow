<?php 

abstract class Model {

    protected string $table;

    abstract public function setTableName(string $name) : void;

    // abstract public function create(Model $obj): Model;
    // abstract public function destroy(int $id): bool;
    // abstract public function update(Model $obj): Model;
    // abstract public function findAll(): array;
    // abstract public function findById(int $id): Model;
}


