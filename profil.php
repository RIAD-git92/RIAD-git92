<?php

// $listUsers = [
//   ["Doe", "Jane", 70],
//   [1, "Rashford", "John", 70],
//   [1, "Martin", "Pierre", 70],
// ];

// echo '<pre>';
// print_r($listUsers);



class User
{
  private int $id;
  protected string $lastName;
  protected string $firstName;
  public string $fullName;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getFirstName()
  {
    return $this ->firstName;
  }

  public function setFirstName($firstName)
  {
    $this ->firstName = $firstName;
  }

  public function comment(){
    echo 'commentaire';
  }
  function __construct($id, $lastName, $firstName)
  {
    $this->id = $id;
    $this->lastName = $lastName;
    $this->firstName = $firstName;
    $this->fullName = $firstName . ' ' . $lastName;

    // echo $firstName. ' '. $firstName2 .' '.$firstName3.' '.$lastName;
  }
}

echo '<pre>';

$user1 = new User(1, 'Doe', 'Jane');

$user1->setFirstName('Maria');



// echo $user1->getFirstName();

$user1->comment();
// print_r($user1);

class Admin extends User
{
public function moderate()
{
 echo 'modération <br />';
}
}

$admin1 = new admin(2, 'Simpson', 'Homer');
echo $admin1->getFirstName();

