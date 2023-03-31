<?php

use App\Models\Regiao;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegiaoTable extends Migration
{

    private string $table;

    public function __construct()
    {
        $this->table = (new Regiao())->getTable();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        
        Schema::create('regiao', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('detalhes')->nullable();
            $table->timestamps();
        });

        $regioes = [
            ['nome' => "Urbano - Setor Novo Horizonte/Monte Sinai"],
            ['nome' => "Urbano - Setor Planalto / Cidade Alta"],
            ['nome' => "Urbano - Setor Paraisinho / Vila Paranã"],
            ['nome' => "Urbano - Setor El Dorado / Vila Bandeira"],
            ['nome' => "Urbano - Setor Central / Paraíso Velho"],
            ['nome' => "Urbano - Setor Estância Paraíso / Vale Azul"],
            ['nome' => "Rural - Vale Verde"],
            ['nome' => "Rural - Piçarrão"],
            ['nome' => "Rural - Assentamento Sílvio Rodrigues / Cidade da Fraternidade / Fazenda Chiquinha / arredores"],
            ['nome' => "Rural - Assentamento ESUSA / Acampamento Dorcelina Folador / arredores"],
            ['nome' => "Rural - Moinho e arredores"],
            ['nome' => "Rural - São Jorge"],
            ['nome' => "Rural - Zona Rural nos arredores de São Jorge"],
            ['nome' => "Rural - Região Norte (Zona Rural sentido Teresina)"],
            ['nome' => "Rural - São Bento /Morro da Baleia / arredores"],
            ['nome' => "Rural - Morrão / Loquinhas / arredores"],
            ['nome' => "Rural - Outras áreas rurais da região sul do Município (sentido São João d'Aliança)"],
            ['nome' => "Rural - Sertão e demais áreas da Zona Rural na Região Leste do Município"]
        ];

        Regiao::insert($regioes);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regiao');
    }
}
