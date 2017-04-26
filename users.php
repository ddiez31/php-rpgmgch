<?php

$client1 = new Client(1, 'jean.dupont@gmail.com', '11/02/2006');
$client2 = new Client(2, 'iron.man@avengers.org', '27/10/2014');

echo 'client n°: '.$client1->getId().' - ';
echo 'email: '.$client1->getEmail().' - ';
echo 'créé le: '.$client1->getCreatedAt().' ';

// $client1->buy();

    echo'<thead><tr>';
            echo '<th>'.$column.'</th>';
        }
      echo'</tr></thead>';

    echo'<tbody><tr><td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$difficulty.'</td>
            <td>'.$distance.'km</td>
            <td>'.$duration.'</td>
            <td>'.$height_difference.'m</td>
            <td>'.$available.'</td></tr></tbody>';


?>