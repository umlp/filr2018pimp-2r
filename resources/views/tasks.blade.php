@extends('layouts.app')

@section('content')
    <nav>
      <ul>
        <li>Match</li>
        <li>Actualités</li>
        <li>Statistiques des joueurs</li>
        <li>Entraînement</li>
        <li>Réglages</li>
      </ul>
    </nav>

    <main>
      <section class="en-tete">
        <form action="#" method="post">
          <label for="#equipe">Équipe : </label>
          <select id="equipe" name="equipe">
            <option>Griffondor</option>
            <option>Poufsouffle</option>
            <option>Serdaigle</option>
            <option>Serpentard</option>
          </select>
          <label for="#joueur">Joueur : </label>
          <select id="joueur" name="joueur">
            <option>01 - Cedric Diggory</option>
            <option>02 - Olivier Dubois</option>
            <option>03 - Angelina Jonhson</option>
            <option>04 - Alicia Spinnet</option>
            <option>05 - Fred Weasley</option>
            <option>06 - George Weasley</option>
            <option>07 - Harry Potter</option>
          </select>
          <input type="submit" name="valider" value="Valider">
          <button type="button" name="plus">+</button>
        </form>
      </section>

      <section>
        <article id="resume">
          <aside>
            <img src="Diggory.png" alt="photo">
          </aside>
          Nom : Diggory <br>
          Prénom : Cédric <br>
          Date de naissance : 10/10/1977 <br>
          Equipe actuelle : Poufsouffle <br>
          Poste : Capitaine/Attrapeur <br>
          <button type="button" name="editer" id="editer">Éditer</button>
        </article>

        <article id="dernier-match">
          <h2>Dernier match : Poufsouffle - Serdaigle (1/4 - Coupe d'Europe)</h2>
          <div id="col-1">
            Victoire : oui <br>
            Vif d'or attrape : non <br>
          </div>
          <div id="col-2">
            Catrons rouges : 0 <br>
            Cartond jaunes : 0 <br>
            Cartons bleus : 0 <br>
          </div>
          <div id="col-3">
            Buts marqués : 0 sur 15 <br>
            Avertissement : 0
          </div>
        </article>
      </section>

      <section>
        <h2>Statistiques générales</h2>
        <article id="stats-joueur">
          <h3>JOUEUR</h3>
          Ancienne(s) éuipe(s) : INSA (poursuiveur) <br>
          Moyenne de buts marqués par match : 0 <br>
          Moyenne d'avertissements par match : 1.5 <br>
          Victoires/Défaites : 160/105 (60.4%) <br>
          Cartons rouges par match : 0.20 <br>
          Cartons jaunes par match : 0.42 <br>
          Cartons bleus par match : 1.71
        </article>

        <article id="stats-equipe">
          <h3>MOYENNE DES JOUEURS DE POUFSOUFFLE</h3>
          - <br>
          Moyenne de buts marqués par match : 4.1 <br>
          Moyenne d'avertissements par match : 1.3 <br>
          Victoires/Défaites : 52.1% <br>
          Cartons rouges par match : 0.15 <br>
          Cartons jaunes par match : 0.5 <br>
          Cartons bleus par match : 1.70
        </article>

        <article id="stats-globales">
          <h3>MOYENNE DES JOUEURS</h3>
          - <br>
          Moyenne de buts marqués par match : 3.9 <br>
          Moyenne d'avertissements par match : 1.5 <br>
          Victoires/Défaites : 50.0% <br>
          Cartons rouges par match : 0.18 <br>
          Cartons jaunes par match : 0.35 <br>
          Cartons bleus par match : 1.91
        </article>
      </section>
    </main>
@endsection
