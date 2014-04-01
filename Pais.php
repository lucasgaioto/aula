public function MesmoPais(PaisFronteira $p1, PaisFronteira $p2)
{
	if ($p1->codigo == $p2->codigo)
	{
		return false;
	}
	return true;
}
public function VerificarF(PaisFronteira $p1)
{
	if ($p1->PaisFronteira != NULL )
	{
		return false;
	}
	return true;
}
public function DensidadeP($populacao,$dimensao)
{
	$densidade = $populacao/ $dimensao;
	return $densidade;
}

public function MostraPais(PaisFronteira $p1, PaisFronteira $p2)
{
	foreach ($p1 -> PaisFronteira as $key => $value) {
		if($p1->PaisFronteira[$key] == $p2->PaisFronteira[$key]){
			echo $p1->PaisFronteira[$key];
		}
	}

}

}
