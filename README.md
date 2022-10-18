# Exercice menu PHP

Dans ce template d'un site web vitrine, le menu de navigation s'affiche 2 fois sur le site : 1 fois dans le header comme navigation principale et 1 fois dans le footer comme navigation secondaire.

1. Modifier les fichiers pour ne pas répéter le HTML du menu
2. On veut que le menu du footer ait un style différent du menu du header. Toujours en PHP, ajouter la classe `.menu-header` pour le menu dans le header et `.menu-footer` pour le menu dans le footer. Attention : la classe est à placer sur l'élément `<nav>` du menu. Voir les exemples dans `/template-parts/header.html` et `/template-parts/footer.html`.
3. Dans le menu du header, on veut mettre en avant la page en cours avec une couleur différente. Pour cela, rajouter la classe `.active` en PHP sur l'élément correspondant. Attention, la classe se rajoute sur l'élément de liste `<li>` et non le `<a>`. Voir l'exemple dans `/template-parts/header.html`.

<details>
    <summary>Tu sèches ? Voici des indices...</summary>
    - Pour ne pas répéter le menu on peut imaginer appeler une fonction <code>getNavigation()</code> qui renverra le code HTML du menu<br>
    - Pour préciser à quel endroit on inclut le menu, on peut passer un élément en paramètre de cette fonction. Ex: <code>getNavigation('header')</code> ou <code>getNavigation('footer')</code><br>
    - On peut retrouver la page en cours avec la variable globale <code>$_SERVER</code><br> (faire un <code>var_dump()</code> de cette variable pour voir ce qu'elle contient et quel élément pourrait être intéressant à utiliser).
</details>