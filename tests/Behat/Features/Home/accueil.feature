# language: fr
    Fonctionnalité: Affichage de la page d'accueil
        Nous voulons nous assurer que la page d'accueil affiche
        un message de bienvenue.

        Scénario: la page d'accueil affiche un message de bienvenue
            Quand je visite la page d'accueil
            Alors le message "Hello world" s'affiche

        Scénario: Pouvoir afficher les citations enregistrées
            Etant donné que la citation de "Kent Beck": "Make it work then make it clean" est enregistrée
            Et que j'affiche la page des citations
            Alors je dois trouver la citation de "Kent Beck": "Make it work then make it clean"

