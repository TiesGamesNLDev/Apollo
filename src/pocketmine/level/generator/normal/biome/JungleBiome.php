<?php

/*
Finish
*/

namespace pocketmine\level\generator\normal\biome;

use pocketmine\level\generator\populator\Sugarcane;
use pocketmine\level\generator\populator\TallGrass;
use pocketmine\level\generator\populator\Tree;
use pocketmine\level\generator\populator\Melon;
use pocketmine\level\generator\populator\CocoaBeans;
use pocketmine\block\Sapling;

class JungleBiome extends GrassyBiome{

	public function __construct(){
		parent::__construct();

		$sugarcane = new Sugarcane();
		$sugarcane->setBaseAmount(6);
		$tallGrass = new TallGrass();
		$tallGrass->setBaseAmount(5);
		$trees = new Tree(Sapling::JUNGLE);
		$tallGrass->setBaseAmount(10);
		
		$melon = new Melon();
		$melon->setBaseAmount(0);
		$melon->setRandomAmount(1);
		$this->addPopulator($melon);
		
		$cocoaBeans = new CocoaBeans();
		$cocoaBeans->setBaseAmount(1);
		$cocoaBeans->setRandomAmount(1);
		$this->addPopulator($cocoaBeans);

		$this->addPopulator($sugarcane);
		$this->addPopulator($tallGrass);
		$this->addPopulator($trees);

		$this->setElevation(64, 90);
		
		$this->temperature = 0.95;
		$this->rainfall = 0.80;
	}

	public function getName() : string{
		return "Jungle";
	}
}
