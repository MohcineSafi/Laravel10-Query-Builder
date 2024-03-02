<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Football</title>
</head>

<body>
    <nav>
        <ul>
            <!-- 1 -->
            <li><a href="{{ route('equipe.list') }}">Liste des Équipes</a></li>
            <!-- 2  -->
            <li><a href="{{ route('equipeF.list') }}">Liste des Équipes de France</a></li>
            <!-- 3  -->
            <li><a href="{{ route('equipe.create') }}">Ajouter une equipe italienne</a></li>
            <!-- 4   -->
            <!-- 5  -->
            <!-- 6  -->
            <li><a href="{{ route('joueur.list') }}">Liste des Joueurs</a></li>
            <!-- 7  -->
            <li><a href="{{ route('listEquipeEspagnole') }}">Liste des Équipes de Espagnole </a></li>
            <!-- 8  -->
            <li><a href="{{ route('joueur.age') }}">Liste des Joueurs ayant plus que 30 ans</a></li>
            <!-- 9 -->
            <li><a href="{{ route('joueur.post') }}">Liste des Joueurs selon le post et le nbr de buts d'origine
                    Argentine</a></li>
            <!-- 10  -->
            <li><a href="{{ route('equipe.but') }}">Nombre de buts marqués par chaque équipe</a></li>
            <!-- 11 -->
            <li><a href="{{ route('golsEquipePays') }}">Nombre de buts marqués par équipe et par pays</a></li>
            <!-- 12  -->
            <li><a href="{{ route('golsEquipeDef') }}">nombre de buts marqués par équipe et par defenseur</a></li>
            <!-- 13 -->
            <li><a href="{{ route('joueur.topButeursParEquipe')}}">Les top trois Buteurs dans chaque equipe</a></li>
            <!-- 14  -->
            <li><a href="{{ route('joueur.topButeurs')}}">Les top trois Buteurs </a></li>
            <!-- 15  -->
            <li><a href=" {{route('joueur.joueurParAge')}}">la liste des joueurs de chaque équipe par Age</a></li>
        </ul>
    </nav>
</body>

</html>