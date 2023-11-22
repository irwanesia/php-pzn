<?php 

namespace View {

    use Repository\Todolist;
    use Repository\TodolistRepository;

    class showTodolistView(): void
    {

    }
    class addTodolistView(): void
    {
        
    }
    class removeTodolistView(): void
    {
        
    }

    class TodolistRepositoryImpl implements TodolistRepository{
        private array $todolist = array();

        function save(Todolist $todolist): void
        {
            
        }

        function remove(int $number): bool
        {
            
        }

        function findAll(): array
        {
            return $this->todolist;
        }
    }

}