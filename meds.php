<?php

$med[]="Halothane";
$med[]="Isoflurane";
$med[]="Nitrous oxide";
$med[]="Oxygen";
$med[]="Ketamine";
$med[]="Propofol";
$med[]="Bupivacaine";
$med[]="Lidocaine";
$med[]="Lidocaine/epinephrine";
$med[]="Ephedrine";
$med[]="Amitriptyline";
$med[]="Cyclizine";
$med[]="Dexamethasone";
$med[]="Diazepam";
$med[]="Docusate sodium";
$med[]="Fluoxetine";
$med[]="Haloperidol";
$med[]="Hyoscine butylbromide";
$med[]="Hyoscine hydrobromide";
$med[]="Lactulose";
$med[]="Loperamide";
$med[]="Metoclopramide";
$med[]="Midazolam";
$med[]="Ondansetron";
$med[]="Senna";
$med[]="Dexamethasone";
$med[]="Epinephrine (adrenaline)";
$med[]="Hydrocortisone";
$med[]="Loratadine[note 4]";
$med[]="Prednisolone";
$med[]="Acetylcysteine";
$med[]="Atropine";
$med[]="Calcium gluconate";
$med[]="Methylthioninium chloride (methylene blue)";
$med[]="Naloxone";
$med[]="Penicillamine";
$med[]="Prussian blue";
$med[]="Sodium nitrite";
$med[]="Sodium thiosulfate";
$med[]="Deferoxamineα";
$med[]="Dimercaprolα";
$med[]="Fomepizoleα";
$med[]="Sodium calcium edetateα";
$med[]="Succimerα";
$med[]="Carbamazepine";
$med[]="Diazepam";
$med[]="Lamotrigine";
$med[]="Lorazepam";
$med[]="Magnesium sulfate[note 5]";
$med[]="Midazolam";
$med[]="Phenobarbital";
$med[]="Phenytoin";
$med[]="Valproic acid (sodium valproate)";
$med[]="Ethosuximideα";
$med[]="Albendazole";
$med[]="Ivermectin";
$med[]="Levamisole";
$med[]="Mebendazole";
$med[]="Niclosamide";
$med[]="Praziquantel";
$med[]="Pyrantel";
$med[]="Amoxicillin";
$med[]="Amoxicillin/clavulanic acid";
$med[]="Ampicillin";
$med[]="Benzathine benzylpenicillin";
$med[]="Benzylpenicillin";
$med[]="Cefalexin";
$med[]="Cefazolin[note 6]";
$med[]="Cefixime[note 7]";
$med[]="Cefotaxime[note 8]";
$med[]="Ceftriaxone[note 9]";
$med[]="Cloxacillin";
$med[]="Phenoxymethylpenicillin (penicillin V)";
$med[]="Piperacillin/tazobactam";
$med[]="Procaine benzylpenicillin[note 10]";
$med[]="Ceftazidimeα";
$med[]="Meropenemα";
$med[]="Aztreonamα";
$med[]="Imipenem/cilastatinα[note 11]";
$med[]="Amikacin";
$med[]="Azithromycin[note 12]";
$med[]="Chloramphenicol";
$med[]="Ciprofloxacin";
$med[]="Clarithromycin[note 13]";
$med[]="Clindamycin";
$med[]="Doxycycline";
$med[]="Gentamicin";
$med[]="Metronidazole";
$med[]="Nitrofurantoin";
$med[]="Spectinomycin";
$med[]="Trimethoprim/sulfamethoxazole";
$med[]="Vancomycin";
$med[]="Ethambutol";
$med[]="Ethambutol/isoniazid";
$med[]="Ethambutol/isoniazid/pyrazinamide";
$med[]="Ethambutol/isoniazid/rifampicin ";
$med[]="Isoniazid";
$med[]="Isoniazid/pyrazinamide/rifampicin";
$med[]="Isoniazid/rifampicin ";
$med[]="Pyrazinamide";
$med[]="Rifabutin[note 14]";
$med[]="Rifampicin";
$med[]="Rifapentine[note 15]";
$med[]="Amikacinα";
$med[]="Bedaquilineα";
$med[]="Capreomycinα";
$med[]="Clofazimineα";
$med[]="Cycloserineα[note 16]";
$med[]="Delamanidα";
$med[]="Ethionamideα[note 17]";
$med[]="Kanamycinα";
$med[]="Levofloxacinα[note 18]";
$med[]="Linezolidα";
$med[]="Moxifloxacin";
$med[]="p-aminosalicylic acidα";
$med[]="Streptomycinα ";

$n = $_REQUEST["n"];

$hint2="";

echo '<input list="meds" class="qs" name="medicines" id="med1">';
echo '<datalist id="meds">';

if ($n !== "") {
    $n = strtolower($n);
    $len=strlen($n);
    foreach($med as $name) {
        if (stristr($n, substr($name, 0, $len))) {
            if ($hint2 === "") {
                $hint2 = $name;
                
            } else {
                $hint2 .= " , $name ";
                
                echo '<option value='.$name.'>';
            }
        }
    }
}

echo '</datalist>';

?>