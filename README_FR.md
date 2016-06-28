# Projet de MiniT'Chat - II Le Retour

Le projet est une **application Web de T'Chat**, les groupes seront définis _aléatoirements_.
Ce dont vous avez besoin, c'est ce que vous avez déjà appris : `HTML`, `CSS`, `PHP`, `MySQL` et `JS` !

Vous utiliserez le framework [Material Design Light](https://getmdl.io/).
Un fichier squelette `index-skeleton.php` est disponible à la racine de ce dépôt, vous devez suivre le cahier des charges fonctionnel.

Ce sujet est librement inspiré de [OpenClassrooms - TP : un mini-chat](https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/tp-un-mini-chat) !

## Cahier des charges fonctionnel (déjà rédigé)

* [Version française](https://docs.google.com/document/d/1AK9OQgLsr0Iv549YS3zUCoENvSVdm0H5RV2kMYpaeyc)
* [Version anglaise](https://docs.google.com/document/d/15xab7ijmKXCmGWooJcPr9Yp8X6TVPQ3CnYtqoKc297Q)

## Structure de la table MySQL

* `ID` (type `INT`) : il nous permettra de savoir dans quel ordre ont été postés les messages. Il faudra le mettre en `auto_increment` pour que les numéros s'écrivent tout seuls, et ne pas oublier de sélectionner « Primaire » (cela dit à MySQL que c'est le champ qui numérote les entrées) ;

* `pseudo` (type `VARCHAR`) : pensez à indiquer la taille maximale du champ (je vous conseille de mettre le maximum, « 255 ») ;

* `message` (type `VARCHAR`) : de même, on indiquera une taille maximale de 255 caractères. Si vous pensez que vos messages seront plus longs, utilisez plutôt le type `TEXT`, beaucoup moins limité.

## Caractéristiques

C'est un t'chat, vous devez bien sûr laisser les gens discuter ensemble sur un canal global, __sans connexion avec mot de passe__, permettre aux utilisateurs de choisir un pseudo, les messages sont du texte brut.

## Bonus

* Retenir le pseudo. On doit actuellement saisir à nouveau son pseudo à chaque nouveau message. Comme vous le savez probablement, il est possible en HTML de pré-remplir un champ avec l'attribut `value`. Par exemple :

```html
<input type="text" name="pseudo" value="Alice" />
```

* Remplacez `Alice` par le pseudonyme du visiteur. Ce pseudonyme peut être issu d'un cookie par exemple : lorsqu'il poste un message, vous inscrivez son pseudo dans un cookie, ce qui vous permet ensuite de pré-remplir le champ.

* Proposez d'actualiser le mini-chat. Le mini-chat ne s'actualise pas automatiquement s'il y a de nouveaux messages. C'est normal, ce serait difficile à faire à notre niveau. À la base, le Web n'a pas vraiment été prévu pour ce type d'applications. En revanche, ce que vous pouvez facilement faire, c'est proposer un lien « Rafraîchir » qui charge à nouveau la page. Ainsi, s'il y a de nouveaux messages, ils apparaîtront après un clic sur le lien.

* Rafraichir automatiquement la page toute les 5 secondes à l'aide de JavaScript.

* Afficher les anciens messages. On ne voit actuellement que les 10 derniers messages. Sauriez-vous trouver un moyen d'afficher les anciens messages ? Bien sûr, les afficher tous d'un coup sur la même page n'est pas une bonne idée. Vous pourriez imaginer un paramètre `$_GET['page']` qui permet de choisir le numéro de page des messages à afficher.

* Autoriser d'autres canaux comme des discussions privées.

* Laisser les utilisateurs définir un avatar (vous pouvez utiliser [Gravatar](https://fr.gravatar.com/)).

<!--
* Que les gens puissent s'envoyer des _Smileys Emoji_, _Liens_, _Photos_, _Vidéos Youtubes_, _Tags d'utilisateurs_, etc.. (vous devrez utiliser les `REGEX`) ;

## Conception

Voici quelques conseils et astuces pour vous aider à travailler ensemble sur le même code.

Tout d'abord travailler avec toute l'équipe sur la conception globale de l'application, puis séparer l'équipe, entre par exemple des développeurs Backend et Frontend, une bonne idée est d'utiliser des fonctions de démonstration, par exemple :

```javascript
/* DEMO FUNCTIONS */

var sendMessage = function (message) {
    console.log("DEMO: sendMessage: " + message);
};

var retreiveMessages = function () {
    var messages = [
        { pseudo: "Roméo", message : "Ô Roméo ! Roméo ! pourquoi es-tu Roméo ? Renie ton père et abdique ton nom ; ou, si tu ne le veux pas, jure de m’aimer, et je ne serai plus une Capulet." },
        { pseudo: "Juliette", message : "Dois-je l’écouter encore ou lui répondre ?" }
    ];
    console.log("DEMO: retreiveMessages :" + messages);
    return messages;
};
```

Le but est de commencer à coder l'interface et de tester l'utilisation de ces fonctions et **dans le même temps** un autre membre de l'équipe peut travailler sur les fonctions pour les faire fonctionner avec des données réelles.

## Ressources

**REGEX (Expressions Rationelles)**

* <https://fr.wikipedia.org/wiki/Expression_rationnelle>
* Vous pouvez les tester en ligne avec <https://regex101.com/> & <http://regexr.com/>
* Et pratiquer un peu ici: <https://www.hackerrank.com/domains/regex/>

Par exemple : `:smile_cat:` va être remplacer par `<img src="graphics/emojis/smile_cat.png">`.

**AJAX**

* <https://fr.wikipedia.org/wiki/Ajax_(informatique)>
* Vous pouvez lire les pages de la documentation officielle jQuery <https://api.jquery.com/jquery.get/> & <http://api.jquery.com/jquery.ajax/>
* Et un peu de OpenClassrooms <https://openclassrooms.com/courses/simplifiez-vos-developpements-javascript-avec-jquery/premiers-pas-avec-ajax> & <Https://openclassrooms.com/courses/un-site-web-dynamique-avec-jquery/le-fonctionnement-de-ajax>
-->

