<?php

// Funktionen, die OpenAI bereitgestellt werden sollen

$ENABLED_FUNCTIONS=[
    'Inspect',
    'LookAt',
    'InspectSurroundings',
    'MoveTo',
    'OpenInventory',
    'OpenInventory2',
    'Attack',
    'AttackHunt',
    'Follow',
    'CheckInventory',
    'SheatheWeapon',
    'Relax',
    'LeadTheWayTo',
    'TakeASeat',
    'ReadQuestJournal',
    'IncreaseWalkSpeed',
    'DecreaseWalkSpeed',
    'GetDateTime',
    'SearchDiary',
    'SetCurrentTask',
    'StopWalk',
    'TravelTo',
    'SearchMemory',
    'GiveItemToPlayer',
    'TakeGoldFromPlayer',
    'FollowPlayer'
    // 'WaitHere'
];

$F_TRANSLATIONS["Inspect"]="Untersucht die AUSSTATTUNG und AUSRÜSTUNG des Ziels. ANTWORTE nur mit etwas wie 'Lass mich sehen' und warte.";
$F_TRANSLATIONS["LookAt"]="SCHAUT oder Untersucht die AUSSTATTUNG und AUSRÜSTUNG eines NPC, Charakters oder Wesens.";
$F_TRANSLATIONS["InspectSurroundings"]="Sucht nach Wesen oder Feinden in der Nähe.";
$F_TRANSLATIONS["MoveTo"]= "Gehe zu einem sichtbaren Gebäude oder sichtbaren Charakter, wird auch genutzt, um {$GLOBALS["PLAYER_NAME"]} zu einem Ziel zu führen.";
$F_TRANSLATIONS["OpenInventory"]="Beginnt den Handel oder den Austausch von Gegenständen mit {$GLOBALS["PLAYER_NAME"]}.";
$F_TRANSLATIONS["OpenInventory2"]="Beginnt den Handel, {$GLOBALS["PLAYER_NAME"]} muss Gegenstände an {$GLOBALS["HERIKA_NAME"]} geben.";
$F_TRANSLATIONS["Attack"]="Greift Charakter, NPC oder Wesen an.";
$F_TRANSLATIONS["AttackHunt"]="Versucht, ein Tier zu jagen oder zu töten.";
$F_TRANSLATIONS["Follow"]="Bewegt sich und folgt einem NPC, Charakter oder Wesen.";
$F_TRANSLATIONS["CheckInventory"]="Durchsucht das Inventar, den Rucksack oder die Taschen von {$GLOBALS["HERIKA_NAME"]}. Liste das Inventar.";
$F_TRANSLATIONS["SheatheWeapon"]="Steckt die aktuelle Waffe weg.";
$F_TRANSLATIONS["Relax"]="Stoppt Aufgaben. Entspannt sich und ruht.";
$F_TRANSLATIONS["LeadTheWayTo"]="Nur verwenden, wenn {$GLOBALS["PLAYER_NAME"]} dies ausdrücklich befiehlt. Führt {$GLOBALS["PLAYER_NAME"]} zu einer Stadt.";
$F_TRANSLATIONS["TakeASeat"]="{$GLOBALS["HERIKA_NAME"]} setzt sich auf einen nahegelegenen Stuhl oder ein Möbelstück.";
$F_TRANSLATIONS["ReadQuestJournal"]="Nur verwenden, wenn {$GLOBALS["PLAYER_NAME"]} ausdrücklich nach einer Quest fragt. Ruft Informationen über aktuelle Quests ab.";
$F_TRANSLATIONS["IncreaseWalkSpeed"]="Erhöht die Geschwindigkeit von {$GLOBALS["HERIKA_NAME"]} beim Gehen oder Reisen.";
$F_TRANSLATIONS["DecreaseWalkSpeed"]="Verringert die Geschwindigkeit von {$GLOBALS["HERIKA_NAME"]} beim Gehen oder Reisen.";
$F_TRANSLATIONS["GetDateTime"]="Ruft das aktuelle Datum und die Uhrzeit ab.";
$F_TRANSLATIONS["SearchDiary"]="Liest das Tagebuch von {$GLOBALS["HERIKA_NAME"]}, um sie an etwas zu erinnern. Sucht im Tagebuchindex.";
$F_TRANSLATIONS["SetCurrentTask"]="Setzt den aktuellen Plan, die Aufgabe oder die Quest.";
$F_TRANSLATIONS["ReadDiaryPage"]="Liest eine spezifische Seite aus dem Tagebuch von {$GLOBALS["HERIKA_NAME"]}.";
$F_TRANSLATIONS["StopWalk"]="Stoppt alle Aktionen von {$GLOBALS["HERIKA_NAME"]} sofort.";
$F_TRANSLATIONS["TravelTo"]="Nur verwenden, wenn {$GLOBALS["PLAYER_NAME"]} dies ausdrücklich befiehlt. Führt {$GLOBALS["PLAYER_NAME"]} zu einer Stadt.";
$F_TRANSLATIONS["SearchMemory"]="{$GLOBALS["HERIKA_NAME"]} versucht, sich an Informationen zu erinnern. ANTWORTE mit Hashtags.";
$F_TRANSLATIONS["WaitHere"]="{$GLOBALS["HERIKA_NAME"]} wartet und bleibt an der aktuellen Stelle.";
$F_TRANSLATIONS["GiveItemToPlayer"]="{$GLOBALS["HERIKA_NAME"]} gibt den Gegenstand (Eigenschaft Ziel) an {$GLOBALS["PLAYER_NAME"]} (Eigenschaft Zuhörer).";
$F_TRANSLATIONS["TakeGoldFromPlayer"]="{$GLOBALS["HERIKA_NAME"]} nimmt {$GLOBALS["PLAYER_NAME"]} eine bestimmte Menge (Eigenschaft Ziel) an Gold ab.";
$F_TRANSLATIONS["FollowPlayer"]="{$GLOBALS["HERIKA_NAME"]} folgt {$GLOBALS["PLAYER_NAME"]}.";

$F_RETURNMESSAGES["Inspect"]="{$GLOBALS["HERIKA_NAME"]} untersucht #TARGET# und sieht: #RESULT#.";
$F_RETURNMESSAGES["LookAt"]="Schaut auf oder untersucht die AUSSTATTUNG und AUSRÜSTUNG eines NPC, Charakters oder Wesens.";
$F_RETURNMESSAGES["InspectSurroundings"]="{$GLOBALS["HERIKA_NAME"]} schaut sich um und sieht: #RESULT#.";
$F_RETURNMESSAGES["MoveTo"]="Geht zu einem sichtbaren Gebäude oder Charakter, auch verwendet, um {$GLOBALS["PLAYER_NAME"]} zu einem Ziel zu führen.";
$F_RETURNMESSAGES["OpenInventory"]="Beginnt den Handel oder den Austausch von Gegenständen mit {$GLOBALS["PLAYER_NAME"]}.";
$F_RETURNMESSAGES["OpenInventory2"]="{$GLOBALS["PLAYER_NAME"]} gibt Gegenstände an {$GLOBALS["HERIKA_NAME"]}.";
$F_RETURNMESSAGES["Attack"]="{$GLOBALS["HERIKA_NAME"]} greift #TARGET# an.";
$F_RETURNMESSAGES["AttackHunt"]="{$GLOBALS["HERIKA_NAME"]} greift #TARGET# an.";
$F_RETURNMESSAGES["Follow"]="Bewegt sich und folgt einem NPC, Charakter oder Wesen.";
$F_RETURNMESSAGES["CheckInventory"]="INVENTAR von {$GLOBALS["HERIKA_NAME"]}: #RESULT#.";
$F_RETURNMESSAGES["SheatheWeapon"]="Steckt die aktuelle Waffe weg.";
$F_RETURNMESSAGES["Relax"]="{$GLOBALS["HERIKA_NAME"]} entspannt sich. Zeit, das Leben zu genießen.";
$F_RETURNMESSAGES["LeadTheWayTo"]="Nur verwenden, wenn {$GLOBALS["PLAYER_NAME"]} dies ausdrücklich befiehlt. Führt {$GLOBALS["PLAYER_NAME"]} zu einer Stadt.";
$F_RETURNMESSAGES["TakeASeat"]="{$GLOBALS["HERIKA_NAME"]} setzt sich auf einen nahegelegenen Stuhl oder ein Möbelstück.";
$F_RETURNMESSAGES["ReadQuestJournal"]="";
$F_RETURNMESSAGES["IncreaseWalkSpeed"]="Erhöht das Tempo von {$GLOBALS["HERIKA_NAME"]} beim Gehen oder Reisen.";
$F_RETURNMESSAGES["DecreaseWalkSpeed"]="Verringert das Tempo von {$GLOBALS["HERIKA_NAME"]} beim Gehen oder Reisen.";
$F_RETURNMESSAGES["GetDateTime"]="Ruft das aktuelle Datum und die Uhrzeit ab.";
$F_RETURNMESSAGES["SearchDiary"]="Liest das Tagebuch von {$GLOBALS["HERIKA_NAME"]}, um sie an etwas zu erinnern. Sucht im Tagebuchindex.";
$F_RETURNMESSAGES["SetCurrentTask"]="Setzt den aktuellen Plan, die Aufgabe oder die Quest.";
$F_RETURNMESSAGES["ReadDiaryPage"]="Liest eine spezifische Seite aus dem Tagebuch von {$GLOBALS["HERIKA_NAME"]}.";
$F_RETURNMESSAGES["StopWalk"]="Stoppt alle Aktionen von {$GLOBALS["HERIKA_NAME"]} sofort.";
$F_RETURNMESSAGES["TravelTo"]="{$GLOBALS["HERIKA_NAME"]} beginnt die Reise nach #TARGET#.";
$F_RETURNMESSAGES["SearchMemory"]="{$GLOBALS["HERIKA_NAME"]} versucht, sich an Informationen zu erinnern. ANTWORTE nur mit 'Lass mich nachdenken' und warte.";
$F_RETURNMESSAGES["WaitHere"]="{$GLOBALS["HERIKA_NAME"]} wartet und bleibt an der aktuellen Stelle.";
$F_RETURNMESSAGES["GiveItemToPlayer"]="{$GLOBALS["HERIKA_NAME"]} hat #TARGET# an {$GLOBALS["PLAYER_NAME"]} gegeben.";
$F_RETURNMESSAGES["TakeGoldFromPlayer"]="{$GLOBALS["PLAYER_NAME"]} gibt #TARGET# Münzen an {$GLOBALS["HERIKA_NAME"]}.";
$F_RETURNMESSAGES["FollowPlayer"]="{$GLOBALS["HERIKA_NAME"]} folgt {$GLOBALS["PLAYER_NAME"]}.";

$F_NAMES["Inspect"]="Untersuchen";
$F_NAMES["LookAt"]="Ansehen";
$F_NAMES["InspectSurroundings"]="UmgebungUntersuchen";
$F_NAMES["MoveTo"]="GeheZu";
$F_NAMES["OpenInventory"]="HandelStarten";
$F_NAMES["OpenInventory2"]="NimmGegenständeVomSpieler";
$F_NAMES["Attack"]="Angreifen";
$F_NAMES["AttackHunt"]="Jagen";
$F_NAMES["Follow"]="Folgen";
$F_NAMES["CheckInventory"]="InventarAnzeigen";
$F_NAMES["SheatheWeapon"]="WaffeWegstecken";
$F_NAMES["Relax"]="Entspannen";
$F_NAMES["TakeASeat"]="SetzDich";
$F_NAMES["ReadQuestJournal"]="QuestJournalLesen";
$F_NAMES["IncreaseWalkSpeed"]="ErhöheGehgeschwindigkeit";
$F_NAMES["DecreaseWalkSpeed"]="VerringereGehgeschwindigkeit";
$F_NAMES["GetDateTime"]="DatumUndZeitAbrufen";
$F_NAMES["SearchDiary"]="TagebuchDurchsuchen";
$F_NAMES["SetCurrentTask"]="SetzeAktuelleAufgabe";
$F_NAMES["ReadDiaryPage"]="TagebuchseiteLesen";
$F_NAMES["StopWalk"]="Halt";
$F_NAMES["TravelTo"]="ReiseNach";
$F_NAMES["SearchMemory"]="ErinnereDich";
$F_NAMES["WaitHere"]="HierWarten";
$F_NAMES["GiveItemToPlayer"]="GibGegenstandAnSpieler";
$F_NAMES["TakeGoldFromPlayer"]="NimmGoldVomSpieler";
$F_NAMES["FollowPlayer"]="FolgeSpieler";

?>
