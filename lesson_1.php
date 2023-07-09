<?php
class Texnika
{
  public $brand, $model, $type;

  public function __construct($brand, $model, $type)
  {
    $this->brand = $brand;
    $this->model = $model;
    $this->type = $type;
  }

  public function info()
  {
    return "Brand: " . $this->brand . " Model: " . $this->model . " Type: " . $this->type;
  }
}

class Notebooks extends Texnika
{
  public $video_card, $ram, $display;

  public function __construct($brand, $model, $type, $video_card, $ram, $display)
  {
    parent::__construct($brand, $model, $type);
    $this->video_card = $video_card;
    $this->ram = $ram;
    $this->display = $display;
  }

  public function more_info()
  {
    return "Brand: " . $this->brand . " Model: " . $this->model . " Type: " . $this->type . " Video Card: " . $this->video_card . " Ram: " . $this->ram . " Display: " . $this->display;
  }
}

// $texnika  = new Texnika('Samsung', 'A21 S', 'Android');
// echo $texnika->info();
$notebooks = new Notebooks('Samsung', 'A21 S', 'Android','Nvdia', '16', 'Amo led');

echo $notebooks->more_info();