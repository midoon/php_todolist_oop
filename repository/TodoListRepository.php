<?php

namespace Repository{


    use Entity\Todolist;

    interface TodoListRepository{
        function save(TodoList $todoList): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    


}