<?php

require_once __DIR__."/../entity/TodoList.php";
require_once __DIR__."/../repository/TodoListRepository.php";
require_once __DIR__."/../service/TodoListService.php";

use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(): void{
    $todoListRepository = new TodoListRepositoryImpl();

    $todoListRepository->todoList[1] = "php";
    $todoListRepository->todoList[2] = "JS";
    $todoListRepository->todoList[3] = "JASVA";
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

testShowTodoList();