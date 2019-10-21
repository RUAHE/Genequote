<?php

use App\citation;
use Illuminate\Database\Seeder;

class CitationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citations')->insert(
            [
                ['citation'=>'"La vie est un mystère que il faut vivre , et non un problème à résoudre "'],

                ['citation'=>'"Vis comme si tu devais mourir demain.Apprend comme si tu devais vivre toujours"'],
    
                ['citation'=>'"Essaie de devenir ce que tu veux plutôt que de devanir ce que ils veulent que tu sois."'],
    
                ['citation'=>'"Les vrais amis sont comme des étoiles ; vous ne pouvez les reconnaître que lorsque il fait sombre autour de vous"'],
    
                ['citation'=>'"Je ne perds jamais.Soit je gagne,soit je apprends"'],
    
                ['citation'=>'"Ne me jugez pas sur mes succès jugez moi sur le nombre de fois où je me suis releve à nouveau"'],
    
                ['citation'=>'"Le sens de la vie est de trouver son don, le but de lavie est de le partager."'],
    
                ['citation'=>'"Votre paix intérieure est bien plus importante que de essayer de comprendre pourquoi certaine choses se sont produites"'],
    
                ['citation'=>'"Une journée sans rire est une journée perdue"'],
    
                ['citation'=>'"Le bonheur parfait est quelque chose de très proche de la tristesse"'],
    
                ['citation'=>'"Je connais mes limites cest pourquoi je vais au dela"'],
                
                ['citation'=>'"La pensée est un vin dont les rêveurs sont ivres"']
            ]
        );
    }
}