<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class atv_03_Asserts // Funções
{
    // Função que verifica se $y é maior que 0 e $x é maior que 1
    public function VerificarValores($y, $x)
    {
        return $y > 0 && $x > 1;
    }

    // Função que verifica se uma string contém uma palavra específica
    public function VerificarPalavra($str, $palavra)
    {
        return strpos($str, $palavra) !== false;
    }

    // Função que retorna um número aleatório dentro de um intervalo
    public function NumeroAleatorio()
    {
        return rand(1, 100);
    }

    // Função que verifica se o número é positivo
    public function VerificarPositivo($numero)
    {
        return $numero > 0;
    }

    // Função que retorna um array de valores
    public function RetornaArray()
    {
        return [1, 2, 3, 4, 5];
    }
}

class atv_03_AssertsTests extends TestCase // Testes
{
    // Testa se os valores são maiores que 0 e 1
    public function testVerificarValores()
    {
        $assert = new atv_03_Asserts();  // Instancia a classe
        $this->assertGreaterThan(0, 5); // Testa se 5 é maior que 0
        $this->assertGreaterThan(1, 3); // Testa se 3 é maior que 1
    }

    // Testa se a palavra "Maravilhoso" está na frase
    public function testVerificarPalavra()
    {
        $assert2 = new atv_03_Asserts(); // Instancia a classe
        $result = $assert2->VerificarPalavra('Poço de Lama', 'Lama');
        $this->assertStringContainsString('Lama', 'Poço de Lama'); // Testa se a palavra "Lama" está na string
    }

    // Testa se o número aleatório gerado está dentro do intervalo
    public function testNumeroAleatorio()
    {
        $assert3 = new atv_03_Asserts(); // Instancia a classe
        $result = $assert3->NumeroAleatorio();
        $this->assertGreaterThanOrEqual(1, $result); // Testa se o número gerado é maior ou igual a 1
        $this->assertLessThanOrEqual(100, $result); // Testa se o número gerado é menor ou igual a 100
    }

    // Testa se o número fornecido é positivo
    public function testVerificarPositivo()
    {
        $assert4 = new atv_03_Asserts(); // Instancia a classe
        $result = $assert4->VerificarPositivo(10); // Esperado: true
        $this->assertGreaterThan(0, $result); // Testa se o número é maior que 0, substituindo o assertTrue
    }

    // Testa se o array não está vazio
    public function testRetornaArray()
    {
        $assert5 = new atv_03_Asserts(); // Instancia a classe
        $result = $assert5->RetornaArray();
        $this->assertNotEmpty($result); // Testa se o array não está vazio
    }
}
