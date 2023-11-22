<?php 

// atribute adalah menambahkan metdata terhadap kode program yang kita buat
// fitur ini sangat baru di PHP, dan bisa memungkinkan fitur ini bakal 
// diadopsi sangat banyak oleh framewrok2 di PHP dimasa yg akan datang
// fitur ini jika dibahas pemrograman java di bernama Annotation, Atributes di C# 
//  atau decoration di python dan JavaScript

#[Attribute] 
class NotBlank 
{

}

class LoginRequest
{
    #[NotBlank]
    var string $username
}