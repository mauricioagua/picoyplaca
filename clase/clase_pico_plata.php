<?php
/**
 * 
 */
class placa
{
	private $placa;
	//public  function validar($placa)
	//{
		
	//}
	public function numero($placa)
	{
		$result=intval(preg_replace('/[^0-9]+/', '',$placa), 10);
		$num=substr($result, -1);
		return $num;
	}
	public function validar($placa,$dia,$hora){
		$hora1=strtotime('07:00');
		$hora2=strtotime('09:30');
		$hora3=strtotime('16:00');
		$hora4=strtotime('19:30');
		$h=1;
		$d=1;
		if ($hora1<=$hora and $hora2>=$hora) {
			$h=0;
		}elseif ($hora3<=$hora and $hora4>=$hora) {
			$h=0;
		}
		switch ($dia) {
			case 1:
				if ($placa==2 || $placa==1) {
					$d=0;
				}
				break;
				case 2:
					if ($placa==4 || $placa==3) {
						$d=0;
					}
					break;
					case 3:
						if ($placa==6 || $placa==5) {
							$d=0;
						}
						break;
						case 4:
							if ($placa==8 ||$placa==7) {
								$d==0;
							}
							break;
							case 5:
								if ($placa==0 || $placa==9) {
									$d=0;
								}
								break;
			
			default:
				$d=1;
				}
		if (($h+$d)>=1) {
			$run=true;
		}else{
			$run=false;
		}
		return $run;
	}
}