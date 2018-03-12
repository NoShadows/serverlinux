<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2016 The OGP Development Team
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

define('no_games_to_monitor', "Vous n'avez aucun serveur de jeux � administrer.");
define('status', "Statut");

// server_manager.php
define('fail_no_mods', "Aucun mod activ� pour ce jeu ! Vous devez demadner � votre administrateur OGP de rajouter des mods pour ce jeu.");
define('no_game_homes_assigned', "Aucun serveur de jeux vous est assign�. Vous devez demander � votre administrateur OGP de vous assigner un serveur.");
define('select_game_home_to_configure', "S�lectionnez un serveur de jeux � configurer");
define('file_manager', "Gestionnaire de fichiers");
define('configure_mods', "Configurer les mods");
define('install_update_steam', "Installation/Mise � jour via Steam");
define('install_update_manual', "Installation/Mise � jour manuelle");
define('assign_game_homes', "Assigner un serveur de jeux");
define('user', "Utilisateur");
define('group', "Groupe");
define('start', "D�marrer");


// start_game.php
define('ogp_agent_ip', "IP de l'Agent OGP");
define('max_players', "Joueurs max");
define('max', "Max");
define('ip_and_port', "IP et Port");
define('available_maps', "Cartes disponibles");
define('map_path', "Chemin vers les cartes");
define('available_parameters', "Param�tres disponibles");
define('start_server', "D�marrer");
define('start_wait_note', "Le d�marrage du serveur prends du temps, ne fermez pas votre navigateur.");
define('game_type', "Type de jeu");
define('map', "Carte");
define('starting_server', "D�marrage du serveur, patientez svp...");
define('starting_server_settings', "D�marrage du serveur avec les param�tres suivants");
define('startup_params', "Param�tres de d�marrage");
define('startup_cpu', "CPU assign� au serveur de jeux");
define('startup_nice', "Priorit� (nice) assign�e au serveur de jeux");
define('game_home', "Serveur de jeux");
define('server_started', "Serveur d�marr� avec succ�s.");
define('no_parameter_access', "Vous n'avez pas acc�s aux param�tres.");
define('extra_parameters', "Param�tres suppl�mentaires");
define('no_extra_param_access', "Vous n'avez pas acc�s aux param�tres suppl�mentaires.");
define('extra_parameters_info', "Ces param�tres sont plac�s � la fin de la ligne de commande lorsque le jeu est lanc�.");
define('game_exec_not_found', "L'ex�cutable de jeu %s n'a pas �t� trouv� sur le serveur distant.");
define('select_params_and_start', "S�lectionnez les param�tres de d�marrage pour le serveur et appuyez sur '%s'.");
define('no_ip_port_pairs_assigned', "Pas d'IP et port attribu�s pour ce serveur. Si vous ne pouvez pas les d�finir, contactez l'administrateur.");
define('unable_to_get_log', "Impossible d'obtenir le log, valeur de retour %s.");
define('server_binary_not_executable', "Le binaire n'est pas ex�cutable. V�rifiez que vous disposez des bonnes permissions sur le r�pertoire.");
define('server_not_running_log_found', "Le serveur ne d�marre pas, mais il existe un log. NOTE : Ce log pourrait ne pas �tre li� � ce d�marrage.");
define('ip_port_pair_not_owned', "IP:port ne vous appartient pas.");
define('unsuitable_maxplayers_value_maximum_reachable_number_of_slots_has_been_set', "Nombre de joueurs max impossible. Au dessus de la limite d�finie.");
define('server_running_not_responding', "Le serveur est d�marr� mais ne r�pond pas, <br>il doit y avoir un probl�me et vous voudrez peut-�tre ");

// update_game.php
define('update_started', "Mise � jour d�marr�e, patientez svp...");
define('failed_to_start_steam_update', "Impossible de d�marrer la mise � jour via Steam. Regardez le log.");
define('failed_to_start_rsync_update', "Impossible de d�marrer la mise � jour via Rsync. Regardez le log.");
define('update_completed', "Mise � jour effectu�e avec succ�s.");
define('update_in_progress', "Mise � jour en cours, patientez svp...");
define('refresh_steam_status', "Rafra�chir le statut Steam");
define('refresh_rsync_status', "Refra�chir le statut Rsync");
define('server_running_cant_update', "Serveur d�marr� donc mise � jour impossible. Stoppez le serveur avant la mise � jour.");
define('xml_steam_error', "Le type de serveur s�lectionn� ne supporte pas l'installation/la mise � jour via Steam.");
define('mod_key_not_found_from_xml', "Cl� du mod '%s' non trouv�e dans le fichier XML.");
define('stop_update', "Arr�ter la mise � jour");

// game_monitor.php
define('statistics', "Statistiques");
define('servers', "Serveurs");
define('players', "Joueurs");
define('current_map', "Carte actuelle");
define('stop_server', "Arr�ter le serveur");
define('server_ip_port', "Serveur IP:Port");
define('server_name', "Nom du serveur");
define('player_name', "Nom du joueur");
define('score', "Score");
define('time', "Temps");
define('no_rights_to_stop_server', "Vous n'avez pas les droits pour arr�ter ce serveur.");
define('no_ogp_lgsl_support', "Ce serveur (sous : %s) n'a pas de support LGSL dans OGP et ses statistiques ne peuvent pas �tre affich�es.");
define('server_status', "Serveur sur %s est %s.");
define('server_stopped', "Serveur '%s' a �t� arr�t�.");
define('if_want_to_start_homes', "Si vous voulez d�marrer un serveur, allez sur %s.");
define('view_log', "Logs");
define('if_want_manage', "Si vous voulez g�rer vos jeux, vous pouvez le faire dans les");
define('columns', "colonnes");
define('group_users', "Groupe:");
define('assigned_to', "Attribu�:");
define('restart_server', "Red�marrer le serveur");
define('restarting_server', "Red�marrage du serveur, patientez svp...");
define('server_restarted', "Serveur '%s' a �t� red�marr�.");
define('server_not_running', "Ce serveur n'est pas d�marr�.");
define('address', "Adresse");
define('owner', "Propri�taire");
define('operations', "Op�rations");
define('search', "Recherche");
define('maps_read_from', "Cartes lues depuis ");
define('file', "fichier");
define('folder', "dossier");
define('unable_retrieve_mod_info', "Impossible de trouver les informations du mod dans la base de donn�es.");
define('unexpected_result_libremote', "R�sultats inatendue de la libremote, informez-en les d�veloppeurs.");
define('unable_get_info', "Impossible de r�cup�rer les informations pour le d�marrage. D�marrage annul�.");
define('server_already_running', "Le serveur est d�j� d�marr�. Si vous ne le voyez pas sur la Gestion des serveurs, il doit y avoir un probl�me et vous pouvez ");
define('already_running_stop_server', "Arr�ter le serveur.");
define('error_server_already_running', "ERREUR : Un serveur est d�j� d�marr� avec ce port");
define('failed_start_server_code', "Impossible de d�marrer le serveur distant. Code d'erreur : ");
define('disabled', "d�sactiv� ");
define('not_found_server', "Impossible de trouver le serveur distant avec l'ID");
define('rcon_command_title', "Commande RCON");
define('has_sent_to', "a �t� envoy�e �");
define('need_set_remote_pass', "Vous devez rentrer le mot de passe");
define('before_sending_rcon_com', "avant d'envoyer des commandes rcon.");
define('retry', "R�essayer");
define('page', "page");
define('server_cant_start', "serveur ne peut pas d�marrer");
define('server_cant_stop', "serveur ne peut pas s'arr�ter");
define('error_occured_remote_host', "Une erreur s'est produite sur l'h�te distant");
define('follow_server_status', "Vous pouvez suivre le statut du serveur depuis");
define('addons', "Addons");
define('hostname', "Nom d'h�te (hostname)");
define('rsync_install', "[Installation Rsync]");
define('ping', "Ping");
define('team', "Equipe");
define('deaths', "Morts");
define('pid', "PID");
define('skill', "Skill");
define("AIBot", "Bot IA");
define("steamid", "Steam ID");
define('player', "Joueur");
define('port', "Port");
define('rcon_presets', "RCON pr�d�finis");
define('update_from_local_master_server', "Mise � jour depuis le serveur ma�tre local");
define('update_from_selected_rsync_server', "Mise � jour depuis le serveur Rsync s�lectionn�");
define('execute_selected_server_operations', "Ex�cuter les op�rations s�lectionn�es sur les serveurs");
define('execute_operations', "Ex�cuter les op�rations");
define('account_expiration', "Expiration du compte");
define('mysql_databases', "Base de donn�es MySQL");
define('failed_querying_server', "* Impossible d'interroger le serveur.");
define('query_protocol_not_supported', "* Il n'y a pas de protocole d'interrogation dans OGP qui supporte ce serveur.");
define('queries_disabled_by_setting_disable_queries_after', "Interrogations d�sactiv�es dans les param�tres: D�sactiver interrogation apr�s: %s, vous avez %s serveurs.<br>");

// rcon_presets.php
define('presets_for_game_and_mod', "RCON pr�d�finis pour %s et mod %s");
define('name', "Nom");
define('command', "Commande&nbsp;RCON");
define('add_preset', "Ajouter un pr�d�fini");
define('edit_presets', "Editer les pr�d�finis");
define('del_preset', "Supprimer");
define('change_preset', "Editer");
define("send_command", "Envoyer la commande");

//rsync_install.php
define('starting_copy_with_master_server_named', "D�marrage de la copie avec le serveur ma�tre '%s'...");
define('starting_sync_with', "D�marrage de la sync avec %s...");
define('refresh_interval', "Intervalle de rafra�chissement des logs");

//update_server_manual.php
define('finished_manual_update', "Mise � jour manuelle termin�e.");
define('failed_to_start_file_download', "Impossible de d�marrer le t�l�chargement du fichier");
define('game_name', "Nom du jeu");
define('dest_dir', "Dossier de destination");
define('remote_server', "Serveur distant");
define('file_url', "URL du fichier");
define('file_url_info', "L'URL du fichier qui va �tre t�l�charg� et d�compress� dans le dossier.");

define('dest_filename', "Nom du fichier de destination");
define('dest_filename_info', "The nom du fichier pour le fichier de destination.");
define('update_server', "Mise � jour du serveur");
define('unavailable', "Indisponible");

//map image upload
define('upload_map_image', "Uploaded image de la carte");
define('upload_image', "Uploader image");
define('jpg_gif_png_less_than_1mb', "L'image doit �tre jpg, gif ou png et moins de 1 MB.");
define('check_dev_console', "Erreur lors de l'envoi du fichier, v�rifier la console d�velopeur du navigateur.");
define('uploaded_successfully', "Upload� avec succ�s.");
define('cant_create_folder', "Impossible de cr�er le dossier:<br><b>%s</b>");
define('cant_write_file', "Impossible d'�crire le fichier:<br><b>%s</b>");
define('exceeded_php_directive', "Exceeded PHP directive.<br><b>%s</b>.");
define('unknown_errors', "Erreurs inconnues.");
define('game_manager', 'Game manager');
define('directory', 'Directory');

// RCON
define('view_player_commands',"Voir Commandes Joueur");
define('hide_player_commands',"Cacher Commandes Joueur");
define('no_online_players',"Il n'y a pas de joueurs en ligne.");
?>