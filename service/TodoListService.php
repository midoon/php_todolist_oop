<?php

namespace Service{

    use Repository\TodoListRepository;

    interface TodoListService{

        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodoList(int $number): void;
    }

    class TodoListServiceImpl implements TodoListService{

        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository){
            $this->todoListRepository = $todoListRepository;
        }
       

        function showTodoList(): void{
            
            echo "=================================" . PHP_EOL;
            echo "TODO LIST" . PHP_EOL;

            $todoList = $this->todoListRepository->findAll();
            foreach($todoList as $number => $value)
            {
                echo "$number . $value" . PHP_EOL; 
            }
        }

        function addTodoList(string $todo): void{

        }

        function removeTodoList(int $number): void{

        }

    }

}