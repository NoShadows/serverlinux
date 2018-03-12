<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2014 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define("create_alias", "Cr�er l&#39;Alias et le dossier");
define("save_as", "Enregistrer sous");
define("failure", "Errzur, impossible de g�n�rer le fichier d&#39;Alias");
define("success", "Succ�s");
define("fast_download_service_for", "T�l�chargements de service de redirection pour %s");
define("to_the_path", "Dans le dossier");
define("at_url", "� l&#39;URL");
define("create_alias_for", "Cr�er un Alias pour");
define("fast_dl", "Redirection t�l�chargements (FastDL)");
define("current_aliases_at_remote_server", "Alias actuels du serveur distant");
define("delete_selected_aliases", "Supprimer les Alias s�lectionn�s");
define("no_aliases_defined", "Il n&#39;y a pas encore d&#39;Alias cr��s actuellement pour ce serveur.");
define("fastdl_port", "Port");
define("fastdl_port_info", "Le port utilis� par Apache, laisser vide pour le port par d�faut (80).");
define("fastdl_ip", "Adresse");
define("fastdl_ip_info", "Si vous souhaitez utiliser des liens avec un nom de domaine au lieu de l&#39;adresse IP, d�finissez le nom de domaine d�sir� ici.");
define("listing", "liste");
define("listing_info", "Si elle est activ�e, le serveur va lister le contenu des dossiers.");
define("fast_dl_advanced", "Configuration avanc�e de FastDL");
define("apply_settings_and_restart_fastdl", "Mises � jour de la configuration et red�marre");
define("stop_fastdl", "Arr�tez le service.");
define("fast_download_daemon_running", "Le service est en cours d'ex�cution.");
define("fast_download_daemon_not_running", "Le service est arr�t�.");
define("fastdl_could_not_be_restarted", "Impossible de red�marrer Fast Download.");
define("configuration_file_could_not_be_written", "Impossible d'�crire le fichier de configuration.");
define("remove_folders", "Retirer le dossier pour les Alias s�lectionn�s.");
define("remove_folder", "Supprimer le dossier");
define("delete_alias", "Supprimer l'Alias");
define('no_game_homes_assigned', "Aucun serveur de jeux vous est assign�. Vous devez demander � votre administrateur OGP de vous assigner un serveur.");
define('select_remote_server', "S�lectionner le Serveur distant");
define('access_rules', "R�gles d'acc�s");
define('create_aliases', "Cr�er des Alias");
define('select_game', "S�lectionner le jeu");
define('games_without_specified_rules', "Jeux sans r�gles sp�cifi�es");
define('match_file_extension', "Correspond aux extensions de fichiers");
define('match_file_extension_info', "Sp�cifier des extensions s�par�es par une virgule,<br> les fichiers correspondants seront accessibles.<br>".
									"<b>Laisser vide pour un acc�s sans restriction</b>.");
define('match_client_ip', "Correspond � l'IP client");
define('match_client_ip_info', "Les connexions avec IP correspondantes seront autoris�es,<br>".
							   "laisser vide pour un acc�s sans restriction.<br>".
							   "Vous pouvez utiliser plusieurs IPs<br>".
							   "ou plages d'IPs s�par�es par une virgule:<br>".
							   "/xx subnets<br>".
							   "Exemple: 10.0.0.0/16<br>".
							   "/xxx.xxx.xxx.xxx subnets<br>".
							   "Exemple: 10.0.0.0/255.0.0.0<br>".
							   "Hyphen ranges<br>".
							   "Exemple: 10.0.0.5-230<br>".
							   "Asterisk matching<br>".
							   "Exemple: 10.0.*.*");
define('save_access_rules', "Enregistrer les r�gles d'acc�s");
define('create_access_rules', "Cr�er les r�gles d'acc�s");
define('invalid_entries_found', "Entr�es invalides trouv�es");
define('game_name', "Nom du jeu");
define('alias_already_exists', "l'Alias %s existe d�j�.");
define('warning_access_rules_applied_once_alias_created', "AVERTISSEMENT: Les r�gles d'acc�s sont appliqu�es lorsque l'Alias est cr��. ".
														  "Aucun changement ne sera appliqu� aux Alias actuels.");
define('autostart_on_agent_startup', "D�marrage Auto au lancement de l'Agent");
define('autostart_on_agent_startup_info', "D�marrer le daemon Fast Download automatiquement quand l'Agent se lance.");
define('port_forwarded_to_80', "Port redirig� depuis 80");
define('port_forwarded_to_80_info', "Activer cette option si le port configur� pour le deamon Fast Download a �t� redirig� depuis le port 80, comme �a le port sera cach� dans les URLs.");
?>