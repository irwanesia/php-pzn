<?php

namespace Entity {

    class Todolist
    {
        private string $todo;

        public function __contructs(string $todo = "")
        {
            $this->todo = $todo;
        }

        public function getTodo(): string
        {
            return $this->todo;
        }

        public function setTodo(string $todo): void
        {
            return $this->todo;
        }
    }
}
