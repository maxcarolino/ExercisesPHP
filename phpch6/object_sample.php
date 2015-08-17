<html>
	<head>
	<title> Objects Sample Implentation </title>
	</head>
	
	<body>
	<?php

	class heroes  
	{
	   private $name, $attribute, $skill1, $skill2, $skill3, $skill4;
	   
	   //constructor
	   function __construct($hero_name, $attr, $sk1, $sk2, $sk3, $sk4 )
              {
		$this->name = $hero_name;
		$this->attribute = $attr;
		$this->skill1 = $sk1;
		$this->skill2 = $sk2;
		$this->skill3 = $sk3;
		$this->skill4 = $sk4;		
	      }
	   
	   public function getName()
	      {
		return $this->name;
	      }
	  
	   public function getAttr()
	      {
		return $this->attribute;
	      }

	   public function getSkill()
	      {
		$skill[0] = $this->skill1;
		$skill[1] = $this->skill2;
		$skill[2] = $this->skill3;
		$skill[3] = $this->skill4;

		return $skill;

	      }
	}

	//create an object, set the properties	
	$hero1 = new heroes("Earthshaker", "Strength", "Fissure", "Enchant Totem", "Aftershock", "Echo Slam");

	//create a new object, set the properties
	$hero2 = new heroes("Invoker", "Intelligence", "Quas", "Wex", "Exort", "Invoke");
	
	//store the name and attrib to a variable
	$es_name = $hero1->getName();
	$es_attr = $hero1->getAttr();
	$es_skl  = $hero1->getSkill();

	//store the other hero name
	$invoker_name = $hero2->getName();
	$invoker_attr = $hero2->getAttr();
	$invoker_skl = $hero2->getSkill();

	echo "$es_name is a $es_attr-type hero <br>";
	echo "$es_name has skills ";
	foreach($es_skl as $i) {
	echo "<b>$i</b>, ";
	}
	echo "<br><br>$invoker_name is a $invoker_attr-type hero <br>";
	echo "$invoker_name has skills ";
	foreach($invoker_skl as $j) {
	echo "<b>$j</b>, ";
	}
	
	?>
	</body>
</html>
	
	
	

	
