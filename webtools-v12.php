<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);
error_reporting(0);
//Get your api key from https://reverse-ip-api.whoisxmlapi.com/products
define("API_KEY1", "at_K3FwgGMbQ1MQIt2kQxVV00uRfRBK7");
echo "__        __   _   _____           _  " . "\n";
echo "\ \      / /__| |_|_   _|__   ___ | |___ " . "\n";
echo " \ \ /\ / / _ \ '_ \| |/ _ \ / _ \| / __|" . "\n";
echo "  \ V  V /  __/ |_) | | (_) | (_) | \___\ " . "\n";
echo "   \_/\_/ \___|_.__/|_|\___/ \___/|_|___/" . "\n";
echo "##########################################\n";
echo "##--------------------------------------##\n";
echo "###-------------VERSION 1.0------------###\n";
echo "###---------Coded by wEbCoAdEr---------###\n";
echo "###-------facebook.com/wEbCoAdEr-------###\n";
echo "###-------------SBEA Series------------###\n";
echo "##--------------------------------------##\n";
echo "##########################################\n";
if (!empty(API_KEY1)) {
	while (true) {
		echo "webtools>>";
		$commands = array("ip", "domain", "help");
		$input = trim(fgets(STDIN, 2048));
		$commandarr = explode(" ", $input);
		$c1 = $commandarr[0];
		if (isset($commandarr[1])) {
			$c2 = $commandarr[1];
		}
		if (in_array($c1, $commands)) {
            //Execute IP commands
			if ($c1 == "ip") {
				if (empty($c2)) {
					$lquery = @unserialize(file_get_contents('http://ip-api.com/php'));
					echo "[ATTEMPT] Started scanning your IP address\n";
					if ($lquery && $lquery['status'] == 'success') {
						echo "[ATTEMPT] Fetched IP Data\n";
						echo "IP: " . $lquery['query'] . "\n";
						echo "Hostname: " . gethostbyaddr($lquery['query']) . "\n";
						echo "Country: " . $lquery['country'] . "\n";
						echo "Country Code: " . $lquery['countryCode'] . "\n";
						echo "Region Code: " . $lquery['region'] . "\n";
						echo "Region Name: " . $lquery['regionName'] . "\n";
						echo "City: " . $lquery['city'] . "\n";
						echo "ZIP Code: " . $lquery['zip'] . "\n";
						echo "Latitude: " . $lquery['lat'] . "\n";
						echo "Longtitude: " . $lquery['lon'] . "\n";
						echo "ISP: " . $lquery['isp'] . "\n";
					} else {
						echo "An error occured while scanning your IP address\n";
					}
				} else if($c2 != "scan-port"){
					if (filter_var($c2, FILTER_VALIDATE_IP)) {
						$lquery = @unserialize(file_get_contents('http://ip-api.com/php/' . $c2));
						echo "[ATTEMPT] Started scanning IP address " . $c2 . "\n";
						if ($lquery && $lquery['status'] == 'success') {
							echo "[ATTEMPT] Fetched IP Data\n";
							echo "IP: " . $lquery['query'] . "\n";
							echo "Hostname: " . gethostbyaddr($lquery['query']) . "\n";
							echo "Country: " . $lquery['country'] . "\n";
							echo "Country Code: " . $lquery['countryCode'] . "\n";
							echo "Region Code: " . $lquery['region'] . "\n";
							echo "Region Name: " . $lquery['regionName'] . "\n";
							echo "City: " . $lquery['city'] . "\n";
							echo "ZIP Code: " . $lquery['zip'] . "\n";
							echo "Latitude: " . $lquery['lat'] . "\n";
							echo "Longtitude: " . $lquery['lon'] . "\n";
							echo "ISP: " . $lquery['isp'] . "\n";
							$c2 = "";
						} else {
							echo "An error occured while scanning your IP address\n";
						}
					} else {
						if (filter_var(gethostbyname($c2), FILTER_VALIDATE_IP)) {
							$lquery = @unserialize(file_get_contents('http://ip-api.com/php/' . gethostbyname($c2)));
							echo "[ATTEMPT] Started scanning IP address " . gethostbyname($c2) . "\n";
							if ($lquery && $lquery['status'] == 'success') {
								echo "[ATTEMPT] Fetched IP Data\n";
								echo "IP: " . $lquery['query'] . "\n";
								echo "Hostname: " . gethostbyaddr($lquery['query']) . "\n";
								echo "Country: " . $lquery['country'] . "\n";
								echo "Country Code: " . $lquery['countryCode'] . "\n";
								echo "Region Code: " . $lquery['region'] . "\n";
								echo "Region Name: " . $lquery['regionName'] . "\n";
								echo "City: " . $lquery['city'] . "\n";
								echo "ZIP Code: " . $lquery['zip'] . "\n";
								echo "Latitude: " . $lquery['lat'] . "\n";
								echo "Longtitude: " . $lquery['lon'] . "\n";
								echo "ISP: " . $lquery['isp'] . "\n";
								$c2 = "";
							} else {
								echo "An error occured while scanning your IP address\n";
							}
						} else {
							if ($c2 == "reverse" AND isset($commandarr[2])) {
								if (filter_var($commandarr[2], FILTER_VALIDATE_IP)) {
                                    //Run command if the third para of "ip reverse" command is an IP address
									$ip = $commandarr[2];
									$api_key = API_KEY1;
									$api_url = 'https://reverse-ip-api.whoisxmlapi.com/api/v1';
									$url = "{$api_url}?apiKey={$api_key}&ip={$ip}";
									$reverse_data = json_decode(file_get_contents($url));
									$thosts = count($reverse_data->result);
									if (!empty($reverse_data)) {
										echo "Target IP: " . $ip . "\n";
										echo "Target HOST: " . gethostbyaddr($ip) . "\n";
										echo "[ATTEMPT] Started scanning for hosts\n";
										echo "[ATTEMPT] Fetched hosts\n";
										echo "Hosts Found: " . $thosts . "\n";
									}
									$i = 1;
									foreach ($reverse_data->result as $data) {
										echo "[" . $i++ . "] " . $data->name . "\n";
									}
								} else {
									if (filter_var(gethostbyname($commandarr[2]), FILTER_VALIDATE_IP)) {
                                        //Run command if the third para of "ip reverse" command is not an IP address and a hostname
										$ip = gethostbyname($commandarr[2]);
										$api_key = API_KEY1;
										$api_url = 'https://reverse-ip-api.whoisxmlapi.com/api/v1';
										$url = "{$api_url}?apiKey={$api_key}&ip={$ip}";
										$reverse_data = json_decode(file_get_contents($url));
										$thosts = count($reverse_data->result);
										if (!empty($reverse_data)) {
											echo "Target IP: " . $ip . "\n";
											echo "Target HOST: " . $commandarr[2] . "\n";
											echo "[ATTEMPT] Started scanning for hosts\n";
											echo "[ATTEMPT] Fetched hosts\n";
											echo "Hosts Found: " . $thosts . "\n";
										}
										$i = 1;
										foreach ($reverse_data->result as $data) {
											echo "[" . $i++ . "] " . $data->name . "\n";
										}
									} else {
										echo "Invalid IP address or hostname entered";
									}
								}
							}
						}
					}
				}elseif($c2 == "scan-port"){
					if(filter_var($commandarr[2], FILTER_VALIDATE_IP)){
						echo "HOSTNAME: " . gethostbyaddr($commandarr[2]) . "\n";
						echo "IP: " . $commandarr[2] . "\n";
						echo "Started scanning for open ports\n";

						$ports = array(20, 21, 22, 23, 25, 53, 67, 68, 69, 80, 110, 123, 137, 138, 139, 143, 161, 162, 179, 389, 443, 465, 587, 636, 843, 989, 990, 993, 995, 1023, 3306);
						foreach ($ports as $port) {
							$connect = @fsockopen($commandarr[2], $port, $errno, $errstr, 2);
							if(is_resource($connect)){
								echo "[FOUND] Open Port: " . $port . " (" . getservbyport($port, 'tcp') . ")" . "\n";
								fclose($connect);
							}
						}
					}else{
						echo "Invalid IP address entered for port scanning\n";
					}
				}
			} elseif ($c1 == "domain") {
				if ($c2 == "scan-sub") {
                    //Scans for subdomain
					if (filter_var(gethostbyname($commandarr[2]), FILTER_VALIDATE_IP)) {
						$subdomains = array(
							"mail", "email", "sound", "info", "about", "plus", "access", "accounting", "accounts", "admin", "administrator", "articles", "auth", "authorize",
							"authorized", "backend", "backup", "backups", "beta", "billing", "blog", "catalog", "chat", "connect", "controller", "cpanel", "customers", "data", "db",
							"dbs", "dc", "demo", "demostration", "dev", "developers", "development", "dir", "directory", "dmz", "docs", "domain", "domaincontroller",
							"domain-controller", "download", "downloads", "edu", "email", "events", "example", "examples", "exchange", "extranet", "files", "finance", "firewall",
							"forum", "forums", "ftp", "ftpd", "gallery", "gateway", "groups", "groupwise", "guest", "help", "helpdesk", "home", "hotspot", "images", "imail", "imap",
							"imap3", "imap3d", "imapd", "imaps", "imgs", "internal", "intranet", "irc", "ircd", "isa", "it", "jabber", "lab", "laboratories", "laboratory", "labs",
							"library", "linux", "localhost", "log", "logs", "login", "logon", "logs", "mailgate", "manager", "marketing", "media", "member", "members", "mercury",
							"mobile", "mssql", "music", "mysql", "net", "netmail", "news", "novell", "online", "oracle", "partners", "pcanywhere", "pdf", "personal", "photo", "photos",
							"pic", "pics", "picture", "pictures", "pix", "pop", "pop3", "p0rn", "porn", "p0rn0", "porno", "portal", "postgresql", "postman", "postmaster", "private",
							"pr0n", "pron", "project", "projects", "proxy", "pub", "public", "remote", "reports", "research", "restricted", "r00t", "root", "router", "sales", "sample",
							"samples", "sandbox", "search", "secure", "secret", "server", "services", "sex", "sh3ll", "shell", "sms", "smtp", "solaris", "sql", "squirrel", "squirrelmail",
							"ssh", "staff", "staging", "stats", "status", "su", "sun", "support", "sys", "system", "test", "text", "texts", "tftp", "trade", "tunnel", "txt", "unix",
							"upload", "uploads", "virtual", "vnc", "vp", "vpn", "vpn1", "vpn2", "vpn3", "web", "web0", "web01", "web02", "web03", "web1", "web2", "web3", "webadmin",
							"weblog", "webmail", "webmaster", "webmin", "win", "windows", "www", "www0", "www01", "www02", "www03", "www1", "www2", "www3", "wwwdev", "xxx"
						);
						$tc = count($subdomains);
						echo "[ATTEMPT] Started scanning for subdomains\n";
						echo "[ATTEMPT] Fetching subdomains for " . $commandarr[2] . "\n";
						for ($i = 0; $i <= $tc; $i++) {
							$sd = $subdomains[$i] . "." . $commandarr[2];
							if (filter_var(gethostbyname($sd), FILTER_VALIDATE_IP)) {
								echo "[SUBDOMAIN FOUND] " . $sd . "\n";
								$return = 1;
							}
						}
						if ($return != 1) {
							echo "No subdomains for " . $commandarr[2] . "\n";
						}
					} else {
						echo "You have entered an invalid domain for scanning\n";
					}
				} elseif ($c2 == "scan-admin") {
                    //Scans for admin panel
					if (filter_var(gethostbyname($commandarr[2]), FILTER_VALIDATE_IP)) {
						$get_domain = $commandarr[2];
						$adminlist = array(
							"admin.$get_domain", "adminpanel.$get_domain", "admin-panel.$get_domain", "adm.$get_domain", "admn.$get_domain",
							"control.$get_domain", "content-control.$get_domain", "secured.$get_domain", "secured-admin.$get_domain", "secured-adm.$get_domain",
							"secured-admn.$get_domain", "webadmin.$get_domain", "webadm.$get_domain", "web-admin.$get_domain", "web-adm.$get_domain",
							"webadmn.$get_domain", "web-admn.$get_domain", "administrator.$get_domain", "siteadmin.$get_domain", "site-admin.$get_domain",
							"$get_domain/administrator", "$get_domain/admin", "$get_domain/administrator.php", "$get_domain/admin.php", "$get_domain/adminpanel",
							"$get_domain/admin-panel", "$get_domain/adm", "$get_domain/adminpanel.php", "$get_domain/admin-panel.php", "$get_domain/adm.php",
							"$get_domain/admn.php", "$get_domain/admn", "$get_domain/control", "$get_domain/control.php", "$get_domain/content-control",
							"$get_domain/content-control.php", "$get_domain/secured", "$get_domain/secured.php", "$get_domain/secured-admin",
							"$get_domain/secured-admin.php", "$get_domain/secured-adm", "$get_domain/secured-adm.php", "$get_domain/secured-admn",
							"$get_domain/secured-admn.php", "$get_domain/webadmin", "$get_domain/webadmin.php", "$get_domain/web-admin", "$get_domain/web-admin.php",
							"$get_domain/web-adm", "$get_domain/web-adm.php", "$get_domain/web-admn", "$get_domain/web-admn.php", "$get_domain/webadm",
							"$get_domain/webadm.php", "$get_domain/webadmn", "$get_domain/webadmn", "$get_domain/index.php?a=admin",
							"$get_domain/index.php?a=adminpanel",
							"$get_domain/index.php?a=admin-panel", "$get_domain/index.php?a=admn", "$get_domain/index.php?a=adm", "$get_domain/index.php?a=webadmin",
							"$get_domain/index.php?a=webadm", "$get_domain/index.php?a=webadmn", "$get_domain/index.php?a=web-admin",
							"$get_domain/index.php?a=web-adm",
							"$get_domain/index.php?a=web-admn", "$get_domain/index.php?u=admin", "$get_domain/index.php?u=adminpanel",
							"$get_domain/index.php?u=admin-panel",
							"$get_domain/index.php?u=admn", "$get_domain/index.php?u=adm", "$get_domain/index.php?u=webadmin", "$get_domain/index.php?u=webadm",
							"$get_domain/index.php?u=webadmn", "$get_domain/index.php?u=web-admin", "$get_domain/index.php?u=web-adm",
							"$get_domain/index.php?u=web-admn"
						);
						$tc1 = count($adminlist);
						echo "[ATTEMPT] Started scanning for admin panel\n";
						echo "[ATTEMPT] Fetching admin panel for " . $commandarr[2] . "\n";
						for ($i1 = 0; $i1 <= $tc1; $i1++) {
							$dstring = "http://" . $adminlist[$i1];
							if (!empty(file_get_contents($dstring))) {
								echo "[TRYING] [" . $adminlist[$i1] . "] [ADMIN PANEL FOUND]\n";
							} else {
								echo "[TRYING] [" . $adminlist[$i1] . "]\n";
							}
						}
					}else{
						echo "You have entered an invalid domain for scanning\n";
					}
				}elseif($c2 == "scan-port"){
					if (filter_var(gethostbyname($commandarr[2]), FILTER_VALIDATE_IP)) {
						echo "HOSTNAME: " . $commandarr[2] . "\n";
						echo "IP: " . gethostbyname($commandarr[2]) . "\n";
						echo "Started scanning for open ports\n";

						$ports = array(20, 21, 22, 23, 25, 53, 67, 68, 69, 80, 110, 123, 137, 138, 139, 143, 161, 162, 179, 389, 443, 465, 587, 636, 843, 989, 990, 993, 995, 1023, 3306);
						foreach ($ports as $port) {
							$connect = @fsockopen(gethostbyname($commandarr[2]), $port, $errno, $errstr, 2);
							if(is_resource($connect)){
								echo "[FOUND] Open Port: " . $port . " (" . getservbyport($port, 'tcp') . ")" . "\n";
								fclose($connect);
							}
						}
					}else{
						echo "Invalid domain name entered for port scanning\n";
					}
				}else{
					echo "Parameter missing for domain command. Try 'help' command to see available options\n";
				}
			} elseif ($c1 == "help") {
                //Execute help command
				echo "Available Tools-\n";
				echo "\n";
				echo "(1)IP Scanner:\n";
				echo "-----------------------------------------------------------------------------------------\n";
				echo "'ip' - Display your IP address information\n";
				echo "'ip hostname/IP' - Display IP address information of the given hostname or IP\n";
				echo "Example: 'ip facebook.com', 'ip 157.240.13.35'\n";
				echo "'ip reverse hostname/IP' - Display reverse IP scan result of the given hostname or IP\n";
				echo "Example: 'ip reverse facebook.com', 'ip reverse 157.240.13.35'\n";
				echo "'ip scan-port' - Display open ports of the given IP\n";
				echo "Example: 'ip scan-port 157.240.13.35'\n";
				echo "-----------------------------------------------------------------------------------------\n";
				echo "\n";
				echo "(2)Domain Scanner\n";
				echo "-----------------------------------------------------------------------------------------\n";
				echo "'domain scan-sub domain_name' - Display subdomain scan result of the given domain\n";
				echo "Example: 'domain scan-sub facebook.com'\n";
				echo "'domain scan-admin domain_name' - Scans for available admin panel url of the given domain\n";
				echo "'Example: 'domain scan-admin frii.edu.bd'\n";
				echo "'domain scan-port' - Display open ports of the given domain\n";
				echo "Example: 'domain scan-port facebook.com'\n";

				echo "-----------------------------------------------------------------------------------------\n";
			}
		} else {
			echo "Command not recognized. Try 'help' command to show all available commands in WebTools\n";
		}
	}
} else {
	echo "In order to use this skip please place your valid API key at the top of the code. Otherwise all WebTools features will not work\n";
}
?>
