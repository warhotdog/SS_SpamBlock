<?php

//@Author: Daniel Suzan (WarHotDog)
//

class SpamBlock extends RootURLController {
	public function handleRequest(SS_HTTPRequest $request, DataModel $model = null) {
		if (!is_callable('gethostbyname')) {
			Debug::message('isnt Callable gethosbyname');
		} else {
			if (!HttpPblKey == "") {
				$IP = implode(".",array_reverse(explode(".",$_SERVER['REMOTE_ADDR'])));
				$rhost = HttpPblKey . "." . $IP . "." . "dnsbl.httpbl.org";
				$dnsqry = gethostbyname($rhost);
				$result = explode(".",$dnsqry);
				if (!empty($result) && ($result[0]==127)) {
					$LastActivity = $result[1];
					$ThreatScore = $result[2];
					$Type = $result[3];
					//Read Score
					if ($LastActivity <= 30 && $ThreatScore >= 10 && $Type > 0) {
						if ($Type = 2) {$ThreatType = "Harvester";}
						if ($Type = 3) {$ThreatType = "Suspicious & Harvester";}
						if ($Type = 4) {$ThreatType = "Comment Spammer";}
						if ($Type = 5) {$ThreatType = "Suspicious & Comment Spammer";}
						if ($Type = 6) {$ThreatType = "Harvester & Comment Spammer";}
						if ($Type = 7) {$ThreatType = "Suspicious & Harvester & Comment Spammer";}
						//TODO: Agregar los para los buscadores (google, yahoo, bing ...)
						if (HttpPblBackLog) {
							$LogWriter = new SS_LogFileWriter(BASE_PATH . "/SpamBlock/log/SpamBlock.Info");
							SS_Log::add_writer($LogWriter, SS_Log::NOTICE);
							$msg = $_SERVER['REMOTE_ADDR'] . " " . $ThreatType;
							SS_Log::log($msg,SS_Log::NOTICE);
							SS_Log::remove_writer($LogWriter);
						}
						throw new SS_HTTPResponse_Exception('Forbidden :D', 403);
					}
				}
			}
		}
		/*Compat*/
		return parent::handleRequest($request, $model);	
	}
	
	

	

}
