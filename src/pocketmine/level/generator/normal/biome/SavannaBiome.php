<?php
/*
Finish
*/
namespace pocketmine\level\generator\normal\biome;
use pocketmine\level\generator\populator\Sugarcane;
use pocketmine\level\generator\populator\TallGrass;
use pocketmine\level\generator\populator\Tree;
use pocketmine\block\Sapling;
use pocketmine\block\Block;
class SavannaBiome extends GrassyBiome{
	public function __construct(){
		parent::__construct();
		$sugarcane = new Sugarcane();
		$sugarcane->setBaseAmount(6);
		$tallGrass = new TallGrass();
		$tallGrass->setBaseAmount(25);
		$trees = new Tree(Sapling::ACACIA);
		$tallGrass->setBaseAmount(4);
		$this->addPopulator($sugarcane);
		$this->addPopulator($tallGrass);
		$this->addPopulator($trees);
		$this->setElevation(62, 74);
		$this->temperature = 1.20;
		$this->rainfall = 0.20;
	}
	public function getName() : string{
		return "Savanna";
	}
}
