"# newsletter" 

Projet créé sous Symfony 5

Formulaire d’abonnement à une newsletter multiple. 
Il peut donc y avoir « n » liste d’abonnés. 
(Vous avez libre choix pour la contribution de ces listes). 
L’utilisateur pourra saisir son prénom (champ non obligatoire).
Un email de confirmation est envoyé à l'utilasateur après inscription à une newsletter. 

Exemple de contenu du mail après inscription :

Vous avez été inscrit avec succès à la Newsletter : {nom de la newsletter}
Enfin, envoyer une newsletter (contenu statique) à tous les inscrits via une commande
symfony qui prendra en paramètre l’id de la newsletter. 

Un traitement de l’envoi par queue sera apprécié. 
Exemple de newsletter envoyé :

Bienvenue {prenom},
Vous recevez cet email car vous êtes abonné à la newsletter {nom de la
newsletter}. Ce n’est pas du SPAM :)

L'abonné peux directement se désinscrire en cliquant sur un lien unique, 
et gérer ses différents abonnements via un autre lien. Ex :

Bienvenue {prenom},
Vous recevez cet email car vous êtes abonné à la newsletter {nom de la
newsletter}.
Ce n’est pas du SPAM :)
Cliquez ici pour vous désinscrire / Cliquez ici pour modifier vos abonnements
