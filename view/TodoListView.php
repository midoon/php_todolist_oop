<?php



namespace View{

    require_once __DIR__."/../entity/TodoList.php";
    require_once __DIR__."/../repository/TodoListRepository.php";
    require_once __DIR__."/../service/TodoListService.php";

    use Service\TodoListService;
    use Repository\TodoListRepository;
    use Entity\TodoList;
    use Helper\InputHelper;

    class TodoListView{

        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService){
            $this->todoListService = $todoListService;
        }

        function showTodoList(): void{
            while(true){
                echo "=================================".PHP_EOL;
                echo "TODO LIST".PHP_EOL;
                $this->todoListService->showTodoList();

                echo "1. Tambah Todo".PHP_EOL;
                echo "2. Hapus Todo".PHP_EOL;
                echo "x. Keluar".PHP_EOL;

                $pilihan = InputHelper::input("Masukkan pilihan: ");

                if ($pilihan == "1"){
                    $this->addTodoList();
                } else if($pilihan == "2"){
                    $this->removeTodoList();
                } else if($pilihan == "x"){
                    break;
                } else{
                    echo "Pilihan tidak ditemukan".PHP_EOL;
                }
            }
        }

        function addTodoList(): void{
            echo "tambah todo";
        }

        function removeTodoList(): void{
            echo "haspu todo";
        }
    }
}