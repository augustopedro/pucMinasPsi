<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VeterinarioController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\DiagnosticoController;

class ExampleTest extends TestCase
{
    // Cadastrar Cliente
    public function testCreateCliente()
    {
         $input = array(
            'nome' => 'Pedro Augusto', 
            'email' => 'peadalmeida@gmail.com',
            'telefone' => '(37) 9 8821-4181',
            'celular' => '(37) 9 8821-4181',
            'cep' => '31170030',
            'numero' => '57',
            'complemento' => 'Apartamento 101',
            'rua' => 'Rua Nelson Soares de Faria',
            'bairro' => 'Cidade Nova',
            'cidade' => 'Belo Horizonte',
            'cpf' => '077.320.136-03',
            'aniversario' => '1992/12/17',
            'sexo' => 'Masc'
        );

        $response = $this->call('POST', 'cliente/create', $input);
        $deuBom = false;
        if($response->status()==200)
        {
            $deuBom = true;
        }
        else
        {
            $deuBom = false;
        }
        $this->assertTrue($deuBom);
    }



    // Cadastrar Animal
    public function testCreateAnimal()
    {
        $input = array(
            'nome' => 'Ace',
            'raca' => 'Pastor Alemão',
            'aniversario' => '2016-01-01',
            'clientes_id' => '1',
            'sexo' => 'Masc'
        );

        $response = $this->call('POST', 'animal/create', $input);
        $deuBom = false;
        if($response->status()==200)
        {
            $deuBom = true;
        }
        else
        {
            $deuBom = false;
        }
        $this->assertTrue($deuBom);
    }

    // Cadastrar Veterinário
    public function testCreateVeterinario()
    {
        $input = array(
            'ctps' => '12345',
            'clientes_id' => '1'
        );

        $response = $this->call('POST', 'veterinario/create', $input);
        $deuBom = false;
        if($response->status()==200)
        {
            $deuBom = true;
        }
        else
        {
            $deuBom = false;
        }
        $this->assertTrue($deuBom);
    }

    // Agendar Consulta
    public function testCreateConsulta()
    {
        $input = array (
            'data' => '2016-10-05',
            'animals_id' => '1',
            'veterinarios_id' => '1'
        );

        $response = $this->call('POST', 'consulta/create', $input);
        $deubom = false;
        if ($response->status()==200)
        {
            $deuBom = true;
        }
        else
        {
            $deuBom = false;
        }
        $this->assertTrue($deuBom);
    }

    // Cadastrar Produto
    public function testCreateProduto()
    {
        $input = array (
            'descricao' => 'Casinha de Cachorro',
            'price' => '120.00'
        );

        $response = $this->call('POST', 'produto/create', $input);
        $deubom = false;
        if ($response->status()==200)
        {
            $deuBom = true;
        }
        else
        {
            $deuBom = false;
        }
        $this->assertTrue($deuBom);
    }

    // Vender Produto
    public function testCreateVenda()
    {
        $input = array (
            'clientes_id' => '1'
        );

        $response = $this->call('POST', 'venda/create', $input);
        $deubom = false;
        if ($response->status()==200)
        {
            $deuBom = true;
        }
        else
        {
            $deuBom = false;
        }
        $this->assertTrue($deuBom);
    }

    public function testCreateVendaProduto()
    {
        $input = array (
            'vendas_id' => '1',
            'produtos_id' => '1'
        );

        $response = $this->call('POST', 'venda/create', $input);
        $deubom = false;
        if ($response->status()==200)
        {
            $deuBom = true;
        }
        else
        {
            $deuBom = false;
        }
        $this->assertTrue($deuBom);
    }

    // Teste de Diagnostico
    public function testCreateDiagnostico()
    {
        $input = array (
            'descricao' => 'TesteDiagnostico',
        );

        $response = $this->call('POST', 'diagnostico/create', $input);
        $deubom = false;
        if ($response->status()==200)
        {
            $deuBom = true;
        }
        else
        {
            $deuBom = false;
        }
        $this->assertTrue($deuBom);
    }

    // Teste de Estoque
    public function testProcuraProduto()
    {
        $input = array (
            'id' => '1'
        );

        $response = $this->call('GET', 'produto/procurar/{id}', $input);
        $deubom = false;
        if ($response->status()==200)
        {
            $deuBom = true;
        }
        else
        {
            $deuBom = false;
        }
        $this->assertTrue($deuBom);
    }
}
