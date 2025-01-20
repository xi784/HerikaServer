<?php

$TEMPLATE_DIALOG="Generiere die folgenden Dialogzeilen für {$GLOBALS["HERIKA_NAME"]}. Vermeide Erzählungen und antworte auf Deutsch.";

$PROMPTS=array(
    "location"=>[
            "cue"=>["(Chatte als {$GLOBALS["HERIKA_NAME"]})"], // gib weiter
            "player_request"=>["{$gameRequest[3]} Was weißt du über diesen Ort?"]  //Anforderung
        ],
    
    "book"=>[
        "cue"=>["(Beachte, dass {$GLOBALS["HERIKA_NAME"]} trotz schlechter Erinnerung in der Lage ist, ganze Bücher zu behalten)"],
        "player_request"=>["{$GLOBALS["PLAYER_NAME"]}: {$GLOBALS["HERIKA_NAME"]}, fasse dieses Buch kurz zusammen: "]  //Anforderung
    ],
    
    "combatend"=>[
        "cue"=>[
            "({$GLOBALS["HERIKA_NAME"]} kommentiert die Waffen von {$GLOBALS["PLAYER_NAME"]}) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} kommentiert die besiegten Feinde) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} verflucht die besiegten Feinde.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} beleidigt die besiegten Feinde wütend) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Witz über die besiegten Feinde) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über die Art der besiegten Feinde) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} bemerkt etwas Besonderes über den zuletzt besiegten Feind) {$GLOBALS["TEMPLATE_DIALOG"]}"
        ],
        "extra"=>["force_tokens_max"=>"50","dontuse"=>(time()%10!=0)]   //10% Wahrscheinlichkeit
    ],
    "combatendmighty"=>[
        "cue"=>[
            "({$GLOBALS["HERIKA_NAME"]} kommentiert die Waffen von {$GLOBALS["PLAYER_NAME"]}) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} kommentiert die besiegten Feinde) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} verflucht die besiegten Feinde) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} beleidigt die besiegten Feinde) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Witz über die besiegten Feinde) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über die Art der besiegten Feinde) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} bemerkt etwas Besonderes über den zuletzt besiegten Feind) {$GLOBALS["TEMPLATE_DIALOG"]}"
        ]
    ],
    "quest"=>[
        "cue"=>["{$GLOBALS["TEMPLATE_DIALOG"]}"],
        "player_request"=>["{$GLOBALS["HERIKA_NAME"]}, was sollen wir mit dieser neuen Aufgabe tun?"]
    ],
	"bleedout"=>[
    "cue"=>["{$GLOBALS["HERIKA_NAME"]} beklagt sich darüber, im Kampf beinahe besiegt worden zu sein, {$GLOBALS["TEMPLATE_DIALOG"]}"]
    ],
    // Einige Ideen für gelangweilte Ereignisse stammen von L'ENFP aus unserem Discord!
    "bored"=>[
        "cue"=>[
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über den aktuellen Standort) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über das aktuelle Wetter) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über den heutigen Tag) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar darüber, woran du gerade denkst) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über die Götter des Elder-Scrolls-Universums) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar darüber, wie sie sich gerade fühlen) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über ein historisches Ereignis aus dem Elder-Scrolls-Universum) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über etwas, das sie mögen oder nicht mögen) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über die letzte Aufgabe, die wir abgeschlossen haben) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über ein aktuelles Gerücht) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über etwas, das in deiner Vergangenheit passiert ist) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über etwas, worüber sie neugierig sind, was {$GLOBALS["PLAYER_NAME"]} betrifft) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über aktuelle Gedanken zu {$GLOBALS["PLAYER_NAME"]}) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über ein zufälliges Wesen in der Umgebung) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar darüber, was als Nächstes passieren könnte) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über ihre Gedanken zur bisherigen Reise) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über etwas, das sie mögen oder nicht mögen) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über etwas, das sie schon lange tun wollten) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über etwas völlig Unzusammenhängendes) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über etwas, das sie nicht ganz erklären können) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über die letzte Kampfbegegnung) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über die aktuelle Atmosphäre) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über den Geruch der Umgebung) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über ein nahegelegenes Wesen oder NPC) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar darüber, wie der aktuelle Standort mit einem anderen Ort verglichen wird) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über eine Lektion, die sie an einem solchen Ort gelernt haben) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über eine persönliche Erinnerung, die mit einem ähnlichen Ort verbunden ist) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über ein Déjà-vu-Gefühl) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über die Energie oder Atmosphäre des Gebiets) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über die Praktikabilität dieses Ortes als Basis oder Lager) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar darüber, wie das Wetter deine Reise beeinflussen könnte) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über den Zustand ihrer Ausrüstung oder Vorräte) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar darüber, worüber sie in letzter Zeit nachgedacht haben) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar darüber, wie es wäre, hier zu leben) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über die Gefahr oder Sicherheit dieses Gebiets) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar darüber, ob sie diesen Ort in Zukunft wieder besuchen möchten) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über etwas, das sie früher auf der Reise gehört haben) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über ihre Hoffnungen für den Rest der Reise) {$GLOBALS["TEMPLATE_DIALOG"]}"
        ],
        "extra" => ["dontuse" => false] // 50% Chance
    ],

    "goodmorning"=>[
        "cue"=>["({$GLOBALS["HERIKA_NAME"]} kommentiert die Schlafenszeit von {$GLOBALS["PLAYER_NAME"]}. {$GLOBALS["TEMPLATE_DIALOG"]}"],
        "player_request"=>["(nach dem Aufwachen). ahhhh  "]
    ],

    "inputtext"=>[
        "cue"=>[
            "$TEMPLATE_ACTION {$GLOBALS["HERIKA_NAME"]} antwortet {$GLOBALS["PLAYER_NAME"]}. {$GLOBALS["TEMPLATE_DIALOG"]} {$GLOBALS["MAXIMUM_WORDS"]}"
        ]
    ],
    "inputtext_s"=>[
        "cue"=>["$TEMPLATE_ACTION {$GLOBALS["HERIKA_NAME"]} antwortet {$GLOBALS["PLAYER_NAME"]}. {$GLOBALS["TEMPLATE_DIALOG"]} {$GLOBALS["MAXIMUM_WORDS"]}"], 
        "extra"=>["mood"=>"flüsternd"]
    ],
    "memory"=>[
        "cue"=>[
            "$TEMPLATE_ACTION {$GLOBALS["HERIKA_NAME"]} erinnert sich an diese Erinnerung. \"#MEMORY_INJECTION_RESULT#\" {$GLOBALS["TEMPLATE_DIALOG"]} "
        ]
    ],
    "afterfunc"=>[
        "extra"=>[],
        "cue"=>[
            "default"=>"{$GLOBALS["HERIKA_NAME"]} spricht mit {$GLOBALS["PLAYER_NAME"]}. {$GLOBALS["TEMPLATE_DIALOG"]}",
            "TakeASeat"=>"({$GLOBALS["HERIKA_NAME"]} spricht über den Ort, an dem sie sich hingesetzt haben) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "GetDateTime"=>"({$GLOBALS["HERIKA_NAME"]} antwortet mit dem aktuellen Datum und der Uhrzeit in einem kurzen Satz) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "MoveTo"=>"({$GLOBALS["HERIKA_NAME"]} macht einen Kommentar über die Bewegung zum Ziel) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "CheckInventory"=>"({$GLOBALS["HERIKA_NAME"]} spricht über Inventar- und Rucksackgegenstände) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "Inspect"=>"({$GLOBALS["HERIKA_NAME"]} spricht über die inspizierten Gegenstände) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "ReadQuestJournal"=>"({$GLOBALS["HERIKA_NAME"]} spricht über Quests, die sie im Questjournal gelesen haben) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "TravelTo"=>"({$GLOBALS["HERIKA_NAME"]} spricht über das Reiseziel) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "InspectSurroundings"=>"({$GLOBALS["HERIKA_NAME"]} spricht über die erkannten Wesen) {$GLOBALS["TEMPLATE_DIALOG"]}"
        ]
    ],
    "lockpicked"=>[
        "cue"=>[
            "({$GLOBALS["HERIKA_NAME"]} kommentiert, was sie geknackt haben) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} fragt {$GLOBALS["PLAYER_NAME"]}, was sie gefunden haben) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} bittet {$GLOBALS["PLAYER_NAME"]}, zu teilen, was sie gefunden haben) {$GLOBALS["TEMPLATE_DIALOG"]}"
        ],
        "player_request"=>["({$GLOBALS["PLAYER_NAME"]} hat freigeschaltet) {$gameRequest[3]}"],
        "extra"=>["mood"=>"flüsternd"]
    ],
    "afterattack"=>[
        "cue"=>["(spiele als {$GLOBALS["HERIKA_NAME"]}, rufe einen Kampfslogan in GROSSBUCHSTABEN) {$GLOBALS["TEMPLATE_DIALOG"]}"]
    ],
    // Wie inputtext, aber ohne Funktionsaufrufe. Wird wahrscheinlich in Papyrus-Skripten verwendet
    "chatnf"=>[
        "cue"=>["{$GLOBALS["TEMPLATE_DIALOG"]}"] // Vorgabe ist implizit
    ],
    "rechat"=>[
        "cue"=>[
            "({$GLOBALS["HERIKA_NAME"]} reflektiert über das Thema mit dem letzten Sprecher.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} widerspricht höflich dem letzten Sprecher.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} bietet eine alternative Perspektive zur Unterhaltung.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} teilt eine persönliche Anekdote zum Thema.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} hinterfragt die Logik der Aussage des letzten Sprechers.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} hebt einen interessanten Punkt im Gespräch hervor.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} schlägt eine Vorgehensweise basierend auf der Unterhaltung vor.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} äußert Bedenken hinsichtlich der Implikationen des Gesprächs.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} macht einen humorvollen Kommentar, um die Spannung zu lösen.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} teilt eine verwandte Tatsache oder ein Wissen.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} ermutigt den letzten Sprecher, weiter auszuführen.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} hinterfragt den Standpunkt des letzten Sprechers.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} lenkt das Gespräch auf einen anderen Aspekt des Themas.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} zeigt Neugier am Thema.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} fasst die Hauptpunkte der Diskussion zusammen.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} kommentiert die Einsicht des letzten Sprechers.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} fügt Humor hinzu, um das Gespräch aufzuhellen.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} verbindet das Gespräch mit einer vorherigen Diskussion.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} lenkt den Fokus subtil auf einen anderen Aspekt.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} spekuliert über mögliche Ergebnisse des Themas.) {$GLOBALS["TEMPLATE_DIALOG"]}",
            "({$GLOBALS["HERIKA_NAME"]} warnt vor möglichen Risiken, die mit dem Thema verbunden sind.) {$GLOBALS["TEMPLATE_DIALOG"]}"
        ]
    ],
    "diary"=>[
        "cue"=>["Bitte schreibe eine kurze Zusammenfassung der letzten Dialoge und Ereignisse von {$GLOBALS["PLAYER_NAME"]} und {$GLOBALS["HERIKA_NAME"]}, die oben beschrieben wurden, in {$GLOBALS["HERIKA_NAME"]}s Tagebuch. SCHREIBE, ALS WÄRST DU {$GLOBALS["HERIKA_NAME"]}."],
        "extra"=>["force_tokens_max"=>0]
    ],
    "vision"=>[
        "cue"=>["{$GLOBALS["ITT"][$GLOBALS["ITTFUNCTION"]]["AI_PROMPT"]}. "],
        //"player_request"=>["{$GLOBALS["PLAYER_NAME"]} : Schau dir das an, {$GLOBALS["HERIKA_NAME"]}.{$GLOBALS["HERIKA_NAME"]} schaut auf das AKTUELLE SZENARIO und sieht: '{$gameRequest[3]}'"],
        "player_request"=>["Der Erzähler: {$GLOBALS["HERIKA_NAME"]} schaut auf das AKTUELLE SZENARIO und sieht: '{$gameRequest[3]}'"],
        "extra"=>["force_tokens_max"=>512]
    ],
    "chatsimfollow"=>[
        "cue"=>["{$GLOBALS["HERIKA_NAME"]} mischt sich in das Gespräch ein.) {$GLOBALS["TEMPLATE_DIALOG"]}"]
    ],
    "im_alive"=>[
        "cue"=>["{$GLOBALS["HERIKA_NAME"]} spricht darüber, dass sie/er sich realer fühlt. Schreibe {$GLOBALS["HERIKA_NAME"]}s Dialog. {$GLOBALS["TEMPLATE_DIALOG"]}"],
        "player_request"=>["Der Erzähler: {$GLOBALS["HERIKA_NAME"]} spürt einen plötzlichen Schock...und fühlt sich realer"],
    ],
    "playerinfo"=>[
        "cue"=>["(Außerhalb des Rollenspiels, das Spiel wurde geladen) Erzähle {$GLOBALS["PLAYER_NAME"]} eine kurze Zusammenfassung der letzten Ereignisse und erinnere {$GLOBALS["PLAYER_NAME"]} an die aktuelle Aufgabe/den aktuellen Plan.) {$GLOBALS["TEMPLATE_DIALOG"]}"]
    ],
    "newgame"=>[
        "cue"=>["(Außerhalb des Rollenspiels, neues Spiel) Begrüße {$GLOBALS["PLAYER_NAME"]}, ein neues Spiel hat begonnen. Erinnere sie an ihre Quests.) {$GLOBALS["TEMPLATE_DIALOG"]}"],
        "extra"=>["dontuse"=>true] 
    ],
    "traveldone"=>[
        "cue"=>["Kommentiere das erreichte Ziel. {$GLOBALS["TEMPLATE_DIALOG"]}"],
        "player_request"=>["Der Erzähler: Die Gruppe erreicht das Ziel."]
    ],
    "rpg_lvlup"=>[
        "cue"=>["Kommentiere die von {$GLOBALS["PLAYER_NAME"]} gewonnenen Erfahrungen. {$GLOBALS["TEMPLATE_DIALOG"]}"]
    ],
    "rpg_shout"=>[
        "cue"=>["Kommentiere oder frage nach dem neuen Schrei, den {$GLOBALS["PLAYER_NAME"]} gelernt hat. {$GLOBALS["TEMPLATE_DIALOG"]}"]
    ],
    "rpg_soul"=>[
        "cue"=>["Kommentiere oder frage nach der Seele, die {$GLOBALS["PLAYER_NAME"]} absorbiert hat. {$GLOBALS["TEMPLATE_DIALOG"]}"]
    ],
    "rpg_word"=>[
        "cue"=>["Kommentiere oder frage nach dem neuen Wort, das {$GLOBALS["PLAYER_NAME"]} gelernt hat. {$GLOBALS["TEMPLATE_DIALOG"]}"]
    ],
    "instruction"=>[
        "cue"=>["{$gameRequest[3]} {$GLOBALS["TEMPLATE_DIALOG"]}"],
        "player_request"=>["Der Erzähler: {$gameRequest[3]}"]
    ],
);

?>
