<?php
/*
 *	Image Separator PHP 1.0.1
 *	Copyright (c) 2018 João Felipe Gomes
 *	github.com/joaofelipegom
 *
 *	http://linkedin/in/joaofelipegom
 *	http://github.com/joaofelipegom
 */

    error_reporting(0);
    ini_set('display_errors',0);

    $path = new DirectoryIterator('INSERT-HERE-YOUR-PATH');
    $t_salvar;
    $x = 0;

    foreach($path as $entry){
	   $EndImagem = $entry->getFilename();
	   $TamanhoImagem = getimagesize($EndImagem);
	
	   $LargPermitidas = array ("1094","1130","1134","1186","492","500","500","500","500","500","500","500","500","500","500","500","528","543","546","550","551","572","592","624","624","629","630","639","640","640","657","658","767","776","778","783","784","786","788","790","792","792","795","795","796","798","798","799","799","799","800","800","800","800","800","802","802","804","808","810","814","815","816","824","826","827","828","830","830","830","831","833","835","837","853","854","508","632","855","628","545","800","813");
        
	   $AltuPermitidas = array ("1032","1022","1022","1022","527","425","430","432","436","452","465","478","481","482","484","488","550","608","540","538","538","556","504","544","600","544","544","543","552","579","543","543","754","796","818","818","836","744","810","818","822","874","818","856","818","822","894","810","818","856","744","754","794","818","870","858","908","846","866","830","852","758","836","850","826","735","850","812","852","866","810","812","818","816","735","824","608","544","866","532","413","752","735");
	
	   if(in_array($TamanhoImagem[0],$LargPermitidas) && in_array($TamanhoImagem[1],$AltuPermitidas)){
           echo('INSERT-HERE-YOUR-PATH' . $EndImagem.'" "INSERT-HERE-YOUR-PATH2' . $TamanhoImagem[0] .'x'. $TamanhoImagem[1] .'" <br />');
           $t_salvar[$x] = $TamanhoImagem[0].'x'.$TamanhoImagem[1];
           $x++;
       }
    }

    /*echo '<br /><br />SCRIPT: <br /> @echo OFF md ';
	for ($y=0;$y<$x;$y++){
		echo $t_salvar[$y]."; ";
	}*/
?>