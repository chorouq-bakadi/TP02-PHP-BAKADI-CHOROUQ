# TP 02 PHP : Programmation Web 2

- *Nom* : Bakadi
- *Prénom* : Chorouq
- *Groupe* : 02
- *Titre du TP* : TP 02 PHP, Programmation Web 2, 2026/2027

## Liste des exercices
1. ex01.php : balises, echo, commentaires
2. ex02.php : variables et concaténation
3. ex03.php : constantes et calcul de TVA
4. ex04.php : types et conversions
5. ex05.php : conditions (if / elseif / else)
6. ex06.php : switch
7. ex07.php : boucles for
8. ex08.php : while, do-while, continue, break
9. ex09.php : tableau associatif et foreach
10. ex10_get / ex10_post : formulaires GET et POST

## Exécution
Depuis la racine du dépôt : php -S localhost:8000, puis ouvrir http://localhost:8000/index.php.

## Réponses courtes

### Exercice 2
$note et $Note sont différentes car PHP est sensible à la casse pour les noms de variables.
Noms valides : $a, $_a, $a_a, $AAA, $a1.
Noms invalides : $a! (caractère spécial) et $1a (commence par un chiffre).

### Exercice 4
Avec echo, false s'affiche comme une chaîne vide, alors que var_dump affiche bool(false).

### Exercice 5
| Moyenne testée | Message |
|---|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

### Exercice 10
Avec GET, les valeurs apparaissent dans l'URL (?nom=...&prenom=...&groupe=...). Avec POST, elles n'apparaissent pas dans l'URL : elles sont envoyées dans le corps de la requête
