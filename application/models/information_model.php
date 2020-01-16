<?php

class information_model extends CI_Model{

  public function getInformation()
  {
    $data['bodyText'] = ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque metus ligula, ac mollis justo cursus quis. Fusce id porttitor nibh. Ut molestie odio eu purus faucibus, eu imperdiet justo tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse facilisis eu urna elementum commodo. Pellentesque ut lacus id nisl cursus vehicula a faucibus nunc. Nunc maximus neque augue, quis pretium odio mollis imperdiet. Phasellus in eros eu mi efficitur gravida eu commodo lacus. Integer efficitur, ante sit amet rutrum lobortis, erat nibh luctus massa, at egestas arcu libero vitae arcu. Quisque at fringilla purus, sed bibendum velit. Etiam leo sapien, facilisis ac mattis vel, commodo at nibh.';
    $data['heading'] = 'further Information';

    return $data;
  }
}
?>
