{# <?php
namespace Susano;

class DeparsingModel{


}
// Objectifs : prendre mes données recus et les comparer aux rows des models
// 
// 

array(12) {
    'id' =>
    string(2) "17"
    [0] =>
    string(2) "17"
    'title' =>
    string(6) "Django"
    [1] =>
    string(6) "Django"
    'duree' =>
    string(2) "45"
    [2] =>
    string(2) "45"
    'category' =>
    string(2) "SF"
    [3] =>
    string(2) "SF"
    'studio' =>
    string(8) "Blizzard"
    [4] =>
    string(8) "Blizzard"
    'synopsis' =>
    string(48) "Un petit film sur les violences contre les noirs"
    [5] =>
    string(48) "Un petit film sur les violences contre les noirs"
  }


  {
    $requ = self::connect()->prepare('SELECT * FROM users INNER JOIN coach ON users.NNI = coach.NNI WHERE users.NNI = ?');
    $requ->execute([$nni]);

    while ($coach = $requ->fetch()) {
        $coachs = [];
        $coachs['id'] = $coach['id'];
        $coachs['NNI'] = $coach['NNI'];
        $coachs['email'] = $coach['email'];
        $coachs['tel'] = $coach['tel'];
        $coachs['firstname'] = $coach['prenom'];
        $coachs['lastname'] = $coach['nom'];
        $coachs['site'] = $coach['site'];
        $coachs['heures'] = $coach['heures'];
        $coachs['heures_restantes'] = $coach['heures_restantes'];
        $coachs['visibility'] = $coach['visibility'];
        $coachs['competence_1'] = $coach['competence_1'];
        $coachs['competence_2'] = $coach['competence_2'];
        $coachs['competence_3'] = $coach['competence_3'];
        $coachs['NiveauCompetence_1'] = $coach['NiveauCompetence_1'];
        $coachs['NiveauCompetence_2'] = $coach['NiveauCompetence_2'];
        $coachs['NiveauCompetence_3'] = $coach['NiveauCompetence_3'];
        $coachs['points'] = $coach['points'];

        $this->cardCoach[] = $coachs; #}