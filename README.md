# OrmProject
Petit Orm fait main
Voici mon petit Orm fait main en PHP . Celui ci ne gère pas encore les relations .
Les modèles doivent être dans le dossier exemple/model
Chaque modèle doit obligatoirement définir une propriété model qui aura pour forme :
Tableau[nom du modèle , *qui doit être le même que le nom du fichier et celui de la classe* champs[
La liste des champs que vous voulez donner à votre entité ainsi que leurs options : le type : String ,Integer,Datetime / le
allowNull à true ou false ,la primary key sur le champ de l'id et en key de ce tableau d'options le nom du champ .
Avec ces champs metteaz les variables du même nom dans le modal ainsi que les getters et les setters .

Pour le repository copiez le repository présent sur ce github et remplacez le $this->model= new Film par le modèle que vous venez de créér
et donner lui pour nom nomDuModèle.Repository

Utilisation de l'ORM

Avec save vous pouivez soit créér une entité soit l'éditer .
